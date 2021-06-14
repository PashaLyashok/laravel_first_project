@extends('layouts.admin_layout')

@section('title', 'Заказы')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Список заказов</h1>
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
                        @foreach ($orders as $order)
                        <div class="card-body">
                            <div class="form-group">
                                <h3>Заказ # {{ $order['id'] }}</h4>
                                    <hr>
                                <h4>Имя заказчика: </h4> 
                                <p>{{ $order['name'] }}</p>
                                <h4>Почта заказчика: </h4>
                                <p>{{ $order['email'] }}</p>
                                <h4>Телефон заказчика: </h4>
                                <p>{{ $order['phone'] }}</p>
                                <h4>Первый пакет товаров: </h4>
                                <p>{{ $order['product1'] }}</p>
                                <h4>Второй пакет товаров: </h4>
                                <p>{{ $order['product2'] }}</p>
                            </div>
                        </div>
                        @endforeach                      
                    </div>
                </div>
            </div>
        </div>
    </section>  
@endsection
