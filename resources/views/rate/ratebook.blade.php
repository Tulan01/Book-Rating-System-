@extends('layer.main-user')
 @section('contain')
    
< <main id="main">

    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2></h2>
          <p></p>
        </div>
 
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="icon-box">
             <img src="{{URL::to($row->image)}}" style="height: 150px; width: 100px;">
              
            </div>
          </div>
           <div class="col-lg-4">
            <hr>
               <h5><a><a>{{$row->title}}</a></a></h5>
               <h6>by {{$row->author}}</h6>
               <p> {{$row->catagory_name}}</p>
              
               
             </div>
           <div class="col-lg-4">
                       <br>
           	   <p>Rate The book</p>
     
               <br>
           
           	 <form action="{{route('storerate')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type = "hidden" name = "post_id" value= "{{$row->id}}">
                            <input type = "hidden" name = "User_id" value= "{{Auth::user()->id}}" >
                            <input type="radio" name="rating" id="rating" value="1">
                            <input type="radio" name="rating" id="rating" value="2">
                            <input type="radio" name="rating" id="rating" value="3">
                            <input type="radio" name="rating" id="rating" value="4">
                            <input type="radio" name="rating" id="rating" value="5">

                            <input type="submit" class="btn btn-success btn-sm" name="submit" value="Rate It">
                             </form>
                            </div>
           </div>
          </div>
   
         
  
     
      </div>

    </section>

  </main>
 
  </div>

  



@endsection