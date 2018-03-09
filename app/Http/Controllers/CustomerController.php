<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{
    
 
    public function index() {
      
            $customer_id = Session::get('customer_id');
        if ($customer_id == NULL) {
            return redirect('customer/login')->send();
        } else {
            return view('frontEnd.customer.index.index');
        }
    }
    
    
    
    
    
    
    
     public function customerLogout() {
        
          Session::put('customer_id',NULL);
          Session::put('customer_name',NULL);
          return redirect('customer/')->with('massage','You are successfully Logout');
        } 
    
    
    
}//end of class
