<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Manufacture;
use App\Product;
use App\Order;
use App\Customer;
use App\Payment;
use DB;

class OrderController extends Controller
{
   
        public function viewAllOrder() {

     //   $orders = Order::all();


       $orders= DB::table('orders')
                ->join('customers', 'customers.customer_id', '=', 'orders.customer_id')
                ->join('payments', 'payments.order_id', '=', 'orders.order_id')
                ->select('customers.customer_name', 'orders.*','payments.payment_type','payments.payment_status')
                ->get();

//        echo '<pre>';
//        print_r($orders);
//        exit();
        return view('admin.order.manageOrder',['orders'=>$orders]);
    }
    
    
    
    
}
