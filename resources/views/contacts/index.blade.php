@extends('layouts.main')

@section('title', 'Dart Contacts')

@section('content')
    <main class="main">
        <div class="container_main">
            <section class="contact">
                <div class="container_contact">
                    @foreach ($contactPage as $contact)
                        <h2>{{ $contact->firstTitle }}</h2>
                        <hr/>
                        <p>{{ $contact->firstDesc }}</p>
                        <div class="contacts_items">
                            <div class="contacts_item">
                                <p><span>{{ $contact->firstItemTitle }} </span>{{ $contact->firstItemDesc }}</p>
                                <p><span>{{ $contact->secondItemTitle }} </span>{{ $contact->secondItemDesc }}</p>
                                <p><span>{{ $contact->thirdItemTitle }} </span>{{ $contact->thirdItemDesc }}</p>
                            </div>
                            <div class="contacts_item">
                                <iframe src="{{ $contact->iframe }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                        <h2 class="feed">{{ $contact->secondTitle }}</h2>
                        <hr/>
                    @endforeach
                    
                    @include('forms.feed-back-form')

                </div>
            </section>
        </div>
    </main>  
@endsection
    
            