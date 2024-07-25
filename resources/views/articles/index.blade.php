<x-layouts.main>
    <div class="mt-5">
        @livewire('articles.index', ['filteredByCategory' => $id, 'query' => request()->query('query')])
    </div>
</x-layouts.main>
