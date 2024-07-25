<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-6 mt-4 py-5 footer-h">
                <h2 class="footer-h">{{ __('ui.Lavora con Noi') }}</h2>
                <p class="pb-3">
                    Unisciti nella nostra community.
                </p>
                <button class="button-yellow"> <a href="{{ route('workWithUs') }}" class="a-foot">Lavora
                        con
                        noi</a>
                </button>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-3 mt-4 pt-5">
                <h3 class="footer-h">Link veloci</h3>
                <ul>
                    <li><a href="{{ route('articles.index') }}" class="aFooter">Articoli</a></li>
                    @guest
                        <li><a href="#how-it-work" class="aFooter">Come funziona</a></li>
                        <li><a href="{{ route('login') }}" class="aFooter">Login</a></li>
                        <li><a href="{{ route('register') }}" class="aFooter">Signup</a></li>
                    @endguest
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-3 mt-4 pt-5">
                <h3 class="footer-h">Contatti</h3>
                <ul class="aFooter">
                    <li>Email: <p>info@thelovendo.com</p>
                    </li>
                    <li>Address: <p>Via delle Magnolie, 10, 00100 Roma, Italia</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>




{{-- <footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-footer mobile-app">
                        <h3>Mobile Apps</h3>
                        <div class="app-button">
                            <a href="javascript:void(0)" class="btn">
                                <i class="lni lni-play-store"></i>
                                <span class="text">
                                    <span class="small-text">Get It On</span>
                                    Google Play
                                </span>
                            </a>
                            <a href="javascript:void(0)" class="btn">
                                <i class="lni lni-apple"></i>
                                <span class="text">
                                    <span class="small-text">Get It On</span>
                                    App Store
                                </span>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-footer f-link">
                        <h3>Locations</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <li><a href="javascript:void(0)">Chicago</a></li>
                                    <li><a href="javascript:void(0)">New York City</a></li>
                                    <li><a href="javascript:void(0)">San Francisco</a></li>
                                    <li><a href="javascript:void(0)">Washington</a></li>
                                    <li><a href="javascript:void(0)">Boston</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <li><a href="javascript:void(0)">Los Angeles</a></li>
                                    <li><a href="javascript:void(0)">Seattle</a></li>
                                    <li><a href="javascript:void(0)">Las Vegas</a></li>
                                    <li><a href="javascript:void(0)">San Diego</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-footer f-link">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="javascript:void(0)">About Us</a></li>
                            <li><a href="javascript:void(0)">How It's Works</a></li>
                            <li><a href="javascript:void(0)">Login</a></li>
                            <li><a href="javascript:void(0)">Signup</a></li>
                            <li><a href="javascript:void(0)">Help & Support</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-footer f-contact">
                        <h3>Contact</h3>
                        <ul>
                            <li>23 New Design Str, Lorem Upsum 10<br> Hudson Yards, USA</li>
                            <li>Tel. +(123) 1800-567-8990 <br> Mail. support@classigrids.com</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

</footer> --}}
