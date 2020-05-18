@extends('layer.main')

 @section('conta')

<div class="container" >
  <div class="wrap">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="background-color: darkolivegreen;">
                <div class="card-header" align="center" style="color: white"><b>Please Fill Up The Form <b></div>

                <div class="card-body">
          <form action="{{URL::to('editbook'.$book->id)}}" method="post" enctype="multipart/form-data">
           @csrf

          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label style="color: white">BOOK TTITLE</label>
              <input type="text" class="form-control" name="book_name" value="{{$book->title}}" >
             
            </div>
            <div class="form-group floating-label-form-group controls">
              <label style="color: white">AUTHOR NAME</label>
              <input type="text" class="form-control" name="author_name" value="{{$book->author}}" >
             
            </div>
             </div>

             <div class="form-group floating-label-form-group controls">
              <label style="color: white">Catgory</label>
              <select class="form-control" name="catagory_id">
                @foreach($post as $row)
                <option value="{{$row->id}}"<?php if($row->id==$book->catagory_id) echo "selected";?> >{{$row->catagory_name}}</option>
                @endforeach
              </select>
              </div>
             </div>
   
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label style="color: white">Image</label>
              <input type="file" class="form-control"  name="image" > 
              <p style="color: white">old image : </p><img src="{{URL::to($book->image)}}" style="height: 100px; width: 70px">
              <input type="hidden" name="old_image" value="{{$book->image}}">
            </div>
          </div>
           <div class="control-group">
            <div class="form-group floating-label-form-group controls">
             <label style="color: white">Details</label>
              <textarea rows="3" class="form-control"  name="details"  >{{$book->details}}</textarea>
            </div>
          </div>
          <br>
          <div class="form-group">
            <button type="submit" class="btn btn-dark btn-lg" style="color: white">Update </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
    
</body> 

@endsection