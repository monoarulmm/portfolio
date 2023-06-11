<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\hero_section;
use App\Http\Requests\Storehero_sectionRequest;
use App\Http\Requests\Updatehero_sectionRequest;
use Illuminate\Support\Facades\DB;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

      $list= hero_section::all();
      return view('content.Admin.pages.hero_list',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    
    {
      
         return view('content.Admin.pages.hero_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storehero_sectionRequest $request)
    
    {
        
        
        
        $request->validated();
                
        $file_name =
        time() .
        Str::upper(Str::random(16)) .
        '_' .
        'student-' .
        Str::replace(' ', '_', $request->input('hero_section__english')) .
        '-' .
        $request->input('ce_roll') .
        '.' .
        
        $request->image->extension();
        
        
        
        // $file_name = time().Str::upper(Str::random(16). '.' . $request->image_extension);
        $request->image->move(public_path('/storage/hero-images'), $file_name);
        
        
        
        
        
        $file_name2 =
        time() .
        Str::upper(Str::random(16)) .
        '_' .
        'student-' .
        Str::replace(' ', '_', $request->input('hero_section__english')) .
        '-' .
        $request->input('ce_roll') .
        '.' .
        $request->download_cv->extension();
        
        
        
        
        $request->download_cv->move(public_path('/storage/hero-images'), $file_name2);
        
        
        
        
        $data = [
            'title' => $request->title,
            'line1' => $request->line1,
            'line2' => $request->line2,
            'line3' => $request->line3,
            'description' => $request->description,
            'icon1' => $request->icon1,
            'icon2' => $request->icon2,
            'icon3' => $request->icon3,
            'socail_media_1' => $request->socail_media_1,
            'socail_media_2' => $request->socail_media_2,
            'socail_media_3' => $request->socail_media_3,
       
            'image' => $file_name,
            'download_cv' => $file_name2
          ];
          
          
          
          hero_section::create($data);
        
        
    
      
      
      return redirect()
      ->back()
      ->with('success', 'Hero Section Added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(hero_section $hero_section)
    {
      
      
      $hero = hero_section::all();  
            
    
      
      
      return view('content.viewer.hero_show' ,compact('hero' ,));
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hero_section $hero_section,$id)
    {
         $hero = hero_section::findOrFail($id);
        return view('content.Admin.pages.hero_edit' ,compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatehero_sectionRequest $request, hero_section $hero_section ,$id)
    {
      $request->validated();
          
      $getData = hero_section::where('id', $id)->first();
      
      
      $imageName = $getData->image;
      
    
      
      if ($request->hasFile('image')) {
        if (File::exists(public_path('storage/hero-images/') . $imageName)) {
          File::delete(public_path('storage/hero-images/') . $imageName);
        }
        
  
        // Hanfle the file name for Database
        $file_name = time() . Str::upper(Str::random(16)) . '.' . $request->image->extension();
        // move the file
        $request->image->move(public_path('storage/hero-images'), $file_name);

        
      } else {
        $file_name = $getData->image;
      }
      
      
      
    
      
      
      $imageName2 = $getData->download_cv;
  
      if ($request->hasFile('image')) {
        if (File::exists(public_path('storage/hero-images/') . $imageName2)) {
          File::delete(public_path('storage/hero-images/') . $imageName2);
        }
        
  
        // Hanfle the file name for Database
        $file_name2 = time() . Str::upper(Str::random(16)) . '.' . $request->download_cv->extension();
        // move the file
        $request->download_cv->move(public_path('storage/hero-images'), $file_name2);
      } else {
        $file_name2 = $getData->download_cv;
      }
  


      
      
      $data = [
          'title' => $request->title,
          'line1' => $request->line1,
          'line2' => $request->line2,
          'line3' => $request->line3,
          'description' => $request->description,
          'icon1' => $request->icon1,
          'icon2' => $request->icon2,
          'icon3' => $request->icon3,
          'socail_media_1' => $request->socail_media_1,
          'socail_media_2' => $request->socail_media_2,
          'socail_media_3' => $request->socail_media_3,
     
          'image' => $file_name,
          'download_cv' => $file_name2
        ];
        
          
    
      
      
  
        
        hero_section::findOrFail($id)->update($data);
    
    
    return redirect()
    ->back()
    ->with('success', 'Hero Section  updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
 


    public function destroy(hero_section $hero_section,$id)
    {
  
      // delete the applicant
      if (Auth::check()) {
        if (hero_section::where('id', $id)->exists()) {
  
  
  
           // remove file from storage
         
           $appliction = hero_section::where('id', $id)->first();
           $image_path = $appliction->image;
           $image_path2 = $appliction->download_cv;
  
           if (File::exists(public_path('storage/hero-images/') . $image_path)) {
               File::delete(public_path('storage/hero-images/') . $image_path);
  
               if (File::exists(public_path('storage/hero-images/') . $image_path2)) {
                File::delete(public_path('storage/hero-images/') . $image_path2);}
  
  
  
  
           } else {
               return redirect()->back()->with('destroy-error', 'Images are not found associated with this appliction!');
           }
           hero_section::where('id', $id)->delete();
  
           return redirect()->route('hero_show')->with('destroy-success', 'appliction deleted successfully!');
       } else {
           return redirect()->route('hero_show')->with('destroy-error', 'appliction does not exist! So can not delete!');
       }
    //   }else {
        return redirect()->route('login')->with('error', 'You are not authorized to delete this appliction!');
    // }
  
  
   }
  
  
  
  }
    
  
    }
    