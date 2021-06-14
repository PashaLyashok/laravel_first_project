@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Поздравляем!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Вы успешно вошли в аккаунт') }}
                    <a href="{{ route('home.index') }}" style="display:block;margin-top:25px">Перейти на главную страницу</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
