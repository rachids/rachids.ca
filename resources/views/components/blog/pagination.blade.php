<nav class="bg-white dark:bg-gray-700 my-4 px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6" aria-label="Pagination">
    <div class="hidden sm:block">
        <p class="text-sm text-gray-700 dark:text-gray-200">
            Élément
            <span class="font-medium">{{ $paginator->firstItem() }}</span>
            à
            <span class="font-medium">{{ $paginator->lastItem() }}</span>
            sur un total de
            <span class="font-medium">{{ $paginator->total() }}</span>
            éléments.
        </p>
    </div>
    <div class="flex-1 flex justify-between sm:justify-end">
        @if($paginator->hasPages())
            @if(! $paginator->onFirstPage())
                <x-link.default href="{{ $paginator->previousPageUrl() }}">
                    Précédent
                </x-link.default>
            @endif

            @if($paginator->hasMorePages())
                <x-link.default href="{{ $paginator->nextPageUrl() }}">
                    Suivant
                </x-link.default>
            @endif
        @endif
    </div>
</nav>
