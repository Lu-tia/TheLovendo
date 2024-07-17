<div>
    @isset($wishlist)
    @if (in_array($article->id, $wishlist))
    <form wire:submit.prevent="destroy({{ $article->id }})">
        <button type="submit" class="btn btn-outline-primary">{{ __('ui.Rimuovi dai preferiti')}}</button>
    </form>
@else
    <form wire:submit.prevent="store">
        <button type="submit" wire:model="article_id" value="{{ $article->id }}" class="btn btn-outline-primary">{{ __('ui.Aggiungi ai preferiti')}}</button>
    </form>
@endif
@endisset
</div>