<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
     protected $primaryKey = 'shipping_id';
     
     
      
        protected $fillable = [
        'customer_name', 
        'email',
        'phone',
        'address',
        'thana' ,
        'post_office' ,
        'district' ,
        'country' 
            ];
    

}
