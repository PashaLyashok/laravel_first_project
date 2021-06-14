@extends('layouts.admin_layout')

@section('title', 'Услуги')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Посты</h1>
                </div>
            </div>
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
            </div>
        @endif
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        @foreach ($extensions as $extension)
                            <div class="card-body">
                                <div class="form-group">
                                    <h3>Пост #{{ $extension['id'] }}</h4>
                                        <hr>
                                    <h4>Название поста: </h4> 
                                    <p>{{ $extension['firsttitle'] }}</p>
                                    <h4>Подзаголовок поста: </h4> 
                                    <p>{{ $extension['lasttitle'] }}</p>
                                    <h4>URL поста: </h4> 
                                    <p>{{ $extension['alias'] }}</p>
                                    <h4>Главное изображение поста: </h4>
                                    <img class="img_ext" src="{{ $extension['img'] }}" alt="{{ $extension['firsttitle'] }}"/>
                                    <p>{{ $extension['img'] }}</p>
                                    <h4>Мини изображение поста на главной странице: </h4>
                                    <img class="img_l" src="{{ $extension['smallimg'] }}">
                                    <p>{{ $extension['smallimg'] }}</p>
                                    <h4>Мини описание: </h4>
                                    <p>{{ $extension['predesc'] }}</p>
                                    <h4>Главное описание: </h4>
                                    <p>{{ $extension['description'] }}</p>
                                </div>
                            </div>            
                            <div class="card-footer">
                                <a class="btn btn-info btn-sm" href="{{ route('extensions.edit', $extension['id']) }}">
                                    <i class="fas fa-pensil-alt"></i>
                                    Редактировать
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>  
@endsection
