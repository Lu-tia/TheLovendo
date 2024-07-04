    <!-- Start Items Listing Grid -->
    <section class="category-page section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="category-sidebar">
                        <!-- Start Single Widget -->
                        <div class="single-widget search">
                            <h3>Cerca Annunci</h3>
                            <form action="#">
                                <input type="search" wire:model.live='search' placeholder="Cerca qui...">
                                <button type="submit"><i class="lni lni-search-alt"></i></button>
                            </form>
                        </div>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="single-widget">
                            <h3>Categorie</h3>
                            <ul class="list">
                                <li>
                                    <input class="catList" type="radio" id="AllCategories"wire:model.live="filteredByCategory" name="category" value="AllCategories" >
                                    <label for='AllCategories' class="radio-label">
                                        <i class="lni lni-dinner"></i> Tutte le categorie
                                    </label>
                                </li>
                                @forelse ($categories as $category)
                                <li>
                                    <input class="catList" type="radio" id="{{$category->id}}" wire:model.live="filteredByCategory" name="category" value="{{$category->id}}">
                                    <label for='{{$category->id}}' class="radio-label">
                                        <i class="lni lni-dinner "></i> {{$category->name}}
                                        <span>{{$category->articles->count()}}</span>
                                    </label>
                                </li>
                                    
                                @empty
                                    Nessuna categoria disponibile
                                @endforelse

                                
                                
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="single-widget range">
                            <h3>Prezzo</h3>
                            <input type="range" class="form-range" name="range" step="1" min="100" max="10000"
                                value="10" onchange="rangePrimary.value=value">
                            <div class="range-inner">
                                <label>€</label>
                                <input type="text" id="rangePrimary" placeholder="100" />
                            </div>
                        </div>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="single-widget condition">
                            <h3>Condizione</h3>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                <label class="form-check-label" for="flexCheckDefault1">
                                    Tutte
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                <label class="form-check-label" for="flexCheckDefault2">
                                    Nuovo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                <label class="form-check-label" for="flexCheckDefault3">
                                    Usato
                                </label>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="single-widget banner">
                            <h3>Advertisement</h3>
                            <a href="javascript:void(0)">
                                <img src="https://via.placeholder.com/780x1300" alt="#">
                            </a>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="category-grid-list">
                        <div class="row">


                            @foreach ($articles as $article)

                            <x-card-list :article=$article />

                            @endforeach

                        </div>
                    </div>
                    <div class="d-flex mt-3 align-item-center justify-content-center">
                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Items Listing Grid -->