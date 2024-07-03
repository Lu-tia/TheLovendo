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
                                <a href="{{ route('homepage') }}" aria-label="Toggle navigation">Home</a>
                            </li>

                                {{-- <a class=" dd-menu collapsed" href="{{ route('homepage') }}" data-bs-toggle="collapse"
                                    data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">Home</a>
                                <ul class="sub-menu collapse" id="submenu-1-1">
                                    <li class="nav-item active"><a href="{{ route('login') }}"><i
                                                class="lni lni-enter"></i> Login</a></li>
                                    <li class="nav-item"><a href="{{ route('register') }}"><i class="lni lni-user"></i>
                                            Register</a>
                                    </li>

                                </ul> --}}
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('articles.index') }}" aria-label="Toggle navigation">Articoli</a>
                            </li>
                            <li class="nav-item">
                                <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                    data-bs-target="#submenu-1-5" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">Categorie</a>
                                <ul class="sub-menu collapse" id="submenu-1-5">
                                    <li class="nav-item"><a href="#">Elettronica</a></li>
                                    <li class="nav-item"><a href="#">Abbigliamento</a></li>
                                    <li class="nav-item"><a href="#">Salute e Bellezza</a></li>
                                    <li class="nav-item"><a href="#">Giocattoli</a></li>
                                    <li class="nav-item"><a href="#">Sport</a></li>
                                    <li class="nav-item"><a href="#">Animali Domestici</a></li>
                                    <li class="nav-item"><a href="#">Libri e Riviste</a></li>
                                    <li class="nav-item"><a href="#">Accessori</a></li>
                                    <li class="nav-item"><a href="#">Motori</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    @guest
                        <div class="login-button">
                            <ul>
                                <li>
                                    <a href="{{ route('login') }}"><i class="lni lni-enter"></i> Accedi</a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}"><i class="lni lni-user"></i> Registrati</a>
                                </li>
                            </ul>
                        </div>
                    @endguest

                    @auth
                        <span>Benvenuto, {{ auth()->user()->name }}</span>
                        {{-- <a class="btn btn-sm btn-outline-secondary mx-2" href="{{ route('homepage') }}">Dashboard</a> --}}

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-sm btn-outline-secondary mx-2" type="submit">Esci</button>
                        </form>
                    @endauth
                    <div class="button header-button">
                        <a href="{{ route('articles.create') }}" class="btn">Crea un annuncio</a>
                    </div>
                </nav> <!-- navbar -->
            </div>
        </div>
    </div> <!-- row -->
</div> <!-- container -->
