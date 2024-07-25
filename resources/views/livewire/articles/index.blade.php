<!-- Start Items Listing Grid -->
<section class="category-page section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="category-sidebar">
                    <!-- Start Single Widget -->
                    <div class="single-widget search">
                        <h3>{{ __('ui.Cerca annunci') }}</h3>
                        <form action="#">
                            <input type="search" wire:model.live='search' placeholder="{{ __('ui.Cerca qui...') }}">
                            <button type="submit"><i class="lni lni-search-alt"></i></button>
                        </form>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <div class="single-widget">
                        <h3>{{ __('ui.Categorie') }}</h3>
                        <ul class="list">
                            <li>
                                <input class="catList" type="radio" id="0" wire:model.live="filteredByCategory"
                                    name="category" value="0">
                                @if($filteredByCategory == null || $filteredByCategory == '0')
                                <label for='AllCategories' class="radio-label-active">
                                    @else
                                    <label for='0' class="radio-label">
                                        @endif
                                        <i class="lni lni-text-align-right"></i> {{ __('ui.Tutte le categorie') }}
                                    </label>
                            </li>
                            @forelse ($categories as $category)
                            <li>
                                <input class="catList" type="radio" id="{{$category->id}}"
                                    wire:model.live="filteredByCategory" name="category" value="{{$category->id}}">
                                @if($filteredByCategory == $category->id)
                                <label for='{{$category->id}}' class="radio-label-active">
                                    @else
                                    <label for='{{$category->id}}' class="radio-label">
                                        @endif
                                        <i class="{{ $iconClasses[$category->name] ?? 'lni lni-layers' }}"></i> {{
                                        __('ui.'.$category->name) }}
                                    </label>
                            </li>
                            @empty
                            <li>{{ __('ui.Nessuna categoria disponibile') }}</li>
                            @endforelse
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                   {{--  <div class="single-widget">
                        <div class="form-group">
                            <h3>{{ __('ui.Nazione') }}</h3>
                            <div class="selector-head">
                                <select class="user-chosen-select form-control form-group-nation" wire:model.live='filteredByNation'>
                                    <option value="all">{{ __('ui.Seleziona una nazione') }}</option>
                                    @forelse ($nations as $nation)
                                    <option value="{{ $nation['name']['common'] }}">{{ $nation['name']['common'] }}
                                    </option>
                                    @empty
                                    <option value="none">{{ __('ui.Nessuna categoria disponibile') }}</option>
                                    @endforelse
                                </select>
                            </div>
                            @error('country')
                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div> --}}
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <div class="single-widget range">
                        <h3>{{ __('ui.Prezzo') }}</h3>
                        <input type="range" class="form-range" name="range2" step="1" min="{{$minPrice}}" max="{{$maxPrice}}" wire:model.live='price' id="rangeInput2">
                        <div class="range-inner form-control">
                            <label class="ms-1">€</label>
                            <input class="form-control-pers" type="number" id="rangePrimary" wire:model.live='price'/>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                    <!-- Start Single Widget -->
                    <div class="single-widget condition">
                        <h3>{{ __('ui.Condizione') }}</h3>
                        <div class="form-check">
                            <input class="catList" type="radio" value="Tutte" name="condition" wire:model.live="condition" id="flexCheckDefault">
                            <label class="{{$condition == 'Tutte' ? 'radio-label-active' : 'radio-label'}}" for="flexCheckDefault">
                                {{ __('ui.Tutte') }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="catList" type="radio" value="Nuovo" name="condition" wire:model.live="condition" id="flexCheckDefault1">
                            <label class="{{$condition == 'Nuovo' ? 'radio-label-active' : 'radio-label'}}" for="flexCheckDefault1">
                                {{ __('ui.Nuovo') }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="catList" type="radio" value="Usato" name="condition" wire:model.live="condition" id="flexCheckDefault2">
                            <label class="{{$condition == 'Usato' ? 'radio-label-active' : 'radio-label'}}" for="flexCheckDefault2">
                                {{ __('ui.Usato') }}
                            </label>
                        </div>
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
                {{ $articles->links('livewire.custom-paginator') }}
            </div>
        </div>
    </div>
</section>
<!-- End Items Listing Grid -->