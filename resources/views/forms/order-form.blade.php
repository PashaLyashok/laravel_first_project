<form class="form_order" action={{ route('order.store') }} method="POST">
    @csrf
    <div class="container_input">
        <p>Enter Your Name -> </p>
        <input class="main" type="text" placeholder="Name" maxlength="35" name="name" 
            @if (isset(Auth::user()->name))
                value="{{ Auth::user()->name }}"
            @else
                value = "" 
            @endif
        required />
        <p>Enter Your email -> </p>
        <input class="main" type="email" placeholder="test@gmail.com" maxlength="35" name="email" 
            @if (isset(Auth::user()->email))
                value="{{ Auth::user()->email }}"
            @else
                value = "" 
            @endif
        required />
        <p>Enter Your phone -> </p>
        <input class="main" type="phone" placeholder="+375(code)*******" maxlength="35" name="phone" required />
    </div>
    <div class="product_packs">
        <div class="product_pack1">
            <p>Main package:</p>
            @foreach ($products_main as $product)
                <input type="radio" name="product1" value="{{ $product->title }}" /><strong>{{ $product->title }}</strong><br/>
            @endforeach
        </div>
        <div class="product_pack2">
            <p>Style package:</p>
            @foreach ($products_css as $product)
                <input type="radio" name="product2" value="{{ $product->title }}" /><strong>{{ $product->title }}</strong><br/>
            @endforeach
        </div>
    </div>
    <div class="order">
        <button class="order_btn" name="order">Order</button>
    </div>
</form>