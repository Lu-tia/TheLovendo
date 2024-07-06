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
        </div>
    </div>
    <div class="container z-3 position-absolute bg-white" id="globalSearch">
        <div class="row">
            @if ($articles) 
            @forelse ($articles as $article)
                <a href="{{route('articles.show',compact('article'))}}">
                    <div class="col-lg-12 col-md-4 col-12">
                           <h4>{{$article->title}}</h4>
                           <h5>{{$article->category->name}}</h5>
                           <h5>{{$article->price}}</h5>
                   </div>
                </a>
                @empty
                    
                @endforelse
                @endif    
                
                
            </div>
        </div>
    </div>            
 </div>
<!-- End Search Form -->