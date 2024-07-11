
               <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Item -->
                    <div class="single-item-grid">
                        <div class="image">
                            <a href="{{route('articles.show',compact('article'))}}"><img src="{{asset('/assets/images/placeholder/scarpe-600x400.jpg')}}" alt="#"></a>
                        </div>
                        <div class="content">
                            <a href="{{route('articles.show',compact('article'))}}" class="tag">{{$article->category->name}}</a>
                            <h3 class="title">
                                <a href="{{route('articles.show',compact('article'))}}">{{ $article->title }}</a>
                            </h3>
                            <p class="location"><a href="{{route('articles.show',compact('article'))}}"><i class="lni lni-map-marker">
                                    </i>{{ $article->city }}</a></p>
                            <ul class="info d-flex">
                                <li class="price">{{ $article->price }}€</li>
                                <li class="ms-auto mt-2"><p class="update-time">{{ $article->created_at->locale('it_IT')->isoFormat('DD MMM YYYY') }}</p></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>   