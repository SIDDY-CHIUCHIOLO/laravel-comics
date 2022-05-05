@extends('layouts.app')

@section('main-cards')
    <div id="contain-comic-book" class=" py-5">
        <div class="contain-img">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
    </div>

    <div id="container-comic-book-details" class="d-flex justify-content-between py-5">

        {{-- dettagli del singolo fumetto --}}
        <div id="details" class="me-4">
            <h3 class=" fw-bold">{{$comic['title']}}</h3 class="text-center">
            <div id="availability" class="d-flex my-4">
                <div class="navbar navbar-left p-3 d-flex justify-content-between">
                    <P>U.S. Price: <span class="text-white">{{$comic['price']}}</span></P>
                    <p> AVAILABE</p>
                </div>
                <div class="navbar navbar-right p-3 d-flex justify-content-center text-white fw-bold">
                    <p>Check Availability <span class="arrow">▼</span></p>
                </div>
            </div>
            <p>{{$comic['description']}}</p>
        </div>

        {{-- pubblicità --}}
        <div id="advertisement" class="d-flex flex-column">
            <span class="text-secondary fw-bold text-end mb-2">ADVERTISEMENT</span>
            <img src="{{ asset('img/adv.jpg')}}" alt="">
        </div>
    </div>
    @dump($comic)
@endsection