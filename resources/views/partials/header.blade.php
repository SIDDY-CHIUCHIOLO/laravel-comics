<header>
    <nav class="my-container">
        <img src="{{ asset('img/dc-logo.png')}}" alt="">
        <ul>
            <li>
                <a href="{{ route('guest-characters')}}" >CHARACTERS</a>
            </li>
            <li>
                <a href="{{ route('guest-comics')}}" class="active">COMICS</a>
            </li>
            <li>
                <a href="{{ route('guest-movies')}}" >MOVIES</a>
            </li>
            <li>
                <a href="{{ route('guest-tv')}}" >TV</a>
            </li>
            <li>
                <a href="{{ route('guest-games')}}" >GAMES</a>
            </li>
            <li>
                <a href="{{ route('guest-collectibles')}}" >COLLECTIBLES</a>
            </li>
            <li>
                <a href="{{route('guest-videos')}}" >VIDEOS</a>
            </li>
            <li>
                <a href="{{ route('guest-fans')}}" >FANS</a>
            </li>
            <li>
                <a href="{{route('guest-news')}}" >NEWS</a>
            </li>
            <li>
                <a href="{{route('guest-shop')}}" >SHOP</a>
            </li>
        </ul>
    </nav>
    <div class="jumbotron"></div>
</header>