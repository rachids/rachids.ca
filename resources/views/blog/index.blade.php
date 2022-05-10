<x-layouts.landing>
    <h1 class="text-2xl tracking-tight font-extrabold sm:text-3xl md:text-4xl">
        <span class="xl:inline">Billets et causeries</span>
    </h1>

    <p class="mt-2 font-serif">
        J'aime écrire et partager, retrouvez ici des notes, des liens utiles, de la veille et tout autre contenu
        que j'estime pertinent.
    </p>

    <div class="w-full sm:p-10 pt-2">
        @forelse($posts as $post)
            <x-blog.post-card :post="$post" />
        @empty
            <p class="tracking-tight sm:text-4xl">
                <span class="block">🥺 Aucun article trouvé.</span>
            </p>
        @endforelse
    </div>

    <x-blog.pagination :paginator="$posts"/>

</x-layouts.landing>
