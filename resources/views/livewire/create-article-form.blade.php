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
                    <form class="default-form-style" wire:submit.prevent='store'>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Titolo</label>
                                    <input wire:model.defer='title' type="text"
                                    placeholder="Inserisci un titolo">
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <div class="selector-head">
                                        <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                        <select class="user-chosen-select" wire:model.defer='category'>
                                            <option value="">Seleziona una categoria</option>
                                            @forelse ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @empty
                                            <option value="none">Nessuna categoria disponibile</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    @error('category')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="form-group">
                                    <label>Condizioni</label>
                                    <div class="selector-head">
                                        <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                        <select class="user-chosen-select" wire:model.defer='condition'>
                                            <option value="">Seleziona un'opzione</option>
                                            <option value="Usato">Usato</option>
                                            <option value="Nuovo">Nuovo</option>
                                        </select>
                                    </div>
                                    @error('condition')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Prezzo</label>
                                    <input wire:model.defer='price' type="number"
                                    placeholder="0,00€">
                                    @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Nazione</label>
                                    <input wire:model.defer='country' type="text"
                                    placeholder="Inserisci una nazione">
                                    @error('country')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Città</label>
                                    <input wire:model.defer='city' type="text"
                                    placeholder="Inserisci una città">
                                    @error('city')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Descrizione</label>
                                    <textarea wire:model.defer='body' rows="4" cols="50"></textarea>
                                    @error('body')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group button mb-0">
                                    <button type="submit" class="btn ">Inserisci annuncio</button>
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