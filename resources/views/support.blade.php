@extends("default")
@section("libsCSS")
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/summernote/summernote.css') }}"/>
@endsection
@section("content")
<div class="page-head">
    <h2 class="page-head-title">Support</h2>
    <ol class="breadcrumb">
        <li><a href="{{route("Home")}}">Home</a></li>
        <li class="active">Support</li>
    </ol>
</div>
<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">Send message to support</div>
                </div>
                <div class="panel-body">
                    <div id="editor1"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section("libsJS")

<script src="{{ URL::asset('amaretti/html/assets/lib/summernote/summernote.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('amaretti/html/assets/lib/summernote/summernote-ext-amaretti.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('amaretti/html/assets/js/app-form-wysiwyg.js') }}" type="text/javascript"></script>
<script>

    $(document).ready(function(){
        App.init();
        App.textEditors();

    });
</script>
    @endsection
