<div class="dashboard-block mt-0">
    <h3 class="block-title">{{ __('ui.I miei annunci')}}</h3>
    <nav class="list-nav">
        <ul>
            <li class="{{ $query == 0 ? 'active' : '' }}">
                <input type="radio" wire:model.live="query" value="0" name="filtered" id="allArticles">
                <label for="allArticles">{{ __('ui.Tutti gli annunci')}}</label>
            </li>
            <li class="{{ $query == 1 ? 'active' : '' }}">
                <input type="radio" wire:model.live="query" value="1" name="filtered" id="Accepted">
                <label for="Accepted">{{ __('ui.Pubblicati')}}</label>
            </li>
            <li class="{{ $query == 2 ? 'active' : '' }}">
                <input type="radio" wire:model.live="query" value="2" name="filtered" id="toAccept">
                <label for="toAccept">{{ __('ui.In attesa di revisione')}}</label>
            </li>
        </ul>
    </nav>
    <!-- Start Items Area -->
    <div class="my-items">
        <!-- Start Item List Title -->
        <div class="item-list-title">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 col-12">
                    <p>{{ __('ui.Titolo')}}</p>
                </div>
                <div class="col-lg-2 col-md-2 col-12">
                    <p>{{ __('ui.Categoria')}}</p>
                </div>
                <div class="col-lg-2 col-md-2 col-12">
                    <p>{{ __('ui.Condizione')}}</p>
                </div>
            </div>
        </div>
        <!-- End List Title -->
        @forelse ($articles as $key => $article)
        <div class="single-item-list">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="item-image">
                        <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300,300) : 'https://picsum.photos/200' }}"
                            alt="#">
                        <div class="content">
                            <h3 class="title"><a href="javascript:void(0)">{{$article->title}}</a></h3>
                            <span class="price">{{$article->price}}€</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12">
                    <p>{{$article->category->name}}</p>
                </div>
                <div class="col-lg-2 col-md-2 col-12">
                    <p>{{$article->condition}}</p>

                </div>
                <div class="col-lg-3 col-md-3 col-12 align-right">
                    <ul class="action-btn">
                        {{-- <li><a href="{{ route('users.edit_article', $article->id) }}"><i
                                    class="lni lni-pencil"></i></a></li> --}}
                        <li><a href="{{ route('articles.show', $article->id) }}"><i class="lni lni-eye"></i></a></li>
                        <li>
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#staticBackdrop-article-{{$key}}">
                                <i class="lni lni-trash"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



        @empty
        {{ __('ui.Nessun annuncio trovato')}}
        @endforelse
        <!-- Modal -->
        @isset($article)
        @foreach ($articles as $key => $article)
        <div class="modal fade" id="staticBackdrop-article-{{$key}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Conferma eliminazione</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>{{ __('ui.Vuoi eliminare l\'annuncio')}} {{$article->title}}?</p>
                    </div>
                    <div class="modal-footer button">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{
                            __('ui.Annulla')}}</button>
                        <form action="{{route('users.destroy_article',compact('article'))}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn">{{ __('ui.Elimina')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
        @endforeach


        @endisset


        {{ $articles->links('livewire.custom-paginator') }}