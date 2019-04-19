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
                    <div class="user-avatar"><span class="status"></span><img src="{{URL::asset('amaretti/html/assets/img/avatar.jpg')}}"></div>
                    <div class="user-info">
                        <h4> @guest Samantha Amaretti @else {{\Illuminate\Support\Facades\Auth::user()->name}} @endguest </h4><span>I am a web developer and designer based in Montreal - Canada, I like read books, good music and nature.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><span class="title">Daily Tasks</span></div>
                        <div class="panel-body">
                            <div role="alert" class="alert alert-primary alert-icon alert-dismissible">
                                <div class="icon"><span class="s7-pin"></span></div>
                                <div class="message">
                                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-check"></span></button><strong>Good news!</strong> Better check yourself, you're not looking too good.
                                </div>
                            </div>
                            <div role="alert" class="alert alert-success alert-icon alert-dismissible">
                                <div class="icon"><span class="s7-pin"></span></div>
                                <div class="message">
                                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-check"></span></button><strong>Good!</strong> Better check yourself, you're not looking too good.
                                </div>
                            </div>
                            <div role="alert" class="alert alert-info alert-icon alert-dismissible">
                                <div class="icon"><span class="s7-pin"></span></div>
                                <div class="message">
                                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-check"></span></button><strong>Info!</strong> Better check yourself, you're not looking too good.
                                </div>
                            </div>
                            <div role="alert" class="alert alert-warning alert-icon alert-dismissible">
                                <div class="icon"><span class="s7-pin"></span></div>
                                <div class="message">
                                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-check"></span></button><strong>Warning!</strong> Better check yourself, you're not looking too good.
                                </div>
                            </div>
                            <div role="alert" class="alert alert-danger alert-icon alert-dismissible">
                                <div class="icon"><span class="s7-pin"></span></div>
                                <div class="message">
                                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-check"></span></button><strong>Danger!</strong> Better check yourself, you're not looking too good.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="tools"><a href="#"><span class="icon s7-upload"></span></a><a href="#"><span class="icon s7-edit"></span></a><a href="#"><span class="icon s7-close"></span></a></div><span class="title">Primary Panel</span>
                        </div>
                        <div class="panel-body">
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur recusandae a mollitia magni in. </p>
                            <p>Velit numquam possimus eum delectus maiores dicta perspiciatis quae aperiam dolores facere, doloribus non, iusto, sit.</p>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="tools"><a href="#"><span class="icon s7-upload"></span></a><a href="#"><span class="icon s7-edit"></span></a><a href="#"><span class="icon s7-close"></span></a></div><span class="title">Primary Panel</span>
                        </div>
                        <div class="panel-body">
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur recusandae a mollitia magni in. </p>
                            <p>Velit numquam possimus eum delectus maiores dicta perspiciatis quae aperiam dolores facere, doloribus non, iusto, sit dolores facere, doloribus non, iusto,  sit dolores facere, doloribus non, iusto, sit</p>
                        </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>

@endsection
@section('libsJS')
    <script src="{{ URL::asset('amaretti/html/assets/lib/summernote/summernote.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('amaretti/html/assets/lib/summernote/summernote-ext-amaretti.js') }}" type="text/javascript"></script>
    @endsection