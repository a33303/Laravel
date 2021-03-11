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
                    </div>
                    <div class="form-group">
                        <label for="email">Password</label>
                        <input class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input class="form-control" name="email" id="email">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Подписаться</button>
                </div>
            </form>
        </div>
@endsection
