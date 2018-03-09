@extends('admin.master')
@section('mainContent')

<div class='row '>
    <div class="">
        <h2 class="tex text-center text-success">Manage Manufacture</h2>
    </div> 
    <div class="">
        <h4 class="tex text-center text-danger">{{Session::get('message')}}</h4>
    </div> 
    
  

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-condensed">
           
                <tr class="headings">
                    <th class="column-title"># </th>
                    <th class="column-title">Manufacture Name </th>
                     <th class="column-title">Manufacture Description </th>
                    <th class="column-title">Publication Status </th>
                    <th class="column-title">Action</th>
                </tr>
                
         @foreach($manufactures as $manufacture)
                <tr class="even pointer">
                     <td class="center ">{{$manufacture ->manufacture_id}}</td>
                    <td class="center ">{{$manufacture ->manufacture_name}}</td>
                     <td class="center ">{{$manufacture ->manufacture_description}}</td>
                     <td class="center ">{{$manufacture ->publicationStatus == 1?'Published':'UnPublished'}}</td>
                     <td>
                         
                         
                         
                         <a href="{{url('admin/edit-manufacture/'.$manufacture ->manufacture_id)}}" class="btn btn-success">
                             <span class="glyphicon glyphicon-edit"></span>
                         </a> 
                         
                         <a href="{{url('admin/delete-manufacture/'.$manufacture ->manufacture_id)}}" class="btn btn-danger">
                             <span class="glyphicon glyphicon-trash"></span>
                         </a>
                         
                         
                     </td>  
                </tr>
                @endforeach
                                     
        </table>
    </div>
    
 
</div>    


             
@endsection