@extends('layouts.main')

@section('title')Comics @endsection

@section('content')
    <section id="comics">
        <div class="background">
            <div class="container">
                <h3>CURRENT SERIES</h3>
                <div class="cards">
                    @foreach ($comics as $comic)
                        {{-- Each card --}}
                        <div class="card">
                                    
                            {{-- Card image --}}
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            {{-- Card title --}}
                            <h4>{{ $comic['series'] }}</h4>
                                    
                        </div>
                    @endforeach
                </div>
                <div class="load-btn">
                    <button type="button" class="button">LOAD MORE</button>
                </div>
            </div>       
        </div>
        <div class="blue-bar-links">
            <div class="container d-flex justify-between">
                <span class="d-flex justify-center align-center">
                    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="Digital comics" class="img-fluid">
                    <h5>DIGITAL COMICS</h5>
                </span>
                <span class="d-flex justify-center align-center">
                    <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="DC merchandise" class="img-fluid">
                    <h5>DC MERCHANDISE</h5>
                </span>
                <span class="d-flex justify-center align-center">
                    <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="Subscription" class="img-fluid">
                    <h5>SUBSCRIPTION</h5>
                </span>
                <span class="d-flex justify-center align-center">
                    <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="Comic shop locator" class="img-fluid">
                    <h5>COMIC SHOP LOCATOR</h5>
                </span>
                <span class="d-flex justify-center align-center">
                    <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="DC power visa" class="img-fluid">
                    <h5>DC POWER VISA</h5>
                </span>
            </div>
        </div>
    </section>
@endsection