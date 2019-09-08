@extends('layouts.app')

@section('content')

<body style='background-color:#22223a'>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="John Deer" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('User Type') }}</label>

                            <div class="col-md-6">
                                <select name="type" id="type" class="form-control">
                                    <option value="1">Looking For Services</option>
                                    <option value="0">Offer Services</option>
                                </select>
                            </div>
                        </div>

                        <div id="offerSec" style="display: none">
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

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="johndeer@gmail.com" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" placeholder="07x-xxx xxxx" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Use 8 or more characters" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="confirm" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
