<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Post; 
use App\Models\Home; 
use App\Models\Hero_section; 
use App\Models\Profile; 
use App\Models\Comment;
use App\Models\Reply;
use Alert;

class UserPostController extends Controller
{
    
// public function homepage(){

//     $post = Post::where('post_status','=', 'active')->get();
    
    
//     return view('content.users.home_page.homepage',compact('post'));
// }






public function add_post(Request $request)
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
    $userid=$user->id;
    $name=$user->name;
    $usertype=$user->usertype;
    
    $post=new Post;
    $post->title =$request->title;
    $post->description =$request->description;
    $post->post_status ='pending';
    
    $post->user_id =$userid;
    $post->name =$name;
    $post->usertype= $usertype;

 
    

    $image=$request->image;
    
    
    if($image)
    {
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('storage/post',$image_name);

        $post->image=$image_name;
    }
   
    $post->save();
    Alert::success('Congrats', 'Your Post Added Successfully');

  return redirect()->back();
}





    
public function delete_post($id)
{

    $post=post::find($id);

    $image_path =public_path('storage/post/'.$post->image);
    if(file_exists($image_path))
    {
        unlink($image_path);
    }
    $post->delete();
    return redirect()->back()->with('message','Post deleted successfully');
        
    }

           
    public function update_post($id)
    {


        $post=post::find($id);


        return view('content.viewer.pages.update_post', compact('post'));
            
        }
        
          

    public function update_post_confirm(Request $request,  $id)
    {
        $post=post::find($id);
        $post->title=$request->title;
        $post->description=$request->description;


        $image=$request->image;
        if($image)
        {
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('storage/post',$image_name);
    
            $post->image=$image_name;
        }
       
        
    
        $post->save();
        
        return redirect()->back()->with('message','Post updated successfully');

      
    }
    
    
    
    
    public function post_details($id){


        $post=Post::find($id);
        $home=Home::first();
        $hero=hero_section::first();
        $user=Auth()->user();
        $profile = Profile::all();
        $comment=Comment::paginate(6);
        $reply=Reply::paginate(6);
        $total_comment=Comment::all()->count();
        $total_reply=Reply::all()->count();
    

        return view('content.viewer.pages.post_details',compact('post','profile','reply','comment','total_comment','total_reply','user','home','hero'));
      }
        

}