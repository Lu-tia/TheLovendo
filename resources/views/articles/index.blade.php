<x-layouts.main>
    <div class="mt-5">
        @livewire('articles.index', ['filteredByCategory' => $id])
    </div>

</x-layouts.main>
