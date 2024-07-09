<div>
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
                                <div class="card rounded shadow-sm border-0 cardcst">
                                    <div class="card-body p-4"><img src="https://bootstrapious.com/i/snippets/sn-cards/shoes-1_gthops.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                                        <h7> <a href="#" class="text-dark">{{$article->title}}</a></h7>
                                        <p class="small text-muted font-italic">{{$article->price}} €</p>
                                    </div>
                                </div>

                    {{-- <a href="{{route('articles.show',compact('article'))}}" class="single-cat">
                        <div class="icon">
                            <img src="assets/images/categories/car.svg" alt="#">
                        </div>
                        <h4>{{$article->title}}</h4>
                        <h5 class="total">{{$article->price}}</h5>
                    </a> --}}
        </div>
                     @endforeach

                     @endif    
                    <!-- End Single Card -->
    </div>
</div>
            {{-- <div class="row">
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
                    <div class="col-lg-12 col-md-4 col-12">
                           <h4>{{$article->title}}</h4>
                           <h5>{{$article->category->name}}</h5>
                           <h5>{{$article->price}}</h5>
                   </div>
                </a>
            </div>
                @empty
                    
                @endforelse
                @endif    
                
                </div>
            </div>
        </div>
    </div>             --}}
            {{-- </div>
        </div>
    </div>
 </div> --}}
<!-- End Search Form -->