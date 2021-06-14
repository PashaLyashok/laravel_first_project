@extends('layouts.admin_layout')

@section('title', 'Тулсы')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Тулсы на главную страницу</h1>
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
                        @foreach ($tools as $tool)
                            <div class="card-body">
                                <div class="form-group">
                                    <h4>Название: </h4> 
                                    <p>{{ $tool['title'] }}</p>
                                    <hr>
                                    <h4>Изображение: </h4>
                                    <img src="{{ $tool['img'] }}" alt="{{ $tool['title'] }}">
                                    <p>{{ $tool['img'] }}</p>
                                    <h4>Описание: </h4>
                                    <p>{{ $tool['description'] }}</p>
                                </div>
                            </div>            
                            <div class="card-footer">
                                <a class="btn btn-info btn-sm" href="{{ route('tools.edit', $tool['id']) }}">
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
