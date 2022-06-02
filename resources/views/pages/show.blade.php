@extends('master')

@section('content')
    <h1>{{ page()->header }}</h1>
    <p>{!! page()->content1 !!}</p>
    <p>view: /resources/views/pages/show.blade.php</p>
@stop
