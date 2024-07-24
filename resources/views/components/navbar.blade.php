<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-12">
            <div class="nav-inner">

                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{ route('homepage') }}">
                        <img src="{{ asset('/assets/images/logo/thelovendo-transparent.svg') }}" alt="Logo">
                    </a>


                    <div class="move">
                        @auth
                            <div class="sub-menu-profile position-relative pic-position">
                                <img src="{{ Storage::url(auth()->user()->avatar) }}" class="user-pic" alt=""
                                    onclick="toggleMenu()">
                                <div class="sub-menu-wrap mt-4" id="subMenu">
                                    <div class="sub-menu">
                                        <div class="user-info">
                                            <h3>{{ auth()->user()->firstName }} {{ auth()->user()->lastName }}
                                            </h3>
                                        </div>
                                        <hr>

                                        <a href="{{ route('users.dashboard') }}" class="sub-menu-link">
                                            <img src="{{ asset('/assets/profile/profile.png') }}" alt="">
                                            <p>{{ __('ui.Profilo') }}</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                                            </svg>
                                        </a>
                                        @if (auth()->user()->is_revisor == true)
                                            <a href="{{ route('revisor.index') }}" class="sub-menu-link">
                                                <img src="{{ asset('/assets/profile/profile.png') }}" alt="">
                                                <p>{{ __('ui.Zona revisione') }}
                                                    @if ($articles_to_accept_count > 0)
                                                        <span class="loader-navbar">{{ $articles_to_accept_count }}</span>
                                                    @endif
                                                </p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                    fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                                                </svg>
                                            </a>
                                        @endif
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit" href="javascript:void(0)" class="sub-menu-link btn px-0">
                                                <img src="{{ asset('/assets/profile/logout.png') }}" alt="">
                                                <p>{{ __('ui.Logout') }}</p>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endauth

                        @guest
                            <ul>
                                <li class="nav-item">
                                    <a href="{{ route('login') }}">
                                        <button class="Btn">
                                            <div class="sign"><i class="lni lni-user " viewBox="0 0 512 512">
                                                    <path
                                                        d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                                                    </path>
                                                </i></div>

                                            <div class="text">Login</div>
                                        </button>
                                    </a>
                                </li>

                            </ul>
                        @endguest


                    </div>


                    <button class="navbar-toggler border-0 mobile-menu-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul id="nav" class="navbar-nav ms-auto">
                            <li class="nav-item position-static">
                                <a href="{{ route('homepage') }}"
                                    aria-label="Toggle navigation">{{ __('ui.home') }}</a>
                            </li>



                            <li class="nav-item">
                                <a href="{{ route('articles.index') }}"
                                    aria-label="Toggle navigation">{{ __('ui.articoli') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="dd-menu collapsed" data-bs-toggle="collapse" data-bs-target="#submenu-1-5"
                                    aria-controls="navbarSupportedContent" aria-expanded="false"
                                    aria-label="Toggle navigation">{{ __('ui.Categorie') }}</a>
                                <ul class="sub-menu collapse" id="submenu-1-5">
                                    @forelse ($categories as $category)
                                        <li class="nav-item"><a
                                                href="{{ route('articles.category', ['id' => $category->id]) }}">{{ $category->name }}</a>
                                        </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </li>
                        </ul>



                        <div class="p-3 ">
                            @auth
                                <a href="{{ route('articles.create') }}" class="a-button">
                                    <div class="button-home ">
                                        {{ __('ui.Crea un Annuncio') }}
                                    </div>
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="a-button">
                                    <div class="button-home ">
                                        {{ __('ui.Crea un Annuncio') }}
                                    </div>
                                </a>

                            @endauth
                        </div>

                        <div class="dropdown pt-2 lang">
                            <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="material-symbols-outlined">
                                    language
                                </span>

                            </button>


                            <ul class="dropdown-menu rounded-2 min-width-custom lang wow fadeInUp"
                                aria-labelledby="Dropdown">
                                <li class="dropdown-item">
                                    <x-_locale lang="it" />
                                </li>
                                <li class="dropdown-item">
                                    <x-_locale lang="en" />
                                </li>
                                <li class="dropdown-item">
                                    <x-_locale lang="fr" />
                                </li>
                            </ul>
                        </div>

                    </div>
                </nav> <!-- navbar -->


            </div>


        </div>

    </div>
</div> <!-- row -->
