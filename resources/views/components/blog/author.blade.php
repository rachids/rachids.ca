<div class="flex w-full items-center font-sans px-4 py-8">
    <img class="w-10 h-10 rounded-full mr-4" src="{{ asset($author->avatar) }}" alt="ma tite face cute">
    <div class="flex-1 px-2">
        <p class="text-base font-bold text-base md:text-xl leading-none mb-2">{{ $author->name }}</p>
        <p class="text-gray-600 text-xs md:text-base">
            {!! $author->bio !!}
        </p>
    </div>
    <div class="justify-end">
        {{--<button class="bg-transparent border border-gray-500 hover:border-emerald-500 text-xs text-gray-500 hover:text-emerald-500 font-bold py-2 px-4 rounded-full">Read More</button>--}}
    </div>
</div>
