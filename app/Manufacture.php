<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
   
    protected $primaryKey='manufacture_id';
    
        protected $fillable = [
        'manufacture_name', 'manufacture_description','publicationStatus'  
    ];
}
