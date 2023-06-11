<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\hero_section;
use App\Models\User;
class Storehero_sectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
          
            'title' => 'string|required',
            
            'line1' => 'string|required',
            'line2' => 'string|required',
            'line3' => 'string|required',
            
            'description' => 'string|required',
            
            'icon1' => 'string|required',
            'icon2' => 'string|required',
            'icon3' => 'string|required',
            
            'socail_media_1' => 'string|required',
            'socail_media_2' => 'string|required',
            'socail_media_3' => 'string|required',
            
  
            'image' => 'image|file|required|max:1024',
            'download_cv' => 'image|file|required|max:1024',
        ];
    }
    
    public function messages()
    {
      return [
        'title.string ' => 'title Mustbe a string ',
        'title.required ' => 'title Mustbe a required ',
        
        'line1.string ' => 'line1 Mustbe a string ',
        'line1.required ' => 'line1 Mustbe a required ',
        
        'line2.string ' => 'line2 Mustbe a string ',
        'line2.required ' => 'line2 Mustbe a required ',
  
        'line3.string ' => 'line3 Mustbe a string ',
        'line3.required ' => 'line3 Mustbe a required ',
        
        'icon1.string ' => 'icon1 Mustbe a string ',
        'icon1.required ' => 'icon1 Mustbe a required ',
        
        'icon2.string ' => 'icon2 Mustbe a string ',
        'icon2.required ' => 'icon2 Mustbe a required ',
  
        'icon3.string ' => 'icon3 Mustbe a string ',
        'icon3.required ' => 'icon3 Mustbe a required ',
        
        'description.string ' => 'description Mustbe a string ',
        'description.required ' => 'description Mustbe a required ',
  
        'socail_media_1.string ' => 'socail_media_1 Mustbe a string ',
        'socail_media_1.required ' => 'socail_media_1 Mustbe a required ',
  
  
  
        'socail_media_2.string ' => 'socail_media_2 Mustbe a string ',
        'socail_media_2.required ' => 'socail_media_2 Mustbe a required ',
  
        
        'socail_media_3.string ' => 'socail_media_3 Mustbe a string ',
        'socail_media_3.required ' => 'socail_media_3 Mustbe a required ',
  
        
        
        'image.file' => 'file must be type of file',
        'image.image' => 'file must be image',
        'image.required' => 'you must choose a file',
        'image.size' => 'max file size id 1024KB',
        
        'download_cv.file' => 'file must be type of file',
        'download_cv.image' => 'file must be image',
        'download_cv.required' => 'you must choose a file',
        'image.size' => 'max file size id 1024KB',
        

      ];
    }
    
    
    
}