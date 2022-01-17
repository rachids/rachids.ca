<a {{ $attributes->merge([
    "class" => "text-blue-200 no-underline hover:underline",
    "href" => "#"
]) }}>{{ $slot }}</a>
