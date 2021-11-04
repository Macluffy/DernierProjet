<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendMail(Request $request) {
        $contenuMail = [

            "email"=>$request->email,


        ];

        Mail::to("ahriga.a@hotmail.com")->send(new Email($contenuMail));

        return "message envoyé";
    }
}
