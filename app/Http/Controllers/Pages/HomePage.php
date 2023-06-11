<?php

namespace App\Http\Controllers\Pages;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\hero_section;
use App\Models\Profile;
use App\Models\About;
use App\Models\Home;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\Cetagory;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Allclass;
use App\Models\Post;
use App\Models\Blog;
use App\Models\Recentwork;





class HomePage extends Controller
{


    public function index(){
    
        if(!empty(Auth::user()) && Auth::user()->usertype == 1 ){
            return view('content.admin.home');
        }
        
        else{
        
       
            $hero = Hero_section::first();  
            $about = About::first();  
            $home=Home::first();
       
            
            $comment=Comment::paginate(6);
            $reply=Reply::paginate(6);
            
            $cetagory=Cetagory::paginate(3);
            
            $services=Service::paginate(6);
            
            $testimonial =Testimonial::all();
            
            $classes =Allclass::all();
            $profile = Profile::all();
            
            $recentworks=Recentwork::paginate(6);
            $blogs=Blog::paginate(3);
            $post = Post::where('post_status','=', 'active')->paginate(4);
            $total_comment=Comment::all()->count();
            $total_reply=Reply::all()->count();


           
        return view('content.viewer.home',compact('comment', 'reply','cetagory' ,'testimonial', 'hero','classes','profile','services','recentworks','blogs','post','total_comment','total_reply','about','home') );
    }
    

    }
    
    
    
    public function user_list()
    {
        $users=user::all();
        return view('content.Admin.pages.user_list',compact('users'));
    }
    
    
    
    public function profile_list()
    {
        $profile=profile::all();
        
        return view('content.Admin.pages.userprofile_list',compact('profile'));
    }
    
    

      


    
  public function add_comment(Request $request){

    if(Auth::id())
    {
          $comment= new comment;
         
          $profile = Profile::first();
        //   $profile = DB::table('profile')->where('','$id')->get();

         
        //   $profile = Profile::where('user_id',Auth::user()->id)->get();
          $image=$profile->p_image;
          
          $comment->name=Auth::user()->name;
          $comment->user_id=Auth::user()->id;
          $comment->comment=$request->comment;
          $comment->image=$image;
          
          $comment->save();
          return redirect()->back();
    }

    else{
     return redirect('login');
    }
 
 }



 public function add_reply(Request $request){

   if(Auth::id())
   {
         $reply= new reply;
         
         $profile = Profile::first();
        //  $profile = Profile::get();
        //  $profile = Profile::where('user_id',Auth::user()->id)->get();
         $image=$profile->p_image;
         
         
         $reply->name=Auth::user()->name;
         $reply->user_id=Auth::user()->id;
         $reply->comment_id=$request->commentId;
         $reply->reply=$request->reply;
         $reply->image=$image;
         
         
         $reply->save();
         return redirect()->back();
   }

   else{
    return redirect('login');
   }
   
   

}


public function comment_list()
{
    $comment=comment::all();
   return view('content.Admin.pages.comment_list',compact('comment'));
}


public function reply_list()
{
    $reply =reply::all();
   return view('content.Admin.pages.reply_list',compact('reply'));
}


public function delete_comment($id)
{

    $comment=comment::find($id);
    $comment->delete();
    return redirect()->back()->with('message','comment deleted successfully');
        
    }
public function reply_comment($id)
{

    $reply=reply::find($id);
    $reply->delete();
    return redirect()->back()->with('message','comment deleted successfully');
        
    }
    





// pages 

    
public function about()
{
    $cetagory=Cetagory::paginate(8);
    $services=Service::paginate(8);
    $blog = Blog::all();
    $hero = Hero_section::first(); 
    $about = About::first();   
    $home=Home::first();
   
            
    return view('content.viewer.pages.about',compact('cetagory','services','blog', 'hero','about','home'));
}
    
public function post()
{

    $posts = Post::paginate(4);
    $home=Home::first();

  

    return view('content.viewer.pages.post',compact('posts','home'));
}
    
public function service()
{
  
 
    $services=Service::paginate(8);
    $home=Home::first();


    return view('content.viewer.pages.service',compact('services','home'));
}
    
public function blog()
{
   
    $blogs = Blog::paginate(6);
    $home=Home::first();

            
    return view('content.viewer.pages.blog',compact('blogs','home'));
}
    
public function cetagory()
{
   
    $cetagories=Cetagory::paginate(6);
    $home=Home::first();


            
    return view('content.viewer.pages.cetagory',compact('cetagories','home'));
}
    
public function recentwork()
{
   
    $recentworks=Recentwork::paginate(6);
    $home=Home::first();

            
    return view('content.viewer.pages.recentwork',compact('recentworks','home'));
}
    
public function media()
{
   
     $classes =Allclass::all();
     $home=Home::first();


    return view('content.viewer.pages.media',compact('classes','home'));
}
    

public function search(Request $request)
{
   
    $services = Service::all();
    
 $search_text=$request->search;
 $classes=allclass::where('title','LIKE',"%$search_text%")->orWhere
 ('name','LIKE',"%$search_text%")->orWhere
 ('service','LIKE',"%$search_text%")->get();

 return view('content.viewer.pages.media',compact('classes','services'));
}

    
public function client_details($id)
{
    
    
    $profile = Profile::find($id);
    
    
    $home=Home::first();

    $cetagory=Cetagory::paginate(8);
    $services=Service::paginate(8);
    return view('content.viewer.pages.client_details',compact('profile','cetagory','services','home'));
}
    



    
}