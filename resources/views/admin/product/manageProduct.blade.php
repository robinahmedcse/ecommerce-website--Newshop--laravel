@extends('admin.master')
@section('mainContent')
 
<div class='row '>
    <div class="">
        <h2 class="tex text-center text-success">Manage Product</h2>
    </div> 
    <div class="">
        <h4 class="tex text-center text-danger">{{Session::get('message')}}</h4>
    </div> 
    
  

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-condensed">
           
            <tr class="headings">
                <th class="column-title"># </th>
                <th class="column-title">Product Name </th>
              <th class="column-title">Category Name </th>
                <th class="column-title">Manufacture Name </th>
                <th class="column-title">Product Price </th>
                <th class="column-title">Product Quantity </th>

                <th class="column-title">Publication Status </th>
                <th class="column-title">Action</th>
            </tr>
                 @foreach($products as $product)
                 <tr class="even pointer">
                     <td class="center ">{{$product ->product_id}}</td>
                     <td class="center ">{{$product ->product_name}}</td>
                     <td class="center ">{{$product ->category_name}}</td>
                      <td class="center ">{{$product ->manufacture_name}}</td>
                     <td class="center ">{{$product ->product_price}}</td>
                     <td class="center ">{{$product ->product_quantity}}</td>
                   
                     <td class="center ">{{$product ->publicationStatus == 1?'Published':'UnPublished'}}</td>
                     <td>
                         
                        
                         <?php 
                         $encrypted_product_id= Crypt::encryptString($product ->product_id);
                         ?>
                         
                          <a href="{{url('admin/view-product/'.$encrypted_product_id)}}" class="btn btn-success">
                             <span class="glyphicon glyphicon-zoom-in"></span>
                         </a> 
                         
                         <a href="{{url('admin/edit-product/'.$encrypted_product_id)}}" class="btn btn-success">
                             <span class="glyphicon glyphicon-edit"></span>
                         </a> 

                         <a href="{{url('admin/delete-product/'.$encrypted_product_id)}}" class="btn btn-danger">
                             <span class="glyphicon glyphicon-trash"></span>
                         </a>


                     </td>  
                 </tr>
                                        @endforeach
        </table>
    </div>
    
 
</div>    


             
@endsection