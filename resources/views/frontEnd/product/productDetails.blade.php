
@extends('frontEnd.master')
@section('mainContent')

<?php 

$get_product_id=$productById->product_id;
//echo $get_product_id;
$encrypted_product_id= Crypt::encryptString($get_product_id);
?>

<!--banner-->
<div class="banner1">
    <div class="container">
        <h3><a href="index.html">Home</a> / <span>Single</span></h3>
    </div>
</div>
<!--banner-->

<!--content-->
<div class="content">
    <!--single-->
    <div class="single-wl3">
        <div class="container">
            <div class="single-grids">
                <div class="col-md-9 single-grid">
                    <div clas="single-top">
                       
                        <div class="single-left">
                            <div class="flexslider">
                                <ul class="slides">
                                   
                                    <?php
                                    $images = DB::table('product_images')
                                            ->where('product_id', $get_product_id)
                                            ->select('product_images.*')
                                            ->get();

                                    ?>
                                    
                                     @foreach($images as $image)
                                    <li data-thumb="../{{$image->image_url}}">
                                        <div class="thumb-image"> <img src="../{{$image->image_url}}" data-imagezoom="true" class="img-responsive"> </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        
                        <div class="single-right simpleCart_shelfItem">
                            <h4>{{$productById->product_name}}</h4>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <p class="price item_price">{{$productById->product_price}}BDT</p>
                            <div class="description">
                                <p><span>Quick Overview :</span>{{$productById->product_Short_description}}</p>
                            </div>
                            
                            <div class="description">
                                <p><span>Availability :</span>
                                
                                @if($productById->product_quantity>0)
                                  In Stock
                                  @elseif($productById->product_quantity<5)
                                Limited(Hurry Up)
   
                                @else
                                 Out Of Stock 
                                 @endif
                                </p>
                            </div>
                            <div class="color-quality">
                                {!! Form::open(['url'=>'add-to-cart','method'=>'POST' ]) !!}
                                <input type='hidden' name="product_id" value='{{$productById->product_id}}' class='form-control ' ></input>
                                <h6>Quality :</h6>
                                
                                <div class="quantity"> 
                                    <div class="quantity-select col-md-4">                           
                                        <input type='text' name="qty" class='form-control' value="1"></input>
                                    </div>
                                </div>
                            </div>
                           
                            </div>
                            <div class="women">
                                 <span class="size">XL / XXL / S </span>
                                  <button class="my-cart-b item_add">Add To Cart</button>                             
                            </div>
                            {!! Form::close() !!}
                            
                            
                            
                            <div class="social-icon">
                                <a href="#"><i class="icon"></i></a>
                                <a href="#"><i class="icon1"></i></a>
                                <a href="#"><i class="icon2"></i></a>
                                <a href="#"><i class="icon3"></i></a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
               
                <div class="clearfix"> </div>
            </div>
            <!--Product Description-->
            <div class="product-w3agile">
                <h3 class="tittle1">Product Description</h3>
                <div class="product-grids">
                    <div class="col-md-4 product-grid">
                    
                        <img class="img-responsive " src="{{asset('public/frontEnd/')}}/images/woo2.jpg" alt="">
                    </div>
                    <div class="col-md-8 product-grid1">
                        <div class="tab-wl3">
                            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
                                    <li role="presentation"><a href="#reviews" role="tab" id="reviews-tab" data-toggle="tab" aria-controls="reviews">Reviews (1)</a></li>

                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    
                                    
                                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                        <div class="descr">
                                            <h4>Suspendisse laoreet, augue vel mattis </h4>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                            
                                        </div>
                                    </div>
                                    
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="reviews" aria-labelledby="reviews-tab">
                                        <div class="descr">
                                            <div class="reviews-top">
                                                <div class="reviews-left">
                                                    <img src="i{{asset('public/frontEnd/')}}/mages/men3.jpg" alt=" " class="img-responsive">
                                                </div>
                                                <div class="reviews-right">
                                                    <ul>
                                                        <li><a href="#">Admin</a></li>
                                                        <li><a href="#"><i class="glyphicon glyphicon-share" aria-hidden="true"></i>Reply</a></li>
                                                    </ul>
                                                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit.</p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="reviews-bottom">
                                                <h4>Add Reviews</h4>
                                                <p>Your email address will not be published. Required fields are marked *</p>
                                                <p>Your Rating</p>
                                                <div class="block">
                                                    <div class="starbox small ghosting"><div class="positioner"><div class="stars"><div class="ghost" style="width: 42.5px; display: none;"></div><div class="colorbar" style="width: 42.5px;"></div><div class="star_holder"><div class="star star-0"></div><div class="star star-1"></div><div class="star star-2"></div><div class="star star-3"></div><div class="star star-4"></div></div></div></div></div>
                                                </div>
                                                <form action="#" method="post">
                                                    <label>Your Review </label>
                                                    <textarea type="text" Name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                                                                            this.value = 'Message...';
                                                                                                                                        }" required="">Message...</textarea>
                                                    <div class="row">
                                                        <div class="col-md-6 row-grid">
                                                            <label>Name</label>
                                                            <input type="text" value="Name" Name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                                                                                            this.value = 'Name';}" required="">
                                                        </div>
                                                        <div class="col-md-6 row-grid">
                                                            <label>Email</label>
                                                            <input type="email" value="Email" Name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                                                                                            this.value = 'Email';}" required="">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <input type="submit" value="SEND">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="custom" aria-labelledby="custom-tab">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!--Product Description-->
        </div>
    </div>
    <!--single-->



    @endsection