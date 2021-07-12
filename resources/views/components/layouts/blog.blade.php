<html lang="fr" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>rachids.ca | {{ $title ?? 'Causeries' }}</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <meta name="theme-color" content="#e5e7eb"><meta name="background-color" content="#374151">
    {!! SEO::generate(true) !!}
    <meta name="author" content="rachids">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
    <x-tracking></x-tracking>
</head>
<body class="dark:bg-gray-800">
    <x-header />

    <main class="mb-auto dark:text-gray-300">
        <div class="max-w-7xl mx-auto pt-12">
            {{ $slot }}
        </div>
    </main>

    <x-footer />
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
