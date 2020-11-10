<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact() {
        return view('contact');
    }

    public function sendEmail(Request $request) {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::to('galernik79@gmail.com')->send(new ContactMail($data));
        return back()->with('message_sent','Your message has been sent!');
    }
}
