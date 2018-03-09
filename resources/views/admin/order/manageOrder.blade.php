@extends('admin.master')
@section('mainContent')
 
<div class='row '>
    <div class="">
        <h2 class="tex text-center text-success">Manage Order</h2>
    </div> 
    <div class="">
        <h4 class="tex text-center text-danger">{{Session::get('message')}}</h4>
    </div> 
    
  
 
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-condensed">
           
            <tr class="headings">
                <th class="column-title"># </th>
                <th class="column-title">Customer Name  </th>
              <th class="column-title">Order Total </th>
                <th class="column-title">Order Status </th>
                <th class="column-title"> Payment Type </th>
                <th class="column-title">Payment Status </th>
                <th class="column-title">Action </th>
            
            </tr>
                 @foreach($orders as $order)
                 <tr class="even pointer">
                     <td class="center ">{{$order ->order_id}}</td>
                     <td class="center ">{{$order ->customer_name}}</td>
                     <td class="center ">{{$order ->order_total}}</td>
                     <td class="center ">{{$order ->order_status}}</td>
                     <td class="center ">{{$order ->payment_type}}</td>
                     <td class="center ">{{$order ->payment_status}}</td>
                      <td>
                         <a href="{{url('admin/single-view-order/'.$order ->order_id)}}" class="btn btn-success">
                             <span class="glyphicon glyphicon-zoom-in"></span>
                         </a> 
                         
                         <a href="{{url('admin/delete-order/'.$order ->order_id)}}" class="btn btn-danger" onclick="return one_delete();">
                             <span class="glyphicon glyphicon-trash"></span>
                         </a>
                         
                         
                     </td> 
                 </tr>
                 
                   
                 
                @endforeach
        </table>
    </div>
    
 
</div>    


             
@endsection