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
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('articles.index') }}">Articoli</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dd-menu collapsed" href="javascript:void(0)"
                                    data-bs-toggle="collapse" data-bs-target="#submenu-1-5"
                                    aria-controls="navbarSupportedContent" aria-expanded="false"
                                    aria-label="Toggle navigation">Categorie</a>
                                <ul class="sub-menu collapse" id="submenu-1-5">
                                    @forelse ($categories as $category)
                                    <li class="nav-item"><a
                                            href="{{ route('articles.category', ['id' => $category->id]) }}">{{
                                            $category->name }}</a>
                                    </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </li>
                        </ul>

                        <!-- Wrapper per auth/guest e bottone "Crea annuncio" -->
                        <div class="d-flex flex-column ms-3">
                            <!-- Parte guest -->
                            @guest
                            <div class="nav-item me-3">
                                <i class="lni lni-enter"></i>
                                <a class="dd-menu collapsed text-black fw-medium" href="{{ route('login') }}"
                                    aria-label="Toggle navigation">Login</a>
                            </div>
                            <div class="nav-item me-3 mt-3">
                                <i class="lni lni-user"></i>
                                <a class="dd-menu collapsed text-black fw-medium" href="{{ route('register') }}"
                                    aria-label="Toggle navigation">Registrati</a>
                            </div>
                            @endguest



                            <!-- Parte auth -->
                            @auth
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle dd-menu collapsed" id="navbarDropdown"
                                    role="button" data-bs-toggle="collapse" data-bs-target="#submenu-1-6"
                                    aria-expanded="false" aria-haspopup="true">
                                    {{ auth()->user()->name }}
                                </a>
                                <ul class="sub-menu collapse" id="submenu-1-6">
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-item"
                                            href="{{ route('users.dashboard', ['user' => auth()->user()]) }}">Profilo</a>
                                    </li>
                                    <li class="nav-item">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="btn dropdown-item text-start" type="submit">Esci</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            @endauth
                        </div>
                        <!-- Bottone "Crea annuncio" -->
                        <div class="button ms-3 mt-3">
                            @auth
                            <a href="{{ route('articles.create',['user' => auth()->user()]) }}"
                                class="btn">Crea un annuncio</a>
                            @else
                            <a href="{{ route('login') }}" class="btn">Crea un annuncio</a>
                            @endauth
                        </div>

                    </div>
                </nav> <!-- navbar -->
            </div>
        </div>
    </div> <!-- row -->
</div> <!-- container -->