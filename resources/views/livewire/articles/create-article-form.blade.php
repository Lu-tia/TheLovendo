<!-- Start Post Ad Block Area -->

<div class="dashboard-block mt-0">
    <h3 class="block-title">Inserisci un Articolo</h3>
    <div class="inner-block">
        <!-- Start Post Ad Tab -->
        <div class="post-ad-tab">        
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-item-info" role="tabpanel"
                aria-labelledby="nav-item-info-tab">
                <!-- Start Post Ad Step One Content -->
                <div class="step-one-content">
                    <form class="default-form-style" wire:submit='store'>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Titolo</label>
                                    <input wire:model='title' type="text"
                                    placeholder="Inserisci un titolo">
                                </div>
                                @error('title')
                                <p class="text-danger"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <div class="selector-head">
                                        <span class="arrow"><i
                                            class="lni lni-chevron-down"></i></span>
                                            <select class="user-chosen-select" wire:model='category'>
                                                <option value="">Seleziona una categoria</option>
                                                @forelse ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @empty
                                                <option value="none">Nessuna categoria disponibile</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    @error('category')
                                    <p class="text-danger"> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="form-group">
                                        <label>Condizioni</label>
                                        <div class="selector-head">
                                            <span class="arrow"><i
                                                class="lni lni-chevron-down"></i></span>
                                                <select class="user-chosen-select" wire:model='condition'>
                                                    <option value="">Seleziona un'opzione</option>
                                                    <option wire:model='Usato'>Usato</option>
                                                    <option wire:model="Nuovo">Nuovo</option>
                                                </select>
                                            </div>
                                        </div>
                                        @error('condition')
                                        <p class="text-danger"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Prezzo</label>
                                            <input wire:model='price' type="text"
                                            placeholder="Inserisci prezzo">
                                        </div>
                                        @error('price')
                                        <p class="text-danger"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Nazione</label>
                                            <div class="selector-head">
                                                <span class="arrow"><i
                                                    class="lni lni-chevron-down"></i></span>
                                                    <select class="user-chosen-select" wire:model='country'>
                                                        <option value="">Seleziona una nazione</option>
                                                        @forelse ($nations as $nation)
                                                        <option value="{{$nation['name']['common']}}">{{$nation['flag']}} {{$nation['name']['common']}}</option>
                                                        @empty
                                                        <option value="none">Nessuna categoria disponibile</option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                            @error('price')
                                            <p class="text-danger"> {{ $message }} </p>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Città</label>
                                                <input wire:model='city' type="text"
                                                placeholder="Inserisci una città">
                                            </div>
                                            @error('city')
                                            <p class="text-danger"> {{ $message }} </p>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Annuncio</label>
                                                <textarea wire:model='body' rows="4" cols="50">
                                                </textarea>
                                            </div>
                                            @error('body')
                                            <p class="text-danger"> {{ $message }} </p>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button mb-0">
                                                <button type="submit" class="btn">Inserisci annuncio</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Start Post Ad Step One Content -->
                        </div>
                    </div>
                </div>
                <!-- End Post Ad Tab -->
            </div>
            
        </div>
        
        