<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
      protected $primaryKey = 'customer_id';
     
     
      
        protected $fillable = [
        'customer_name', 
        'email',
        'password',
        'phone',
        'address',
        'thana' ,
        'post_office' ,
        'district' ,
        'country' 
            ];
    
      
}
