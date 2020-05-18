
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('exx/toastr/toastr.min.css')}}">


<!-- navbar -->

<body style="background-color: ivory">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{route('admin.register')}}">Add Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " href="{{route('addbook')}}">Add Book <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
         <a class="nav-link " href="{{route('addcatagory')}}">Add Catagory <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
         <a class="nav-link " href="{{route('viewcatagory')}}">View All Catagory <span class="sr-only">(current)</span></a>
      </li>
      </li>
    </ul>
    <ul>
    <li class="nav-item dropdown">
       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white">
        {{ Auth::user()->name }} <span class="caret"></span></a>
           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                        </div>
                </li>
            </ul>
  </div>
</nav>
<div class="container"> 
 @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
      @endif
</div>
<hr>


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif












@yield('conta')



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>





  <script src="{{asset('exx/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{[asset('exx/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('exx/toastr/toastr.min.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
  <!-- Custom scripts for this template -->
  <script src="{{asset('exx/js/clean-blog.min.js')}}"></script>
  <script>
  @if(Session::has('massage'))
    var type="{{Session::get('alert-type','info')}}"
      switch(type){
           case 'info':
                toastr.info("{{Session::get('massage')}}");
                break;
           case 'success':
                toastr.info("{{Session::get('massage')}}");
                break;
           case 'warning':
                break;
           case 'error':
                toastr.info("{{Session::get('massage')}}");
                break;
                   } 
     @endif
</script>