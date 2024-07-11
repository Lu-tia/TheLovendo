<div>
    @forelse (auth()->user()->whishlists as $query)
        @if ($query->article_id == $article->id)
        <form wire:submit="destroy({{$article->id}})">
        <button type="submit" class="btn btn-outline-primary" >Rimuovi dai preferiti</button>
        </form>
        @else
        <form wire:submit="store">
            <button type="submit" wire:model='article_id' value="{{$article->id}}" class="btn btn-outline-primary" >Aggiungi ai preferiti</button>
        </form>
        @endif
    @empty
    <form wire:submit="store">
        <button type="submit" wire:model='article_id' value="{{$article->id}}" class="btn btn-outline-primary" >Aggiungi ai preferiti</button>
    </form>
    @endforelse    
</div>



