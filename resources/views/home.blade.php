@extends('layer.main-user')
 @section('contain')
    

  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2></h2>
          <p></p>
        </div>
   @foreach($data as $row)
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="icon-box">
           <img src="{{URL::to($row->image)}}" style="height: 150px; width: 100px;">
              
            </div>
          </div>
           <div class="col-lg-4">
           	  <br>
           	  <br>
               <h5><a>{{$row->title}}</a></h5>
               <h6>by {{$row->author}}</h6>
               <h6>Ratings {{$row->average}}</h6>
               <a href="{{URL::to('viewubook'.$row->id)}}">See more</a>
             </div>
           <div class="col-lg-4">
           	   <br>
           	  
              
           	   <br>
           	  <a href="{{URL::to('ratebook'.$row->id)}}" class="btn btn-success btn-lg"> Rate It </a>
           </div>
          </div>
    @endforeach
         
  
     
      </div>

    </section>

  </main>
 <div class="clearfix">
         <div class="float-right">{{ $data->links() }}</div> 
         </div>
  </div>

   @endsection