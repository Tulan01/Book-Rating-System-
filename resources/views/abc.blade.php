
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
             <img src="{{URL::to($data2->image)}}" style="height: 150px; width: 100px;">
              
            </div>
          </div>
           <div class="col-lg-4">
               <h5><a><a>{{$data2->title}}</a></a></h5>
               <h6>by {{$data2->author}}</h6>
               <p> {{$data2->details}}</p>
             </div>
           <div class="col-lg-4">
           	   <h4>The Rating</h4>
           	   <h5><b>{{$avg}} / 5 <b><h5>
           	      
           </div>
          </div>
           	   
           	   
   
         
  
     
      </div>

    </section>

  </main>
 
  </div>

  



@endsection