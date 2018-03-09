<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Product;
use App\ProductImage;

use DB;

class WelcomeController extends Controller
{
   
    public function home() {
      $publishedProducts=DB::table('products')
            ->join('product_images', 'products.product_id', '=', 'product_images.product_id')
            ->where('products.publicationStatus', 1)
            ->where('product_images.image_label', 1)
            ->select('products.*', 'product_images.*')
            ->get();
           return view('frontEnd.home.home',['publishedProducts'=>$publishedProducts]);
    }
    
   
     public function categoryDetails($id) {
           $decrypted_id = Crypt::decryptString($id);
        
           $publishedCategoryProducts=DB::table('products')
            ->join('product_images', 'products.product_id', '=', 'product_images.product_id')
            ->join('categories', 'products.category_id', '=', 'categories.category_id')       
            ->where('products.category_id', $decrypted_id)
            ->where('products.publicationStatus', 1)
            ->where('product_images.image_label', 1)
            ->select('products.*', 'product_images.*','categories.category_name')
            ->get(); 
        return view('frontEnd.category.categoryContent',['publishedCategoryProducts'=>$publishedCategoryProducts]);
    }
    
    
 
     public function productDetails($id) {
         
          $decrypted_id = Crypt::decryptString($id);
              $productById=Product::where('product_id',$decrypted_id)->first();       
        return view('frontEnd.product.productDetails',['productById'=>$productById]);
    }
 
    
    
    
    
}
