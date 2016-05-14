@extends('welcome')

@section('content')

    <table class="simple-little-table" cellspacing='0'>
        <tr><td>Наименование валюты</td><td>Сокращение</td></tr>

        @for($i=0;$i <count($help); $i++)

        <tr><td>{{$help[$i]["name"]}}</td><td>{{ $help[$i]["charCode"] }}</td></tr>

        @endfor
    </table>


@endsection