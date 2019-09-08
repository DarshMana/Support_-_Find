@extends('layouts.app')

@section('content')


<body style='background-color:#22223a'>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="about-section paddingTB60 gray-bg">
                <div class="container">
                    <div class="row">
						<div class="col-md-7 col-sm-6">
							<div class="about-title clearfix">
								<h1>About <span>Support & Fynd</span></h1>
								<p class="about-paddingB">This website helps you to find and require services from different types of professionals and non-professionals. Every information you are searching for on required professions in Sri Lanka is located in one convenient place. You can sign in to the system and get contact details to directly contact the required profession for services. </p>
								<p>Support & fynd also offer professionals and non-professionals to promote themselves by giving their experience and provide services for the people.</p>
                                    <div class="about-icons"> 
                                        <ul >
                                            <li><a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a> </li>
                                            <li><a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a> </li>
                                            <li> <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a> </li>
                                            <li> <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a> </li>
                                        </ul>       

                                    </div>
							</div>
						</div>
						<div class="col-md-3 col-sm-2">
							<div class="about-img">
                                    <div class="row">
                                            <div class="col-sm-3">
                                                    <img width="500px" height="350px" src="{{asset('images/about/ab.png')}}" alt="">
                                            </div>
                                        </div>
								
							</div>
						</div>	
                    </div>
                </div>
            </div>
    
</body>


    
@endsection