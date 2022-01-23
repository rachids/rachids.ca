<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="rachids" />
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="theme-color" content="#e5e7eb"><meta name="background-color" content="#374151">
    {!! SEO::generate(true) !!}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body class="2xl:bg-gray-300 bg-gray-700 text-gray-200">

<div class="h-screen flex flex-col">
    <div id="header" class="flex-none flex justify-center bg-gradient-to-br from-blue-900 to-blue-400 w-full sm:h-36 2xl:drop-shadow-none drop-shadow-lg">
        <a href="{{ route('home.index') }}" class="sm:p-5 2xl:p-2 drop-shadow-lg hover:drop-shadow-none">
            <img src="{{ asset('storage/img/banner-logo.webp') }}" alt="rachids" class="object-center object-cover h-16"/>
        </a>
    </div>

    <div class="flex-grow bg-gray-700 2xl:w-9/12 2xl:mx-auto 2xl:rounded-lg 2xl:-mt-10 2xl:pb-10 mt-5 2xl:drop-shadow-md">
        <x-ui.nav/>

        <main class="p-5 grid justify-center">
            <div class="sm:pl-12 sm:pt-12">
                {{ $slot }}
            </div>
        </main>
    </div>

    <x-footer/>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
