<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-12">
            <div class="nav-inner">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{ route('homepage') }}">
                        <img src="{{ asset('/assets/images/logo/logo.svg') }}" alt="Logo">
                    </a>
                    
                    <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                    <ul id="nav" class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="{{ route('homepage') }}" aria-label="Toggle navigation">{{ __('ui.home') }}</a>
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
                                <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                data-bs-target="#submenu-1-5" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">{{ __('ui.categorie') }}</a>
                                <ul class="sub-menu collapse" id="submenu-1-5">
                                    @forelse ($categories as $category)
                                    <li class="nav-item"><a
                                        href="{{ route('articles.category', ['id' => $category->id]) }}">{{ __("ui.$category->name") }}</a>
                                    </li>
                                    @empty
                                    {{-- Nessuna categoria --}}
                                    @endforelse
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('workWithUs') }}"
                                aria-label="Toggle navigation">{{ __('ui.Lavora con Noi') }}</a>
                            </li>
                        </ul>
                        @guest
                        <ul id="nav" class="d-flex d-inline justify-content-center p-2">
                            <li class="nav-item me-3">
                                <i class="lni lni-enter"></i>
                                <a class="dd-menu collapsed text-black fw-medium" href="{{ route('login') }}"
                                aria-label="Toggle navigation">{{ __('ui.Accedi') }}</a>
                            </li>
                            <li class="nav-item me-3">
                                <i class="lni lni-user"></i>
                                <a class="dd-menu collapsed text-black fw-medium" href="{{ route('register') }}"
                                aria-label="Toggle navigation">{{ __('ui.Registrati') }}</a>
                            </li>
                            @endguest
                            @auth
                            <li class="sub-menu-profile position-relative">
                                <img src="{{ auth()->user()->providers[0]->social_avatar ?? Storage::url(auth()->user()->avatar) }}"
                                class="user-pic" alt="" onclick="toggleMenu()">
                                <div class="sub-menu-wrap" id="subMenu">
                                    <div class="sub-menu">
                                        <div class="user-info">
                                            {{-- <img
                                            src="{{auth()->user()->providers[0]->social_avatar ?? Storage::url(auth()->user()->avatar)}}"
                                            class="user-pic" alt=""> --}}
                                            <h3>{{ auth()->user()->firstName }} {{ auth()->user()->lastName }}</h3>
                                        </div>
                                        <hr>
                                        
                                        <a href="{{ route('users.dashboard') }}" class="sub-menu-link">
                                            <img src="{{ asset('/assets/profile/profile.png') }}" alt="">
                                            <p>{{ __('ui.Profilo')}}</p>
                                            <span>></span>
                                        </a>
                                        @if (auth()->user()->is_revisor == true)
                                        <a href="{{ route('revisor.index') }}" class="sub-menu-link">
                                            <img src="{{ asset('/assets/profile/profile.png') }}" alt="">
                                            <p>{{ __('ui.Zona revisione')}} {{ $articles_to_accept_count }}</p>
                                            <span>></span>
                                        </a>
                                        @endif
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit" href="javascript:void(0)"
                                            class="sub-menu-link btn px-0">
                                            <img src="{{ asset('/assets/profile/logout.png') }}" alt="">
                                            <p>{{ __('ui.Logout')}}</p>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            
                            {{-- <a class="dd-menu collapsed" href="" data-bs-toggle="collapse"
                            data-bs-target="#submenu-1-6" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">{{ auth()->user()->name }}</a>
                            <ul class="sub-menu collapse" id="submenu-1-6">
                                <li class="nav-item">
                                    <a href="{{ route('users.dashboard',) }}">
                                        Profilo
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="btn" type="submit">Esci</button>
                                    </form>
                                </a>
                            </li>
                        </ul> --}}
                    </li>
                    @endauth
                </ul>
                
                
                <div class="button d-flex justify-content-center p-3">
                    @auth
                    <a href="{{ route('articles.create') }}" class="btn">
                        {{ __('ui.Crea un Annuncio') }}</a>
                        @else
                        <a href="{{ route('login') }}" class="btn">
                            {{ __('ui.Crea un Annuncio') }}</a>
                            @endauth
                        </div>
                        
                        <div class="flag-container">
                            <div class="dropdown">
                                <a data-mdb-dropdown-init class="dropdown-toggle" href="#" id="Dropdown"
                                role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                <x-_locale lang="it" />
                            </a>
                            
                            <ul class="dropdown-menu" aria-labelledby="Dropdown">
                                <li>
                                    <a class="dropdown-item" href="#"><x-_locale lang="en" />English </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><x-_locale lang="fr" />France
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    
                    {{-- <div class="login-button">
                        <ul>
                            <li>
                                <a href="">Accedi</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">Registrati</a>
                            </li>
                        </ul>
                    </div> --}}
                    
                    
                    
                    {{-- <a class="btn btn-sm btn-outline-secondary mx-2" href="{{ route('homepage') }}">Dashboard</a>
                    --}}
                    
                    
                    
                    
                    
                    
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
