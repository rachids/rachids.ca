<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="rachids" />
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <meta name="theme-color" content="#e5e7eb"><meta name="background-color" content="#374151">
    {!! SEO::generate(true) !!}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body class="h-screen bg-gray-700 text-gray-200">

<div id="header" class="bg-gradient-to-br from-blue-900 to-blue-400 sm:h-1/4 flex flex-col justify-center shadow-lg">
    <a href="{{ route('home.index') }}" class="text-2xl text-center text-transparent bg-clip-text bg-gradient-to-b from-gray-50 to-gray-300 hover:from-gray-300 hover:to-gray-50 filter drop-shadow-lg font-hero sm:text-7xl sm:p-5">
        rachids
    </a>
</div>

<x-ui.nav/>

<main class="p-5">
    <div class="flex">
        <div class="flex-1 sm:pl-12 sm:pt-12">
            {{ $slot }}
        </div>
    </div>
</main>

<x-footer/>

<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
