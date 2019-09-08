<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Support & Fynd</title>

         <!-- Scripts -->
         <script src="{{ asset('js/app.js') }}" defer></script>
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
           
         <!-- Fonts -->
         <link rel="dns-prefetch" href="//fonts.gstatic.com">
         <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
           
         <!-- Styles -->
         <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
         <link href="{{ asset('css/style.css') }}" rel="stylesheet">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
         <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic|Nunito|Roboto+Mono|Slabo+27px|Thasadith|Ubuntu" rel="stylesheet"> 

        
       
    </head>
        <body style='background-color:#22223a'>

          <div class="container-fluid">
            <div class="row">
                <div class="">
                  {{-- corrected style --}}
                        <div  id="carouselExampleIndicators" style="" style=""class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="12"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="14"></li>
                                </ol>
                                
                                    {{-- corrected style --}}
                                <div  style="height: 645px" class="carousel-inner">
                                  <div class="carousel-item active">
                                  <img class="d-block w-100" src="{{asset('images/slideshow/0.jpg')}}" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('images/slideshow/1.jpg')}}" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('images/slideshow/2.jpg')}}" alt="Third slide">
                                    </div>
                                  <div class="carousel-item">
                                  <img class="d-block w-100" src="{{asset('images/slideshow/3.jpg')}}" alt="Third slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('images/slideshow/4.jpg')}}" alt="Third slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('images/slideshow/5.jpg')}}" alt="Third slide">
                                  </div>
                                  <div class="carousel-item">
                                      <img class="d-block w-100" src="{{asset('images/slideshow/6.jpg')}}" alt="Third slide">
                                  </div>
                                  <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/slideshow/7.jpg')}}" alt="Third slide">
                                  </div>
                                  <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/slideshow/8.jpg')}}" alt="Third slide">
                                   </div>
                                   <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/slideshow/9.jpg')}}" alt="Third slide">
                                   </div>
                                   <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/slideshow/10.jpg')}}" alt="Third slide">
                                   </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/slideshow/11.jpg')}}" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/slideshow/12.jpg')}}" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100" src="{{asset('images/slideshow/14.jpg')}}" alt="Third slide">
                                  </div>
                                                    
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                                <div class="card-img-overlay" style="top:68px">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-12" style="margin:0 auto">
                                                <div class="card" style="opacity:0.7;width: 470px;margin: 0 auto;" >

                                                    <h1 class="font-weight-bold text-center" style="color:#22223a">Support & Fynd </h1>
                                                    <div class="card-body" style="width:455px;margin: 0 auto;">
                                                        <form method="POST" action="{{ route('login') }}">
                                                            @csrf
                                                            <a href="/ads" >
                                                            <button type="button" class="btn btn-danger btn-lg btn-block">All Ads</button>
                                                            </a>
                                                            <br>
                                                            <br>
                                                            <div class="form-group row">
                                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                    
                                                                <div class="col-md-6">
                                                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    
                                                                    @if ($errors->has('email'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                    
                                                            <div class="form-group row">
                                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                    
                                                                <div class="col-md-6">
                                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    
                                                                    @if ($errors->has('password'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                    
                                                            <div class="form-group row">
                                                                <div class="col-md-6 offset-md-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    
                                                                        <label class="form-check-label" for="remember">
                                                                            {{ __('Remember Me') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                    
                                                            <div class="form-group row mb-0">
                                                                <div class="col-md-8 offset-md-4">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        {{ __('Login') }}
                                                                    </button>
                                                                    <br>
                                    
                                                                    @if (Route::has('password.request'))
                                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                            {{ __('Forgot Your Password?') }}
                                                                        </a>
                                                                        <br>
                                                                        <a href="/register">
                                                                        <button type="button" href="{{ route('register') }}" class="btn btn-primary">
                                                                            {{_('Register')}}
                                                                        </button>
                                                                         </a>
                                                                        <br><br>
                                                                               
                                                                        
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                   
                                    </div>
                                
                              </div>
                            
                </div>

                
            </div>
          </div>
              <br>
            <div style='color:#FFFFFF'>
              <h1 class="font-weight-bold text-center">Our Mission</h1>
              <p class="font text-center">To connect customers with trusted professionals & Non-professionals in their local area. When you need a local top-rated we'll find them for you for free.</p>
            </div>
              <br><br>
            <div class="container" style='color:#FFFFFF'>
              <div class="row">
                  <div class="col-sm-4">
                    <h1 class="font-weight-bold text-center">Save Time</h1>
                    <p>It takes just two minutes to match you with the best Pros.</p>
                  </div>
                  <div class="col-sm-4">
                    <h1 class="font-weight-bold text-center">100% Free</h1>
                    <p>Our service is 100% free, with no obligations. </p>
                  </div>
                  <div class="col-sm-4">
                    <h1 class="font-weight-bold text-center">Simple to Use</h1>
                    <p>We’ve designed The Get Me Professionals Platform with the user in mind, which is why we’ve made it so easy to find, and be found by service professionals.</p>
                  </div>
              </div>
          </div>
          <br><br>
          </body>
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
            <i class="fas fa-home mr-3"></i> No:4,Cross Rd,Colombo,Sri lanka.</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> supportfynd@gmail.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 94117 77 1979 </p>
          <p>
            <i class="fas fa-print mr-3"></i> + 94197 33 3999</p>
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
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <a href="https://twitter.com/login">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <a href="https://accounts.google.com/signin/v2/identifier?passive=1209600&continue=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&followup=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                  <i class="fab fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <a href="https://www.linkedin.com/uas/login">
                  <i class="fab fa-linkedin-in"></i>
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
           
    
</html>
