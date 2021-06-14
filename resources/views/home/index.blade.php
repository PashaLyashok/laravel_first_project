@extends('layouts.main')

@section('title', 'Dart Home')
    
@section('content')
    <main class="main">
        @foreach ($homePage as $home)
            <section class="banner">
                <div class="container_banner">
                    <div class="banner_content">
                        <h1>{{ $home->firstSectionTitle }}</h1>
                        <P>{{ $home->firstSectionDesc }}</P>
                        <button class="buy_now"><a class="a_now" href="pricing">buy now</a></button>
                        <button class="try"><a class="a_try" href="pricing">try for free</a></button>
                    </div>
                    <div class="banner_video">
                        <div class="bg_video">
                            <div class="video">
                                <button class="btn_video"><a class="a_video" href="{{ $home->bannerVideoLink }}" target="_blank"><img src="/image/play_arrow.png"></a></button>
                                <span>{{ $home->bannerButtonDesc }}</span>
                            </div>
                        </div>   
                    </div>
                </div>
            </section>
            <section class="easy">
                <div class="container_easy">
                    <h2>{{ $home->secondSectionMaxTitle }}</h2>
                    <h4>{{ $home->secondSectionMinTitle }}</h4>
                    <p>{{ $home->secondSectionDesc }}</p>
                    <div class="easy_tools">
                        @foreach ($tools as $tool)
                            <div class="tool">
                                <img src="{{ $tool->img }}" alt="{{ $tool->title }}">
                                <h4>{{ $tool->title }}</h4>
                                <p>{{ $tool->description }}</p>
                            </div>
                        @endforeach
                    </div>
                    <button class="get_started"><a class="a_started" href="services">{{ $home->secondSectionButtonDesc }}</a></button>
                </div>
            </section>
            <section class="items">
                <div class="container_items">
                    <div class="item item1">
                        <img src="/image/item-1.png"/>
                        <p>1200+<br/>
                        Business</p>
                    </div>
                    <div class="item item2">
                        <img src="/image/item-2.png"/>
                        <p>600+</br>
                        Downloads</p>
                    </div>
                    <div class="item item3">
                        <img src="/image/item-3.png"/>
                        <p>3000+<br/>
                        Free Installs</p>
                    </div>
                    <div class="item item4">
                        <img src="/image/item-4.png"/>
                        <p>4000+<br/>
                        Pro Users</p>
                    </div>
                </div>
            </section>
            <section class="services">
                <div class="container_services">
                    <h2>{{ $home->thirdSectionMaxTitle }}</h2>
                    <p>{{ $home->thirdSectionMinTitle }}</p>
                    <div class="accord">
                        @foreach ($accordions as $accordion)
                            <button class="accordion"><img src="{{ $accordion->buttonImg}}" alt="{{ $accordion->buttonDesc }}"/>{{ $accordion->buttonDesc}}</button>
                            <div class="panel">
                                <div class="container_panel">
                                    <img src="{{ $accordion->panelImg }}" alt="notebook">
                                    <p>{{ $accordion->panelDesc }}</p>
                                </div> 
                            </div> 
                        @endforeach
                    </div> 
                </div>
            </section>
            <section class="feed_back">
                <div class="container_feed">
                    <div class="feed_left">
                        <h2>{{ $home->lastSectionTitle }}</h2>
                        <p{{ $home->lastSectionDesc }}</p>
                        <button class="get_starter"><a class="a_starter" href="extension">{{ $home->lastSectionButtonDesc }}</a></button>
                    </div>
                    <div class="feed_right">
                        @foreach ($feedbacks as $feedback)
                            <div class="feed_item"> 
                                <!-- <img src="/image/feed1.png" alt="photo"> -->
                            <div class="right_content">
                                <h4>{{ $feedback->name }}</h4>
                                <p>{{ $feedback->message }}</p>
                                <p>{{ $feedback->created_at }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <section class="contact">
                <div class="container_contact">
                    <h2>Contact Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iusto similique accusantium nam dignissimos alias magnam?</p>
                    
                    @include('forms.feed-back-form')

                </div>
            </section>
        @endforeach
    </main>
@endsection