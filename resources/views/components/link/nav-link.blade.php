@props(['active'])

@php
    $classes = ($active ?? false)
            ? "inline-block py-2 px-4 ml-2 text-gray-100 no-underline hover:text-white font-bold"
            : "inline-block py-2 px-4 ml-2 text-gray-300 no-underline hover:text-white hover:text-underline";
@endphp

<a {{ $attributes->merge([
        "href" => "#",
        "class" => $classes
    ]) }}>
    {{ $slot }}
</a>
