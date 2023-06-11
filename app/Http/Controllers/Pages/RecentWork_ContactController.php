<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Alert;
use App\Mail\Recentwork_ContactMail;
class RecentWork_ContactController extends Controller
{
    
    public function sendEmail(Request$request)
    {
        $details = [
            'name'=> $request->name,
            'email'=> $request->email,
            'subject'=> $request->subject,
            'msg'=> $request->msg,
            
            
        ];
        Mail::to('monoartasik.cse@gmail.com')->send(new Recentwork_ContactMail($details));
        Alert::success('Congrats', 'Successfully Message _sent');
        return redirect()->back();
    }
}