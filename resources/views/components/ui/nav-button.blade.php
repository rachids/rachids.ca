@props(['active'])

@php
    $classes = ($active ?? false)
                ? "bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                : "text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium";
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
