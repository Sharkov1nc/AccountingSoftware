<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AccountingSolution</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/stroke-7/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/jquery.nanoscroller/css/nanoscroller.css') }}"/><!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/font-awesome/css/font-awesome.min.css') }}"/>
    @yield('libsCSS')
    <link rel="stylesheet" href="{{ URL::asset('amaretti/html/assets/css/style.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
</head>
<body>
<div class="am-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top am-top-header">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="page-title"><span>Dashboard</span></div><a href="#" class="am-toggle-left-sidebar navbar-toggle collapsed"><span class="icon-bar"><span></span><span></span><span></span></span></a><a href="index.html" class="navbar-brand"></a>
            </div>
            <div id="am-navbar-collapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav am-user-nav">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="{{'amaretti/html/assets/img/avatar.jpg'}}"><span class="user-name">Samantha Amaretti</span><span class="angle-down s7-angle-down"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="#"> <span class="icon s7-user"></span>My profile</a></li>
                            <li><a href="{{route("logoutAuth")}}"> <span class="icon s7-power"></span>Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav am-top-menu">
                    <li><a href="{{route("Home")}}">Home</a></li>
                    <li><a href="{{route("Profile")}}">Profile</a></li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle">Quick menu <span class="angle-down s7-angle-down"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="{{route("Profits")}}">Profits</a></li>
                            <li><a href="{{route("Expenses")}}">Expenses</a></li>
                            <li><a href="{{route("Clients")}}">Clients</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route("Support")}}">Support</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Left Sidebar -->

    <div class="am-left-sidebar">
        <div class="content">
            <div class="am-logo"></div>
            <ul class="sidebar-elements">
                <li class=""><a href="{{route("Home")}}"><i class="icon s7-monitor"></i><span>Dashboard</span></a>
                </li>
                <li class=""><a href="{{route("Profits")}}"><i class="icon s7-piggy"></i><span>Profits</span></a>
                </li>
                <li class=""><a href="{{route("Expenses")}}"><i class="icon s7-calculator"></i><span>Expenses</span></a>
                </li>
                <li class=""><a href="{{route("Clients")}}"><i class="icon s7-users"></i><span>Clients</span></a>
                </li>
                <li class=""><a href="{{route("Timeline")}}"><i class="icon s7-shuffle"></i><span>Timeline</span></a>
                </li>
                <li class=""><a href="{{route("Settings")}}"><i class="icon s7-config"></i><span>Settings</span></a>
                </li>
                <li class=""><a href="{{route("Support")}}"><i class="icon s7-call"></i><span>Support</span></a>
                </li>
            </ul>
            <!--Sidebar bottom content-->
        </div>
    </div>
    <div class="am-content">
        @yield("content")
    </div>
</div>
<script src="{{ URL::asset('amaretti/html/assets/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('amaretti/html/assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js') }}"></script>
<script src="{{ URL::asset('amaretti/html/assets/js/main.js') }}"></script>
<script src="{{ URL::asset('amaretti/html/assets/lib/bootstrap/dist/js/bootstrap.min.js') }}" ></script>
<script src="{{ URL::asset('amaretti/html/assets/lib/jquery-ui/jquery-ui.min.js') }}" ></script>
@yield('libsJS')
<script>

    $(document).ready(function(){
        App.init();

    });
</script>
</body>
</html>