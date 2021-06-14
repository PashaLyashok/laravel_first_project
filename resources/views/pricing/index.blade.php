@extends('layouts.main')

@section('title', 'Dart Pricing')
    
@section('content')
    <main class="main">
        <div class="container_main">
            <section class="prices">
                <div class="container_prices">
                    @foreach ($pricingPage as $pricing)
                        <h2>{{ $pricing->mainTitle }}</h2>
                        <hr/>
                        <p>{{ $pricing->mainDesc }}</p>    
                    @endforeach
                    
                    <div class="prices_tabs">
                        @foreach ($products_main as $product)
                            @if ($product->price == 0)
                                <div class="tab">
                                    <h3 class="tab5"><span class="price">$</span>{{ $product->price }}<br/><span class="price">per month</span></h3>
                                    <span class="but_hot">{{ $product->title }}</span>
                                    <p class="tab_p">{{ $product->description }}<br/>
                                    <button class="btn_hot"name="btn"><a class="link_trial" href="{{ route('order.index') }}">Try for free</a></button>
                                    </p>                           
                                </div>    
                            @else
                                <div class="tab">
                                    <h3 class="tab1"><span class="price">$</span>{{ $product->price }}<br/><span class="price">per month</span></h3>
                                    <span class="but">{{ $product->title }}</span>
                                    <p class="tab_p">{{ $product->description }}
                                    <button name="btn"><a class="link_main" href="{{ route('order.index') }}">buy now</a></button>
                                    </p>
                                </div>
                            @endif
                        @endforeach                       
                        @foreach ($products_css as $product)
                            <div class="tab">
                                <h3 class="tab_st"><span class="price">$</span>{{ $product->price }}<br/><span class="price">per month</span></h3>
                                <span class="but_st">{{ $product->title }}</span>
                                <p class="tab_p">{{ $product->description }}
                                <button class="btn_st" name="btn" style="margin-top: 80px;"><a class="link_css" href="{{ route('order.index') }}">by now</a></button>
                                </p>                               
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
        