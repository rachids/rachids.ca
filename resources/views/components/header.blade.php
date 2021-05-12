<header id="header" class="fixed w-full z-10 top-0 bg-white shadow dark:bg-black">
    <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">
        <div class="pl-4">
            <a class="text-gray-900 dark:text-gray-300 text-base no-underline hover:no-underline font-extrabold text-xl"
               href="{{ route("home.index") }}">
                rachids.ca
            </a>
        </div>

        <div class="block lg:hidden pr-4">
            <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-green-500 appearance-none focus:outline-none">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>

        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 md:bg-transparent z-20" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-3">
                    <x-link.nav-link href="{{ route('home.index') }}" :active="request()->routeIs('home.index')">
                        Accueil
                    </x-link.nav-link>
                </li>
                <li class="mr-3">
                    <x-link.nav-link href="{{ route('blog.index') }}" :active="request()->routeIs('blog.*')">
                        Blog
                    </x-link.nav-link>
                </li>
                <li class="mr-3">
                    <button id="theme-switcher" class="py-2 px-4 focus:outline-none" title="Changer le thème">🌙</button>
                </li>
            </ul>
        </div>
    </div>
</header>
