<a {{ $attributes->merge([
    "href" => config("social.twitch"),
    "class" => "text-gray-400 hover:text-gray-500",
    "title" => "Vers ma chaîne Twitch"
]) }}>
    <span class="sr-only">Twitch</span>
    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
        <path fill-rule="evenodd" d="M11.571 4.714h1.715v5.143H11.57zm4.715 0H18v5.143h-1.714zM6 0L1.714 4.286v15.428h5.143V24l4.286-4.286h3.428L22.286 12V0zm14.571 11.143l-3.428 3.428h-3.429l-3 3v-3H6.857V1.714h13.714Z" clip-rule="evenodd"/>
    </svg>
</a>
