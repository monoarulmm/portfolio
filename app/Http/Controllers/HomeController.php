<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.Admin.pages.home_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHomeRequest $request)
    {
           


        
   $request->validated();


    // image file name
    $file_name = time() . Str::upper(Str::random(16)) . '.' . $request->image->extension();
    // move the  image
    $request->image->move(public_path('storage/home'), $file_name);

 

    //logo image file name
    $logo_file_name = time() . Str::upper(Str::random(16)) . '.' . $request->logo->extension();
    // move the logobackground image
    $request->logo->move(public_path('storage/home'), $logo_file_name);
        
        
        
        $data = [
            'name' => $request->name,
            'copyrighttext' => $request->copyrighttext,
           
            'bio' => $request->bio,


            'icon1' => $request->icon1,
            'icon2' => $request->icon2,
            'icon3' => $request->icon3,
            'icon4' => $request->icon4,
            'icon5' => $request->icon5,

            'socail_media_1' => $request->socail_media_1,
            'socail_media_2' => $request->socail_media_2,
            'socail_media_3' => $request->socail_media_3,
            'socail_media_4' => $request->socail_media_4,
            'socail_media_5' => $request->socail_media_5,
       
            'image' => $file_name,
            'logo' => $logo_file_name
          ];
          
          
          
          Home::create($data);
        
        
    
      
      
      return redirect()->back()  ->with('success', 'Home Section Added successfully!');
    }
  

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {

        $list= Home::all();
        return view('content.Admin.pages.home_list',compact('list'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home,$id)
    {
        $home = Home::findOrFail($id);
        return view('content.Admin.pages.home_edit',compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeRequest $request, Home $home,$id)
    {
        $request->validated();


        //for old image delete
      
        $get_data = Home::where('id', $id)->first();
        $image_name =  $get_data->image;
        $imagename = $get_data->logo;
      
      
      
        if($request->hasFile('image')){
      
          if(File::exists(public_path('storage/home/') . $image_name)){
            File::delete(public_path('storage/home/') . $image_name);
      
          }
      
      
        // image file name
           $file_name = time() . Str::upper(Str::random(16)) . '.' . $request->image->extension();
        // move the  image
           $request->image->move(public_path('storage/home'), $file_name);
      
        }else{
          $file_name = $get_data->image;
        }
      
      
      

          
      if($request->hasFile('image')){
      
        if(File::exists(public_path('storage/home/') . $imagename)){
          File::delete(public_path('storage/home/') . $imagename);
    
        }
    
    

    //logo image file name
         $logo_file_name = time() . Str::upper(Str::random(16)) . '.' . $request->logo->extension();
    // move the logobackground image
         $request->logo->move(public_path('storage/home'), $logo_file_name);
    
      }else{
        $file_name = $get_data->image;
      }
    

        $data = [
            'name' => $request->name,
            'copyrighttext' => $request->copyrighttext,
           
            'bio' => $request->bio,


            'icon1' => $request->icon1,
            'icon2' => $request->icon2,
            'icon3' => $request->icon3,
            'icon4' => $request->icon4,
            'icon5' => $request->icon5,

            'socail_media_1' => $request->socail_media_1,
            'socail_media_2' => $request->socail_media_2,
            'socail_media_3' => $request->socail_media_3,
            'socail_media_4' => $request->socail_media_4,
            'socail_media_5' => $request->socail_media_5,
       
            'image' => $file_name,
            'logo' => $logo_file_name
          ];
          
          
          
          Home::findOrFail($id)->update($data);
          
          return redirect()->back()  ->with('success', 'Home Section updated successfully!');
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home,$id)
    {
         // delete the applicant
      if (Auth::check()) {
        if (Home::where('id', $id)->exists()) {
  
  
  
  
           // remove file from storage
         
           $appliction = Home::where('id', $id)->first();
           $image_path = $appliction->image;
           $image_path2 = $appliction->logo;
  
           if (File::exists(public_path('storage/home/') . $image_path)) {
               File::delete(public_path('storage/home/') . $image_path);
  
               if (File::exists(public_path('storage/home/') . $image_path2)) {
                File::delete(public_path('storage/home/') . $image_path2);}
  
  
  
  
           } else {
               return redirect()->back()->with('destroy-error', 'Images are not found associated with this appliction!');
           }
           
         
        Home::where('id', $id)->delete();
       
        
        $home->delete();
        return redirect()->back();

       } else {
           return redirect()->url('home_list')->with('destroy-error', 'appliction does not exist! So can not delete!');
       }
    //   }else {
        return redirect()->route('login')->with('error', 'You are not authorized to delete this appliction!');
    // }
  
  
   }
  
  
    }
}
