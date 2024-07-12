<div class="p-0 m-0 b-0">
    <div class="d-flex justify-content-center align-items-center">
        <div class="search-form wow fadeInUp cstsearch" data-wow-delay=".7s">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="search-input">
                        <label for="keyword"><i class="lni lni-search-alt theme-color"></i></label>
                        <input type="search" wire:model.live.debounce.300ms="query" id="globalInput" placeholder="Cerca prodotto">   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">                           
            @if ($articles) 
            @foreach ($articles as $article)
            <!-- Start Single Card -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 p-0 mt-3 mx-1">
                    <a href="{{ route('articles.show', compact('article')) }}"> 
                    <div class="card rounded shadow-sm border-0 cardcst">
                        <div class="card-body p-4">
                            <img src="https://bootstrapious.com/i/snippets/sn-cards/shoes-1_gthops.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                            <h7 class="text-dark">{{$article->title}}</a></h7>
                            <p class="small text-muted font-italic">{{$article->price}} €</p>
                        </div>     
                    </div>
                    </a>
                </div>
            @endforeach
            @endif    
            <!-- End Single Card -->
        </div>
    </div>
</div>