<html lang="fr" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>rachids.ca | {{ $title ?? 'Causeries' }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
    <meta name="description" content="Blog de rachids dans lequel vous pourrez trouver, entre autres, des articles sur le développement Backend à travers Laravel et PHP.">
    <meta name="keywords" content="blog, rachids, développeur, backend, laravel, php">
    <meta name="author" content="rachids">
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
