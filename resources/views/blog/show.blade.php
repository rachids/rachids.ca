<x-layouts.landing>
    <article>
        <div class="md:flex">
            <section class="break-words w-full md:w-1/4 lg:w-1/6">
                <div class="mx-auto md:mx-0 md:sticky md:top-2 md:mt-6 border rounded-lg">
                    <div class="flex items-center text-sm text-white p-3">
                        <x-svg.calendar class="flex-shrink-0 mr-1.5 h-5 w-5 text-blue-400" />
                        <span>
                            Publié le
                            <time datetime="{{ $post->publish_date }}">{{ $post->publish_date->translatedFormat('d F Y') }}</time>
                        </span>
                    </div>
                    <div class="mt-2 flex items-center text-sm text-white border-t p-3">
                        <x-svg.timer class="flex-shrink-0 mr-1.5 h-5 w-5 text-blue-400" />
                        <span>Lecture : {{ $readingTime->getReadingTimeInMinutes() }} min.</span>
                    </div>
                    @if($post->featured_image)
                    <div class="mt-2 flex items-center text-sm text-white text-left border-t p-3">
                        <x-svg.photo class="flex-shrink-0 mr-1.5 h-5 w-5 text-blue-400"/>
                        <span>{!! $post->featured_image_caption !!}</span>
                    </div>
                    @endif
                    @if($post->tags->isNotEmpty())
                    <div class="mt-2 flex items-center text-sm text-white border-t p-3">
                        <x-svg.tag class="flex-shrink-0 mr-1.5 h-5 w-5 text-blue-400" />
                        <x-blog.tags :tags="$post->tags"/>
                    </div>
                    @endif
                    <div class="mt-2 flex items-center text-sm text-white border-t p-3">
                        <x-svg.back class="flex-shrink-0 mr-1.5 h-5 w-5 text-blue-400" />
                        <a href="{{ route('blog.index') }}" class="text-base md:text-sm text-green-700 dark:text-green-500 no-underline hover:underline">
                            Retour au blog
                        </a>
                    </div>
                </div>
            </section>
            <section class="flex-1 pl-10">
                <h1 class="text-2xl italic text-center tracking-tight font-bold p-6 sm:text-3xl md:text-4xl">
                    {{ $post->title }}
                </h1>
                @if($post->featured_image)
                    <img src="{{ $post->featured_image }}" alt="Article image" class="h-32 md:h-64 lg:h-72 w-2/3 mx-auto object-cover object-center"/>
                @endif

                <div class="post-content text-xl leading-normal">
                    {!! $post->content !!}
                </div>

                <x-ui.divider/>

                <x-blog.author :author="$post->author"/>
            </section>
        </div>

    </article>

    @section('css')
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <link rel="stylesheet"
              href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/styles/atom-one-dark.min.css">
    @endsection
</x-layouts.landing>

