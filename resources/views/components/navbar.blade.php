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
                                <li class="nav-item active"><a href="{{ route('login') }}"><i class="lni lni-enter"></i>
                                        Login</a></li>
                                <li class="nav-item"><a href="{{ route('register') }}"><i class="lni lni-user"></i>
                                        Register</a>
                                </li>

                            </ul> --}}

                            <li class="nav-item">
                                <a href="{{ route('articles.index') }}" aria-label="Toggle navigation">Articoli</a>
                            </li>
                            <li class="nav-item">
                                <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                    data-bs-target="#submenu-1-5" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">Categorie</a>
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
                        @guest
                            <ul id="nav" class="d-flex d-inline justify-content-center p-2">
                                <li class="nav-item me-3">
                                    <i class="lni lni-enter"></i>
                                    <a class="dd-menu collapsed text-black fw-medium" href="{{ route('login') }}"
                                        aria-label="Toggle navigation">Login</a>
                                </li>
                                <li class="nav-item me-3">
                                    <i class="lni lni-user"></i>
                                    <a class="dd-menu collapsed text-black fw-medium" href="{{ route('register') }}"
                                        aria-label="Toggle navigation">Registrati</a>
                                </li>
                            @endguest
                            @auth
                                <li class="nav-item">
                                    <a class="dd-menu collapsed" href="" data-bs-toggle="collapse"
                                        data-bs-target="#submenu-1-6" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">{{ auth()->user()->name }}</a>
                                    <ul class="sub-menu collapse" id="submenu-1-6">
                                        <li class="nav-item">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button class="btn" type="submit">Esci</button>
                                            </form>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endauth
                        </ul>


                        <div class="button d-flex justify-content-center p-3">
                            <a href="{{ route('articles.create') }}" class="btn">Crea un annuncio</a>
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
