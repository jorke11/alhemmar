<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Administration\Schedules;
use App\Models\Administration\SchedulesDetail;
use App\Models\Administration\Parameters;
use App\Models\Administration\Cities;
use App\Models\Administration\Department;
use App\Models\Clients\Orders;
use App\Models\Administration\Email;
use App\Models\Administration\EmailDetail;
use App\Models\Security\Users;
use App\Models\Clients\Client;
use Mail;
use Auth;
use DB;

header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

class OrdersController extends Controller {

    public $email;

    public function __construct() {
//        $this->middleware("auth");
        $this->email = array();
    }

    public function store(Request $request) {
        $input = $request->all();
        $input["status_id"] = 1;
        $input["event_id"] = 1;
        $input["insert_id"] = Auth::User()->id;
        $input["schema_id"] = 1;

        $sched = Schedules::where("description", $input["type_service_id"])->first();
        $input["type_service_id"] = $sched->id;

        try {
            DB::beginTransaction();

            $send = Email::where("description", "orders")->first();

            $client = Client::find(Auth::User()->client_id);
            $input["responsible_id"] = $client->executive_id;
            $executive = Users::find($client->executive_id);

            $this->email[] = $executive->email;
            $this->email[] = Auth::user()->email;

            if ($send) {
                $det = EmailDetail::where("email_id", $send->id)->get();
                foreach ($det as $value) {
                    $this->email[] = $value->description;
                }
            }

            $result = Orders::create($input);

            if ($result) {

                $in = (array) DB::table("vorders")->where("id", $result->id)->get();
                return response()->json("asdasdas");
                $sche = Schedules::find($in["schema_id"]);
                $in["schema"] = $sche->description;
                $in["schema_detail"] = SchedulesDetail::select("schedules_detail.id", "courses.description as course")
                                ->join("courses", "courses.id", "schedules_detail.course_id")
                                ->where("schedule_id", $sche->id)->get();

                if (count($this->email) > 0) {

                    Mail::send("Notifications.order", $in, function($msj) {
                        $msj->subject("notificacion");
                        $msj->to($this->email);
                    });
                }
                DB::commit();
                return response()->json(['success' => true, "data" => $result]);
            } else {
                DB::rollback();
                return response()->json(['success' => false, "msg" => "Problemas con la ejecución"], 409);
            }
        } catch (Exception $excep) {
            DB::rollback();
            return response()->json(['success' => false, "msg" => "Problemas con la ejecución"], 409);
        }
    }

    public function getOrders() {

        $query = DB::table("vorders");

        if (Auth::user()->role_id == 4) {
            $query->where("insert_id", Auth::user()->id);
        }

        $sql = $query->get();
        return response()->json($sql);
    }

    public function getDepartments() {
        $sql = Department::all();
        return response()->json($sql);
    }

    public function getCities($id) {
        $sql = Cities::where("department_id", $id)->get();
        return response()->json($sql);
    }

    public function getServices() {
        $sql = "
            select s.id,s.description,
            replace(replace(replace((select array_agg(c.description)
            from schedules_detail d
            JOIN courses c ON c.id=d.course_id where schedule_id=s.id)::text,'{\"',''),'\",\"',', '),'\"}','') as services
            from schedules s";
        $sql = DB::select($sql);

        return response()->json($sql);
    }

    public function cancelOrder($id) {

        $row = Orders::find($id);
        $row->status_id = 4;
        $row->save();
        $sql = DB::table("vorders")->get();

        return response()->json($sql);
    }

}
