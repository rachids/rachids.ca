<a {{ $attributes->merge([
    "class" => "text-green-500 no-underline hover:underline",
    "href" => "#"
]) }}>
    {{ $slot }}
</a>
