<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administration\EmailDetail;
use App\Models\Administration\Email;
use Mail;

class PageController extends Controller {

    public $email;

    public function __construct() {
        $this->email = [];
    }

    public function index() {
        return view('page');
    }

    public function contactus() {
        return view('contactus');
    }

    public function sendEmail(Request $req) {
        $in = $req->all();
//        echo "<pre>";
//        print_r($in);exit;
        $send = Email::where("description", "contactus")->first();


        if ($send) {
            $det = EmailDetail::where("email_id", $send->id)->get();
            foreach ($det as $value) {
                $this->email[] = $value->description;
            }
        }

        Mail::send("Notifications.contactus", $in, function($msj) {
            $msj->subject("Notificación pagina web");
            $msj->to($this->email);
        });


        return redirect("contactus")->with("success", 'Email enviado con exito');
    }

}
