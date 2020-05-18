@extends('layer.main')

 @section('conta')

<div class="container" >
  <div class="wrap">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="background-color: darkolivegreen;">
                <div class="card-header" align="center" style="color: white"><b>Please Fill Up The Form Catgory<b></div>

                <div class="card-body">
          <form action="{{route('storebook')}}" method="post" enctype="multipart/form-data">
           @csrf

          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label style="color: white">BOOK TTITLE</label>
              <input type="text" class="form-control" name="book_name" required >
             
            </div>
            <div class="form-group floating-label-form-group controls">
              <label style="color: white">AUTHOR NAME</label>
              <input type="text" class="form-control" name="author_name" required >
             
            </div>
             </div>

             <div class="form-group floating-label-form-group controls">
              <label style="color: white">Catgory</label>
              <select class="form-control" name="catagory_id">
                @foreach($catagory as $row)
              	<option value="{{$row->id}}">{{$row->catagory_name}}</option>
                @endforeach
              </select>
              </div>
             </div>
             
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label style="color: white">Image</label>
              <input type="file" class="form-control" name="image">
            </div>
          </div>
           <div class="control-group">
            <div class="form-group floating-label-form-group controls">
             <label style="color: white">Details</label>
              <textarea rows="3" class="form-control"  name="details" required ></textarea>
            </div>
          </div>
          <br>
          <div class="form-group">
            <button type="submit" class="btn btn-dark btn-lg" style="color: white">Add Book </button>
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