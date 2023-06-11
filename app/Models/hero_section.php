<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class hero_section extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        
        'line1',
        
        'line2',
        
        'line3',
    
        'description',
        
        'icon1',
        
        'icon2',
        
        'icon3',
        
        'socail_media_1',
        
        'socail_media_2',
        
        'socail_media_3',
    
        'image',
        
        'download_cv'
        ];
      
        protected $table = 'hero_section';
}