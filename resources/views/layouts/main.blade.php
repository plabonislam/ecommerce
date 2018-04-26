<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title','RangpurHutshop')
    </title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


</head>
<body>




    <div  class="top-bar">
        <div style="color:white" class="top-bar-left">
            <h4 class="brand-title">
                <a href="{{route('home')}}">
                    <i class="fa fa-home fa-lg" aria-hidden="true">
                    </i>
                    Rangpur-Hut
                </a>
            </h4>

        </div>

        <div class="top-bar-right">
            <ol class="menu">
                
                 
            
                      

                <li>
                    <a href="{{route('cart.index')}}">
                        <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                        </i>
                        CART
                        <span class="alert badge">
                            {{ Cart::count()}}
                        </span>
                    </a>
                </li>
            </ol>
        </div>


    </div>


</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#"></a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
    

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Menz Collection
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('tshirts')}}">Tshirt</a>
        <a class="dropdown-item" href="{{route('punjabi')}}">Punjabi</a>
        <a class="dropdown-item" href="{{route('shirts')}}">shirt</a>
         <a class="dropdown-item" href="{{route('Pent')}}">Pant</a>
         <a class="dropdown-item" href="{{route('other')}}">Other</a>

         <a class="dropdown-item" href="{{route('all')}}">ALL Men</a>
      </div>
    </li>


    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Ladies Collection
      </a>
      <div class="dropdown-menu">
       
        
        <a class="dropdown-item" href="{{route('Sharee')}}">Dress</a>
      </div>
    </li>
    @if(!Auth::check())

<li class="nav-item">
      <a class="nav-link" href="{{route('login')}}">log in</a>
    </li>
   @endif 
    @if(Auth::check())

<li class="nav-item">
      <a class="nav-link" href="{{route('logout')}}">log out</a>
    </li>
   @endif

  </ul>
</nav>
@yield('content')

<footer class="footer">

  <div class="row full-width">
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-laptop"></i>
      <p></p>
  </div>
  <div class="small-12 medium-4 large-4 columns">
      <i class="fi-html5"></i>
      <h2>contact</h2>
      <h4>phone 01780722970</h4>
      <h4>email zim.csbrur@gmail.com</h4>
      <p></p>
  </div>

  <div class="small-6 medium-4 large-4 columns">
      <h4>Follow Us</h4>
      <ul class="footer-links">

        <li> <h5><a href="https://m.facebook.com/rangpurhut/">Facebook</a></h5></li>
        
        <ul>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="dist/js/vendor/jquery.js"></script>
<script src="dist/js/app.js"></script>

</body>
</html>
