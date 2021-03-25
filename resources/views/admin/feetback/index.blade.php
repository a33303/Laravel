@extends('layouts.main')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        </div>

        <!-- Content Row -->
        <div>
            <form action="{{ route('feedback.index') }}">
                <div class="col-8">
                    <div class="form-group">
                        <label for="name">Имя пользователя</label>
                        <input type="text" class="name" id="name" placeholder="title">
                        @if($errors->has('name'))
                            <div class="alert alert-danger">
                                @foreach($errors-get('name') as $error)
                                    <p style="margin-bottom: 0;">{{ $error }}</p>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" name="email" id="email">
                        @if($errors->has('password'))
                            <div class="alert alert-danger">
                                @foreach($errors-get('password') as $error)
                                    <p style="margin-bottom: 0;">{{ $error }}</p>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input class="form-control" name="email" id="email">
                        @if($errors->has('email'))
                            <div class="alert alert-danger">
                                @foreach($errors-get('email') as $error)
                                    <p style="margin-bottom: 0;">{{ $error }}</p>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Подписаться</button>
                </div>
            </form>
        </div>
@endsection
