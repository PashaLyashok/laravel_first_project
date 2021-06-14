@extends('layouts.main')

@section('title', 'Services/' . $service->title)

@section('content')
<main class="main">
    <div class="container_main">
        <section class="index">
            <div class="container_index">
                <h2 style="text-transform:uppercase;">{{ $service->title }}</h2>
                <img class="company" src="{{ $service->img }}" alt="photo_company"/>
                <p class="serv">{{ $service->description }}</p>
                <button class="button_serv"><a class="a_serv" href="/service"><<- Back</a></button>
            </div>
        </section>
    </div>
</main>
@endsection