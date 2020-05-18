@extends('layer.main')
 @section('conta')

<div class="container" >
  <div class="wrap">

    @foreach($book as $row)
    <div class="row">

     <div class="col-md-2">
        <div class="card">
          <div class="card-body">
           <img src="{{URL::to($row->image)}}" style="height: 150px; width: 100px;">
          </div>
        </div>
      </div>

      <div class="col-md-7">
       <div class="post">
          <div class="card-body">
            <h4>{{$row->title}}</h4>
            <h5> by {{$row->author}}</h5>
            <h5>{{$row->catagory_name}}</h5>
            <p class="post-meta">
            <a href="{{URL::to('viewpost'.$row->id)}}"> Show More </a>
            </p>
          </div>
        </div>
      </div>

     <div class="col-md-3">
    <a href="{{URL::to('updatepost'.$row->id)}}" class="btn btn-success"> Update </a>
    <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal"> Delete </button>
   
      </div>
 </div>
 @endforeach
 <div class="clearfix">
         <div class="float-right">{{ $book->links() }}</div> 
         </div>
  </div>
  </div>

  </div>
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure ! Want to delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      
        </button>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{URL::to('deletepost'.$row->id)}}" type="button" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>      

@endsection
