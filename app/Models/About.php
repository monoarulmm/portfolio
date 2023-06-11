<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [

        'years',
        
        'clients_satisfections',
        
        'skill_1',
        'skill_2',
        'skill_3',
        'skill_4',
        'skill_5',
        'skill_6',
        
        'percent_1',
        'percent_2',
        'percent_3',
        'percent_4',
        'percent_5',
        'percent_6',
    
        'short_description',
        
     
    
     
        ];
      
        protected $table = 'abouts';
}
