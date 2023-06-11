<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Models\User; 
use App\Models\Profile; 
use App\Models\Cetagory; 
use App\Models\Service; 
use App\Models\Post; 
use App\Models\Home; 
use Alert;
class Profilecontroller extends Controller
{
   
    
    public function my_profile(){
        
        $cetagory=Cetagory::paginate(8);
        $services=Service::paginate(8);
        $home=Home::first();
        
        $user=Auth::user();
        $userid=$user->id;
        $name=$user->name;
        $email=$user->email;




        $post =Post::Where('user_id','=',$userid)->get();

         
        $userProfile = Profile::where('user_id',Auth::user()->id)->first();
        
        if(!$userProfile)
        {
             
        $profile  =new Profile();
        $profile->user_id = Auth::user()->id;
        $profile->name =$name;
        $profile->email =$email;
        $profile->save();   
        
        }
            
        $user = User::find(Auth::user()->id);

        return view('content.viewer.profile.user_profile',compact('post' ,'cetagory','services','user','home'));
    }
  
    
    
    
    public function delete_profile($id)
    
    {
        $profile=profile::find($id);
        
        
        $image_path =public_path('storage/profile_photo/'.$profile->p_image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        
        $image_path =public_path('storage/cover_photo/'.$profile->c_image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        
        
            $profile->delete();

            
            return redirect()->back()->with('message','Product deleted successfully');
    }
    
    public function update_profile_view($id)

    {
        $cetagory=Cetagory::paginate(8);
        $services=Service::paginate(8);
        
        $profile = Profile::findOrFail($id);
        return view('content.viewer.profile.user_profile_update',compact('profile','cetagory','services'));  
    }
    
    
    public function update_profile(Request $request,$id)
    {
        $profile=Profile::find($id);

     
        $profile->p_bio=$request->p_bio;
        $profile->phone=$request->phone;
        $profile->location=$request->location;
        $profile->socail_media_1=$request->socail_media_1;
        $profile->socail_media_2=$request->socail_media_2;
        $profile->socail_media_3=$request->socail_media_3;
      
     
        
        $p_image=$request->p_image;
        $image_name = time() . '.' . $p_image->getClientOriginalExtension();
        $request->p_image->move('storage/profile_photo',$image_name);
        $profile->p_image=$image_name;

        $c_image=$request->c_image;
        $image_name2 = time() . '.' . $c_image->getClientOriginalExtension();
        $request->c_image->move('storage/cover_photo',$image_name2);
        $profile->c_image=$image_name2;
        
        
        
        
        $profile->save();

        // Alert::success('Congrats', 'Profile-updated Successfully');
        

        return redirect()->back();
       
        
    
        
    }
}