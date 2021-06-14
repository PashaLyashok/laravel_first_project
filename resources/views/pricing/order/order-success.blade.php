@extends('layouts.main')

@section('title', 'Order')

@section('content')
<main class="main">
    <div class="container_main">
        <section class="thanks">
            <div class="container_services">
                <h2>Вы успешно оформили заказ!</h2>
                <hr/>
                <p>Спасибо,что выбрали нашу компанию. С Вами в скором времени свяжутся дял уточнения деталей!</p>
                <button class="order_btn"><a class="bilboard_a" href="{{ route('home.index') }}">Home</a></button>
            </div>
        </section>
    </div>
</main>
@endsection