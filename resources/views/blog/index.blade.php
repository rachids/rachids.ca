<x-layouts.fennec>
    <h1 class="text-3xl">
        Billets et causeries
    </h1>

    <p class="mt-2">
        J'aime écrire et partager, retrouvez ici des notes, des liens utiles, de la veille et tout autre contenu
        que j'estime pertinent.
    </p>

    <div class="mt-5 mb-3 flex flex-col flex-wrap lg:space-x-1">
        @foreach($posts as $post)
            <x-blog.post-card :post="$post" />
        @endforeach
    </div>

    <x-blog.pagination :paginator="$posts"/>

</x-layouts.fennec>
