@props(['active'])

@php
    $classes = ($active ?? false)
                ? "bg-gray-900 text-white block px-3 py-2 rounded-md text-center text-base font-medium"
                : "text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-center text-base font-medium";
    $ariaCurrent = ($active ?? false)
            ? "page"
            : "";
@endphp

<a {{ $attributes->merge([
    "class" => $classes,
    "href" => "#",
    "aria-current" => $ariaCurrent
]) }}>
    {{ $slot }}
</a>
