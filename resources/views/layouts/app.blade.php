<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
          
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
            
                <!-- CSRF Token -->
                <meta name="csrf-token" content="{{ csrf_token() }}">
            
                <title>{{ config('app.name', 'Support & Fynd') }}</title>

                <!-- Scripts -->
                <script src="{{ asset('js/app.js') }}" defer></script>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
                  
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
                
                <!-- Fonts -->
                <link rel="dns-prefetch" href="//fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
                  
                <!-- Styles -->
                <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
                <link href="{{ asset('css/style.css') }}" rel="stylesheet">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
                <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic|Nunito|Roboto+Mono|Slabo+27px|Thasadith|Ubuntu" rel="stylesheet"> 
                <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet"> 

                <style>
                  .chat {
                    list-style: none;
                    margin: 0;
                    padding: 0;
                  }
                
                  .chat li {
                    margin-bottom: 10px;
                    padding-bottom: 5px;
                    border-bottom: 1px dotted #B3A9A9;
                  }
                
                  .chat li .chat-body p {
                    margin: 0;
                    color: #777777;
                  }
                
                  .panel-body {
                    overflow-y: scroll;
                    height: 350px;
                  }
                
                  ::-webkit-scrollbar-track {
                    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                    background-color: #F5F5F5;
                  }
                
                  ::-webkit-scrollbar {
                    width: 12px;
                    background-color: #F5F5F5;
                  }
                
                  ::-webkit-scrollbar-thumb {
                    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
                    background-color: #555;
                  }
              
                  .btn.btn-danger{
                    width:108px;
                    height: 46px;

                  }

                  .navbarbrand{
                    height: unset !important;
                  }
                  
                </style>
          </head>
<body>
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style='background-color:#000000'>
            <div class="container" >
                <a class="navbarbrand" href="{{ url('/') }}" style='color:#FFFFFF' style=""> 
                  Support & Fynd
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link"href="/ads" style='color:#FFFFFF'>All Ads</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"href="/online" style='color:#FFFFFF'>Online Help</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"href="/contactus" style='color:#FFFFFF'>Contact Us</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link"href="/about" style='color:#FFFFFF'>About Us</a>
                      </li>

                        

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto navbar-right">
                        <!-- Authentication Links -->
                        <a href="/postads">
                          <button type="button" class="btn btn-danger">Post Your Ad</button>
                          </a>
                        
                          <br><br>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style='color:#FFFFFF'>{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style='color:#FFFFFF'>{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" style='color:#FFFFFF' role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style='background-color:#000000'>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style='color:#FFFFFF'>
                                        {{ __('Logout') }}
                                    </a>

                                    <a class="dropdown-item" href="/profileupdate" style='color:#FFFFFF'>
                                      Profile
                                   </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

  
      <!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4"style='background-color:#000000'>

    <!-- Footer Links -->
    <div class="container text-center text-md-left">
  
      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-6 col-xl-6 mx-auto mt-6" style='color:#FFFFFF'>
            <h6 class="text-uppercase mb-4 font-weight-bold">Support & Fynd</h6>
            <p align="justify">This website helps you to find and require services from different types of professionals and non-professionals. Every information you are searching for on required professions in Sri Lanka is located in one convenient place. You can sign in to the system and get contact details to directly contact the required profession for services. 
  
               <br> 
              
              Support & fynd also offer professionals and non-professionals to promote themselves by giving their experience and provide services for the people. 
              
               </p>
          </div>
        <!-- Grid column -->

  
        <hr class="w-100 clearfix d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold" style='color:#FFFFFF'>Useful links</h6>
          <p>
            <a href="http://127.0.0.1:8000/profileupdate">Your Account</a>
          </p>
          <p>
            <a href="http://127.0.0.1:8000/ads">All ads</a>
          </p>
          <p>
            <a href="http://127.0.0.1:8000/contactus">Contact Us</a>
          </p>
          <p>
            <a href="http://127.0.0.1:8000/online">Help</a>
          </p>
        </div>
  
        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3" style='color:#FFFFFF'>
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p>
            <i class="fa fa-home" aria-hidden="true"></i> No:4,Cross Rd,Colombo,Sri lanka.</p>
          <p>
            <i class="fa fa-envelope" aria-hidden="true"></i> supportfynd@gmail.com</p>
          <p>
            <i class="fa fa-phone" aria-hidden="true"></i> + 94117 77 1979 </p>
          <p>
            <i class="fa fa-fax" aria-hidden="true"></i> + 94197 33 3999</p>
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Footer links -->
  
      <hr>
  
      <!-- Grid row -->
      <div class="row d-flex align-items-center">
  
        <!-- Grid column -->
        <div class="col-md-7 col-lg-8">
  
          <!--Copyright-->
          <p class="text-center text-md-left" style='color:#FFFFFF'>© 2019 Copyright
            </a>
          </p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0">
  
          <!-- Social buttons -->
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <a href="https://www.facebook.com/">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <a href="https://twitter.com/login">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <a href="https://accounts.google.com/signin/v2/identifier?passive=1209600&continue=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&followup=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                  <i class="fa fa-google-plus" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <a href="https://www.linkedin.com/uas/login">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
  </footer>
  <!-- Footer -->
  
  <script src="{{'/js/jquery-3.3.1.min.js'}}" ></script>
  <script src="js/user.js"></script>
</body>
</html>
