<div class="">
    @foreach($tags as $tag)
        <a href="#" class="text-base md:text-sm text-green-700 dark:text-green-500 no-underline hover:underline">#{{ $tag->name }}</a>
    @endforeach
</div>
