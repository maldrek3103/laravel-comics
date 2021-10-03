@extends('layouts.main');

@section('title')Comics @endsection

@section('content')
    <section id="comics">
        <img src="{{ asset('images/jumbotron.jpg') }}" alt="Jumbotron" class="img-fluid">
        <div class="dark-bg">
            <div class="container">
                <h1>CURRENT SERIES</h1>
                {{-- Cards section --}}
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
            </div>
        </div>
    </section>
@endsection