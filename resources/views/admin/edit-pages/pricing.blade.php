@extends('layouts.admin_layout')

@section('title', 'Редактировать Главную страницу')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать Pricing Page</h1>
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
                            <form action="{{ route('edit-pricing-page.update', $content->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="mainTitle">Заголовок страницы</label>
                                            <input type="text" class="form-control" id="mainTitle" value="{{ $content['mainTitle'] }}" name="mainTitle" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="mainDesc">Описание страницы</label>
                                            <textarea id="mainDesc" rows="5" style="width:100%" name="mainDesc" >{{ $content['mainDesc'] }}</textarea>
                                        </div>
                                    </div>            
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Редактировать</button>
                                    </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>  
@endsection
