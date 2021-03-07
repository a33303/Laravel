@extends('layouts.admin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Список новостей</h1> &nbsp;
            <strong>
                <a href="{{ route('admin.news.create') }}">Добавить новость</a>
            </strong>
        </div>

        <!-- Content Row -->
        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#ID</th>
                    <th>Заголовок</th>
                    <th>Категория</th>
                    <th>Дата добавления</th>
                </tr>
                </thead>
                <tbody>
                @forelse($news as $new)
                    <tr>
                        <td>{{ $news->id }}</td>
                        <td>{{ $news->title }}</td>
                        <td>{{ $news->category }}</td>
                        <td>{{ $news->created_at }}</td>
                    </tr>
                @empty
                    <h2>Записей нет</h2>
                @endforelse
                </tbody>
            </table>
        </div>
@endsection
