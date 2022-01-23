<footer class="bg-black border-t border-gray-400 shadow mt-5">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
        <div class="flex justify-center space-x-6 md:order-2">
            <x-svg.github />

            <x-svg.twitter />

            <x-svg.youtube class="text-gray-400 hover:text-gray-500" />

            <x-svg.twitch />
        </div>
        <div class="mt-8 md:mt-0 md:order-1">
            <p class="text-center text-base text-gray-400">
                <x-ui.link href="{{ route('home.index') }}">rachids.ca</x-ui.link>
                - &laquo; what matters is always first. &raquo;
            </p>
        </div>
    </div>
</footer>
