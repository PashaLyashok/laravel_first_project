@extends('layouts.admin_layout')

@section('title', 'Редактирование аккордеона')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-4">Редактирование поста аккордеона #{{ $accordion['id'] }}</h1>
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
                        <form action="{{ route('accordion.update', $accordion['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="buttonImg">Изображение заголовка:(/image/название изображения.расширение): </label>
                                    <input type="text" class="form-control" id="buttonImg" value="{{ $accordion['buttonImg'] }}" name="buttonImg" required />
                                </div>  
                                <div class="form-group">
                                    <label for="buttonDesc">Название заголовка: </label>
                                    <input type="text" class="form-control" id="buttonDesc" value="{{ $accordion['buttonDesc'] }}" name="buttonDesc" required />
                                </div>                 
                                <div class="form-group">
                                    <label for="panelImg">Изображение поста:(/image/название изображения.расширение): </label>
                                    <input type="text" class="form-control" id="panelImg" value="{{ $accordion['panelImg'] }}" name="panelImg" required />
                                </div>  
                                <div class="form-group">
                                    <label for="panelDesc">Описание поста: </label>
                                    <textarea id="panelDesc" rows="5" style="width:100%" name="panelDesc" >{{ $accordion['panelDesc'] }}</textarea>
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

