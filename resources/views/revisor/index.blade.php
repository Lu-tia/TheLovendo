<x-layouts.main>

    <!-- Start Dashboard Section -->
    <section class="dashboard section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <!-- Start Dashboard Sidebar -->
                    <x-user.sidebar />
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="row">
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


                        <div class="row d-flex">
                            @if ($article_to_check)
                                <div class="col-md-6">
                                    <div class="article-image">
                                        <img src="{{ asset('assets/images/placeholder/600x400.png') }}" alt=""
                                            class="img-fluid animate__animated animate__fadeInLeft">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="article-details">
                                        <h3>{{ $article_to_check->title }}</h3>
                                        <p>{{ $article_to_check->body }}</p>
                                        <p>Prezzo: {{ $article_to_check->price }}€</p>
                                        <p class="author">Autore: {{ $article_to_check->user->name }}</p>
                                    </div>
                                    <div class="article-actions d-flex justify-content-start align-items-center mt-3">
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
                                <div class="col-12">
                                    <div class="no-article">
                                        <h3>Nessun articolo da revisionare</h3>
                                        <button class="btn btn-primary">
                                            <a href="{{ route('homepage') }}" class="btn-link">Torna alla homepage</a>
                                        </button>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Dashboard Section -->

</x-layouts.main>
