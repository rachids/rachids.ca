<div class="w-auto border-1 dark:border-0 bg-white dark:bg-gray-700 shadow flex mb-5">
    <div class="hidden md:block h-auto w-1/2 bg-cover rounded-tl rounded-bl text-center overflow-hidden" style="background-image: url('{{ $post->featured_image ?? '' }}')" title="{{ strip_tags($post->featured_image_caption) }}">
    </div>
    <div class="flex flex-col w-full">
        <div class="rounded-b p-4 flex flex-1 leading-normal mb-auto">
            <div class="mb-10">
                <p class="text-sm text-gray-900 dark:text-gray-300 flex items-center">
                    @forelse($post->tags as $tag)
                        #{{ $tag->name }}
                    @empty
                        Sans catégorie
                    @endforelse
                </p>
                <div class="text-black dark:text-gray-200 font-bold text-xl mb-2">
                    <a href="{{ route('blog.show', $post->slug) }}" class="hover:text-indigo-600 dark:hover:text-blue-200">
                        {{ $post->title }}
                    </a>
                </div>
                <p class="text-grey-darker text-base">
                    {{ $post->excerpt }}
                </p>
            </div>
        </div>
        <div class="flex flex-0 justify-between m-2 border-t-2 pt-3 pb-1">
            <div class="pl-5">
                <a href="{{ route('blog.show', $post->slug) }}" class="text-indigo-600 dark:text-blue-200 inline-flex items-center font-semibold tracking-wide">
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
