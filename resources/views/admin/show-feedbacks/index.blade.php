@extends('layouts.admin_layout')

@section('title', 'Отзывы')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Список отзывов</h1>
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
                        @foreach ($feedbacks as $feedback)
                        <div class="card-body">
                            <div class="form-group">
                                <h3>Отзыв # {{ $feedback['id'] }}</h4>
                                    <hr>
                                <h4>Имя: </h4> 
                                <p>{{ $feedback['name'] }}</p>
                                <h4>Почта: </h4>
                                <p>{{ $feedback['email'] }}</p>
                                <h4>Сообщение: </h4>
                                <p>{{ $feedback['message'] }}</p>
                                <h4>Дата: </h4>
                                <p>{{ $feedback['created_at'] }}</p>
                            </div>
                        </div>
                        @endforeach                      
                    </div>
                </div>
            </div>
        </div>
    </section>  
@endsection
