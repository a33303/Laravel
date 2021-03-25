@extends('layouts.admin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Добавить категорию</h1> &nbsp;
            <strong>
                <a href="{{ route('admin.categories.index') }}">Список категорий</a>
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
            <form action="{{ route('admin.news.store')  }}" method="POST">
                <div class="col-8">
                    <div class="form-group">
                        <label for="title">Наименование категории</label>
                        <input type="text" class="form-control" placeholder="title" name="title">
                        @if($errors->has('title'))
                            <div class="alert alert-danger">
                                @foreach($errors-get('title') as $error)
                                    <p style="margin-bottom: 0;">{{ $error }}</p>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title">Описание категории</label>
                        <textarea class="form-control" name="description"></textarea>
                        @if($errors->has('title'))
                            <div class="alert alert-danger">
                                @foreach($errors-get('title') as $error)
                                    <p style="margin-bottom: 0;">{{ $error }}</p>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Сохранить</button>
                </div>
            </form>
        </div>
@endsection


