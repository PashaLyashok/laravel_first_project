@extends('layouts.main')

@section('title', 'Dart Services')
    
@section('content')
    <main class="main">
        <div class="container_main">
            <section class="services">
                <div class="container_services">
                    @foreach ($servicesPage as $service)
                        <h2>{{ $service->mainTitle }}</h2>
                        <hr/>
                        <p>{{ $service->mainDesc }}</p>    
                    @endforeach
                    
                    <div class="service_icons">
                        @foreach ($services as $service)
                            <div class="icon">
                                <div class="icon{{ $service->id }}"><img src="/image/icon{{ $service->id }}.png" alt="icon{{ $service->id }}"></div>
                                <a href="services/{{ $service->alias }}" style='text-transform:uppercase;' class="icon_text">{{ $service->title }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection