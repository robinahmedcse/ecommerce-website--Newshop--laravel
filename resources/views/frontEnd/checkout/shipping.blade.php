
@extends('frontEnd.master')
@section('mainContent')




<!--header-->
		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Shipping Information</span></h3>
			</div>
		</div>
	<!--banner-->

	<!--content-->
		<div class="content">
                    
                    <div  <div class="well" style="">
                        <h4> you have to give us shipping information to complete your valuable order.
                            If your billing information and shipping Information are same then just press on 
                            Save Shipping Info Button 
                        </h4>
                          <br><br>
                    </div>
                    
				<!--login-->
			<div class="login">
		<div class="main-agileits">
                      
				<div class="form-w3agile form1">
					<h3>Shipping Information</h3>
					 {!! Form::open(['url'=>'checkout/save-shipping','method'=>'POST','class'=>'form-horizontal form-label-left']) !!}
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
                                                        <input  type="text"  name="name" placeholder="Username" value="{{$customerById->customer_name}}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-mail-reply-all" aria-hidden="true"></i>
							<input  type="text"  name="email" placeholder="Email"  value="{{$customerById->email}}"  required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input  type="text"  name="phone" placeholder="Phone Number" value="{{$customerById->phone}}"  required="">
							<div class="clearfix"></div>
						</div>
                                            
                                            <div class="key">
							<i class="fa fa-home" aria-hidden="true"></i>
                                                        <input  type="text"  name="address" placeholder="Address"  value="{{$customerById->address}}"  required="">
							<div class="clearfix"></div>
						</div>
                                            <div class="key">
							<i class="fa fa-circle" aria-hidden="true"></i>
							<input  type="text"  name="thana" placeholder="Thana" value="{{$customerById->thana}}"  required="">
							<div class="clearfix"></div>
						</div>
                                            <div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text"  name="post_office" placeholder="P.O" value="{{$customerById->post_office}}"  required="">
							<div class="clearfix"></div>
						</div>
                                            <div class="key">
							<i class="fa fa-plane" aria-hidden="true"></i>
							<input  type="text"  name="district" placeholder="District" value="{{$customerById->district}}" required="">
							<div class="clearfix"></div>
						</div>
                                         
                                                  <div class="key">
							<i class="fa fa-plane" aria-hidden="true"></i>
							<input  type="text"  name="country" placeholder="country"value="{{$customerById->country}}" required="">
							<div class="clearfix"></div>
						</div>
                                            
                                            
                                            
						<input type="submit" value="Save Shipping Info">
				  {!! Form::close() !!}
				</div>
				
			</div>
		</div>
				<!--login-->
		</div>
		<!--content-->
                
                
                @endsection