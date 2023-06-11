<?php

namespace App\Http\Controllers\Pages\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recentwork;
use App\Models\Cetagory;
use App\Models\Service;

class RecentWorkController extends Controller
{
    public function index(){
        $cetagories = Cetagory::all();
        $services = Service::all();
        return view('content.admin.pages.recentwork_add',compact('cetagories','services'));
    }
    
    
    public function add_recentwork(Request $request)
    {
   
        $request->validate([
            
        
            'title' => 'string|required',
            'location' => 'string|required',
            'client' => 'string|required',
            'duration' => 'string|required',
            'completion' => 'string|required',
            'architect' => 'string|required',
            'cetagory' => 'string|required',
            'service' => 'string|required',
            'description' => 'string|required',
            
            
       
            
  
            'work' => 'image|file|required|max:5120',
            'image' => 'image|file|required|max:5120',
            'image1' => 'image|file|required|max:5120',
            'image2' => 'image|file|required|max:5120',
            'image3' => 'image|file|required|max:5120',
            'image4' => 'image|file|required|max:5120',
            'image5' => 'image|file|required|max:5120',
            'image6' => 'image|file|required|max:5120',
     
            
  
            
            
         ],
         
         
         [
            
            
            'title.string ' => 'title Mustbe a string ',
            'title.required ' => 'title Mustbe a required ',
            
            'location.string ' => 'location Mustbe a string ',
            'location.required ' => 'location Mustbe a required ',
            
            
            'client.string ' => 'client Mustbe a string ',
            'client.required ' => 'client Mustbe a required ',
            
            'architect.string ' => 'architect Mustbe a string ',
            'architect.required ' => 'architect Mustbe a required ',
            
            'duration.string ' => 'duration Mustbe a string ',
            'duration.required ' => 'duration Mustbe a required ',
            
            'completion.string ' => 'completion Mustbe a string ',
            'completion.required ' => 'completion Mustbe a required ',
            
            'cetagory.string ' => 'cetagory Mustbe a string ',
            'cetagory.required ' => 'cetagory Mustbe a required ',
            
            'service.string ' => 'service Mustbe a string ',
            'service.required ' => 'service Mustbe a required ',
            
            'description.string ' => 'description Mustbe a string ',
            'description.required ' => 'description Mustbe a required ',
    
             
            'work.file' => 'file must be type of file',
            'work.image' => 'file must be image',
            'work.equired' => 'you must choose a file',
            'image.size' => 'max file size id 10024KB',
            
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

            'image3.file' => 'file must be type of file',
            'image3.image' => 'file must be image',
            'image3.required' => 'you must choose a file',
            'image.size' => 'max file size id 10024KB',

            
            'image4.file' => 'file must be type of file',
            'image4.image' => 'file must be image',
            'image4.required' => 'you must choose a file',
            'image.size' => 'max file size id 10024KB',

            'image5.file' => 'file must be type of file',
            'image5.image' => 'file must be image',
            'image5.required' => 'you must choose a file',
            'image.size' => 'max file size id 5120KB',
           
            'image6.file' => 'file must be type of file',
            'image6.image' => 'file must be image',
            'image6.required' => 'you must choose a file',
            'image.size' => 'max file size id 5120KB',
           
         ]
         );
        
        
        $recentwork=new recentwork;
        
        $recentwork->title =$request->title;
        $recentwork->cetagory=$request->cetagory;
        $recentwork->service =$request->service;
        $recentwork->client =$request->client;
        $recentwork->architect =$request->architect;
        $recentwork->location =$request->location;
        $recentwork->duration =$request->duration;
        $recentwork->completion =$request->completion;
        $recentwork->description =$request->description;


                       
                    // work_image
                
                    $work=$request->work;
                    if($work)
                    {
                        $image_work = time() . '.' . $work->getClientOriginalExtension();
                        $request->work->move('storage/recentwork/work',$image_work);
            
                
                        $recentwork->work=$image_work;
                    }
                    
                
        // image_
                $image=$request->image;
                if($image)
                {
                    $image_name = time() . '.' . $image->getClientOriginalExtension();
                    $request->image->move('storage/recentwork/image',$image_name);
        
            
                    $recentwork->image=$image_name;
                }
        
        
               // image_1
                $image1=$request->image1;
                if($image1)
                {
                    $image_name1 = time() . '.' . $image1->getClientOriginalExtension();
                    $request->image1->move('storage/recentwork/image1',$image_name1);
        
            
                    $recentwork->image1=$image_name1;
                }
               
                
                // image_2
                $image2=$request->image;
                if($image2)
                {
                    $image_name2 = time() . '.' . $image2->getClientOriginalExtension();
                    $request->image2->move('storage/recentwork/image2',$image_name2);
        
            
                    $recentwork->image2=$image_name2;
                }
        
        // image_3
               
                $image3=$request->image3;
                if($image3)
                {
                    $image_name3 = time() . '.' . $image3->getClientOriginalExtension();
                    $request->image3->move('storage/recentwork/image3',$image_name3);
        
            
                    $recentwork->image3=$image_name3;
                }
                
                // image  4
               
                $image4=$request->image4;
                if($image4)
                {
                    $image_name4 = time() . '.' . $image4->getClientOriginalExtension();
                    $request->image4->move('storage/recentwork/image4',$image_name4);
        
            
                    $recentwork->image4=$image_name4;
                }
                
               // image_5
                $image5=$request->image5;
                if($image5)
                {
                    $image_name5 = time() . '.' . $image5->getClientOriginalExtension();
                    $request->image5->move('storage/recentwork/image5',$image_name5);
        
            
                    $recentwork->image5=$image_name5;
                }
        
        
               
        
                // image_6
                
                $image6=$request->image6;
                if($image6)
                {
                    $image_name6 = time() . '.' . $image6->getClientOriginalExtension();
                    $request->image6->move('storage/recentwork/image6',$image_name6);
        
            
                    $recentwork->image6=$image_name6;
                }
               
        

       
      


        
        $recentwork->save();

      return redirect()->back()->with('message','recentwork-added successfully');
    }
    
    
    
    
    public function show_recentwork(){
        
        $recentwork = recentwork::all();
        
        return view('content.admin.pages.recentwork_list',compact('recentwork'));
    }
      

    
    public function delete_recentwork($id)
    {

        $recentwork=recentwork::find($id);
        
        $image_path =public_path('storage/recentwork/work/'.$recentwork->work);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        
        $image_path =public_path('storage/recentwork/image/'.$recentwork->image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        $image_path =public_path('storage/recentwork/image1/'.$recentwork->image1);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        $image_path =public_path('storage/recentwork/image2/'.$recentwork->image2);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        $image_path =public_path('storage/recentwork/image3/'.$recentwork->image3);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        $image_path =public_path('storage/recentwork/image4/'.$recentwork->image4);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        $image_path =public_path('storage/recentwork/image5/'.$recentwork->image5);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        $image_path =public_path('storage/recentwork/image6/'.$recentwork->image6);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        
        
        
        
        



        

        
        $recentwork->delete();
        return redirect()->back()->with('message','recentwork deleted successfully');
            
        }
        
        
        
        public function update_recentwork($id)
        {
    

           
        $recentwork=recentwork::find($id);
           
                $cetagories = Cetagory::all();
               $services = Service::all();
            return view('content.admin.pages.recentwork_edit', compact('recentwork','cetagories','services'));
                
            }
            
            

            public function update_recentwork_confirm(Request $request,  $id)
            {
                $recentwork=recentwork::find($id);
                
                $recentwork->title =$request->title;
                $recentwork->cetagory=$request->cetagory;
                $recentwork->service =$request->service;
                $recentwork->client =$request->client;
                $recentwork->architect =$request->architect;
                $recentwork->location =$request->location;
                $recentwork->duration =$request->duration;
                $recentwork->completion =$request->completion;
                $recentwork->description =$request->description;


             

                   

                
                    // work_image
                
                    $work=$request->work;
                    if($work)
                    {
                        $image_work = time() . '.' . $work->getClientOriginalExtension();
                        $request->work->move('storage/recentwork/work',$image_work);
            
                
                        $recentwork->work=$image_work;
                    }
                    
                
        // image_
                $image=$request->image;
                if($image)
                {
                    $image_name = time() . '.' . $image->getClientOriginalExtension();
                    $request->image->move('storage/recentwork/image',$image_name);
        
            
                    $recentwork->image=$image_name;
                }
        
        
               // image_1
                $image1=$request->image1;
                if($image1)
                {
                    $image_name1 = time() . '.' . $image1->getClientOriginalExtension();
                    $request->image1->move('storage/recentwork/image1',$image_name1);
        
            
                    $recentwork->image1=$image_name1;
                }
               
                
                // image_2
                $image2=$request->image;
                if($image2)
                {
                    $image_name2 = time() . '.' . $image2->getClientOriginalExtension();
                    $request->image2->move('storage/recentwork/image2',$image_name2);
        
            
                    $recentwork->image2=$image_name2;
                }
        
        // image_3
               
                $image3=$request->image3;
                if($image3)
                {
                    $image_name3 = time() . '.' . $image3->getClientOriginalExtension();
                    $request->image3->move('storage/recentwork/image3',$image_name3);
        
            
                    $recentwork->image3=$image_name3;
                }
                
                // image  4
               
                $image4=$request->image4;
                if($image4)
                {
                    $image_name4 = time() . '.' . $image4->getClientOriginalExtension();
                    $request->image4->move('storage/recentwork/image4',$image_name4);
        
            
                    $recentwork->image4=$image_name4;
                }
                
               // image_5
                $image5=$request->image5;
                if($image5)
                {
                    $image_name5 = time() . '.' . $image5->getClientOriginalExtension();
                    $request->image5->move('storage/recentwork/image5',$image_name5);
        
            
                    $recentwork->image5=$image_name5;
                }
        
        
               
        
                // image_6
                
                $image6=$request->image6;
                if($image6)
                {
                    $image_name6 = time() . '.' . $image6->getClientOriginalExtension();
                    $request->image6->move('storage/recentwork/image6',$image_name6);
        
            
                    $recentwork->image6=$image_name6;
                }
               
        
            
               
                $recentwork->save();
                return redirect()->back()->with('message','recentwork updated successfully');
      
              
            }
            
       
            
            public function recentwork_details($id){


                
                
                
                $services =Service::all();

                $recentwork=recentwork::find($id);
           
             

             
                return view('content.viewer.pages.recentwork_details',compact('recentwork','services'));
              }
             
}