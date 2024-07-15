<x-layouts.main>
    <section class="category-page section mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-8 col-12">
                    <div class="category-grid-list">
                        <div class="row">
                            <div class="col-12">
                                <div class="category-grid-topbar">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <h5>I miei articoli preferiti</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-grid" role="tabpanel"
                                        aria-labelledby="nav-grid-tab">
                                        <div class="row">
                                            @if ($wishlists->isEmpty())
                                                <p>Non hai ancora aggiunto articoli ai tuoi preferiti</p>
                                            @else
                                                @foreach ($wishlists as $wishlist)
                                                    <div class="col-lg-4 col-md-6 col-12">
                                                        <!-- Start Single Item -->
                                                        <div class="single-item-grid">
                                                            <div class="image">
                                                                <a href="item-details.html"><img
                                                                        src="{{ $wishlist->article->image ?? 'https://via.placeholder.com/150'}}"
                                                                        alt="{{ $wishlist->article->title }}"></a>
                                                            </div>
                                                            <div class="content">
                                                                <a href="javascript:void(0)"
                                                                    class="tag">{{ $wishlist->article->category->name }}</a>
                                                                <h3 class="title">
                                                                    <a
                                                                        href="item-details.html">{{ $wishlist->article->title }}</a>
                                                                </h3>
                                                                <p class="location"><a href="javascript:void(0)"><i
                                                                            class="lni lni-map-marker">
                                                                        </i>{{ $wishlist->article->country }}</a></p>
                                                                <ul class="info">
                                                                    <li class="price">{{ $wishlist->article->price }}€
                                                                    </li>
                                                                    {{-- <li class="ms-auto mt-2"><p class="update-time">{{ $wishlist->$article->created_at->locale('it_IT')->isoFormat('DD MMM YYYY') }}</p></li> --}}
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- End Single Item -->
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Pagination -->
                                                <div class="pagination left">
                                                    <ul class="pagination-list">
                                                        <li><a href="javascript:void(0)">1</a></li>
                                                        <li class="active"><a href="javascript:void(0)">2</a></li>
                                                        <li><a href="javascript:void(0)">3</a></li>
                                                        <li><a href="javascript:void(0)">4</a></li>
                                                        <li><a href="javascript:void(0)"><i
                                                                    class="lni lni-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!--/ End Pagination -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Items Listing Grid -->
    {{-- <section class="wishlist section py-5 mt-5 pt-5 vh-100">
        <div class="container mt-5">
            <h2 class="mb-4">I miei preferiti</h2>
            @if ($wishlists->isEmpty())
            <p>Non hai ancora aggiunto articoli ai tuoi preferiti</p>
            @else
            <div class="row">
                @foreach ($wishlists as $wishlist)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <img src="{{ $wishlist->article->image ?? 'https://via.placeholder.com/150' }}" class="card-img-top" alt="{{ $wishlist->article->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $wishlist->article->title }}</h5>
                            <p class="card-text">{{ $wishlist->article->body ?? 'No description available' }}</p>
                            <p class="card-text"><small class="text-muted">Prezzo: {{ $wishlist->article->price }} €</small></p>
                            <p class="card-text"><small class="text-muted">Condizione: {{ $wishlist->article->condition }}</small></p>
                            <p class="card-text"><small class="text-muted">Venduto da: {{ $wishlist->article->user->firstName }}</small></p>
                           
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section> --}}
</x-layouts.main>
