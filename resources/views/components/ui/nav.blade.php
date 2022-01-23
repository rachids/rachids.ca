<nav>
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center h-16">
            <div class="flex">
                <div class="-ml-2 mr-2 flex items-center md:hidden">
                    <button id="hamburger-icon" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>

                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>

                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-4">
                    <x-ui.nav-button href="{{ route('home.index') }}" :active="request()->routeIs('home.index')">
                        Accueil
                    </x-ui.nav-button>

                    <x-ui.nav-button href="{{ route('blog.index') }}" :active="request()->routeIs('blog.*')">
                        Blog
                    </x-ui.nav-button>

                    <x-ui.nav-button href="{{ route('home.about') }}" :active="request()->routeIs('home.about')">
                        À propos
                    </x-ui.nav-button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <x-ui.nav-button-mobile href="{{ route('home.index') }}" :active="request()->routeIs('home.index')">
                Accueil
            </x-ui.nav-button-mobile>

            <x-ui.nav-button-mobile href="{{ route('blog.index') }}" :active="request()->routeIs('blog.*')">
                Blog
            </x-ui.nav-button-mobile>

            <x-ui.nav-button-mobile href="{{ route('home.about') }}" :active="request()->routeIs('home.about')">
                À propos
            </x-ui.nav-button-mobile>
        </div>
    </div>
</nav>
