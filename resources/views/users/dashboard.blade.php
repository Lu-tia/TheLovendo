<x-layouts.main>


    <!-- Start Dashboard Section -->
    <section class="dashboard section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <!-- Start Dashboard Sidebar -->
                    <x-user.sidebar />
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="main-content">
                        <!-- Start Details Lists -->
                        <div class="details-lists">
                            <div class="row">
                                <div class="col-lg-6 col-md-4 col-12">
                                    <!-- Start Single List -->
                                    <div class="single-list">
                                        <div class="list-icon">
                                            <i class="lni lni-checkmark-circle"></i>
                                        </div>
                                        <h3>
                                            {{ auth()->user()->articles()->where('status', true)->count() }}
                                            <span>{{ __('ui.Annunci aggiunti')}}</span>
                                        </h3>
                                    </div>
                                    <!-- End Single List -->
                                </div>
                                <div class="col-lg-6 col-md-4 col-12">
                                    <!-- Start Single List -->
                                    <div class="single-list two">
                                        <div class="list-icon">
                                            <i class="lni lni-timer"></i>
                                        </div>
                                        <h3>
                                            {{ auth()->user()->articles()->where('status', null)->count() }}
                                            <span>{{ __('ui.Annunci in revisione')}}</span>
                                        </h3>
                                    </div>
                                    <!-- End Single List -->
                                </div>
                            </div>
                        </div>
                        <!-- End Details Lists -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <!-- Start Recent Items -->
                                <div class="recent-items dashboard-block">
                                    <h3 class="block-title">{{ __('ui.Annunci aggiunti di recente')}}</h3>
                                    <ul>
                                        @forelse (auth()->user()->articles()->where('status', true)->get()->take(3) as $article)
                                            <li class="ps-3">
                                                <a class="d-flex"
                                                    href="{{ route('articles.show', compact('article')) }}">
                                                    <div class="image">
                                                        <img src="{{asset('assets/images/placeholder/aggiunti-di-recente.jpg')}}" alt="#">
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="text-black">{{ $article->title }}</span>
                                                        <span
                                                            class="time mt-3">{{ $article->created_at->locale('it')->diffForHumans() }}</span>
                                                    </div>
                                                </a>
                                            </li>
                                        @empty
                                            <div class="ps-4">
                                                <p>{{ __('ui.Nessun articolo aggiunto di recente')}}
                                                </p>
                                            </div>
                                        @endforelse
                                    </ul>
                                </div>
                                <!-- End Recent Items -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
    <!-- End Dashboard Section -->
</x-layouts.main>
