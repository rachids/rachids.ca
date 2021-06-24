<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>rachids.ca | {{ $title ?? 'Bienvenue dans mon cybergazon.' }}</title>
    <meta name="author" content="rachids" />
    <meta name="description" content="rachids est un développeur backend PHP basé à Québec." />
    <meta name="keywords" content="php, laravel, backend, api, restful, mysql, javascript, vuejs, tailwindcss" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>


<body class="bg-gray-100 dark:bg-gray-800 font-sans leading-normal tracking-normal">

<x-header/>

<!--Container-->
<div class="container w-full md:max-w-5xl mx-auto pt-20 text-gray-800 dark:text-gray-300">
    {{ $slot }}
</div>
<!--/container-->

{{--<footer class="bg-white border-t border-gray-400 shadow">
    <div class="container max-w-4xl mx-auto flex py-8">

        <div class="w-full mx-auto flex flex-wrap">
            <div class="flex w-full md:w-1/2 ">
                <div class="px-8">
                    <h3 class="font-bold text-gray-900">About</h3>
                    <p class="py-4 text-gray-600 text-sm">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia.
                    </p>
                </div>
            </div>

            <div class="flex w-full md:w-1/2">
                <div class="px-8">
                    <h3 class="font-bold text-gray-900">Social</h3>
                    <ul class="list-reset items-center text-sm pt-3">
                        <li>
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1" href="#">Add social link</a>
                        </li>
                        <li>
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1" href="#">Add social link</a>
                        </li>
                        <li>
                            <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1" href="#">Add social link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



    </div>
</footer>--}}
<x-footer/>

<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
