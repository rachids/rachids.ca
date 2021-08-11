<x-layouts.landing>
    <h1 class="text-2xl tracking-tight font-extrabold sm:text-3xl md:text-4xl">
        <span class="xl:inline">Billets</span>
        <span class="text-blue-400 xl:inline">et causeries</span>
    </h1>

    <p class="mt-2">
        J'aime écrire et partager, retrouvez ici des notes, des liens utiles, de la veille et tout autre contenu
        que j'estime pertinent.
    </p>

    <div class="flex w-full sm:p-10 pt-2">
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-2 justify-center">
        @foreach($posts as $post)
            <x-blog.post-card :post="$post" />
        @endforeach
        </div>
    </div>

    <x-blog.pagination :paginator="$posts"/>

</x-layouts.landing>
