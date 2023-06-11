<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
use App\Models\Cetagory;
use App\Models\Service;
use App\Models\Home;
use Alert;
class Contactcontroller extends Controller
{
    public function index()
    {
   
        $cetagory=Cetagory::paginate(8);
        $services=Service::paginate(8);
        $home=Home::first();
  
        return view('content.viewer.pages.contact',compact('cetagory','services','home'));
    }
    
    
    public function sendEmail(Request$request)
    {
        $details = [
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'address'=> $request->address,
            'msg'=> $request->msg,
            
            
        ];
        Mail::to('monoartasik.cse@gmail.com')->send(new ContactMail($details));
        Alert::success('Congrats', 'Successfully Message _sent');
        return redirect()->back();
    }
    
    
    
}