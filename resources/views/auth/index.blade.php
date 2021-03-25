@extends('layouts.main')
@section('content')
<form action="/login" method="get">
    <input type="text" placeholder="login" name="login">
    @if($errors->has('name'))
        <div class="alert alert-danger">
            @foreach($errors-get('name') as $error)
                <p style="margin-bottom: 0;">{{ $error }}</p>
        </div>
        @endforeach
    @endif
    <input type="text" placeholder="password" name="password">
    @if($errors->has('text'))
        <div class="alert alert-danger">
            @foreach($errors-get('text') as $error)
                <p style="margin-bottom: 0;">{{ $error }}</p>
        </div>
        @endforeach
    @endif
    <input type="submit">

</form>
@stop
