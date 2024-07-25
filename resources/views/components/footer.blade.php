<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-6 mt-4 py-5 footer-h">
                <h2 class="footer-h">{{ __('ui.Lavora con Noi') }}</h2>
                <p class="pb-3">
                    {{ __('ui.Unisciti nella nostra community.') }}
                </p>
                <button class="button-yellow"> <a href="{{ route('workWithUs') }}" class="a-foot">
                        {{ __('ui.Lavora con Noi') }}</a>
                </button>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-3 mt-4 pt-5">
                <h3 class="footer-h">{{ __('ui.Link Veloci') }}</h3>
                <ul>
                    <li><a href="{{ route('articles.index') }}" class="aFooter">{{ __('ui.Articoli') }}</a></li>
                    @guest
                        <li><a href="#how-it-work" class="aFooter">{{ __('ui.Come funziona') }}</a></li>
                        <li><a href="{{ route('login') }}" class="aFooter">Login</a></li>
                        <li><a href="{{ route('register') }}" class="aFooter">{{ __('ui.Registrati') }}</a></li>
                    @endguest
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-3 mt-4 pt-5">
                <h3 class="footer-h">{{ __('ui.Contatti') }}</h3>
                <ul class="aFooter">
                    <li>Email: <p>info@thelovendo.com</p>
                    </li>
                    <li>{{ __('ui.Indirizzo') }}: <p>Via delle Magnolie, 10, 00100 Roma, Italia</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
