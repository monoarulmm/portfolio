<?php

namespace App\Http\Controllers\Pages\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
class PostController extends Controller
{

    
    
    public function show_post(){
        
        $postes = Post::all();
        return view('content.admin.pages.post_list',compact('postes'));
    }
      

    

            
            public function accept_post($id)
            {
                $data =Post::find($id);
                $data->post_status='active';
                $data->save();
                
                return redirect()->back()->with('message','Accepted successfully');
            }
            public function reject_post($id)
            {
                $data =Post::find($id);
                $data->post_status='rejected';
                $data->save();
                
                return redirect()->back()->with('message',' successfully _post_reject');
            }
    
}