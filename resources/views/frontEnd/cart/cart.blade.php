
@extends('frontEnd.master')
@section('mainContent')


<?php 
//echo"<pre>";
//print_r($cartProducts);
//
// 
// 
//exit;

?>
<div class="banner1">
    <div class="container">
        <h3><a href="{{url('/')}}">Home</a> / <span>Checkout</span></h3>
    </div>
</div>
<!--banner-->

<!--content-->
<div class="content">
    <div class="cart-items">
        <div style="text-align: center">
            <h3 class="tex text-center text-danger">{{Session::get('message')}}</h3>
        </div>

        <div class="container">
            <h2>My Shopping Bag</h2>
            <script>$(document).ready(function (c) {
                    $('.close1').on('click', function (c) {
                        $('.cart-header').fadeOut('slow', function (c) {
                            $('.cart-header').remove();
                        });
                    });
                });
            </script>
            
            
            @foreach($cartProducts as $cartProduct)
            
            <div class="cart-header">
<div class="close"> 
                    <a href="{{url('delete-cart/'.$cartProduct->rowId )}}"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
                <div class="cart-sec simpleCart_shelfItem">
                    <div class="cart-item cyc">
                        <img src="{{($cartProduct->options->has('img')? $cartProduct->options->img : '') }}" class="img-responsive" alt="">
                    </div>
                    <div class="cart-item-info">
                        <h2>Product Name: {{$cartProduct->name}}</h2>
                        <ul class="qty">
                             <li><h3>Unit Price : {{$cartProduct->price}}BDT</h3> </li><br>
                        </ul>
                        
                        <br><br>
                        
                        
                         <ul class="qty">
                        {!! Form::open(['url'=>'update-cart','method'=>'POST' ]) !!}
                            <li>
                                <h3>Product Quantity:</h3> 
                                <input type='number' name="qty" class='form-control ' value="{{$cartProduct->qty}}"></input>
                                <input type="hidden" value="{{$cartProduct->rowId}}" name="rowId" class="form-control" >
                            </li>
                            <input type="submit" name="btn" value="Update" class="btn btn-warning">
                            <br>  <br> <br>  
                        {!! Form::close() !!}
                        </ul>
                        
                        
                        <ul class="qty">
                            
                            <li><h3><h3>Price : {{$cartProduct->price * $cartProduct->qty}}BDT</h3></li>
                            
                            <li><h3>Tax : {{ ($cartProduct->price * $cartProduct->qty)*0.15 }}BDT</h3></h3></li>
                           
                        </ul>
                       
                        <div class="delivery">
                            <p>Service Charges : 00.00BDT</p>
                            <span>Delivered in 1-4 Working Day</span>
                            <div class="clearfix"></div>
                        </div>	

                    </div>
                    <div class="clearfix"></div>
                
                </div>
            </div>
            
            @endforeach
        </div>`
    </div>
    <!-- checkout -->
    <div class="contain">
        <div class=""style="width:65%; float:left; margin-top:7%; margin-left: 4%; margin-right:4%;">
            <a href="{{url('/')}}">
                <button class="btn btn-default glyphicon glyphicon-chevron-left">Continue Shopping</button>
            </a>
            
            
            
              <?php 
                            $customerId=Session::get('customerId');
                            $shippingId=Session::get('shippingId');
                            if($customerId == NULL && $shippingId == NULL){
                           ?>
                              <a href="{{url('checkout')}}">
                                  <button class="btn btn-default glyphicon glyphicon-chevron-right pull-right">Go To Checkout</button>
                             </a>
                        
                            <?php } 
                             elseif ($customerId != NULL && $shippingId == NULL) {
                            ?>
                               <a href="{{url('checkout/shipping')}}">
                                  <button class="btn btn-default glyphicon glyphicon-chevron-right pull-right">Go To Checkout</button>
                             </a>
                        <?php                            
                             }elseif ($customerId != NULL && $shippingId != NULL) {
                          ?>
                               <a href="{{url('checkout/payment')}}">
                                  <button class="btn btn-default glyphicon glyphicon-chevron-right pull-right">Go To Checkout</button>
                             </a>
                             <?php   }   ?>
            
            
            
            
            
            
           
        </div> 

    <div class="">
        <table class="table table-bordered col-sm-offset-8" style="width:25%;">
                <tr>
                    <td colspan="2" style="text-align: center">SHOPPING BASKET</td>
                     
                </tr>
                <tr>
                    <td><b>sub-Total-</b></td>
                    <td>{{Cart::subtotal()}}</td>
                </tr>
              
                  <tr>
                    <td><b>Total-Tax-</b></td>
                    <td>{{Cart::tax()}}</td>
                </tr>
                
                  <tr>
                    <td><b>Total-</b></td>
                    <td>{{$total=Cart::total()}}</td>
                </tr>
               <?php Session::put('orderTotal',$total);?>
        </table>
    </div>
   </div>


    
    
    
    
    
</div>





@endsection