<?php

namespace App\Http\Controllers\Pages\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\Cetagory;
use App\Models\Service;
use App\Models\Home;
use App\Models\Hero_section;
use App\Models\Allclass;

class ClassController extends Controller


{

    public function show(){
    
         
        
        $classes = DB::table('allclasses')->paginate(2);
            
        // $classes = allclass::paginate(2);
    
        $services = Service::paginate(8);
        $cetagories = Cetagory::all();
        $home=Home::first();
        $hero=hero_section::first();
        return view('content.viewer.pages.class-video-all',compact('classes','services','cetagories','home','hero'));
    }
    
    
    
    public function service_search(Request $request)
    {
        $cetagories = Cetagory::all();
        $services = Service::all();
        
     $search_text=$request->search;
     $classes=allclass::where('title','LIKE',"%$search_text%")->orWhere
     ('name','LIKE',"%$search_text%")->orWhere
     ('cetagory','LIKE',"%$search_text%")->get();
     return view('content.viewer.pages.class-video-all',compact('classes','cetagories','services'));
    }
   
   



    public function index(){
        
        $cetagories = Cetagory::all();
        $services = Service::all();
        return view('content.Admin.pages.class_add',compact('cetagories','services'));
       }
       
       public function add_classes(Request $request) {
        
           
        $request->validate([
            
        
            'title' => 'string|required',

            'description' => 'string|required',

            'cetagory' => 'string|required',

            'service' => 'string|required',

            'video_link' => 'string|required',
            
            'image' => 'image|file|required|max:5120',
  
     
            
  
            
            
         ],
         
         
         [
            
            
            'title.string ' => 'title Mustbe a string ',
            'title.required ' => 'title Mustbe a required ',


            'cetagory.string ' => 'cetagory Mustbe a string ',
            'cetagory.required ' => 'cetagory Mustbe a required ',
            
            'service.string ' => 'service Mustbe a string ',
            'service.required ' => 'service Mustbe a required ',
            
            'video_link.string ' => 'video_link Mustbe a string ',
            'video_link.required ' => 'video_link Mustbe a required ',
            
                                 
            'description.string ' => 'description Mustbe a string ',
            'description.required ' => 'description Mustbe a required ',  
            
            'image.file' => 'file must be type of file',
            'image.image' => 'file must be image',
            'image.required' => 'you must choose a file',
            'image.size' => 'max file size id 10024KB',
            
           
         ]
         );
      
        
        $classes =new Allclass;
        $classes->cetagory = $request->cetagory;
        $classes->name = $request->name;
        $classes->description =$request->description;
        $classes->title = $request->title;
        $classes->video_link = $request->video_link;
        $classes->service = $request->service;
        
        $image=$request->image;
        if($image)
        {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('storage/classes',$image_name);
    
            $classes->image=$image_name;
        }
       
    
        
        $classes->save();
    
        return redirect()->back()->with('success','class-added successfully');
    
    
    
    }
    
       
    public function show_classes(){
        
        $classes = Allclass::all();
        return view('content.admin.pages.classes_list',compact('classes'));
    }
      

    
    public function delete_classes($id)
    {

        $classes= Allclass::find($id);
        
        $image_path =public_path('storage/classes/'.$classes->image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        
        $classes->delete();
        return redirect()->back()->with('message','classes deleted successfully');
            
        }
        
        
        
        public function update_classes($id)
        {
    


           
        $class= Allclass::find($id);
        $cetagories = Cetagory::all();
        $services = Service::all();


            return view('content.admin.pages.classes_edit', compact('class','services','cetagories'));
                
            }
            
            

            public function update_classes_confirm(Request $request,  $id)
            {

                                        
        $request->validate([
            
        
            'title' => 'string|required',

            'description' => 'string|required',

            'cetagory' => 'string|required',

            'service' => 'string|required',

            'video_link' => 'string|required',
            
            'image' => 'image|file|required|max:5120',
  
     
            
  
            
            
         ],
         
         
         [
            
            
            'title.string ' => 'title Mustbe a string ',
            'title.required ' => 'title Mustbe a required ',


            'cetagory.string ' => 'cetagory Mustbe a string ',
            'cetagory.required ' => 'cetagory Mustbe a required ',
            
            'service.string ' => 'service Mustbe a string ',
            'service.required ' => 'service Mustbe a required ',
            
            'video_link.string ' => 'video_link Mustbe a string ',
            'video_link.required ' => 'video_link Mustbe a required ',
            
                                 
            'description.string ' => 'description Mustbe a string ',
            'description.required ' => 'description Mustbe a required ',  
            
            'image.file' => 'file must be type of file',
            'image.image' => 'file must be image',
            'image.required' => 'you must choose a file',
            'image.size' => 'max file size id 10024KB',
            
           
         ]
         );
                $classes= Allclass::find($id);
                
                $classes->cetagory = $request->cetagory;
                $classes->name = $request->name;
                $classes->description =$request->description;
                $classes->title = $request->title;
                $classes->video_link = $request->video_link;
                $classes->service = $request->service;
                
                $image=$request->image;
                if($image)
                {
                    $image_name = time() . '.' . $image->getClientOriginalExtension();
                    $request->image->move('storage/classes',$image_name);
            
                    $classes->image=$image_name;
                }
               
                
            
                $classes->save();
                
                return redirect()->back()->with('success','classes updated successfully');
      
              
            }


    
    




    
    


}