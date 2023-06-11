<?php

namespace App\Http\Controllers\Pages\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cetagory;
use App\Models\Service;
use App\Models\Home;
use App\Models\hero_section;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class Sector extends Controller
{
    
    public function index(){
        return view('content.Admin.pages.cetagory_add');
    }
    
    
    
    public function add_cetagory(Request $request) {

        $request->validate([
            
        
            'cetagory_name' => 'string|required',
            'cetagory_icon' => 'string|required',
            'short_description' => 'string|required',
            'approach' => 'string|required',
            'capabilities' => 'string|required',
            

            'workprocess' => 'string|required',
            'line' => 'string|required',
            'line1' => 'string|required',
            'line2' => 'string|required',
            'line3' => 'string|required',
            'line5' => 'string|required',
            'line6' => 'string|required',
            'line7' => 'string|required',
            'line8' => 'string|required',
            'line9' => 'string|required',
    
            
          
            'description' => 'string|required',
            
            
       
            
  
           
            'image' => 'image|file|required|max:5120',
            'image1' => 'image|file|required|max:5120',
            'image2' => 'image|file|required|max:5120',
           
     
            
  
            
            
         ],
         
         
         [
            
            
            'cetagory_name.string ' => 'cetagory_name Mustbe a string ',
            'cetagory_name.required ' => 'cetagory_name Mustbe a required ',
            
            'cetagory_icon.string ' => 'cetagory_icon Mustbe a string ',
            'cetagory_icon.required ' => 'cetagory_icon Mustbe a required ',
            
            
            'short_description.string ' => 'short_description Mustbe a string ',

            'short_description.required ' => 'short_description Mustbe a required ',
            
            'line.string ' => 'line Mustbe a string ',
            'line.required ' => 'line Mustbe a required ',
            
            'line1.string ' => 'line1 Mustbe a string ',
            'line1.required ' => 'line1 Mustbe a required ',
            
            'line2.string ' => 'line2 Mustbe a string ',
            'line2.required ' => 'line2 Mustbe a required ',
            
            'line3.string ' => 'line3 Mustbe a string ',
            'line3.required ' => 'line3 Mustbe a required ',
            
            'line4.string ' => 'line4 Mustbe a string ',
            'line4.required ' => 'line4 Mustbe a required ',
            
            'line5.string ' => 'line5 Mustbe a string ',
            'line5.required ' => 'line5 Mustbe a required ',
            
            'line6.string ' => 'line6 Mustbe a string ',
            'line6.required ' => 'line6 Mustbe a required ',
            
            'line8.string ' => 'line8 Mustbe a string ',
            'line8.required ' => 'line8 Mustbe a required ',
            
            'line7.string ' => 'line7 Mustbe a string ',
            'line7.required ' => 'line7 Mustbe a required ',
            
            'line9.string ' => 'line9 Mustbe a string ',
            'line9.required ' => 'line9 Mustbe a required ',
            
            'approach.string ' => 'approach Mustbe a string ',
            'approach.required ' => 'approach Mustbe a required ',
            
            'workprocess.string ' => 'workprocess Mustbe a string ',
            'workprocess.required ' => 'workprocess Mustbe a required ',
            'capabilities.string ' => 'capabilities Mustbe a string ',
            'capabilities.required ' => 'capabilities Mustbe a required ',
      
            
            'description.string ' => 'description Mustbe a string ',
            'description.required ' => 'description Mustbe a required ',
    
             

            
            'image.file' => 'file must be type of file',
            'image.image' => 'file must be image',
            'image.required' => 'you must choose a file',
            'image.size' => 'max file size id 10024KB',
            
            'image1.file' => 'file must be type of file',
            'image1.image' => 'file must be image',
            'image1.required' => 'you must choose a file',
            'image.size' => 'max file size id 10024KB',

            'image2.file' => 'file must be type of file',
            'image2.image' => 'file must be image',
            'image2.required' => 'you must choose a file',
            'image.size' => 'max file size id 10024KB',

           
           
         ]
         );
        
        

        $data =new cetagory;

        $data->cetagory_name = $request->cetagory_name;
        $data->cetagory_icon = $request->cetagory_icon;
        $data->short_description = $request->short_description;
        $data->description = $request->description;
        $data->approach = $request->approach;


        $data->capabilities = $request->capabilities;
        $data->line = $request->line5;
        $data->line1 = $request->line1;
        $data->line2 = $request->line2;
        $data->line3 = $request->line3;
        $data->line4 = $request->line4;

        $data->workprocess = $request->workprocess;
        $data->line5 = $request->line5;
        $data->line6 = $request->line6;
        $data->line7 = $request->line7;
        $data->line8 = $request->line8;
        $data->line9 = $request->line9;


                 
        // image_
        $image=$request->image;
        if($image)
        {
         
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('storage/cetagory/image',$image_name);
            $data->image=$image_name;
        }

        
       // image_1
        $image1=$request->image1;
        if($image1)
        {
            $image_name1 = time() . '.' . $image1->getClientOriginalExtension();
            $request->image1->move('storage/cetagory/image1',$image_name1);
            $data->image1=$image_name1;
        }
       
        
        // // image_2
        $image2=$request->image2;
        if($image2)
        {
            $image_name2 = time() . '.' . $image2->getClientOriginalExtension();
            $request->image2->move('storage/cetagory/image2',$image_name2);
            $data->image2=$image_name2;
        }

        $data->save();

        return redirect()->back()->with('success','cetagory-added successfully');



    }
    
    
    public function cetagory_list(){
        
        
        $cetagory = Cetagory::all();
        return view('content.Admin.pages.cetagory_list',compact('cetagory'));
    }
    
    
    public function delete_cetagory($id)
    {
        $data=Cetagory::find($id);

        $image_path =public_path('storage/cetagory/image/'.$data->image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        $image_path =public_path('storage/cetagory/image1/'.$data->image1);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        $image_path =public_path('storage/cetagory/image2/'.$data->image2);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        $data->delete();
        
       return redirect()->back()->with('message','Cetagory deleted successfully');
    }
    
    
    public function update_cetagory_view($id)

    {
        // $userprofile = Profile::all();
       
        $cetagory = Cetagory::findOrFail($id);
        
        return view('content.Admin.pages.cetagory_edit',compact('cetagory'));  
    }
    
    
    public function update_cetagory(Request $request,$id)
    {
        $request->validate([
            
        
            'cetagory_name' => 'string|required',
            'cetagory_icon' => 'string|required',
            'short_description' => 'string|required',
            'approach' => 'string|required',
            'capabilities' => 'string|required',
            

            'workprocess' => 'string|required',
            'line' => 'string|required',
            'line1' => 'string|required',
            'line2' => 'string|required',
            'line3' => 'string|required',
            'line5' => 'string|required',
            'line6' => 'string|required',
            'line7' => 'string|required',
            'line8' => 'string|required',
            'line9' => 'string|required',
    
            
          
            'description' => 'string|required',
            
            
       
            
  
           
            'image' => 'image|file|required|max:5120',
            'image1' => 'image|file|required|max:5120',
            'image2' => 'image|file|required|max:5120',
           
     
            
  
            
            
         ],
         
         
         [
            
            
            'cetagory_name.string ' => 'cetagory_name Mustbe a string ',
            'cetagory_name.required ' => 'cetagory_name Mustbe a required ',
            
            'cetagory_icon.string ' => 'cetagory_icon Mustbe a string ',
            'cetagory_icon.required ' => 'cetagory_icon Mustbe a required ',
            
            
            'short_description.string ' => 'short_description Mustbe a string ',

            'short_description.required ' => 'short_description Mustbe a required ',
            
            'line.string ' => 'line Mustbe a string ',
            'line.required ' => 'line Mustbe a required ',
            
            'line1.string ' => 'line1 Mustbe a string ',
            'line1.required ' => 'line1 Mustbe a required ',
            
            'line2.string ' => 'line2 Mustbe a string ',
            'line2.required ' => 'line2 Mustbe a required ',
            
            'line3.string ' => 'line3 Mustbe a string ',
            'line3.required ' => 'line3 Mustbe a required ',
            
            'line4.string ' => 'line4 Mustbe a string ',
            'line4.required ' => 'line4 Mustbe a required ',
            
            'line5.string ' => 'line5 Mustbe a string ',
            'line5.required ' => 'line5 Mustbe a required ',
            
            'line6.string ' => 'line6 Mustbe a string ',
            'line6.required ' => 'line6 Mustbe a required ',
            
            'line8.string ' => 'line8 Mustbe a string ',
            'line8.required ' => 'line8 Mustbe a required ',
            
            'line7.string ' => 'line7 Mustbe a string ',
            'line7.required ' => 'line7 Mustbe a required ',
            
            'line9.string ' => 'line9 Mustbe a string ',
            'line9.required ' => 'line9 Mustbe a required ',
            
            'approach.string ' => 'approach Mustbe a string ',
            'approach.required ' => 'approach Mustbe a required ',
            
            'workprocess.string ' => 'workprocess Mustbe a string ',
            'workprocess.required ' => 'workprocess Mustbe a required ',
            'capabilities.string ' => 'capabilities Mustbe a string ',
            'capabilities.required ' => 'capabilities Mustbe a required ',
      
            
            'description.string ' => 'description Mustbe a string ',
            'description.required ' => 'description Mustbe a required ',
    
             

            
            'image.file' => 'file must be type of file',
            'image.image' => 'file must be image',
            'image.required' => 'you must choose a file',
            'image.size' => 'max file size id 10024KB',
            
            'image1.file' => 'file must be type of file',
            'image1.image' => 'file must be image',
            'image1.required' => 'you must choose a file',
            'image.size' => 'max file size id 10024KB',

            'image2.file' => 'file must be type of file',
            'image2.image' => 'file must be image',
            'image2.required' => 'you must choose a file',
            'image.size' => 'max file size id 10024KB',

           
           
         ]
         );
        
        

        $data = cetagory::find($id);

        $data->cetagory_name = $request->cetagory_name;
        $data->cetagory_icon = $request->cetagory_icon;
        $data->short_description = $request->short_description;
        $data->description = $request->description;
        $data->approach = $request->approach;


        $data->capabilities = $request->capabilities;
        $data->line = $request->line5;
        $data->line1 = $request->line1;
        $data->line2 = $request->line2;
        $data->line3 = $request->line3;
        $data->line4 = $request->line4;

        $data->workprocess = $request->workprocess;
        $data->line5 = $request->line5;
        $data->line6 = $request->line6;
        $data->line7 = $request->line7;
        $data->line8 = $request->line8;
        $data->line9 = $request->line9;


                 
        // image_
        $image=$request->image;
        if($image)
        {
         
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('storage/cetagory/image',$image_name);
            $data->image=$image_name;
        }

        
       // image_1
        $image1=$request->image1;
        if($image1)
        {
            $image_name1 = time() . '.' . $image1->getClientOriginalExtension();
            $request->image1->move('storage/cetagory/image1',$image_name1);
            $data->image1=$image_name1;
        }
       
        
        // // image_2
        $image2=$request->image2;
        if($image2)
        {
            $image_name2 = time() . '.' . $image2->getClientOriginalExtension();
            $request->image2->move('storage/cetagory/image2',$image_name2);
            $data->image2=$image_name2;
        }

        $data->save();
       

        return redirect()->back()->with('success','cetagory-update successfully');

    }

    
    
    public function cetagory_details($id){


        $cetagory=cetagory::find($id);
   
        $services=Service::all();
        $home=Home::first();
        $hero=hero_section::first();

     
        return view('content.viewer.pages.cetagory_details',compact('cetagory','services','home','hero'));
      }
     


}