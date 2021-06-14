<form class="contact_form" action="{{ route('feedback.store') }}" method="POST">
    @csrf
    <div class="container_input">
        <input class="main" type="text" placeholder="Name" name="name" 
            @if (isset(Auth::user()->name))
                value="{{ Auth::user()->name }}"
            @else
                value = "" 
            @endif
            />
        <input class="main" type="email" placeholder="Email" name="email" 
            @if (isset(Auth::user()->email))
                value="{{ Auth::user()->email }}"
            @else
                value = "" 
            @endif
            />
        <input class="main" type="phone" placeholder="Phone" name="phone" required />
    </div>
    <textarea cols="10" rows="5" placeholder="Message" name="message" required></textarea>
    <div class="container_check">
        <button class="order_btn" name="send">send</button>
    </div>
</form>
