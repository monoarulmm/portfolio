<?php

namespace App\Http\Controllers\Pages\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Home;
use App\Models\Hero_section;
use App\Models\Cetagory;
use App\Models\Service;
use App\Models\Comment;
use App\Models\Reply;

class BlogController extends Controller
{
    public function blog_page(){
        return view('content.admin.pages.blog_add');
    }
    
    public function add_blog(Request $request)
    {




        
        $request->validate([
            
        
            'title' => 'string|required',

            'description' => 'string|required',
            
            'image' => 'image|file|required|max:5120',
  
     
            
  
            
            
         ],
         
         
         [
            
            
            'title.string ' => 'title Mustbe a string ',
            'title.required ' => 'title Mustbe a required ',
                                 
            'description.string ' => 'description Mustbe a string ',
            'description.required ' => 'description Mustbe a required ',  
            
            'image.file' => 'file must be type of file',
            'image.image' => 'file must be image',
            'image.required' => 'you must choose a file',
            'image.size' => 'max file size id 10024KB',
            
           
         ]
         );
        
        $user=Auth()->user();
     
        
        $blog=new Blog;
        
        $blog->title =$request->title;
        $blog->description =$request->description;
        $image=$request->image;
        
        
        if($image)
        {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('storage/blog',$image_name);

    
            $blog->image=$image_name;
        }
       
        $blog->save();

      return redirect()->back()->with('message','blog-added successfully');
    }
    
    
    
    
    public function show_blog(){
        
        $blog = Blog::all();
        return view('content.admin.pages.blog_list',compact('blog'));
    }
      

    
    public function delete_blog($id)
    {

        $blog=blog::find($id);
        
        $image_path =public_path('storage/blog/'.$blog->image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        $blog->delete();
        return redirect()->back()->with('message','blog deleted successfully');
            
        }
        
        
        
        public function update_blog($id)
        {
    

           
        $blog=blog::find($id);


   


            return view('content.admin.pages.blog_edit', compact('blog'));
                
            }
            
            

            public function update_blog_confirm(Request $request,  $id)
            {

                   
        $request->validate([
            
        
            'title' => 'string|required',

            'description' => 'string|required',
            
            'image' => 'image|file|required|max:5120',
  
     
            
  
            
            
         ],
         
         
         [
            
            
            'title.string ' => 'title Mustbe a string ',
            'title.required ' => 'title Mustbe a required ',
                                 
            'description.string ' => 'description Mustbe a string ',
            'description.required ' => 'description Mustbe a required ',  
            
            'image.file' => 'file must be type of file',
            'image.image' => 'file must be image',
            'image.required' => 'you must choose a file',
            'image.size' => 'max file size id 10024KB',
            
           
         ]
         );
                $blog=blog::find($id);
                
                $blog->title =$request->title;
                $blog->description =$request->description;
                $image=$request->image;



        
                if($image)
                {
                    $image_name = time() . '.' . $image->getClientOriginalExtension();
                    $request->image->move('storage/blog',$image_name);
        
            
                    $blog->image=$image_name;
                }



                $blog->save();
         
                return redirect()->back()->with('message','blog updated successfully');
      
              
            }
            
            
            
            public function blog_details($id){

                $cetagories=Cetagory::paginate(3);
            
                $services=Service::all();
                $blog=blog::find($id);

                $home=Home::first();
                $hero=hero_section::first();
        
                
                return view('content.viewer.pages.blog_details',compact('services','cetagories','blog','home','hero'));
              }
                
        
    }
            