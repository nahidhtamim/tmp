<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contactMail(Request $request)
    {
        $request->validate([
          'name' => 'required',
          'subject' => 'required',
          'region' => 'required',
          'phone' => 'required',
          'email' => 'required|email',
          'g-recaptcha-response' => 'required|captcha'
        ]);

        $details = [
            'region' => $request->region,
            'subject' => $request->subject,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'content' => $request->content,
        ];

        Mail::to('info@tmpmanufacturing.com')->send(new ContactMail($details));
        return redirect()->back()->with('status', 'Your Mail Has Been Sent');

    }

}
