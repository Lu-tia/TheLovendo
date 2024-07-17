<div class="col-lg-4 col-md-6 col-12">
    <!-- Start Single Grid -->
    <div class="single-grid wow fadeInUp" data-wow-delay=".2s">
        <div class="image">
            <a href="{{ route('articles.show', compact('article')) }}" class="thumbnail"><img
                    src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(600, 600) : 'https://picsum.photos/600' }}" alt="#"></a>
            <div class="author">
                {{-- <div class="author-image">
                    <a href="javascript:void(0)"><img src="https://via.placeholder.com/100x100" alt="#">
                        <span>Smith jeko</span></a>
                </div> --}}
                <p class="sale">In vendita</p>
            </div>
        </div>
        <div class="content">
            <div class="top-content">
                {{-- <a href="javascript:void(0)" class="tag">Telefoni</a> --}}
                <p>{{ $article->category->name }}</p>
                <h3 class="title">{{ $article->title }}</h3>
                <p class="update-time">{{ $article->created_at->locale('it_IT')->isoFormat('DD MMM YYYY') }}</p>
                <p class="user-name">Pubblicato da: {{ $article->user->name }}</p>
                <ul class="info-list">
                    <li><a href=""><i class="lni lni-map-marker"></i> {{ $article->city }}</a></li>
                    {{-- <li><a href="javascript:void(0)"><i class="lni lni-timer"></i> Feb 18,
                            2023</a></li> --}}
                </ul>
            </div>
            <div class="bottom-content">
                <p class="price">Prezzo: <span>{{ $article->price }}€</span></p>
            </div>
        </div>
    </div>
    <!-- End Single Grid -->
</div>
