<?php

namespace App\Http\Controllers\Clients;

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

class OrdersController extends Controller {

    public $email;

    public function __construct() {
        $this->middleware("auth");
        $this->email = array();
    }

    public function index() {

        $esquemas = Schedules::all();
        $type_document = Parameters::where("group", "type_document")->get();
        $users = Users::where("role_id", 3)->get();
        $department = Department::all();

        foreach ($esquemas as $i => $value) {
            $esquemas[$i]->courses = SchedulesDetail::select("schedules_detail.id", "courses.description as course")
                            ->where("schedules_detail.schedule_id", $value->id)
                            ->join("courses", "courses.id", "schedules_detail.course_id")->get();
        }


        return view("Clients.Orders.init", compact("esquemas", "type_document", "department", "users"));
    }

    public function create() {
        return "create";
    }

    public function updateAssociate(Request $req, $id) {
        $in = $req->all();

        $user = Users::find($in["user_id"]);

        $in["name"] = $user->name;
        $in["last_name"] = $user->last_name;
        $this->email[] = $user->email;

        $in = (array) DB::table("vorders")->where("id", $id)->first();
        $sche = Schedules::find($in["schema_id"]);
        $in["schema"] = $sche->description;
        $in["schema_detail"] = SchedulesDetail::select("schedules_detail.id", "courses.description as course")
                        ->join("courses", "courses.id", "schedules_detail.course_id")
                        ->where("schedule_id", $sche->id)->get();


        Mail::send("Notifications.associate", $in, function($msj) {
            $msj->subject("notificacion");
            $msj->to($this->email);
        });

        $order = Orders::find($id);
        $order->responsible_id = $user->id;
        $order->assigned = date("Y-m-d H:i:s");
        $order->status_id = 2;
        $order->event_id = 2;
        $order->save();

        return response()->json(['success' => true]);
    }

    public function store(Request $request) {
        if ($request->ajax()) {
            $input = $request->all();
            unset($input["id"]);

            $input["status_id"] = 1;
            $input["event_id"] = 1;
            $input["insert_id"] = Auth::User()->id;

            try {
                DB::beginTransaction();

                $send = Email::where("description", "orders")->first();

                $client = Client::find(Auth::User()->client_id);
//                dd($client);
                $executive = Users::find($client->executive_id);

                $this->email[] = $executive->email;
                $this->email[] = Auth::user()->email;

                if ($send) {
                    $det = EmailDetail::where("email_id", $send->id)->get();
                    foreach ($det as $value) {
                        $this->email[] = $value->description;
                    }
                }


                $con = DB::table('orders')->where("insert_id", Auth::User()->client_id)->max('consecutive');

                if ($con == null) {
                    $input["consecutive"] = 1;
                } else {
                    $input["consecutive"] = $con + 1;
                }

                $result = Orders::create($input);

                if ($result) {

                    $in = (array) DB::table("vorders")->where("id", $result->id)->first();
                    
                    return response()->json($in);

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
    }

    public function TestNotificacionOrder($id) {
//        $order = Orders::find($id);
        $order = Orders::find($id);
        $sche = Schedules::find($order->schema_id);
        $schema = $sche->description;
        $schema_detail = SchedulesDetail::select("schedules_detail.id", "courses.description as course")
                        ->join("courses", "courses.id", "schedules_detail.course_id")
                        ->where("schedule_id", $sche->id)->get();

        $user = \App\User::find($order->insert_id);
        $client = Client::find($user->client_id)->business_name;

        $name = "jorge";
        $last_name = "pinedo";
        $document = "10323232";
        $city = "bogota";
        $mobil = "3203776811";
        $department = "3203776811";

        return view("Notifications.order", compact("id", "client", "name", "last_name", "document", "city", "mobil", "schema", "schema_detail", "department"));
    }

    public function edit($id) {
        $row = Orders::FindOrFail($id);
        return response()->json($row);
    }

    public function getCitites($id) {
        $row = Cities::where("department_id", $id)->get();
        return response()->json($row);
    }

    public function update(Request $request, $id) {
        $row = Orders::FindOrFail($id);
        $input = $request->all();
        $result = $row->fill($input)->save();
        if ($result) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    public function destroy($id) {
        $row = Orders::FindOrFail($id);
        $result = $row->delete();
        if ($result) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

}
