<?php

namespace App\Http\Controllers;

use App\Mail\EmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailNotificationController extends Controller
{
   public function sendEmailNotification(){
$emailData = [
    'name'=>'Rabin Acharya',
    'subject'=>'Please confirm your email address',
    'code'=>23456,
    'url'=>'www.facebook.com/rabin.acharya11',
    'ending'=>'Thank you',
    'sender'=>'Rabin Acharya',
    ''
];

        Mail::to('charms2074@gmail.com')->send(new EmailNotification($emailData));
return response()->json(['message'=>'successfully sent!'],200);

    }
    function email(){
        return view('views.email.test');
    }
}
