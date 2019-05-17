 <!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AccoutingSoftware Setup</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('amaretti/html/assets/lib/stroke-7/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('amaretti/html/assets/lib/jquery.nanoscroller/css/nanoscroller.css')}}"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('amaretti/html/assets/lib/select2/css/select2.min.css')}}"/>
    <link rel="stylesheet" href="{{URL::asset('amaretti/html/assets/css/style.css')}}" type="text/css"/>
    <style>
        body {
            background-color: #000000 !important;
        }
        .form-control {
            color: #fff !important;
        }
       .input-group-addon > i {
           color : #fff !important;
       }
    </style>
</head>
<body class="am-splash-screen">
<div class="am-wrapper am-login">
    <div class="am-content">
        <div class="main-content">
            <div class="login-container">
                <div class="panel panel-default">
                    <div class="panel-heading"><img src="{{URL::asset('/imgs/sharkmini.png')}}" alt="logo" width="100%" class="logo-img"></div>
                    <div class="panel-body">
                        <form action="{{route('Setup')}}" method="POST" class="form-horizontal">
                            @csrf
                            <br>
                            <div class="setup-form-main-content">
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-global"></i></span>
                                        <input id="company" type="text" placeholder="Company" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{ old('company') }}" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-user"></i></span>
                                        <input id="manager" type="text" placeholder="Manager" class="form-control{{ $errors->has('manager') ? ' is-invalid' : '' }}" name="manager" value="{{ old('manager') }}" required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-lock"></i></span>
                                        <input id="email" type="email" placeholder="Private Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-lock"></i></span>
                                        <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-lock"></i></span>
                                        <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="form-group login-submit">
                                    <button type="button" class="btn btn-space btn-primary btn-lg next-step">Next Step </button>
                                </div>
                                <div class="form-group footer row">
                                    <div class="col-xs-6 col-xs-offset-6">
                                        <a href="mailto:sharkov@developer.com">sharkov@developer.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hide setup-form-content">
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-home"></i></span>
                                        <input id="city" type="text" placeholder="City" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-bicycle"></i></span>
                                        <input id="address" type="text" placeholder="Address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-mail"></i></span>
                                        <input id="public-email" placeholder="Public Email" type="email" class="form-control" name="public-email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-mail-open"></i></span>
                                        <input id="fax" type="text" placeholder="Fax" class="form-control{{ $errors->has('fax') ? ' is-invalid' : '' }}" name="fax" value="{{ old('fax') }}" required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-call"></i></span>
                                        <input id="phone" type="text" placeholder="Phone Number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" required>
                                    </div>
                                </div>
                                <div class="form-group login-submit">
                                    <button data-dismiss="modal" type="submit" class="btn btn-space btn-primary btn-lg">Setup</button>
                                </div>
                                <div class="form-group footer row">
                                    <div class="col-xs-6 col-xs-offset-6">
                                        <a href="mailto:sharkov@developer.com">sharkov@developer.com</a>
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

        // Hide Main Part OF Register Form & Show Second

        $(document).on('click','.next-step',function () {
            $(".setup-form-main-content").hide();
            $(".setup-form-content").removeClass("hide");

        });


    });

</script>
</body>
