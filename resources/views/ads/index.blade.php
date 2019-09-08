@extends('layouts.app')

@section('content')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<body style='background-color:#22223a'>
    <div class="container">
        <div class="col-xs-12">
            <form action="/search" method="get">

            <div class="row">
                <div class="col-md-12" style-padding-left="180px;">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1" name="location">
                                <option selected disabled>Location</option>
                                @foreach($locations as $location)
                                  <option value="{{$location->id}}">{{$location->location}}</option>                                        
                                @endforeach
                            </select>
                          
                        </div>
                        
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1" name="category">
                                <option selected disabled>Category</option>
                                <option value="0">Profession</option>
                                <option value="1">Non-Profession</option>

                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                          <input class="form-control" id="exampleFormControlInput1" name="text" placeholder=" Name Search" />                              
                      </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <div class="input-group-append">
                                  <button class="btn btn-success btn-block" type="submit">
                                    <i class="fa fa-search"></i>
                                   <b>Search</b></button>
                                </div>
                              </div>
                        </div>
                        
                </div>

            </div>
          </form>

          </div>
    </div>



<div class="container">
  
  <div class="row">
      <div class="col-sm-4">
  
      <br>
      <br>
      <br>
      
      <div class="container">
          <div class="row">
              <div class="col-sm-4">
                <h1 style="color:#999999">Advanced Filter</h1>
                <form action="/filter" method="get">
                  <div class="card" style="width: 28rem;">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Ratings Below
                          <select id="example" name="rate">
                              <option value="0">Not Rated</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>  
                            </select>
                      </li>
                      <li class="list-group-item">                
                        <button class="btn btn-success btn-block" type="submit">
                          <i class="fa fa-search"></i>
                         <b>Search</b></button>
                      </li>
                    </ul>
                  </div>
                </form>
              </div>

                

                  <div class="col-sm-8">
              <div class="row">
                @if(session('message'))
                    <h1 style='color:#FFFFFF'>{{session('message')}}</h1>
                @endif
            @foreach($ads as $ad)
              <div class="col-sm-12" style="margin-bottom:25px">
                  <div class="card">
                  <h5 class="card-header"><b>{{$ad->name}}</b></h5>
                      <div class="card-body">
                      <img src="{{Storage::disk('local')->url('').'\\'.$ad->profile_img}}" width="100px" height="100px"/>  
                      <h5 class="card-title"><b>{{$ad->category}}</b></h5>
                      <h5 class="card-title">{{$ad->location}}</h5>
                      <p class="card-text">{{$ad->description}}</p>
                      <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $ad->averageRating }}" data-size="xs" disabled="">
                      <p>Reviews {{$ad->countRating}}</p>
                      <a href="/ads/{{$ad->id}}" class="btn btn-primary">View More</a>
                      </div>
                    </div>

              </div>
           
              @endforeach
              @if(sizeof($ads)>0)
                {{$ads->links()}}
              @endif
                  </div>
            </div>
            
          </div>
      </div>

      

  </div>
</div>

</body>
@endsection