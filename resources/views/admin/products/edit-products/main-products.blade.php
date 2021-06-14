@extends('layouts.admin_layout')

@section('title', 'Редактирование товаров')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-4">Редактирование товара #{{ $product['id'] }} в категории {{ $product['category']}}</h1>
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
                        <form action="{{ route('main-products.update', $product['id'], $product['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название товара: </label>
                                    <input type="text" class="form-control" id="title" value="{{ $product['title'] }}" name="title" required />
                                </div>                  
                                <div class="form-group">
                                    <label for="description">Описание товара: </label>
                                    <textarea id="description" rows="5" style="width:100%" name="description" >{{ $product['description'] }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="price">Цена товара: </label>
                                    <input type="text" class="form-control" id="price" value="{{ $product['price'] }}" name="price" required />
                                </div>  
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="category" value="{{ $product['category'] }}" name="category" required />
                                </div>  
                            </div>            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Обновить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>  
@endsection

