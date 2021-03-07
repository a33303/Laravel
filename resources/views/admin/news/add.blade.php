@extends('layouts.admin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Добавить новость</h1> &nbsp;
            <strong>
                <a href="{{ route('admin.news.index') }}">Список новостей</a>
            </strong>
        </div>

        <!-- Content Row -->
        <div>
            @if($errors->any())
                @foreach($errors-all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <form action="{{ route('admin.news.store') }}">
                <div class="col-8">
                    <div class="form-group">
                        <label for="category">Выбор категории</label>
                        <select class="form-control" name="category_id" id="category">
                            <option>Выбрать</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="title">Заголовок новости</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Описание новости</label>
                        <textarea class="form-control"  id="description" name="description">{!! old('description') !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Изображение новости</label>
                        <input class="form-control"  id="image" name="image" type="file">
                    </div>
                    <div class="form-group">
                        <label for="status">Статус новости</label>
                        <select class="form-control" id="status" name="status">
                            <option>Выбрать</option>
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Сохранить</button>
                </div>
            </form>
        </div>
@endsection

