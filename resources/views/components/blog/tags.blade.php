<div class="font-mono">
    @forelse($tags as $tag)
        <x-ui.link href="{{ route('blog.categorie', $tag->name) }}">{{ $tag->name }}</x-ui.link>
        @if(! $loop->last), @endif
    @empty
        Sans catégorie
    @endforelse
</div>
