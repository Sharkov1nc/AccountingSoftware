@extends("default")
@section("content")
    @guest
        Access denied !
    @else
        Contact Person : {{$Client->contact_person}}
    @endguest
    @endsection