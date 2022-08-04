<?php

namespace App\Http\Controllers;

use App\Mail\EmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailNotificationController extends Controller
{
   public function sendEmailNotification(){
        Mail::to('charms2074@gmail.com')->send(new EmailNotification(['message'=>'hello', 'body'=>'hey what is up']));
// return response()->json(['message'=>'successfully sent!'],200);

    }
    function email(){
        return view('views.email.test');
    }
}
