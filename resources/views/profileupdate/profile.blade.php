@extends('layouts.app')

@section('content')

<body style='background-color:#22223a'>
<div class="container">
  <div class="row">
      <div class="col-xs-6" style="color:#999999">


        {!! Form::model($userDetails) !!}

            <div class="form-group">
            {!! Form::label('location', 'Location') !!}
            {!! Form::text('make', (isset($userDetails->locationName))?$userDetails->locationName:'null', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('proficient_type', 'Proficient Type') !!}
            {!! Form::text('model', (isset($userDetails->proficient_type))?(($userDetails->proficient_type=='0')?'Profession':'Non-Profession'):'null', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category', 'Category') !!}
                {!! Form::text('make', (($userDetails->category)),['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('profile_img', 'Profile Image') !!}
                {!! Form::text('model', '', ['class' => 'form-control']) !!}
                <img src="{{Storage::disk('local')->url('').'\\'.$userDetails->profile_img}}" width="50px" height="auto"/>
            </div>

            <div class="form-group">
                {!! Form::label('portfolio_img', 'Portfolio Image') !!}
                {!! Form::text('model', '', ['class' => 'form-control']) !!}
                <img src="{{Storage::disk('local')->url('').'\\'.$userDetails->portfolio_img}}" width="50px" height="auto"/>
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::text('make', (isset($userDetails->description))?$userDetails->description:'null', ['class' => 'form-control']) !!}
            </div>


        {!! Form::close() !!}
  </div>


  <div class="col-xs-6" style="color:#999999">
    <form method="POST" action="{{ route('updateProfile') }}" enctype="multipart/form-data">
        @csrf
        <input id="id" name="id" type="hidden" value="{{Auth::user()->id}}">
        <div class="form-group row">
            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

            <div class="col-md-6">
                <select name="location" id="location" class="form-control">
                    @foreach($locations as $location)
                    <option value="{{$location->id}}">{{$location->location}}</option>                                        
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="proficient_type" class="col-md-4 col-form-label text-md-right">{{ __('Proficient Type') }}</label>

            <div class="col-md-6">
                <select name="proficient_type" id="proficient_type" class="form-control">
                    <option value="default" selected disabled>Please Select a Proficient Type</option>                                        
                    <option value="0">Proffesion</option>
                    <option value="1">Non-Proffesion</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

            <div class="col-md-6">
                <select name="category" id="category" class="form-control">
                    <option value="default" selected disabled>Please Select a Category</option>
                    <option value="Doctor" class="pro hide">Doctor</option>
                    <option value="Teacher" class="pro hide">Teacher</option>
                    <option value="Lawyer" class="pro hide">Lawyer</option>
                    <option value="Enginner" class="pro hide">Enginner</option>

                    <option value="Carpenter" class="non hide">Carpenter</option>
                    <option value="Electrician" class="non hide">Electrician</option>
                    <option value="Plumber" class="non hide">Plumber</option>
                    <option value="Medical assistant" class="non hide">Medical assistant</option>
                </select>
            </div>
        </div>
    
        <div class="form-group row">
            <label for="profile_img" class="col-md-4 col-form-label text-md-right">{{ __('Profile Image') }}</label>

            <div class="col-md-6">
                <input id="profile_img" name="profile_img" type="file">
            </div>
        </div>

        <div class="form-group row">
            <label for="portfolio_img" class="col-md-4 col-form-label text-md-right">{{ __('Portfolio Image') }}</label>

            <div class="col-md-6">
                <label for="portfolio_img" class="col-md-20 col-form-label text-md-center">{{ __('" Previous Works Done or Certificates."') }}</label>
                <input id="portfolio_img" name="portfolio_img[]" type="file" multiple="multiple">
            </div>
        </div>
            
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

            <div class="col-md-6">
                <input id="description" name="description" type="description" class="form-control">
            </div>
        </div>
        <button class="btn btn-success" type="submit">Update</button>
        </form>

  </div>
  </div>
</div>
</div> 
</body>
@endsection