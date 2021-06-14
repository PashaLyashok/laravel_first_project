@extends('layouts.admin_layout')

@section('title', 'Редактировать Главную страницу')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать Home Page</h1>
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
                            <form action="{{ route('edit-contacts-page.update', $content->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="firstTitle">Первый заголовок</label>
                                            <input type="text" class="form-control" id="firstTitle" value="{{ $content['firstTitle'] }}" name="firstTitle" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="firstDesc">Описание к первому заголовку</label>
                                            <textarea id="firstDesc" rows="5" style="width:100%" name="firstDesc" >{{ $content['firstDesc'] }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="firstItemTitle">Заголовок первой записи</label>
                                            <input type="text" class="form-control" id="firstItemTitle" value="{{ $content['firstItemTitle'] }}" name="firstItemTitle" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="firstItemDesc">Данные для первой записи</label>
                                            <input type="email" class="form-control" id="firstItemDesc" value="{{ $content['firstItemDesc'] }}" name="firstItemDesc" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="secondItemTitle">Заголовок второй записи</label>
                                            <input type="text" class="form-control" id="secondItemTitle" value="{{ $content['secondItemTitle'] }}" name="secondItemTitle" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="secondItemDesc">Данные для второй записи</label>
                                            <input type="text" class="form-control" id="secondItemDesc" value="{{ $content['secondItemDesc'] }}" name="secondItemDesc" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="thirdItemTitle">Заголовок третьей записи</label>
                                            <input type="text" class="form-control" id="thirdItemTitle" value="{{ $content['thirdItemTitle'] }}" name="thirdItemTitle" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="thirdItemDesc">Данные для третьей записи</label>
                                            <input type="text" class="form-control" id="thirdItemDesc" value="{{ $content['thirdItemDesc'] }}" name="thirdItemDesc" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="secondTitle">Второй заголовок</label>
                                            <input type="text" class="form-control" id="secondTitle" value="{{ $content['secondTitle'] }}" name="secondTitle" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="iframe">IFrame для Гугл карты</label>
                                            <textarea id="iframe" rows="5" style="width:100%" name="iframe" >{{ $content['iframe'] }}</textarea>
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

