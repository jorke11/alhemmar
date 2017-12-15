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
        $this->middleware("auth");
        $this->email = array();
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


                $result = Orders::create($input);

                if ($result) {

                    $in = (array) DB::table("vorders")->where("id", $result->id)->first();

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

    public function getOrdes() {
        
        $sql = DB::table("vorders")->get();
        
        return response()->json($sql);
    }

}
