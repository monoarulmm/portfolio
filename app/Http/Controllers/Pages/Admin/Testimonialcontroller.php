<?php

namespace App\Http\Controllers\Pages\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cetagory;

use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class Testimonialcontroller extends Controller
{
   public function index(){
    $cetagory = cetagory::all();
    return view('content.Admin.pages.testimonial_add',compact('cetagory'));
   }
   
   public function add_testimonial(Request $request) {


    $request->validate([
            
        
        'cetagory_short_description' => 'string|required',

 

        'cetagory' => 'string|required',
        

        'mentor_name' => 'string|required',

        'mentor_bio' => 'string|required',
        
        'mentor_image' => 'image|file|required|max:5120',

 
        

        
        
     ],
     
     
     [
        
        
        'cetagory_short_description.string ' => 'cetagory_short_description Mustbe a string ',

        'cetagory_short_description.required ' => 'cetagory_short_description Mustbe a required ',


        'cetagory.string ' => 'cetagory Mustbe a string ',
        'cetagory.required ' => 'cetagory Mustbe a required ',
        
        'mentor_name.string ' => 'mentor_name Mustbe a string ',
        'mentor_name.required ' => 'mentor_name Mustbe a required ',
        
        'mentor_bio.string ' => 'mentor_bio Mustbe a string ',
        'mentor_bio.required ' => 'mentor_bio Mustbe a required ',
        
                             
  
        
        'mentor_image.file' => 'file must be type of file',
        'mentor_image.image' => 'file must be image',
        'mentor_image.required' => 'you must choose a file',
        'image.size' => 'max file size id 10024KB',
        
       
     ]
     );
    
  
    
    $data =new testimonial;
    $data->cetagory = $request->cetagory;
    $data->cetagory_bio = $request->cetagory_bio;
    $data->cetagory_short_description =$request->cetagory_short_description;
    
    $data->mentor_name = $request->mentor_name;
    $data->mentor_bio = $request->mentor_bio;
    
    $mentor_image=$request->mentor_image;
    $imagename = time() . '.' . $mentor_image->getClientOriginalExtension();
    $request->mentor_image->move('storage/testimonial',$imagename);
    $data->mentor_image=$imagename;
    

    
    $data->save();

    return redirect()->back()->with('success','testiomial-added successfully');



}




  
public function show_testimonial(){
        
    $testimonial = testimonial::all();


    return view('content.admin.pages.testimonial_list',compact('testimonial'));
}
  


public function delete_testimonial($id)
{

    $testimonial=testimonial::find($id);
    $image_path =public_path('storage/testimonial/'.$testimonial->mentor_image);
    if(file_exists($image_path))
    {
        unlink($image_path);
    }
    $testimonial->delete();
    return redirect()->back()->with('message','testimonial deleted successfully');
        
    }
    
    
    
    public function update_testimonial($id)
    {


       
    $testimonial=testimonial::find($id);

    $cetagory = Cetagory::all();



        return view('content.admin.pages.testimonial_edit', compact('testimonial','cetagory'));
            
        }
        
        

        public function update_testimonial_confirm(Request $request,  $id)
        {

         
    $request->validate([
            
        
        'cetagory_short_description' => 'string|required',

 

        'cetagory' => 'string|required',
        

        'mentor_name' => 'string|required',

        'mentor_bio' => 'string|required',
        
        'mentor_image' => 'image|file|required|max:5120',

 
        

        
        
     ],
     
     
     [
        
        
        'cetagory_short_description.string ' => 'cetagory_short_description Mustbe a string ',

        'cetagory_short_description.required ' => 'cetagory_short_description Mustbe a required ',


        'cetagory.string ' => 'cetagory Mustbe a string ',
        'cetagory.required ' => 'cetagory Mustbe a required ',
        
        'mentor_name.string ' => 'mentor_name Mustbe a string ',
        'mentor_name.required ' => 'mentor_name Mustbe a required ',
        
        'mentor_bio.string ' => 'mentor_bio Mustbe a string ',
        'mentor_bio.required ' => 'mentor_bio Mustbe a required ',
        
                             
  
        
        'mentor_image.file' => 'file must be type of file',
        'mentor_image.image' => 'file must be image',
        'mentor_image.required' => 'you must choose a file',
        'image.size' => 'max file size id 10024KB',
        
       
     ]
     );
    
  
    
    $data=Testimonial::find($id);
    $data->cetagory = $request->cetagory;
    $data->cetagory_bio = $request->cetagory_bio;
    $data->cetagory_short_description =$request->cetagory_short_description;
    
    $data->mentor_name = $request->mentor_name;
    $data->mentor_bio = $request->mentor_bio;
    
    $mentor_image=$request->mentor_image;
    $imagename = time() . '.' . $mentor_image->getClientOriginalExtension();
    $request->mentor_image->move('storage/testimonial',$imagename);
    $data->mentor_image=$imagename;
    

    
    $data->save();

 
            
     return redirect()->back()->with('success','testimonial updated successfully');
  
          
        }
        
}