<x-layouts.main>
    <!-- Start Item Details -->
    <section class="item-details section mt-3">
        <div class="container">
            <div class="top-area">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-images">
                            <div id="carouselExampleIndicators" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                @if($article->images->count()>0)
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{Storage::url($article->images->first()->path)}}" class="d-block w-100" alt="...">
                                    </div>
                                    @foreach($article->images->slice(1) as $key=>$image)
                                    <div class="carousel-item">
                                        <img src="{{Storage::url($image->path)}}" class="d-block w-100" alt="...">
                                    </div>
                                    @endforeach
                                </div>
                                @if($article->images->count()>1)
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">{{ __('ui.Precedente')}}</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">{{ __('ui.Successivo')}}</span>
                                </button>
                                @endif
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-info">
                            <h2 class="title">{{ $article->title }}</h2>
                            
                            <p class="location mt-3"><i class="lni lni-map-marker"></i><a href="javascript:void(0)">{{ $article->city }}</a></p>
                            <h3 class="price">{{ $article->price }} €</h3>
                            <div class="list-info">
                                <h4>{{ __('ui.Informazioni')}}</h4>
                                <ul>
                                    <li><span>{{ __('ui.Condizione:') }}</span> {{ __('ui.' . $article->condition) }}</li>

                                </ul>
                            </div>
                            <div class="list-info">
                                <div class="social-share">
                                    <h4>{{ __('ui.Condividi su')}}</h4>
                                    <ul class="d-flex">
                                        <li><a href="javascript:void(0)" class="facebook me-2"><i class="lni lni-facebook-filled"></i></a></li>
                                        <li><a href="javascript:void(0)" class="twitter me-2"><i class="lni lni-twitter-original"></i></a></li>
                                        <li><a href="javascript:void(0)" class="google me-2"><i class="lni lni-google"></i></a></li>
                                        <li><a href="javascript:void(0)" class="linkedin me-2"><i class="lni lni-linkedin-original"></i></a></li>
                                        <li><a href="javascript:void(0)" class="pinterest"><i class="lni lni-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                @livewire('articles.add-whishlist',['article' => $article])
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-details-blocks">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-12">
                        <!-- Start Single Block -->
                        <div class="single-block description">
                            <h3>{{ __('ui.Descrizione prodotto')}}</h3>
                            <p>
                                {{ $article->body }}
                            </p>
                        </div>
                        <!-- End Single Block -->
                    </div>
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="item-details-sidebar">
                            <!-- Start Single Block -->
                            <div class="single-block author">
                                <h3>{{ __('ui.Autore')}}</h3>
                                <div class="content">
                                    <img src="{{ $article->user->providers[0]->social_avatar ??  $article->user->avatar }}" alt="#">
                                    <h4>{{ $article->user->fistName }} {{ $article->user->lastName }}</h4>
                                    <a href="javascript:void(0)" class="see-all"></a>
                                </div>
                            </div>
                            <!-- End Single Block -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Item Details -->
    </x-layouts.main>
    