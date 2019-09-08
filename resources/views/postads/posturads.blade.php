@extends('layouts.app')

@section('content')

<body style='background-color:#22223a'>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('creatAd') }}" enctype="multipart/form-data">
                        @csrf   

                        <div id="offerSec">
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
                                    <label for="portfolio_img" class="col-md-20 col-form-label text-md-center">{{ __('" Previous Works Done or Certificates.(Max 5 Images)"') }}</label>
                                    <input id="portfolio_img" name="portfolio_img[]" type="file" multiple="multiple">
                                </div>
                            </div>
                                
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
    
                                <div class="col-md-6">
                                    <textarea id="description" name="description" type="description" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Post Ad') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
