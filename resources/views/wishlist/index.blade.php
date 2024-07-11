<x-layouts.main>
    <section class="wishlist section py-5 mt-5 pt-5 vh-100">
        <div class="container mt-5">
            <h2 class="mb-4">I miei preferiti</h2>
            @if($whishlists->isEmpty())
            <p>Non hai ancora aggiunto articoli ai tuoi preferiti</p>
            @else
            <div class="row">
                @foreach($whishlists as $whishlist)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <img src="{{ $whishlist->article->image ?? 'https://via.placeholder.com/150' }}" class="card-img-top" alt="{{ $whishlist->article->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $whishlist->article->title }}</h5>
                            <p class="card-text">{{ $whishlist->article->body ?? 'No description available' }}</p>
                            <p class="card-text"><small class="text-muted">Prezzo: {{ $whishlist->article->price }} €</small></p>
                            <p class="card-text"><small class="text-muted">Condizione: {{ $whishlist->article->condition }}</small></p>
                            <p class="card-text"><small class="text-muted">Venduto da: {{ $whishlist->article->user->firstName }}</small></p>
                           
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>
</x-layouts.main>
