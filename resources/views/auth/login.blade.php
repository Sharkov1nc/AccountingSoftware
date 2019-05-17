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
                        <form action="{{route('login')}}" method="POST" class="form-horizontal">
                            @csrf
                            <br>
                            <div class="login-form">
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-mail"></i></span>
                                        <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
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
                                <div class="form-group login-submit">
                                    <button data-dismiss="modal" type="submit" class="btn btn-primary btn-lg">Log me in</button>
                                </div>
                                <div class="form-group footer row">
                                    <div class="col-xs-6 col-xs-offset-6"><a href=""><u>Forgot Your Password ?</u></a></div>
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
