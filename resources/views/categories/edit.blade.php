@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Редактирование категории</h1>
@stop

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Редактирование категории</h3>
        </div>


        <form action="{{ route('categories.update', $category) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="card-body">
                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            @foreach ($langs as $code => $lang)
                                <li class="nav-item">
                                    <a class="nav-link @if ($loop->first) active @endif"
                                        id="custom-tabs-four-{{ $code }}-tab" data-toggle="pill"
                                        href="#custom-tabs-four-{{ $code }}" role="tab"
                                        aria-controls="custom-tabs-four-{{ $code }}"
                                        aria-selected="true">{{ $lang }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            @foreach ($langs as $code => $lang)
                                <div class="tab-pane fade show @if ($loop->first) active @endif"
                                    id="custom-tabs-four-{{ $code }}" role="tabpanel"
                                    aria-labelledby="custom-tabs-four-{{ $code }}-tab">
                                    <div class="form-group">
                                        <label for="title_{{ $code }}">Название ({{ $code }})</label>
                                        <input name="title[{{$code}}]" type="text" class="form-control" id="title_{{ $code }}" value="{{ $category->title->{$code} }}">
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
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
