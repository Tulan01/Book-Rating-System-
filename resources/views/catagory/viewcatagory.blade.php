@extends('layer.main')

 @section('conta')

 <div class="container" >
  <div class="wrap">
  	<div class="row justify-content-center">
      <div class="col-md-8">
  
  	<table class="table table-responsive">

  	<tr>
          <td>Catagory name </td>
          <td>Slug</td>
          <td>Action</td>
        </tr>
     @foreach($catagory as $row)
   <tr>
   	<th>{{$row->catagory_name}}</th>
   	<td>{{$row->catagory_slug}}</td>	 
    <td>  <a href="{{URL::to('editcatagory'.$row->id)}}" class="btn btn-primary">Edit</a> 
          <a href="{{URL::to('deletecatagory'.$row->id)}}" class="btn btn-primary">Delete</a>
     </td>
       </tr>
  @endforeach
</table>
 </div>
  </div>
  </div>
  </div>




 @endsection