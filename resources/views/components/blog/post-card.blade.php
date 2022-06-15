<div class="transition duration-500 ease-in-out flex bg-gray-900 shadow hover:shadow-xl hover:bg-gray-800 rounded-lg m-2 lg:m-4 overflow-hidden">
    <div class="flex-shrink-0 hidden md:block">
        <a href="{{ route('blog.show', $post->slug) }}">
            <img class="h-full w-48 lg:w-64 object-cover"
                 src="{{ $post->featured_image ?? '' }}"
                 title="{{ strip_tags($post->featured_image_caption) }}"
                 alt="{{ strip_tags($post->featured_image_caption) }}"
            />
        </a>
    </div>

    <div class="flex-1 p-6 flex flex-col justify-between">
        <div class="flex-1 p-3">
            <p class="text-sm text-gray-300 flex items-center font-mono">
                <x-blog.tags :tags="$post->tags"/>
            </p>
            <a href="{{ route('blog.show', $post->slug) }}" class="block mt-2">
                <p class="text-gray-200 font-bold text-2xl mb-2 hover:text-blue-200">
                    {{ $post->title }}
                </p>
                <p class="mt-3 text-grey-darker text-base font-serif">
                    {{ $post->excerpt }}
                </p>
            </a>
        </div>
        <div class="mt-6 p-3 flex items-center">
            <div class="flex-shrink-0">
                <a href="https://twitter.com/rachid_in">
                    <span class="sr-only">rachids</span>
                    <img class="h-10 rounded-full"
                         src="https://i.imgur.com/3A7zVlV.png?1"
                         alt="Avatar de rachids" />
                </a>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium">
                    <a href="https://twitter.com/rachid_in" class="hover:underline"> rachids </a>
                </p>
                <div class="flex space-x-1 text-sm text-gray-500">
                    <time datetime="{{ $post->publish_date->format("Y-m-d") }}"> {{ \App\Helpers\DateHelper::showHumanOrDate($post->publish_date) }} </time>
                    <span aria-hidden="true"> &middot; </span>
                    <span> {{ $post->getReadingTime() }} min. </span>
                </div>
            </div>
        </div>
    </div>
</div>
