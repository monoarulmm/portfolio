<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHomeRequest extends FormRequest
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
          'name' => 'string|required',
            'copyrighttext' => 'string|required',
            
            
            
            'bio' => 'string|required',
            
            'icon1' => 'string|required',
            'icon2' => 'string|required',
            'icon3' => 'string|required',
            'icon4' => 'string|required',
            'icon5' => 'string|required',
            
            'socail_media_1' => 'string|required',
            'socail_media_2' => 'string|required',
            'socail_media_3' => 'string|required',
            'socail_media_4' => 'string|required',
            'socail_media_5' => 'string|required',
            
  
            'image' => 'image|file|required|max:10024',
            'logo' => 'image|file|required|max:10024',
        ];
    }
    public function messages()
    {
      return [
        'name.string ' => 'name Mustbe a string ',
        'name.required ' => 'name Mustbe a required ',

        'copyrighttext.string ' => 'copyrighttext Mustbe a string ',
        'copyrighttext.required ' => 'copyrighttext Mustbe a required ',
        

  
        'line3.string ' => 'line3 Mustbe a string ',
        'line3.required ' => 'line3 Mustbe a required ',
        
        'icon1.string ' => 'icon1 Mustbe a string ',
        'icon1.required ' => 'icon1 Mustbe a required ',
        
        'icon2.string ' => 'icon2 Mustbe a string ',
        'icon2.required ' => 'icon2 Mustbe a required ',
  
        'icon3.string ' => 'icon3 Mustbe a string ',
        'icon3.required ' => 'icon3 Mustbe a required ',
  
        'icon4.string ' => 'icon4 Mustbe a string ',
        'icon4.required ' => 'icon4 Mustbe a required ',
  
        'icon5.string ' => 'icon5 Mustbe a string ',
        'icon5.required ' => 'icon5 Mustbe a required ',
        
        'bio.string ' => 'bio Mustbe a string ',
        'bio.required ' => 'bio Mustbe a required ',
  
        'socail_media_1.string ' => 'socail_media_1 Mustbe a string ',
        'socail_media_1.required ' => 'socail_media_1 Mustbe a required ',
  
  
  
        'socail_media_2.string ' => 'socail_media_2 Mustbe a string ',
        'socail_media_2.required ' => 'socail_media_2 Mustbe a required ',
  
        
        'socail_media_3.string ' => 'socail_media_3 Mustbe a string ',
        'socail_media_3.required ' => 'socail_media_3 Mustbe a required ',

        'socail_media_4.string ' => 'socail_media_4 Mustbe a string ',
        'socail_media_4.required ' => 'socail_media_4 Mustbe a required ',

        'socail_media_5.string ' => 'socail_media_5 Mustbe a string ',
        'socail_media_5.required ' => 'socail_media_5 Mustbe a required ',
  
        
        
        'image.file' => 'file must be type of file',
        'image.image' => 'file must be image',
        'image.required' => 'you must choose a file',
        'image.size' => 'max file size id 10024KB',
        
        'logo.file' => 'file must be type of file',
        'logo.image' => 'file must be image',
        'logo.required' => 'you must choose a file',
        'image.size' => 'max file size id 10024KB',
        

      ];
    }
    
}
