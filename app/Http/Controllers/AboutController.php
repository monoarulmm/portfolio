<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;

class AboutController extends Controller
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
        return view('content.Admin.pages.about_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutRequest $request)
    {
        
        $request->validated();
        $data = [
            'years' => $request->years,
            'clients_satisfections' => $request->clients_satisfections,
            'skill_1' => $request->skill_1,
            'skill_2' => $request->skill_2,
            'skill_3' => $request->skill_3,
            'skill_4' => $request->skill_4,
            'skill_5' => $request->skill_5,
            'skill_6' => $request->skill_6,
            'percent_1' => $request->percent_1,
            'percent_2' => $request->percent_2,
            'percent_3' => $request->percent_3,
            'percent_4' => $request->percent_4,
            'percent_5' => $request->percent_5,
            'percent_6' => $request->percent_6,
            'short_description' => $request->short_description,
    
          ];
          
          
          
          About::create($data);
        
        
    
      
      
      return redirect()
      ->back()
      ->with('success', 'About Sections Added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        $list= About::all();
        return view('content.Admin.pages.about_list',compact('list'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about,$id)
    {
        $about = About::findOrFail($id);
        return view('content.Admin.pages.about_edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request, About $about,$id)
    {
        $request->validated();
        $data = [
            'years' => $request->years,
            'clients_satisfections' => $request->clients_satisfections,
            'skill_1' => $request->skill_1,
            'skill_2' => $request->skill_2,
            'skill_3' => $request->skill_3,
            'skill_4' => $request->skill_4,
            'skill_5' => $request->skill_5,
            'skill_6' => $request->skill_6,
            'percent_1' => $request->percent_1,
            'percent_2' => $request->percent_2,
            'percent_3' => $request->percent_3,
            'percent_4' => $request->percent_4,
            'percent_5' => $request->percent_5,
            'percent_6' => $request->percent_6,
            'short_description' => $request->short_description,
    
          ];
          
          
          
             About::findOrFail($id)->update($data);
        
        
    
      
      
      return redirect()
      ->back()
      ->with('success', 'About Sections Added successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about,$id)

    {


        About::where('id', $id)->delete();
       
        
        $about->delete();
        return redirect() ->back();
    }
}
