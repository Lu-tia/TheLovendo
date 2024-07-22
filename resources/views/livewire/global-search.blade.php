<div class="container">

    <div class="p-0 m-0 b-0">
        <div class="d-flex justify-content-center align-items-center">
            <div class="search-form wow fadeInUp cstsearch" data-wow-delay=".7s">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="search-input">
                            <label for="keyword"><i class="lni lni-search-alt theme-color"></i></label>
                            <input type="search" wire:model.live.debounce.300ms="query" id="globalInput"
                                placeholder="{{ __('ui.Cerca prodotto') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($articles)
            <div class="row justify-content-center pt-4">

                @foreach ($articles as $article)
                    <!-- Start Single Card -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 p-0 mx-1">
                        <a href="{{ route('articles.show', compact('article')) }}">
                            <div class="card rounded shadow-sm border-0 cardcst">
                                <div class="card-body p-4">
                                    <img src="https://bootstrapious.com/i/snippets/sn-cards/shoes-1_gthops.jpg"
                                        alt="" class="img-fluid d-block mx-auto mb-3">
                                    <h7 class="text-dark">{{ $article->title }}</h7>
                                </div>
                            </div>
                        </a>
                        <p class="small text-muted font-italic">{{ $article->price }} €</p>
                    </div>
                @endforeach



            </div>
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 p-0 mx-1 mt-3 align-items-center">
                    <div class="card shadow-sm border-0">
                        <div class=" p-4 align-items-center rounded-1 button-show-more">
                            <a href="{{ route('articles.index') }}">
                                <i class="text-white lni lni-eye pe-2"></i>
                                <h7 class="text-white">{{ __('ui.Mostra altri') }}</h7>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        @endif



    </div>

</div>
