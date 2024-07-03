<div class="col-lg-4 col-md-6 col-12">
    <!-- Start Single Grid -->
    <div class="single-grid wow fadeInUp" data-wow-delay=".2s">
        <div class="image">
            <a href="item-details.html" class="thumbnail"><img src="https://via.placeholder.com/600x400" alt="#"></a>
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
                <h3 class="title">
                    <a href="item-details.html">{{ $article->title }}</a>
                </h3>
                <p class="update-time">{{ $article->created_at->locale('it_IT')->isoFormat('DD MMM YYYY') }}</p>
                <ul class="rating">
                    <li><i class="lni lni-star-filled"></i></li>
                    <li><i class="lni lni-star-filled"></i></li>
                    <li><i class="lni lni-star-filled"></i></li>
                    <li><i class="lni lni-star-filled"></i></li>
                    <li><i class="lni lni-star-filled"></i></li>
                    <li><a href="javascript:void(0)">(35)</a></li>
                </ul>
                <ul class="info-list">
                    <li><a href="javascript:void(0)"><i class="lni lni-map-marker"></i> {{ $article->city }}</a></li>
                    {{-- <li><a href="javascript:void(0)"><i class="lni lni-timer"></i> Feb 18,
                            2023</a></li> --}}
                </ul>
            </div>
            <div class="bottom-content">
                <p class="price">A partire da: <span>{{ $article->price }}€</span></p>
                <a href="javascript:void(0)" class="like"><i class="lni lni-heart"></i></a>
            </div>
        </div>
    </div>
    <!-- End Single Grid -->
</div>
