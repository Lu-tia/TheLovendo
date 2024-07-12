<div class="dashboard-block mt-0">
    <h3 class="block-title">I miei Annunci</h3>
    <nav class="list-nav">
        <ul>
            <li class="{{ $query == 0 ? 'active' : '' }}">
                <input type="radio" wire:model.live="query" value="0" name="filtered" id="allArticles">
                <label for="allArticles">Tutti gli annunci</label>
            </li>
            <li class="{{ $query == 1 ? 'active' : '' }}">
                <input type="radio" wire:model.live="query" value="1" name="filtered" id="Accepted">
                <label for="Accepted">Pubblicati</label>
            </li>
            <li class="{{ $query == 2 ? 'active' : '' }}">
                <input type="radio" wire:model.live="query" value="2" name="filtered" id="toAccept">
                <label for="toAccept">In attesa di revisione</label>
            </li>
        </ul>
    </nav>
    <!-- Start Items Area -->
    <div class="my-items">
        <!-- Start Item List Title -->
        <div class="item-list-title">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 col-12">
                    <p>Titolo</p>
                </div>
                <div class="col-lg-2 col-md-2 col-12">
                    <p>Categoria</p>
                </div>
                <div class="col-lg-2 col-md-2 col-12">
                    <p>Condizione</p>
                </div>
            </div>
        </div>
        <!-- End List Title -->
        @forelse ($articles as $article)
        <div class="single-item-list">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="item-image">
                        <img src="" alt="#">
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
                        <li><a href="{{ route('users.edit_article', $article->id) }}"><i class="lni lni-pencil"></i></a></li>
                        <li><a href="{{ route('articles.show', $article->id) }}"><i class="lni lni-eye"></i></a></li>
                        <li>
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="lni lni-trash"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
 
  
        @empty
            Nessun annuncio trovato
        @endforelse
        <!-- Modal -->
        @isset($article)
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Conferma eliminazione</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>Vuoi eliminare l'annuncio {{$article->title}}?</p>
                </div>
                <div class="modal-footer button">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                  <form action="{{route('users.destroy_article',compact('article'))}}" method="post">
                    @csrf
                    @method('DELETE')
                      <button type="submit" class="btn">Elimina</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          
        
        @endisset
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>
  

        <!-- Pagination -->
        {{ $articles->links('livewire.custom-paginator') }}
        <!--/ End Pagination -->
    </div>
    <!-- End Items Area -->
</div>
