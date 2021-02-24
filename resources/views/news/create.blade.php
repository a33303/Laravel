@extends('layouts.main')
@section('content')
<form action="'{{ route('news.index') }}'" method="get">
    <input type="text" placeholder="title" name="title">
    <textarea placeholder="text" name="text"></textarea>
    <input type="submit">
</form>
@stop
