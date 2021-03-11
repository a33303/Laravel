@extends('layouts.main')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        </div>

        <!-- Content Row -->
        <div>
            <form action="">
                <div class="col-8">
                    <div class="form-group">
                        <label for="name">Имя пользователя</label>
                        <input type="text" class="form-control" id="name" placeholder="Имя пользователя">
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input class="form-control" name="password" placeholder="Пароль" id="user_password" type="password">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input class="form-control" name="email" placeholder="name@mail.ru">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Подписаться</button>
                </div>
            </form>
        </div>
@endsection
