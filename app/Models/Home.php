<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',

        
        'copyrighttext',
        
       
    
        'bio',
        
        'icon1',
        
        'icon2',
        
        'icon3',

        'icon4',

        'icon5',
        
        'socail_media_1',
        
        'socail_media_2',
        
        'socail_media_3',

        'socail_media_4',

        'socail_media_5',
    
        'image',
        
        'logo'
        ];
      
        protected $table = 'homes';
}
