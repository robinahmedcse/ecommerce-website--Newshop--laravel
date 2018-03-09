<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Customer;
use DB;
use Session;


class CustomerLoginController extends Controller
{
    
     public function login() {
         
              $customer_id= Session::get('customer_id');
             if( $customer_id == NULL){
                return view('frontEnd.login.login');
                 
             }else{
                return redirect('customer/home')->send();  
             }  
    }
    
    
     public function loginCheck(Request $request) {
         $email=$request->email;
         $password=$request->password;
         
       
         $coustomer_pass =md5($password);
         
        //    $customer_info = DB::table('customers')->get();
          
         $customer_info=DB::table('customers')
                ->select('customers.*')
                 ->where('password', $coustomer_pass)
                ->first();
          
          if ($customer_info) {
              
              Session::put('customer_id',$customer_info->customer_id);
              Session::put('customer_name',$customer_info->customer_name);
              return  redirect('customer/home');
              
        } 
        
        else {
            
         Session::put('exception','Customer Email and Password Invalid');
         return  redirect('customer/login');
        
        
         //  return redirect('admin')->with('exception','Admin Email and Password Invalid'); 
        }
         
         
         
         
          
    }
    
    
    
    
}//end of class
