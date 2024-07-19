<x-layouts.main>


    <!-- start Registration section -->
    <section class="login registration section">

        <ul class="background">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="form-head">
                        <h4 class="title">Registrazione</h4>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="socila-login">
                                <ul>
                                    <li><a href="javascript:void(0)" class="facebook"><i
                                                class="lni lni-facebook-original"></i>{{ __('ui.Accedi con facebook') }}</a>
                                    </li>
                                    <li><a href="javascript:void(0)" class="google"><i
                                                class="lni lni-google"></i>{{ __('ui.Accedi con Google') }}</a></li>
                                </ul>
                            </div>
                            <div class="alt-option">
                                <span>{{ __('ui.Oppure') }}</span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('ui.Nome') }}</label>
                                <input name="firstName" type="text" value="{{ old('firstName') }}">
                                @error('firstName')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{ __('ui.Cognome') }}</label>
                                <input name="lastName" type="text" value="{{ old('lastName') }}">
                                @error('lastName')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{ __('ui.Email') }}</label>
                                <input name="email" type="email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{ __('ui.Password') }}</label>
                                <input name="password" type="password" id="password">
                                @error('password')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{ __('ui.Conferma Password') }}</label>
                                <input name="password_confirmation" type="password" id="password_confirmation">
                                @error('password_confirmation')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="button">
                                <button type="submit" class="btn">{{ __('ui.Registrati') }}</button>
                            </div>
                            <p class="outer-link">{{ __('ui.Sei già registrato?') }}<a href="{{ route('login') }}">
                                    {{ __('ui.Accedi ora') }}</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Registration section -->


</x-layouts.main>
