<?php

namespace App\Http\Controllers;


use DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Customer ;
use App\Shipping;

use App\Payment;
use App\Order;
use App\OrderDetail;



class CheckoutController extends Controller
{
    
    public function ajax($email_address) {
        echo'-------------'.$email_address;
        
    }
    
    
    
     public function index() {
         return view('frontEnd.checkout.checkout');
    }
    
       public function  customerRegistration(Request $request) {
      // return $request->all();
      
          $coustomer_pass=$request->password;
          $coustomer_pass=md5($coustomer_pass);
       
          
          $customer = new Customer();
          $customer->customer_name = $request->customer_name; 
          $customer->email = $request->email;
          $customer->password = $coustomer_pass;
          $customer->phone = $request->phone;
          $customer->address = $request->address;
          $customer->thana = $request->thana;
          $customer->post_office = $request->post_office;
          $customer->district = $request->district; 
          $customer->country = $request->country;  
          $customer->save(); 
          
            $customerId=$customer->customer_id;
            Session::put('customer_id',$customerId);
   
   return redirect('checkout/shipping');
    }
   
    
     public function showShippingForm() {
         
         $customer_id=Session::get('customer_id');
         $customerById=Customer::where('customer_id',$customerId)->first();
         return view('frontEnd.checkout.shipping',['customerById'=>$customerById]);
    }
    
  
     public function saveShipping(Request $request) {
    
          $shipping = new Shipping();
          $shipping->name = $request->name; 
          $shipping->email = $request->email;
          $shipping->phone = $request->phone;
          $shipping->address = $request->address;
          $shipping->thana = $request->thana;
          $shipping->post_office = $request->post_office;
          $shipping->district = $request->district;  
          $shipping->country = $request->country;
          $shipping->save(); 
          
            $shippingId=$shipping->shipping_id;
            Session::put('shippingId',$shippingId);
   
            return redirect('checkout/payment');
         
    }
    
    
      
      public function showPaymentForm() {
       return view('frontEnd.checkout.payment');
        
    }
    
    
    
    
     public function saveOrderInfo(Request $request) {
     //  return $request->all();
        $paymentType = $request->payment_type;
        $customer_id = Session::get('customer_id');
        $shippingId = Session::get('shippingId');
        $orderTotal = Session::get('orderTotal');
              
        
        $order = New Order();
            $order->customer_id = $customer_id;
            $order->shipping_id = $shippingId;
            $order->order_total = $orderTotal;
            $order->save();
            $orderId = $order->order_id;
            Session::put('orderId', $orderId);
            $order_Id=Session::get('orderId');
            
            
         $payment= new payment();
            $payment->order_id=$order_Id;
            $payment->payment_type=$paymentType;
            $payment->save();
            
            
                        
         $orderDetail=new OrderDetail();
            $cartProducts=Cart::content();
            foreach($cartProducts as $cartProduct)
                {
                    $orderDetail->order_id=$orderId;
                    $orderDetail->product_id=$cartProduct->id;
                    $orderDetail->product_name=$cartProduct->name;
                    $orderDetail->product_price=$cartProduct->price;
                    $orderDetail->product_quantity=$cartProduct->qty;
                    $orderDetail->save();     
              }
        
             
        
       

        if ($paymentType == 'CashOnDelivery') {
          //  return 'Under construction CashOnDelivery. ';
              Cart::destroy();
            return redirect('customer/home')->with('massage','Your Order Save successfully');
            
        }
         elseif ($paymentType == 'Paypal' ) {
                Cart::destroy();  
                 return view('frontEnd.checkout.htmlWebsiteStanderdPayment');
        }
         elseif ($paymentType == 'Bkash' ) {
             return 'Under construction bkash. Please use cash on delivery';
        }
       
    
     }
    
    
    
    
    
    
}//end of 
