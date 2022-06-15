<x-layouts.landing>
    <article>
        <div class="md:w-3/5 sm:w-3/4 mx-auto">
            @if($post->tags->isNotEmpty())
                <div class="text-sm text-white">
                    <x-blog.tags :tags="$post->tags"/>
                </div>
            @endif
            <h1 class="text-2xl tracking-tight font-bold pb-6 sm:text-3xl md:text-4xl">
                {{ $post->title }}
            </h1>
            <div class="text-base text-white text-center">
            @if($post->featured_image)
                <img src="{{ $post->featured_image }}" alt="Article image" class="h-32 md:h-64 lg:h-72 w-2/3 mx-auto object-cover object-center"/>
                <span class="italic">
                    Publié le
                    <time datetime="{{ $post->publish_date }}">{{ $post->publish_date->translatedFormat('d F Y') }}</time>
                    - {!! $post->featured_image_caption !!}
                    - Lecture : {{ $post->getReadingTime() }} min.
                </span>
            @else
                <span class="italic">
                    Publié le
                    <time datetime="{{ $post->publish_date }}">{{ $post->publish_date->translatedFormat('d F Y') }}</time>
                    - Lecture : {{ $readingTime->getReadingTimeInMinutes() }} min.
                </span>
            @endif
            </div>

            <div class="post-content leading-normal">
                {!! $post->content !!}
            </div>
        </div>
    </article>

    @section('css')
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/highlight.min.js"></script>
        <script>hljs.highlightAll();</script>
        <link rel="stylesheet"
              href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/styles/atom-one-dark.min.css">
    @endsection
</x-layouts.landing>

