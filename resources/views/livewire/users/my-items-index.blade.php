<div class="dashboard-block mt-0">
    <h3 class="block-title">I miei Annunci</h3>
    <nav class="list-nav">
        <ul>
            <li class="{{$btn == true ? 'active' : ''}}"><a wire:click='allArticles' href="javascript:void(0)">Tutti gli annunci <span>{{$articles->count()}}</span></a></li>
            <li class="{{$btnAccept == true ? 'active' : ''}}"><a wire:click='accepted' href="javascript:void(0)">Pubblicati <span>{{$articles->where('status', true)->count()}}</span></a></li>
            <li class="{{$btnToAccept == true ? 'active' : ''}}"><a wire:click='to_accepted' href="javascript:void(0)">In attesa di revisione <span>{{$articles->where('status', null)->count()}}</span></a></li>
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
                    <p>Prezzo</p>
                </div>
                <div class="col-lg-3 col-md-3 col-12 align-right">
                    <p>Action</p>
                </div>
            </div>
        </div>
        <!-- End List Title -->
        @forelse ($articles as $article)
        <div class="single-item-list">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="item-image">
                        <img src="https://via.placeholder.com/100x100" alt="#">
                        <div class="content">
                            <h3 class="title"><a href="javascript:void(0)">{{$article->title}}</a></h3>
                            <span class="price">{{$article->price}}€</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12">
                    <p>Electronic</p>
                </div>
                <div class="col-lg-2 col-md-2 col-12">
                    <p>New</p>
                </div>
                <div class="col-lg-3 col-md-3 col-12 align-right">
                    <ul class="action-btn">
                        <li><a href="javascript:void(0)"><i class="lni lni-pencil"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="lni lni-eye"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="lni lni-trash"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        @empty
            Nessun annuncio trovato
        @endforelse


        <!-- Pagination -->
        {{-- {{ $articles->links('livewire.custom-paginator') }} --}}
        <!--/ End Pagination -->
    </div>
    <!-- End Items Area -->
</div>