<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use DB;


class CartController extends Controller
{

    public function addToCart(Request $request) {
       
        $product_id= $request->product_id;
        
        $product_info=DB::table('products')
            ->join('product_images', 'products.product_id', '=', 'product_images.product_id')
            ->where('products.product_id', $product_id)
            ->where('products.publicationStatus', 1)
            ->where('product_images.image_label', 1)
            ->select('products.product_name','products.product_price', 'product_images.image_url')
            ->first(); 
        
          Cart::add([
           'id'=>$product_id,
             'name'=>$product_info->product_name,
              'price'=>$product_info->product_price,
            'qty'=> $request->qty,
                  'options' =>['img' =>$product_info->image_url]
        ]);
        
         return redirect('show-cart');
    }
    
     public function showCart() {    
       $cartProducts=Cart::content();
       return view('frontEnd.cart.cart',['cartProducts'=>$cartProducts]);
       
        }
        
        
             public function updateToCart(Request $request) {
                   $rowId=$request->rowId;
                    $qty=$request->qty;
                    Cart::update($rowId,$qty);
                       return redirect('show-cart')->with('message','Product Quantity Update Successfully'); 
          }
          
         public function deleteCart($id) {
         Cart::remove($id);
        return redirect('show-cart');
      }
 
        
    
    
}//end of class
