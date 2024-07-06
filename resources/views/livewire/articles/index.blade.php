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
                                    <input class="catList" type="radio" id="0"wire:model.live="filteredByCategory" name="category" value="0" >
                                    @if($filteredByCategory == null || $filteredByCategory == '0')
                                        <label for='AllCategories' class="radio-label-active">
                                            <i class="lni lni-text-align-right"></i> Tutte le categorie
                                        </label>
                                    @else
                                        <label for='0' class="radio-label">
                                            <i class="lni lni-text-align-right"></i> Tutte le categorie
                                        </label>
                                    @endif
                                </li>
                                @forelse ($categories as $category)
                                <li>
                                    <input class="catList" type="radio" id="{{$category->id}}" wire:model.live="filteredByCategory" name="category" value="{{$category->id}}">
                                        @if($filteredByCategory == $category->id)
                                            <label for='{{$category->id}}' class="radio-label-active">
                                                <i class="{{ $iconClasses[$category->name] ?? 'lni lni-layers' }}"></i> {{$category->name}}
                                                <span>{{$category->articles->count()}}</span>
                                            </label>
                                        @else
                                            <label for='{{$category->id}}' class="radio-label">
                                                <i class="{{ $iconClasses[$category->name] ?? 'lni lni-layers' }}"></i> {{$category->name}}
                                                <span>{{$category->articles->count()}}</span>
                                            </label>
                                        @endif
                                    
                                </li>
                                    
                                @empty
                                    Nessuna categoria disponibile
                                @endforelse

                                
                                
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                         <!-- Start Single Widget -->
                         <div class="single-widget">
                            <div class="form-group">
                                <h3>Nazione</h3>
                                <div class="selector-head">
                                    <select class="user-chosen-select form-control" wire:model.live='filteredByNation'>
                                        <option value="all">Seleziona una nazione</option>
                                        @forelse ($nations as $nation)
                                            <option value="{{ $nation['name']['common'] }}">{{ $nation['name']['common'] }}</option>
                                        @empty
                                            <option value="none">Nessuna categoria disponibile</option>
                                        @endforelse
                                    </select>
                                </div>
                                @error('country')
                                    <div class="alert alert-danger mt-2"> {{ $message }} </div>
                                @enderror
                            </div>
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
                  
                    {{ $articles->links('livewire.custom-paginator') }} 
                   
                </div>
            </div>
        </div>
    </section>
    <!-- End Items Listing Grid -->