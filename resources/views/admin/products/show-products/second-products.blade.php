@extends('layouts.admin_layout')

@section('title', 'Товары')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все товары CSS Products</h1>
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
                        @foreach ($second_products as $product)
                            <div class="card-body">
                                <div class="form-group">
                                    <h3>Товар # {{ $product['id'] }}</h4>
                                        <hr>
                                    <h4>Название товара: </h4> 
                                    <p>{{ $product['title'] }}</p>
                                    <h4>Описание товара: </h4>
                                    <p>{{ $product['description'] }}</p>
                                    <h4>Цена товара: </h4>
                                    <p>{{ $product['price'] }}</p>
                                    <h4>Категория товара: </h4>
                                    <p>{{ $product['category'] }}</p>
                                </div>
                            </div>            
                            <div class="card-footer">
                                <a class="btn btn-info btn-sm" href="{{ route('second-products.edit', $product['id'],$product['id'] ) }}">
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
