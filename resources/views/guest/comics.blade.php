@extends('layouts.app')


@section('main-cards')
    <div id="my-container-cards">
        <div class="my-container warpper-cards">
            @foreach ($comics as $comicsElement)
                <div class="contain-cards">
                    <div class="contain-img">
                        <img src="{{$comicsElement['thumb']}}" alt="">
                    </div>
                    <a href="{{ url('/')}}">{{$comicsElement['series']}}</a>
                </div>
            @endforeach
            <button>LOAD MORE</button>
        </div>
    </div>
@endsection


@section('main-nav')
    <nav id="main-nav-container">
        <div class="my-container">
            <ul>
                <li>
                    <a href="{{ url('/')}}" >
                        <div>
                            <img src="{{ asset('img/buy-comics-digital-comics.png')}}" alt="">
                        </div>
                        <p>DIGITAL COMICS</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/')}}" >
                        <div>
                            <img src="{{ asset('img/buy-comics-merchandise.png')}}" alt="">
                        </div>
                        <p>DC MERCHANDISE</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/')}}" >
                        <div>
                            <img src="{{ asset('img/buy-comics-subscriptions.png')}}" alt="">
                        </div>
                        <p>SUBSCRIPTION</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/')}}" >
                        <div>
                            <img src="{{ asset('img/buy-comics-shop-locator.png')}}" alt="">
                        </div>
                        <p>COMIC SHOP LOCATOR</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/')}}" >
                        <div>
                            <img src="{{ asset('img/buy-dc-power-visa.svg')}}" alt="">
                        </div>
                        <p>DC POWER VISA</p>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
@endsection