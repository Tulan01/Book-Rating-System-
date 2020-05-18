@extends('layer.main')

 @section('conta')

<div class="container" >
  <div class="wrap">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="background-color: darkolivegreen;">
                <div class="card-header" style="color: white" align="center"><b>Please Fill Up The Form Catgory<b></div>

                <div class="card-body">
          <form action="{{route('storecatagory')}}" method="post">
           @csrf

          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label style="color: white" >Catagory Name</label>
              <input type="text" class="form-control" name="catagory_name"  >
             
            </div>
            
             
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label style="color: white">Slug</label>
             <input type="text" class="form-control"  name="catagory_slug" >
            </div>
          </div>
          <br>
          <div class="form-group">
            <button type="submit" class="btn btn-dark btn-lg" style="color: white">Add </button>
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