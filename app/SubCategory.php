<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    
     protected $primaryKey = 'sub_category_id';
     
     
     
    
     protected $fillable = [
        'sub_category_name', 'sub_category_description','publicationStatus' 
    ];
    
}
