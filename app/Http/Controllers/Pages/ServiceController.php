<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cetagory;
use App\Models\Service;
use App\Models\User;
use App\Models\Home;
use App\Models\Hero_section;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
class ServiceController extends Controller
{
    public function index(){
        
       $cetagories = cetagory::all();
        
        
      //  $user = User::where('id', 1)->first();
      //  $user->assignRole('admin');

    // $user->givePermissionTo('edit');

    // $role = Role::where('name', 'admin')->first();
    // $role->givePermissionTo('edit');
    
    // if (!Auth::check() || !Auth::user()->hasRole('admin')) {
    //     return redirect()->route('login');
    // }

    
    
        return view('content.Admin.pages.service_add',compact('cetagories'));
       }
       
       public function add_service(Request $request) {
        $request->validate([
            
        
          'title' => 'string|required',

          'description' => 'string|required',

          'cetagory' => 'string|required',

          'service' => 'string|required',

          'name' => 'string|required',
          
          'image' => 'image|file|required|max:5120',

   
          

          
          
       ],
       
       
       [
          
          
          'title.string ' => 'title Mustbe a string ',
          'title.required ' => 'title Mustbe a required ',


          'cetagory.string ' => 'cetagory Mustbe a string ',
          'cetagory.required ' => 'cetagory Mustbe a required ',
          
     
          
          'name.string ' => 'name Mustbe a string ',
          'name.required ' => 'name Mustbe a required ',
          
                               
          'description.string ' => 'description Mustbe a string ',
          'description.required ' => 'description Mustbe a required ',  
          
          'image.file' => 'file must be type of file',
          'image.image' => 'file must be image',
          'image.required' => 'you must choose a file',
          'image.size' => 'max file size id 10024KB',
          
         
       ]
       );

      
        
        $service =new service;
        $service->cetagory = $request->cetagory;
        $service->name = $request->name;
        $service->description =$request->description;
        $service->title = $request->title;
 
      
        
        $image=$request->image;
        $imagename2 = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('storage/service',$imagename2);
        $service->image=$imagename2;
        
    
        
        $service->save();
    
        return redirect()->back()->with('success','service-added successfully');
    
    
    
    }
    
    
    
    
    public function show_service(){
        
        $service = service::all();
        return view('content.admin.pages.service_list',compact('service'));
      }
      
      
      
      public function delete_service($id)
      {
      
        $service=service::find($id);
        $image_path =public_path('storage/service/'.$service->image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        $service->delete();
        return redirect()->back()->with('message','service deleted successfully');
            
        }
        
        
        
        
        
        public function update_service($id)
        {
      
      
           
        $service=service::find($id);
      
        $cetagories = Cetagory::all();
      
            return view('content.admin.pages.service_edit', compact('service','cetagories'));
                
            }
            
            
      
            public function update_service_confirm(Request $request,  $id)
            {
                
              $request->validate([
            
        
                'title' => 'string|required',
      
                'description' => 'string|required',
      
                'cetagory' => 'string|required',
      
                'service' => 'string|required',
      
                'name' => 'string|required',
                
                'image' => 'image|file|required|max:5120',
      
         
                
      
                
                
             ],
             
             
             [
                
                
                'title.string ' => 'title Mustbe a string ',
                'title.required ' => 'title Mustbe a required ',
      
      
                'cetagory.string ' => 'cetagory Mustbe a string ',
                'cetagory.required ' => 'cetagory Mustbe a required ',
                
           
                
                'name.string ' => 'name Mustbe a string ',
                'name.required ' => 'name Mustbe a required ',
                
                                     
                'description.string ' => 'description Mustbe a string ',
                'description.required ' => 'description Mustbe a required ',  
                
                'image.file' => 'file must be type of file',
                'image.image' => 'file must be image',
                'image.required' => 'you must choose a file',
                'image.size' => 'max file size id 10024KB',
                
               
             ]
             );
             
              $service=service::find($id);
              $service->cetagory = $request->cetagory;
              $service->name = $request->name;
              $service->description =$request->description;
              $service->title = $request->title;
       
            
              
              $image=$request->image;
              $imagename2 = time() . '.' . $image->getClientOriginalExtension();
              $request->image->move('storage/service',$imagename2);
              $service->image=$imagename2;
              
          
              
              $service->save();
          
                
                return redirect()->back()->with('message','service updated successfully');
      
              
            }
          
          
          
            public function service_details($id){
      
      
              $services=service::find($id);
             $cetagories = Cetagory::all();

             $home=Home::first();
             $hero=hero_section::first();
     
           
           
              return view('content.viewer.pages.service_details',compact('services','cetagories','home','hero'));
            }
           
          
}