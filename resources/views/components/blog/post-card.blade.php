<div class="transition duration-500 ease-in-out relative flex flex-col bg-gray-900 shadow hover:shadow-xl hover:bg-gray-800 rounded-lg p-4 sm:m-2">
    <a href="{{ route('blog.show', $post->slug) }}" class="hidden md:block h-40 w-full bg-cover rounded-tl rounded-lg text-center overflow-hidden" style="background-image: url('{{ $post->featured_image ?? '' }}')" title="{{ strip_tags($post->featured_image_caption) }}">
        <span class="sr-only">
            Lire l'article
        </span>
    </a>
    <div class="flex flex-col w-full">
        <div class="rounded-b p-4 flex flex-1 leading-normal mb-auto">
            <div class="mb-10">
                <p class="text-sm text-gray-300 flex items-center font-mono">
                    <x-blog.tags :tags="$post->tags"/>
                </p>
                <div class="text-gray-200 font-bold text-xl mb-2">
                    <a href="{{ route('blog.show', $post->slug) }}" class="hover:text-blue-200">
                        {{ $post->title }}
                    </a>
                </div>
                <p class="text-grey-darker text-base font-serif">
                    {{ $post->excerpt }}
                </p>
            </div>
        </div>
        <div class="absolute inset-x-0 bottom-0 flex flex-0 justify-between m-2 border-t-2 pt-3 pb-1 font-serif">
            <div class="pl-5">
                <a href="{{ route('blog.show', $post->slug) }}" class="text-blue-200 inline-flex items-center font-semibold tracking-wide">
                    <span class="hover:underline">
                        Lire
                    </span>
                </a>
            </div>
            <div class="flex">
                <div class="text-sm">
                    <p class="text-grey-dark">
                        <span title="{{ $post->publish_date->format("d/m/Y") }}">Publié {{ \App\Helpers\DateHelper::showHumanOrDate($post->publish_date) }}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
