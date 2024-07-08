 <div>
     <div class="search-form wow fadeInUp" data-wow-delay=".7s">
        <div class="row">
            <div class="col-10 p-0">
                <div class="search-input">
                        <label for="keyword"><i class="lni lni-search-alt theme-color"></i></label>
                        <input type="search" wire:model.live.debounce.300ms="query" id="globalInput" placeholder="Cerca prodotto">   
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-12 p-0">
                <div class="search-btn button">
                    <button class="btn"><i class="lni lni-search-alt"></i> Cerca</button>
                </div>
            </div>
            <div class="row">
                <div class="mt-3 bg-white" id="globalSearch">
                    <div class="container">
                        <div class="row">
            @if ($articles) 
            @forelse ($articles as $article)
            <div class="col-lg-2 col-md-6 col-sm-12">
                <a href="{{route('articles.show',compact('article'))}}">
                    <div class="card mb-3" style="max-width: 150px;">
                        <img src="{{$article->image}}" class="card-img-top" alt="Immagine dell'articolo" style="height: 150px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->category->name}}</p>
                            <p class="card-text"><small class="text-muted">{{$article->price}}</small></p>
                        </div>
                    </div>
                    {{-- <div class="col-lg-12 col-md-4 col-12">
                           <h4>{{$article->title}}</h4>
                           <h5>{{$article->category->name}}</h5>
                           <h5>{{$article->price}}</h5>
                   </div> --}}
                </a>
            </div>
                @empty
                    
                @endforelse
                @endif    
                
                        </div>
            </div>
        </div>
    </div>            
            </div>
        </div>
    </div>
 </div>
<!-- End Search Form -->