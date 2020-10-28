@extends('layouts.default.master')
@section('content')
    <div class="container pt-3">

        <div class="row">
            <div class="col-md-3">
                <h1>Блог</h1>
                <div>
                    <span class="badge badge-pill badge-secondary px-3 mb-2 py-2">Прокрастинация</span>
                    <span class="badge badge-pill badge-secondary px-3 mb-2 py-2">Успех</span>
                    <span class="badge badge-pill badge-secondary px-3 mb-2 py-2">Мотивация</span>
                    <span class="badge badge-pill badge-secondary px-3 mb-2 py-2">Заработать с нуля</span>
                    <span class="badge badge-pill badge-secondary px-3 mb-2 py-2">Прокрастинация</span>
                    <span class="badge badge-pill badge-secondary px-3 mb-2 py-2">Успех</span>
                    <span class="badge badge-pill badge-secondary px-3 mb-2 py-2">Мотивация</span>
                    <span class="badge badge-pill badge-secondary px-3 mb-2 py-2">Заработать с нуля</span>
                </div>
            </div>
            <div class="col-md-9 pt-3">
                @include('templates.post.preview.master')
                @include('templates.post.preview.master')
                @include('templates.post.preview.master')
                @include('templates.post.preview.master')
                @include('templates.post.preview.master')
                @include('widgets.pagination.master')
            </div>
        </div>


    </div>
@endsection
