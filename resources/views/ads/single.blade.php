
@extends('layouts.app')

@section('content')

<body style='background-color:#22223a'>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-2"></div>
            <div class="col-sm-8" style='background-color:#FFFFFF'>
                    <label for="label-name1"> <b>Name:</b><h6>{{$ad->name}}</h6></label><br>
            <label for="label-name2"> <b>Profile Image:</b>
                <span class="zoom">
                    <img src="{{Storage::disk('local')->url('').'\\'.$ad->profile_img}}" width="100px" height="100px"/> 
                </span>       
            </label><br>
                    <label for="label-name3"> <b>Category:</b><h6>{{$ad->category}}</h6></label><br>
                    <label for="label-name4"> <b>Description:</b><h6>{{$ad->description}}</h6></label><br>
                    <label for="label-name5"> <b>Location:</b><h6>{{$ad->location}}</h6></label><br>
            <label for="label-name6"> <b>Previous Works Done or Certificates Images.:</b>
            <br>
                @foreach ($adImgs as $img)
                    <span class="zoom">
                        <img src="{{Storage::disk('local')->url('').'\\'.$img->portfolio_img}}" width="100px" height="100px"/>                
                    </span>
                @endforeach
            </label><br>
    
            <div class="">
                <div class="row">
                    <div class="col-xs-4">
                    <label for="label-name7"> <b>Email:</b><h6>{{$ad->email}}</h6></label><br>
                    <label for="label-name8"><b>Urgent:</b><br>
                    @auth
                    <button data-toggle="collapse" class="btn btn-info" data-target="#demo">Contact Number</button>
                    <div id="demo" class="collapse">
                    {{$ad->mobile}}
                    </div>
                    @endauth 
                    @unless (Auth::check())
                    <button data-toggle="collapse" class="btn btn-info" data-target="#demo">Contact Number</button>
                    <div id="demo" class="collapse">
                        You are not signed in.
                    </div>
                    @endunless
                    <br>
                    <label for="label-name8"><b>Non-Urgent:</b><br>
                        
                    </label><br>
                    <a target="_blank" class="btn btn-info" href="{{ route('chat') }}">Chat</a>                
                    </div>
                    <div class="col-xs-8">
                        <div class="col-sm-12">
                            <div class="rating-panel">  
                                <form action="{{ route('posts.post') }}" method="POST">
                                    {{ csrf_field() }}  
                                    <div class="details col-md-6">
                                        <div class="rating">
                                            <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $ad->userAverageRating }}" data-size="xs">
                    
                                            <input type="hidden" name="id" required="" value="{{ $ad->id }}">
                    
                    
                                            <br/>
                                                <button class="btn btn-success">Submit Review</button>                                        
                    
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
    

      
<script>
    function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>   
@endsection