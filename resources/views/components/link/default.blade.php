<a
    {{ $attributes->merge([
        "href" => "#",
        "class" => "relative inline-flex items-center px-4 py-2 ml-4 border border-gray-800 text-sm font-medium rounded-md text-gray-700 bg-white dark:bg-gray-300 hover:bg-gray-50"
    ]) }}>
    {{ $slot }}
</a>
