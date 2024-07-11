<div>
    @if (auth()->user()->whishlists)
    @foreach (auth()->user()->whishlists as $query)
        @if ($query->article_id == $article)
        <button type="submit" wire:model='article_id' value="{{$article}}" class="btn btn-outline-primary" >Rimuovi dai preferiti</button>
        @else
        <form wire:submit="store">
            <button type="submit" wire:model='article_id' value="{{$article}}" class="btn btn-outline-primary" >Aggiungi ai preferiti</button>
        </form>
        @endif
    @endforeach
    @else
    <form wire:submit="store">
        <button type="submit" wire:model='article_id' value="{{$article}}" class="btn btn-outline-primary" >Prova</button>
    </form>

@endif
</div>



