@extends('layouts.main')
@section('content')
<form action="/login" method="get">
    <input type="text" placeholder="login" name="login">
    <input type="text" placeholder="password" name="password">
    <input type="submit">
</form>
@stop
