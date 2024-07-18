@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Категории</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a type="button" class="btn btn-success" href="{{ route('categories.create') }}">Создать категорию</a>
        </div>

        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Название</th>
                        <th>Количество машин</th>
                        <th style="width: 200px">Управление</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->title->ru }}</td>
                            <td>
                                {{ $category->cars()->count() }}
                            </td>
                            <td><a type="button" class="btn btn-primary" href="{{ route('categories.edit', $category) }}">Редактировать</a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@stop


@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>

@stop
