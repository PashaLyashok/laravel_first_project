@extends('layouts.main')

@section('title', 'Extension/' . $extension->firsttitle)

@section('content')
<main class="main">
    <div class="container_main">
        <section class="index">
            <div class="container_index">
                <h2>{{ $extension->firsttitle }}</h2>
                <h4>{{ $extension->lasttitle }}</h4>
                <hr/>
                <img class="img_ext" src="{{ $extension->img }}" alt="{{ $extension->firsttitle }}"/>
                <p class="p_ext">{{ $extension->description }}</p>
                <button class="button_serv">
                    <a class="a_serv" href="/extension"><<- Back</a></button>
            </div>
        </section>
    </div>
</main>
@endsection