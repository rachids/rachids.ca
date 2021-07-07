<x-layouts.fennec>
    <div class="w-full px-4 md:px-6 text-xl leading-normal" style="font-family:Georgia,serif;">
        <article>
            <div class="font-sans">
                <p class="text-base md:text-sm text-green-500 dark:text-green-300 font-bold">
                    &lt; <a href="{{ route("blog.index") }}" class="text-base md:text-sm font-bold no-underline hover:underline uppercase">
                        Retour au blog
                    </a>
                </p>
                <x-ui.h1>{{ $post->title }}</x-ui.h1>
                <p class="text-sm md:text-base font-normal text-gray-600 dark:text-gray-400 text-center">
                    {{ $post->publish_date->translatedFormat('d F Y') }} -
                    Lecture : {{ $readingTime->getReadingTimeInMinutes() }} min.
                </p>
            </div>

            <div class="post-content">
                @if($post->featured_image)
                    <div class="w-full my-2 text-center italic text-sm">
                        <img src="{{ $post->featured_image }}" class="h-72 w-full object-cover"/>
                        {!! $post->featured_image_caption !!}
                    </div>
                @endif

               {!! $post->content !!}
            </div>
    </article>
    </div>

    <x-blog.tags :tags="$post->tags"/>

    <x-ui.divider/>

    <x-blog.author :author="$post->author"/>

    @section('css')
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <link rel="stylesheet"
              href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/styles/atom-one-dark.min.css">
    @endsection
</x-layouts.fennec>

