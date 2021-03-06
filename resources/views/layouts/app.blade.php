<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC COMICS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    @include('partials.header')

    <main>
        @yield('main-cards')
        @yield('main-nav')
        @yield('main-single-card')
        @yield('main-comic-book')

    </main>

    @include('partials.footer')

</body>
</html>