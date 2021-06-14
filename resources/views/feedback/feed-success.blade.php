@extends('layouts.main')

@section('title', 'Feed Back')

@section('content')
<main class="main">
    <div class="container_main">
        <section class="feedback">
            <div class="container_services">
                <h2>Спасибо за Ваш отзыв!</h2>
                <button class="order_btn"><a class="bilboard_a" href="{{ route('home.index') }}">Home</a></button>
            </div>
        </section>
    </div>
</main>
@endsection