

@extends('frontEnd.master')
@section('mainContent')

<div class="content">
      
         <div class="well" style="">
                        <h4 class="tex text-center text-danger">{{Session::get('exception')}}</h4>
                          <br><br>
                    </div>
    
    <!--login-->
    <div class="login">
        <div class="main-agileits">
            <div class="form-w3agile">
                <h3>Login To New Shop</h3>
                {!! Form::open(['url'=>'customer/login-check','method'=>'POST','name'=>'editForm']) !!}
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input  type="text"  name="email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'email';
                                }" required="">
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input  type="password"  name="password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'password';}" required="">
                        <div class="clearfix"></div>
                    </div>
                    <input type="submit" value="Login">
               {!! Form::close() !!}
            </div>
            <div class="forg">
                <a href="#" class="forg-left">Forgot Password</a>
                <a href="{{url('checkout/')}}" class="forg-right">Register</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--login-->
</div>


@endsection
