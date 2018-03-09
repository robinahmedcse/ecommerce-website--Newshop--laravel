<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SubCategory;
use App\Manufacture;
use App\ProductImage;

use DB;


class ProductController extends Controller
{
   
    public function createProduct() {
        
     $all_published_category_id = Category::where('publicationStatus', 1)->get();
     $all_published_manufacture_id = Manufacture::where('publicationStatus', 1)->get();  
     $all_published_sub_category_id = SubCategory::where('publicationStatus', 1)->get();
     
        return view('admin.product.createProduct',['all_published_category_id'=>$all_published_category_id,
    'all_published_manufacture_id'=>$all_published_manufacture_id,
            'all_published_sub_category_id'=>$all_published_sub_category_id]);
    }
    public function storeProduct(Request $request) {
         $product = array();
          $product['product_name'] = $request->product_name; 
          $product['category_id'] = $request->category_id;
          $product['sub_category_id'] = $request->sub_category_id;
          $product['manufacture_id'] = $request->manufacture_id;
          $product['product_price'] = $request->product_price;
          $product['product_quantity'] = $request->product_quantity;
          $product['product_Short_description'] = $request->product_Short_description;
          $product['product_long_dscription'] = $request->product_long_dscription;
          $product['publicationStatus'] = $request->publicationStatus;  
          $get_product_id=DB::table('products')->insertGetId($product);
          $this->ProductImage($request, $get_product_id);
         return redirect('admin/manage-product')->with('message','Product info Save Successfully');  
    }//storeFunction
     protected function ProductImage($request, $get_product_id) {
            $product_id=$get_product_id; 
            for($i=1;$i<=2;$i++){
           $productImage=$request->file('productImage'.$i);
           $name=$productImage->getClientOriginalName();
           $uploadPath='public/productImage/';
           $productImage->move($uploadPath, $name);
           $imaeUrl=$uploadPath.$name;
           $this->saveProductImage($product_id,$imaeUrl,$i); 
        } 
    }//end of function
    protected function saveProductImage($product_id,$imaeUrl,$i) {
            $product_image = array();
            $product_image['product_id']=$product_id;
            $product_image['image_url']=$imaeUrl;
            $product_image['image_label']=$i;
           DB::table('product_images')->insert($product_image);
    }
    
    public function manageProduct() {
          $products=DB::table('products')
                ->join('categories','products.category_id','=', 'categories.category_id')
                ->join('manufactures','products.manufacture_id','=', 'manufactures.manufacture_id')
                ->select('products.*','categories.category_name','manufactures.manufacture_name')
                ->get();
          
        return view('admin.product.manageProduct',['products'=>$products]);
    }
    
     public function viewProduct($id) { 
         $decrypted_id = Crypt::decryptString($id);     
   $productById=DB::table('products')
                ->join('categories','products.category_id','=', 'categories.category_id')
                ->join('manufactures','products.manufacture_id','=', 'manufactures.manufacture_id')
                ->join('sub_categories','products.sub_category_id','=', 'sub_categories.sub_category_id')
                ->select('products.*','categories.category_name','manufactures.manufacture_name','sub_categories.sub_category_name')
                 ->where('products.product_id', $decrypted_id)
                ->first();
        return view('admin.product.viewProduct',['productById'=>$productById]);
    }
    
    
    public function editProduct($id) {
        return 'editProduct '.$id;
    }
            
      public function updateProduct(Request $request) {
        return $request->all();
    }      
            
      public function deleteProduct($id) {
        $decrypted_id = Crypt::decryptString($id);
        
              
        $product = Product::find($decrypted_id);
          $product ->delete();
          return redirect('admin/manage-product')->with('message','Product info delete successfully');  
           
           
        
        
    }
        
    
}//end of class
