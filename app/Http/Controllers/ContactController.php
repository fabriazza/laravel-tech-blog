<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function sendcontact(ContactRequest $request){
        $name = $request->input('name');
        $mail = $request->input('mail');
        $subject = $request->input('subject');
        $message = $request->input('message');

        $mailBag = compact('name', 'mail', 'subject', 'message');

        $email = new ContactMail($mailBag); // Costruisco la mail

        Mail::to('fabrizio@gmail.com')->send($email); // A chi invio la mail

        return redirect(route('mail.thankyou')); // Redirect alla vista thankyou
    }

    public function thankyou(){
        return view('thankyou');
    }
}
