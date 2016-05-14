
@extends('welcome')

@section('content')

    <table class="simple-little-table" cellspacing='0'>

        <tr><td>{{$nam["Currency"]["inType"]}}</td><td>{{$nam["Currency"]["outType"]}}</td></tr>

        <tr><td>{{$nam["Currency"]["val"]}}</td><td>{{ $nam["Currency"]["out"] }}</td></tr>

        </table>
    <nav class="cl-effect-15">
        <a href="/curCalc/help" data-hover="Help">Help</a>

    </nav>

@endsection
