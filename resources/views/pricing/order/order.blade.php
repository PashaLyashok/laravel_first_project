@extends('layouts.main')

@section('title', 'Order')

@section('content')
<main class="main">
    <div class="container_main">
        <section class="form">
            <div class="container_form">
                <h2>Order</h2>
                <hr/>
                @include('forms.order-form')
            </div>
        </section>
    </div>
</main>
@endsection