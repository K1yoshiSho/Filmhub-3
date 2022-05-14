<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;
class ContactController extends Controller
{
    public function contact(){
        return view('contact-us');
    }
    public function sendEmail(Request $request){
        $details = [
            'name' => $request -> name,
            'email' => $request -> email,
            'subject' => $request -> subject,
            'message' => $request -> message
        ];

        Mail::to('disk1elaman@gmail.com')->send(new ContactMail($details));
        return back() -> with('message_sent', 'Your message has been sent successfully');
    }
}
