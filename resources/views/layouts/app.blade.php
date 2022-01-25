<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 8 | {{ $title ?? '' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('style')
</head>
<body>
    <x-navbar></x-navbar>
    {{ $slot }}
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>