<?php

 
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    
     public function __construct()
    {
           $this->middleware('guest:admin',['except'=>['adminLogout']]);
    }
    
    
      public function showLoginForm() {
        return view('admin.login.loginContent');
    }

      public function loginCheck(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        //Auth::attempt($credentials, $remember);
       // Auth::guard('admin')->attempt($credentials, $remember); its only for admin
       
        
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password], $request->remember)){
            return redirect()->intended( url('admin/home'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));
        
    }  
    
    
    
    
     public function adminLogout()
    {
          
        Auth::guard('admin')->logout();

        return redirect('admin/login');
    }
    
    
}//end of class
