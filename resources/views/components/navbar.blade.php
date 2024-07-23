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
                                            <span>></span>
                                        </a>
                                        @if (auth()->user()->is_revisor == true)
                                            <a href="{{ route('revisor.index') }}" class="sub-menu-link">
                                                <img src="{{ asset('/assets/profile/profile.png') }}" alt="">
                                                <p>{{ __('ui.Zona revisione') }}
                                                    @if ($articles_to_accept_count > 0)
                                                        <span class="loader-navbar">{{ $articles_to_accept_count }}</span>
                                                    @endif
                                                </p>
                                                <span>></span>
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
                    </div>


                    <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
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


                            {{-- <a class=" dd-menu collapsed" href="{{ route('homepage') }}" data-bs-toggle="collapse"
                                data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">Home</a>
                            <ul class="sub-menu collapse" id="submenu-1-1">
                                <li class="nav-item active"><a href="{{ route('login') }}"><i class="lni lni-enter"></i>
                                        Login</a></li>
                                <li class="nav-item"><a href="{{ route('register') }}"><i class="lni lni-user"></i>
                                        Register</a>
                                </li>

                            </ul> --}}

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
                            {{-- <li class="nav-item">
                                <a href="{{ route('workWithUs') }}"
                                    aria-label="Toggle navigation">{{ __('ui.Lavora con Noi') }}</a>
                            </li> --}}

                        </ul>

                        @guest
                            <ul id="nav" class="d-flex d-inline justify-content-center">
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


                                {{-- <ul id="nav" class="d-flex d-inline justify-content-center p-2">
                                    <li class="nav-item me-3">

                                        <a class="dd-menu collapsed text-black fw-medium" href="{{ route('login') }}"
                                            aria-label="Toggle navigation"> <i class="lni lni-user"></i></a>
                                    </li> --}}

                                {{-- <ul id="nav" class="d-flex d-inline justify-content-center p-2">
                                <li class="nav-item me-3">
                                    <i class="lni lni-enter"></i>
                                    <a class="dd-menu collapsed text-black fw-medium" href="{{ route('login') }}"
                                        aria-label="Toggle navigation">{{ __('ui.Accedi') }}</a>
                                </li>
                                <li class="nav-item me-3">
                                    <i class="lni lni-user"></i>
                                    <a class="dd-menu collapsed text-black fw-medium" href="{{ route('register') }}"
                                        aria-label="Toggle navigation">{{ __('ui.Registrati') }}</a>
                                </li> --}}
                            @endguest

                        </ul>

                        <div class="d-flex justify-content-center p-3 ">
                            <div class="button-home ">
                                @auth
                                    <a href="{{ route('articles.create') }}" class="a-button">
                                        {{ __('ui.Crea un Annuncio') }}
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="a-button">
                                        {{ __('ui.Crea un Annuncio') }}</a>
                                @endauth
                            </div>

                        </div>


                        <div class="dropdown pt-2">
                            <button class="btn">
                                <span class="material-symbols-outlined">
                                    language
                                </span>

                            </button>


                            <ul class="dropdown-menu rounded-2" aria-labelledby="Dropdown">
                                <li>
                                    <a class="dropdown-item" href="#"><x-_locale lang="it" /> Italiano
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><x-_locale lang="en" /> English
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><x-_locale lang="fr" /> Français
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </nav> <!-- navbar -->
            </div>

        </div>
    </div> <!-- row -->


</div> <!-- container -->


</div> <!-- container -->
<script>
    let subMenu = document.querySelector("#subMenu");

    function toggleMenu() {
        subMenu.classList.toggle("open-menu");
    }
</script>
