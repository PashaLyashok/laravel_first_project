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
                            <form action="{{ route('edit-home-page.update', $content->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="firstSectionTitle">Заголовок первой секции</label>
                                            <input type="text" class="form-control" id="firstSectionTitle" value="{{ $content['firstSectionTitle'] }}" name="firstSectionTitle" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="firstSectionDesc">Описание первой секции</label>
                                            <textarea id="firstSectionDesc" rows="5" style="width:100%" name="firstSectionDesc" >{{ $content['firstSectionDesc'] }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="bannerVideoLink">Ссылка на видео в первой секции</label>
                                            <input type="text" class="form-control" id="firstSectionTitle" value="{{ $content['bannerVideoLink'] }}" name="bannerVideoLink" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="bannerButtonDesc">Название кнопки под видео</label>
                                            <input type="text" class="form-control" id="bannerButtonDesc" value="{{ $content['bannerButtonDesc'] }}" name="bannerButtonDesc" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="secondSectionMaxTitle">Заголовок второй секции</label>
                                            <input type="text" class="form-control" id="secondSectionMaxTitle" value="{{ $content['secondSectionMaxTitle'] }}" name="secondSectionMaxTitle" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="secondSectionMinTitle">Подзаголовок второй секции</label>
                                            <input type="text" class="form-control" id="secondSectionMinTitle" value="{{ $content['secondSectionMinTitle'] }}" name="secondSectionMinTitle" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="secondSectionDesc">Описание второй секции</label>
                                            <textarea id="secondSectionDesc" rows="5" style="width:100%" name="secondSectionDesc" >{{ $content['secondSectionDesc'] }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="secondSectionButtonDesc">Название кнопки второй секции</label>
                                            <input type="text" class="form-control" id="secondSectionButtonDesc" value="{{ $content['secondSectionButtonDesc'] }}" name="secondSectionButtonDesc" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="thirdSectionMaxTitle">Заголовок третьей секции</label>
                                            <input type="text" class="form-control" id="thirdSectionMaxTitle" value="{{ $content['thirdSectionMaxTitle'] }}" name="thirdSectionMaxTitle" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="thirdSectionMinTitle">Описание третьей секции</label>
                                            <textarea id="thirdSectionMinTitle" rows="5" style="width:100%" name="thirdSectionMinTitle" >{{ $content['thirdSectionMinTitle'] }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastSectionTitle">Заголовок последней секции</label>
                                            <input type="text" class="form-control" id="lastSectionTitle" value="{{ $content['lastSectionTitle'] }}" name="lastSectionTitle" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastSectionDesc">Описание последней секции</label>
                                            <textarea id="lastSectionDesc" rows="5" style="width:100%" name="lastSectionDesc" >{{ $content['lastSectionDesc'] }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastSectionButtonDesc">Название кнопки последней секции</label>
                                            <input type="text" class="form-control" id="lastSectionButtonDesc" value="{{ $content['lastSectionButtonDesc'] }}" name="lastSectionButtonDesc" required>
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
