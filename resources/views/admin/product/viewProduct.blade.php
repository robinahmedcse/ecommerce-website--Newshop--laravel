@extends('admin.master')
@section('mainContent')
 


<?php 
$productImageById=DB::table('products')
               ->join('product_images','products.product_id','=', 'product_images.product_id')
                ->select('products.*','product_images.*')
                ->select('products.*','product_images.*')
                 ->where('products.product_id', $productById ->product_id)
                ->get();


//             echo '<pre>';
//        print_r($productImageById);
//        exit();
          
?>
<div class='row '>
    <div class="">
        <h2 class="tex text-center text-success">View Product</h2>
    </div> 
    <div class="">
        <h4 class="tex text-center text-danger">{{Session::get('message')}}</h4>
    </div> 
    
  

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-condensed">
            <tr class="headings">
                <th class="column-title"># </th>
                <td class="center ">{{$productById ->product_id}}</td>
            </tr>
            <tr>
                <th class="column-title">Product Name </th>

                <td class="center ">{{$productById ->product_name}}</td>
            </tr> 
            <tr>
                <th class="column-title">Category Name </th>

                <td class="center ">{{$productById ->category_name}}</td>
            </tr>
            
             <tr>
                <th class="column-title">Sub Category Name </th>

                <td class="center ">{{$productById ->sub_category_name}}</td>
            </tr>
            
            <tr>
                <th class="column-title">Manufacture Name </th>
                <td class="center ">{{$productById ->manufacture_name}}</td>
            </tr>
            <tr>
                <th class="column-title">Product Price </th>
                <td class="center ">{{$productById ->product_price}}BDT</td>
            </tr>
            <tr>
                <th class="column-title">Product Quantity </th>
                <td class="center ">{{$productById ->product_quantity}}</td>
            </tr>
               <tr>
                <th class="column-title">Product Short Description </th>
                <td class="center ">{!! $productById ->product_Short_description !!}</td>
            </tr>
               <tr>
                <th class="column-title">Product Long Description </th>
                <td class="center ">{!! $productById ->product_long_dscription !!}</td>
            </tr>
               <tr>
                <th class="column-title">Image </th>
                <td class="center ">
                
                   @foreach( $productImageById as $image)
                    <img src="{{asset($image->image_url)}}" alt="{{$productById ->product_name}}" width="200px">
                    @endforeach
                </td>
            </tr>
            <tr>
                <th class="column-title">Publication Status </th>
                <td class="center ">{{$productById ->publicationStatus == 1?'Published':'UnPublished'}}</td>
            </tr> 
         
                                       
        </table>
    </div>
    
 
</div>    


             
@endsection