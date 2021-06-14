@extends('layouts.admin_layout')

@section('title', 'Аккордеон')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Аккордеон</h1>
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
                        @foreach ($accordions as $accordion)
                            <div class="card-body">
                                <div class="form-group">
                                    <h4>Изображение заголовка: </h4>
                                    <img src="{{ $accordion['buttonImg']}}" alt="{{ $accordion['buttonDesc'] }}"/>
                                    <p>{{ $accordion['buttonImg'] }}</p>
                                    <h4>Название заголовка: </h4> 
                                    <p>{{ $accordion['buttonDesc'] }}</p>
                                    <h4>Изображение поста: </h4>
                                    <img src="{{ $accordion['panelImg'] }}" alt="{{ $accordion['panelDesc'] }}">
                                    <p>{{ $accordion['panelImg'] }}</p>
                                    <h4>Описание поста: </h4>
                                    <p>{{ $accordion['panelDesc'] }}</p>
                                    <hr>
                                </div>
                            </div>            
                            <div class="card-footer">
                                <a class="btn btn-info btn-sm" href="{{ route('accordion.edit', $accordion['id']) }}">
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
