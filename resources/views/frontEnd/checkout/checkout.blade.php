
@extends('frontEnd.master')
@section('mainContent')

      <script>
  
    var xmlHttp=new XMLHttpRequest();
     function ajax_email_check(given_email,objectId){
      //   alert(given_email);
        // alert(objectId);
         
        var sarverPage="ajax/"+given_email; 
        
       //   alert(sarverPage);
        
           xmlHttp.open('$_GET',sarverPage);
           
          xmlHttp.onreadystatechange = function(){
              // alert(xmlHttp.readyState);
             //   alert(xmlHttp.status);
              
               if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
                  document.getElementById(objectId).innerHTML=xmlHttp.responseText;
             }
               
           }//onreadystatechange
        xmlHttp.send(null);
     }//end of function ajax_email_check

</script>
     

<!--header-->
		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Registered</span></h3>
			</div>
		</div>
	<!--banner-->

	<!--content-->
		<div class="content">
                    
				<!--login-->
			<div class="login">
		<div class="main-agileits">
                      <div style="text-align: center">
                        <h3>
                            If you are already registered then <a href="#"><b>Please Click Login</b></a>
                        </h3>
                          <br><br>
                    </div>
				<div class="form-w3agile form1">
					<h3>Register</h3>
					 {!! Form::open(['url'=>'checkout/save-customer','method'=>'POST','class'=>'form-horizontal form-label-left']) !!}
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
                                                        <input  type="text"  name="customer_name" placeholder="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-mail-reply-all" aria-hidden="true"></i>
							<input  type="text"  name="email" placeholder="Email" onblur="ajax_email_check(this.value,'res');" id="email"   required="">
						        
                                                        <div class="clearfix"></div>
                                                       
						</div> 
                                             
						
                                            
                                            
                                            
                                            <div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password"  name="password"  placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input  type="text"  name="phone" placeholder="Phone Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone Number';}" required="">
							<div class="clearfix"></div>
						</div>
                                            
                                            <div class="key">
							<i class="fa fa-home" aria-hidden="true"></i>
							<input  type="text"  name="address" placeholder="Address"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" required="">
							<div class="clearfix"></div>
						</div>
                                            <div class="key">
							<i class="fa fa-circle" aria-hidden="true"></i>
							<input  type="text"  name="thana" placeholder="Thana" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Thana';}" required="">
							<div class="clearfix"></div>
						</div>
                                            <div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text"  name="post_office" placeholder="P.O" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'P.O';}" required="">
							<div class="clearfix"></div>
						</div>
                                            <div class="key">
							<i class="fa fa-plane" aria-hidden="true"></i>
							<input  type="text"  name="district" placeholder="District" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'District';}" required="">
							<div class="clearfix"></div>
						</div>
                                            <div class="key">
							<i class="fa fa-plane" aria-hidden="true"></i>
							<input  type="text"  name="country" placeholder="country" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Country';}" required="">
							<div class="clearfix"></div>
						</div>
                                            
                                            
                                            
						<input type="submit" value="Submit">
					{!! Form::close() !!}
				</div>
				
			</div>
		</div>
				<!--login-->
		</div>
		<!--content-->
                
                
                @endsection