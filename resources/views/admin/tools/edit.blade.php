@extends('layouts.admin_layout')

@section('title', 'Редактирование тулсов')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-4">Редактирование тулса #{{ $tool['id'] }}</h1>
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
                        <form action="{{ route('tools.update', $tool['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название: </label>
                                    <input type="text" class="form-control" id="title" value="{{ $tool['title'] }}" name="title" required />
                                </div>                 
                                <div class="form-group">
                                    <label for="img">Изображение(/image/название изображения.расширение): </label>
                                    <input type="text" class="form-control" id="img" value="{{ $tool['img'] }}" name="img" required />
                                </div>  
                                <div class="form-group">
                                    <label for="description">Описание: </label>
                                    <textarea id="description" rows="5" style="width:100%" name="description" >{{ $tool['description'] }}</textarea>
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

