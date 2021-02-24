@extends('layouts.main')
@section('content')
@foreach ($categoryNews as $ListNews)
    {{ $ListNews }} . "&nbsp; <a href='{{}}'>Перейти</a><br>";
@endforeach
@stop
