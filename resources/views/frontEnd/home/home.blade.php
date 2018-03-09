
@extends('frontEnd.master')
@section('mainContent')
        <!--banner-->
        <div class="banner-w3">
            <div class="demo-1">            
                <div id="example1" class="core-slider core-slider__carousel example_1">
                    <div class="core-slider_viewport">
                        <div class="core-slider_list">
                            <div class="core-slider_item">
                                <img src="{{asset('public/frontEnd/')}}/images/b1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="core-slider_item">
                                <img src="{{asset('public/frontEnd/')}}/images/b2.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="core-slider_item">
                                <img src="{{asset('public/frontEnd/')}}/images/b3.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="core-slider_item">
                                <img src="{{asset('public/frontEnd/')}}/images/b4.jpg" class="img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="core-slider_nav">
                        <div class="core-slider_arrow core-slider_arrow__right"></div>
                        <div class="core-slider_arrow core-slider_arrow__left"></div>
                    </div>
                    <div class="core-slider_control-nav"></div>
                </div>
            </div>
            <link href="{{asset('public/frontEnd/')}}/css/coreSlider.css" rel="stylesheet" type="text/css">
            <script src="{{asset('public/frontEnd/')}}/js/coreSlider.js"></script>
                            <script>
                $('#example1').coreSlider({
                pauseOnHover: false,
                interval: 3000,
                controlNavEnabled: true
                });

                            </script>

        </div>	
        <!--banner-->
        
   <!--content-->

   
<div class="content" >
            <!--banner-bottom-->
            <div class="ban-bottom-w3l">
                <br><br>
                <div class="container">
                    <div class="col-md-6 ban-bottom">
                        <div class="ban-top">
                            <img src="{{asset('public/frontEnd/')}}/images/p1.jpg" class="img-responsive" alt=""/>
                            <div class="ban-text">
                                <h4>Men’s Clothing</h4>
                            </div>
                            <div class="ban-text2 hvr-sweep-to-top">
                                <h4>50% <span>Off/-</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ban-bottom3">
                        <div class="ban-top">
                            <img src="{{asset('public/frontEnd/')}}/images/p2.jpg" class="img-responsive" alt=""/>
                            <div class="ban-text1">
                                <h4>Women's Clothing</h4>
                            </div>
                        </div>
                        <div class="ban-img">
                            <div class=" ban-bottom1">
                                <div class="ban-top">
                                    <img src="{{asset('public/frontEnd/')}}/images/p3.jpg" class="img-responsive" alt=""/>
                                    <div class="ban-text1">
                                        <h4>T - Shirt</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="ban-bottom2">
                                <div class="ban-top">
                                    <img src="{{asset('public/frontEnd/')}}/images/p4.jpg" class="img-responsive" alt=""/>
                                    <div class="ban-text1">
                                        <h4>Hand Bag</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!--banner-bottom-->
            <!--new-arrivals-->
            <div class="new-arrivals-w3agile">
                <div class="container">
                    <h2 class="tittle">New Arrivals</h2>
           
                    <div class="arrivals-grids">
        @foreach($publishedProducts as $publishedProduct)
          <?php
        $encrypted_product_id = Crypt::encryptString($publishedProduct->product_id);
        ?>
        
                        <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                            <div class="grid-arr">
                                <div  class="grid-arrival">
                                    <figure>		
                                        <a href="{{url('/product-details/'.$encrypted_product_id)}}" class="new-gri" data-toggle="modal" data-target="#myModal4">
                                            <div class="grid-img">
                                                <img  src="{{$publishedProduct->image_url}}" class="img-responsive" alt="">
                                            </div>
                                            <div class="grid-img">
                                                <img  src="{{$publishedProduct->image_url}}" class="img-responsive"  alt=""  >
                                            </div>			
                                        </a>		
                                    </figure>	
                                </div>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="women">
                                    <h6><a href="{{url('/product-details/'.$encrypted_product_id)}}" >{{ $publishedProduct->product_name }}</a></h6>
                                    <span class="size">XL / XXL / S </span>
                                    <p><em class="item_price">{{ $publishedProduct->product_price }}BDT</em></p>
                                    <a href="{{url('/product-details/'.$encrypted_product_id)}}" data-text="Product Details" class="my-cart-b" >Product Details</a>
                                </div>
                            </div>
                        </div>
  @endforeach
                       
                    </div>
                     
                </div>
            </div>
            <!--new-arrivals-->
            <!--accessories-->
            <div class="accessories-w3l">
                <div class="container">
                    <h3 class="tittle">20% Discount on</h3>
                    <span>TRENDING DESIGNS</span>
                    <div class="button">
                        <a href="#" class="button1"> Shop Now</a>
                        <a href="#" class="button1"> Quick View</a>
                    </div>
                </div>
            </div>
            <!--accessories-->
            <!--Products-->
    
            <!--Products-->
        
 
            <!--new-arrivals-->
        </div>
   
   
        <!--content-->
@endsection