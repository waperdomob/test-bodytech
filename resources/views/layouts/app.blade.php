<!DOCTYPE html>
<html lang="{{ str('en') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCb1yis3T2mUXbvyvAMr1I9+U46RDW5wUqUKlroj+T+9F8g4t6t0eO+G2qNpiY" crossorigin="anonymous">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(['resources/sass/app.scss', 'resources/js/bootstrap.js'])

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
    <div id="app">

        <main class="py-4 container">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
