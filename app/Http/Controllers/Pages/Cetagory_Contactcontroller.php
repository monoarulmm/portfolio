<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\Cetagory_ContactMail;
use Alert;
class Cetagory_Contactcontroller extends Controller
{
    
    
    
    public function sendEmail(Request$request)
    {
        $details = [
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'subject'=> $request->subject,
            'msg'=> $request->msg,
            
            
        ];
        Mail::to('monoarulmonoar991@gmail.com')->send(new Cetagory_ContactMail($details));
        Alert::success('Congrats', 'Successfully Message _sent');
        return redirect()->back();
    }
    
}