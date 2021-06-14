@extends('layouts.main')

@section('title', 'Dart Extension')
    
@section('content')
    <main class="main">
        <div class="container_main">
            <section class="extension">
                <div class="container_extension">

                    @foreach ($extensionPage as $extension)
                        <h2>{{ $extension->mainTitle }}</h2>
                        <p>{{ $extension->mainDesc }}</p>
                    @endforeach
                    
                    @foreach ($extensions as $extension)
                        <div class="about_item">
                            <div class="item_l">
                                <img class="img_l" src="{{ $extension->smallimg }}">
                                <h5 id="link_3.1"><a class="a_ext" href="extensions/{{ $extension->alias }}" style="text-transform: uppercase;">{{ $extension->firsttitle }}</a><br/>
                                    {{ $extension->lasttitle }}</h5>
                                <p>{{ $extension->predesc }}</p>
                            </div>
                            <div class="item_r">
                                
                            </div>
                        </div>
                    @endforeach

                    <div class="about_item">   
                        <div class="circle">
                            <div class="story">
                                <span>our <br/> 
                                    story<br/>
                                    continues<br/> 
                                    ...</span>
                            </div>
                        </div>
                    </div>
                </div>
            
            </section>
        </div>
    </main>
@endsection
            