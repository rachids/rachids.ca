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
    <x-tracking></x-tracking>
</head>

<body class="h-screen bg-gray-700 text-gray-200">

<section id="header" class="bg-gradient-to-br from-blue-900 to-blue-400 h-1/4 flex flex-col items-center shadow-lg">
    <h2 class="p-5 text-7xl text-gray-300 font-hero">
        rachids
    </h2>

    <div class="flex gap-4">
        <a href="{{ route("blog.index") }}" class="text-red-100 hover:text-red-300">Blogue</a>
    </div>
</section>

<main class="p-5">
    <div class="flex">
        <div class="flex-1 pl-12 pt-12">
            <h1 class="text-2xl tracking-tight font-extrabold sm:text-3xl md:text-4xl">
                <span class="block xl:inline">Développeur Backend</span>
                <span class="block text-blue-400 xl:inline">PHP &amp; Laravel</span>
            </h1>
            <p class="mt-3 max-w-md text-base text-gray-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                J’accompagne les organisations dans la conception et la réalisation de solutions de gestion personnalisées
                afin de faciliter le travail de leurs équipes au quotidien et d’apporter de la valeur ajoutée dans les
                différents processus de gestion.
            </p>
            <p class="mt-3 max-w-md text-base text-gray-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                Découvrez également mon
                <a href="{{ route("blog.index") }}" class="font-light text-blue-200 hover:underline hover:text-blue-400">blogue</a>
                dans lequel je partage mon expérience de développeur et où j'aborde divers sujets.
            </p>
        </div>

        <div class="hidden lg:block">
            <img src="{{ asset('storage/img/laptop.jpg') }}" class="object-contain rounded mix-blend-color-dodge"/>
        </div>
    </div>

</main>

<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
