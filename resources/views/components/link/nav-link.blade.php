@props(['active'])

@php
    $classes = ($active ?? false)
            ? "inline-block py-2 px-4 ml-2 text-gray-900 dark:text-gray-100 no-underline dark:hover:text-white font-bold"
            : "inline-block py-2 px-4 ml-2 text-gray-600 dark:text-gray-300 no-underline dark:hover:text-white hover:text-gray-900 hover:text-underline";
@endphp

<a {{ $attributes->merge([
        "href" => "#",
        "class" => $classes
    ]) }}>
    {{ $slot }}
</a>
