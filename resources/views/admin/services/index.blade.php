@extends('layouts.admin_layout')

@section('title', 'Услуги')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Услуги</h1>
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
                        @foreach ($services as $service)
                            <div class="card-body">
                                <div class="form-group">
                                    <h3>Услуга #{{ $service['id'] }}</h4>
                                        <hr>
                                    <h4>Название услуги: </h4> 
                                    <p>{{ $service['title'] }}</p>
                                    <h4>URL услуги: </h4> 
                                    <p>{{ $service['alias'] }}</p>
                                    <h4>Изображение: </h4>
                                    <img class="company" src="{{ $service->img }}" alt="photo_company" style="width: 70%; height: 500px"/>
                                    <p>{{ $service['img'] }}</p>
                                    <h4>Описание: </h4>
                                    <p>{{ $service['description'] }}</p>
                                </div>
                            </div>            
                            <div class="card-footer">
                                <a class="btn btn-info btn-sm" href="{{ route('services.edit', $service['id']) }}">
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
