<x-layouts.main>
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Profile Settings</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Profile Settings</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    
    <!-- Start Dashboard Section -->
    <section class="dashboard section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <!-- Start Dashboard Sidebar -->
                    <x-user.sidebar/>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="main-content">
                            <!-- Start Details Lists -->
                            <div class="details-lists">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <!-- Start Single List -->
                                        <div class="single-list">
                                            <div class="list-icon">
                                                <i class="lni lni-checkmark-circle"></i>
                                            </div>
                                            <h3>
                                                {{$user->articles()->where('status', true)->count()}}
                                                <span>Annunci aggiunti</span>
                                            </h3>
                                        </div>
                                        <!-- End Single List -->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <!-- Start Single List -->
                                        <div class="single-list two">
                                            <div class="list-icon">
                                                <i class="lni lni-bolt"></i>
                                            </div>
                                            <h3>
                                                {{$user->articles()->where('status', null)->count()}}
                                                <span>Annunci in revisione </span>
                                            </h3>
                                        </div>
                                        <!-- End Single List -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Details Lists -->
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12">
                                    <!-- Start Recent Items -->
                                    <div class="recent-items dashboard-block">
                                        <h3 class="block-title">Annunci aggiunti di recente</h3>
                                        <ul>
                                            <li>
                                                @forelse ($user->articles()->where('status', null)->get()->take(3) as $article)
                                                <a class="d-flex" href="{{route('articles.show',compact('article'))}}">
                                                    <div class="image">
                                                        <a href="javascript:void(0)"><img src="https://via.placeholder.com/100x100" alt="#"></a>
                                                    </div>
                                                    <a href="javascript:void(0)" class="title">{{$article->title}}</a>
                                                        <span class="time">{{$user->created_at->locale('it')->diffForHumans()}}</span>
                                                </a>
                                            </li>    
                                            @empty
                                            
                                            @endforelse
                                            
                                            
                                        </ul>
                                    </div>
                                    <!-- End Recent Items -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Dashboard Section -->
    </x-layouts.main>