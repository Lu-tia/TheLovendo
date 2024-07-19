<x-layouts.main>
    <div class="container">
        <div class="dashboard-block mt-0">
            <h3 class="block-title">{{ __('ui.Modifica articolo')}}</h3>
            <div class="inner-block">
                @if($article->status === null || $article->user_id != auth()->user()->id)
                <p class="alert alert-danger">{{ __('ui.Non puoi modificare questo articolo')}}</p>
                @else
                <form action="{{ route('users.update_article', ['article' => $article->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="post-ad-tab">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-item-info" role="tabpanel" aria-labelledby="nav-item-info-tab">
                                <div class="step-one-content">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>{{ __('ui.Titolo')}}</label>
                                                <input type="text" name="title" class="form-control" value="{{ old('title', $article->title) }}">
                                                @error('title')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>{{ __('ui.Categoria')}}</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select name="category_id" class="user-chosen-select form-control">
                                                        @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" {{ $category->id == $article->category_id ? 'selected' : '' }}>
                                                            {{ $category->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('category_id')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <div class="form-group">
                                                <label>{{ __('ui.Condizione')}}</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select name="condition" class="user-chosen-select form-control">
                                                        <option value="Usato" {{ $article->condition == 'Usato' ? 'selected' : '' }}>{{ __('ui.Usato')}}</option>
                                                        <option value="Nuovo" {{ $article->condition == 'Nuovo' ? 'selected' : '' }}>{{ __('ui.Nuovo')}}</option>
                                                    </select>
                                                </div>
                                                @error('condition')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>{{ __('ui.Prezzo')}}</label>
                                                <input type="number" name="price" class="form-control" value="{{ old('price', $article->price) }}">
                                                @error('price')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>{{ __('ui.Nazione')}}</label>
                                                <div class="selector-head">
                                                    <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                                    <select name="country" class="user-chosen-select form-control">
                                                        @foreach ($nations as $nation)
                                                        <option value="{{ $nation['name']['common'] }}" {{ $nation['name']['common'] == $article->country ? 'selected' : '' }}>
                                                            {{ $nation['name']['common'] }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('country')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>{{ __('ui.Annuncio')}}</label>
                                                <textarea name="body" rows="4" class="form-control">{{ old('body', $article->body) }}</textarea>
                                                @error('body')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('ui.Salva modifiche')}}</button>
                </form>
                @endif
            </div>
        </div>
    </div>
</x-layouts.main>
