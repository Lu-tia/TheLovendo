<x-layouts.main>
    <section class="dashboard section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <x-user.sidebar />
                </div>
                <div class="col-lg-8 d-flex justify-content-center revisor-container">
                    <div class="row ms-5">
                        <div class="col-12 ">
                            @if (session()->has('message'))
                                <div class="custom-alert d-flex justify-content-between align-items-center">
                                    <p>{{ session('message') }}</p>
                                    <form action="{{ route('rollback') }}" method="post" class="mt-2">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-danger-custom" type="submit">Annulla ultima
                                            modifica</button>
                                    </form>
                                </div>
                            @endif
                            @if (session()->has('rollback'))
                                <div class="custom-alert">
                                    <p>{{ session('rollback') }}</p>
                                </div>
                            @endif

                        </div>


                        @if ($article_to_check)
                            <div class="col-6">
                                @if($article_to_check->images->count())
                                <div class="article-image">
                                    <div id="carouselExampleIndicators" class="carousel slide carousel-2">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="0" class="active" aria-current="true"
                                                aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                                data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ asset('assets/images/placeholder/carousel-1.png') }}"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            @foreach($article_to_check->images as $key=>$image)
                                            <div class="carousel-item">
                                                <img src="{{ Storage::url($image->path) }}"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            @endforeach
                                        @else
                                            @for($i=0;$i<6;$i++)
                                            <div class="carousel-item">
                                                <img src="https://picsum.photos/300 }}"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                            @endfor
                                @endif
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>

                                </div>
                            </div>

                            <div class="col-6 ">
                                <div class="article-details">
                                    <h3>{{ $article_to_check->title }}</h3>
                                    <p>{{ $article_to_check->body }}</p>
                                    <p>Prezzo: {{ $article_to_check->price }}€</p>
                                    <p class="author">Autore: {{ $article_to_check->user->firstName }} {{ $article_to_check->user->lastName }}</p>
                                </div>
                                <div class="article-actions d-flex justify-content-evenly">
                                    <form action="{{ route('accept', ['article' => $article_to_check]) }}"
                                        method="post">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-success-custom me-3" type="submit">
                                            <span>ACCETTA</span>
                                        </button>
                                    </form>
                                    <form action="{{ route('reject', ['article' => $article_to_check]) }}"
                                        method="post">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-danger-custom" type="submit">
                                            <span>RIFIUTA</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <div class="col">
                                <div class="no-article">
                                    <h3>Nessun articolo da revisionare</h3>
                                    <button class="btn btn-primary">
                                        <a href="{{ route('homepage') }}" class="btn-link">Torna alla
                                            homepage</a>
                                    </button>
                                </div>
                            </div>
                        @endif


                    </div>

                </div>
            </div>
        </div>

    </section>

</x-layouts.main>
