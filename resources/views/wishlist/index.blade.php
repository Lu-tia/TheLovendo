<x-layouts.main>
    <section class="wishlist section py-5 mt-5 pt-5 vh-100">
        <div class="container mt-5">
            <h2 class="mb-4">I miei preferiti</h2>
            @if($wishlists->isEmpty())
            <p>Non hai ancora aggiunto articoli ai tuoi preferiti</p>
            @else
            <div class="row">
                @foreach($wishlists as $wishlist)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <img src="{{ $wishlist->article->image_url ?? 'https://via.placeholder.com/150' }}" class="card-img-top" alt="{{ $wishlist->article->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $wishlist->article->title }}</h5>
                            <p class="card-text">{{ $wishlist->article->description ?? 'No description available' }}</p>
                            <p class="card-text"><small class="text-muted">Prezzo: {{ $wishlist->article->price }} €</small></p>
                            <p class="card-text"><small class="text-muted">Condizione: {{ $wishlist->article->condition }}</small></p>
                            <p class="card-text"><small class="text-muted">Venduto da: {{ $wishlist->article->user->name }}</small></p>
                            <form action="{{ route('wishlist.update', $wishlist->id) }}" method="POST" class="d-flex mb-2">
                                @csrf
                                @method('PATCH')
                                <input type="number" name="quantity" value="{{ $wishlist->quantity }}" min="1" class="form-control form-control-sm me-2">
                                <button type="submit" class="btn btn-sm btn-primary">Aggiorna</button>
                            </form>
                            <form action="{{ route('wishlist.destroy', $wishlist->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>
</x-layouts.main>
