{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Register') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('register') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Register') }}--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
        <!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AccoutingSoftware Login</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('amaretti/html/assets/lib/stroke-7/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('amaretti/html/assets/lib/jquery.nanoscroller/css/nanoscroller.css')}}"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('amaretti/html/assets/lib/select2/css/select2.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::asset('amaretti/html/assets/css/style.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">
</head>
<body class="am-splash-screen">
<div class="am-wrapper am-login">
    <div class="am-content">
        <div class="main-content">
            <div class="login-container">
                <div class="panel panel-default">
                    <div class="panel-heading"><img src="{{URL::asset('amaretti/html/assets/img/logo-full-retina.png')}}" alt="logo" width="150px" height="39px" class="logo-img"><span>Please enter your user information.</span></div>
                    <div class="panel-body">
                        <form action="{{route('register')}}" method="POST" class="form-horizontal">
                            @csrf
                            <div class="login-form">
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-user"></i></span>
                                        <input id="name" type="text" placeholder="Firstname & Lastname" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-user"></i></span>
                                        <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-lock"></i></span>
                                        <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-lock"></i></span>
                                        <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                {{--<div class="form-group">--}}
                                    {{--<div class="input-group"><span class="input-group-addon"><i class="icon s7-lock"></i></span>--}}
                                        {{--<select class="select2" name="position">--}}
                                            {{--<optgroup label="Alaskan/Hawaiian Time Zone">--}}
                                                {{--<option value="1">Alaska</option>--}}
                                                {{--<option value="2">Hawaii</option>--}}
                                            {{--</optgroup>--}}
                                            {{--<optgroup label="Pacific Time Zone">--}}
                                                {{--<option value="3">California</option>--}}
                                                {{--<option value="4">Nevada</option>--}}
                                                {{--<option value="5">Oregon</option>--}}
                                                {{--<option value="6">Washington</option>--}}
                                            {{--</optgroup>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="form-group login-submit">
                                    <button data-dismiss="modal" type="submit" class="btn btn-primary btn-lg">Log me in</button>
                                </div>
                                <div class="form-group footer row">
                                    <div class="col-xs-6"><a href="#">Forgot Password?</a></div>
                                    <div class="col-xs-6 remember">
                                        <label for="remember">Remember Me</label>
                                        <div class="am-checkbox">
                                            <input type="checkbox" id="remember" class="needsclick">
                                            <label for="remember"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{URL::asset('amaretti/html/assets/lib/jquery/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('amaretti/html/assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('amaretti/html/assets/js/main.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('amaretti/html/assets/lib/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('amaretti/html/assets/lib/select2/js/select2.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('amaretti/html/assets/js/app-form-elements.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.formElements();
    });

</script>
</body>
