@extends('default')
@section('libsCSS')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/summernote/summernote.css') }}"/>
    @endsection
@section('content')
    <div class="main-content">
        <div class="user-profile">
            <div class="user-display">
                <div class="photo"><img src="{{URL::asset('amaretti/html/assets/img/profile.jpg')}}"></div>
                <div class="bottom">
                    <div class="user-avatar"><span class="status"></span><img src="@if(\Illuminate\Support\Facades\Auth::user()->image_url) {{URL::asset("imgs/ninja.jpg")}} @else {{URL::asset("imgs/ninja.jpg")}} @endif"></div>
                    <div class="user-info">
                        <h4> {{\Illuminate\Support\Facades\Auth::user()->name}} </h4><span>I am a web developer and designer based in Montreal - Canada, I like read books, good music and nature.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><span class="title">Daily Tasks</span></div>
                        <div class="panel-body">
                            @foreach($tasks as $task)
                            <div role="alert" class="alert alert-{{\App\Constants::iconsByPriority[$task->priority]}} alert-icon alert-dismissible">
                                <div class="icon"><span class="s7-pin"></span></div>
                                <div class="message">
                                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-check"></span></button><strong>{{\App\Constants::priorities[$task->priority]}} !</strong> {{$task->task}}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    @foreach($notes as $note)
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="tools"><a href="#"><span class="icon s7-close"></span></a></div><span class="title"><h4>{{$note->title}}</h4></span>
                        </div>
                        <div class="panel-body">
                            <p>{{$note->note}}</p>
                        </div>
                    </div>
                    @endforeach
                 </div>
            </div>
        </div>
    </div>

@endsection
@section('libsJS')
    <script src="{{ URL::asset('amaretti/html/assets/lib/summernote/summernote.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('amaretti/html/assets/lib/summernote/summernote-ext-amaretti.js') }}" type="text/javascript"></script>
    @endsection