@extends('admin.master')

@section('title')
Manage Category | Admin Panel
@endsection

@section('mainContent')
<?php 
  
//   echo '<pre>';
//   print_r($categories);
//   exit();
 
?>
 
<div class='row '>
    <div class="">
        <h2 class="tex text-center text-success">Manage Category</h2>
    </div> 
    <div class="">
        <h4 class="tex text-center text-danger">{{Session::get('message')}}</h4>
    </div> 
    
  

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-condensed">
           
                <tr class="headings">
                    <th class="column-title"># </th>
                    <th class="column-title">Category Name </th>
                     <th class="column-title">Category Description </th>
                    <th class="column-title">Publication Status </th>
                    <th class="column-title">Action</th>
                </tr>
             @foreach($categories as $category)
                <tr class="even pointer">
                     <td class="center ">{{$category ->category_id}}</td>
                    <td class="center ">{{$category ->category_name}}</td>
                     <td class="center ">{{$category ->category_description}}</td>
                     <td class="center ">{{$category ->publicationStatus == 1?'Published':'UnPublished'}}</td>
                     <td>
                         <a href="{{url('admin/edit-category/'.$category ->category_id)}}" class="btn btn-success">
                             <span class="glyphicon glyphicon-edit"></span>
                         </a> 
                         
                         <a href="{{url('admin/delete-category/'.$category -><span class="glyphicon glyphicon-edit"></span>category_id)}}" class="btn btn-danger" onclick="return one_delete();">
                             <span class="glyphicon glyphicon-trash"></span>
                         </a>
                         
                         
                     </td>  
                     @endforeach
                </tr>
                                       
        </table>
    </div>
    
 
</div>    


             
@endsection