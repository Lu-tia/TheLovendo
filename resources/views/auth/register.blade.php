<x-layouts.main>


    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Registration</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- start Registration section -->
    <section class="login registration section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="form-head">
                        <h4 class="title">Registration</h4>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="socila-login">
                                <ul>
                                    <li><a href="javascript:void(0)" class="facebook"><i class="lni lni-facebook-original"></i>Accedi con Facebook</a></li>
                                    <li><a href="javascript:void(0)" class="google"><i class="lni lni-google"></i>Accedi con Google</a></li>
                                </ul>
                            </div>
                            <div class="alt-option">
                                <span>Oppure</span>
                            </div>
                            <div class="form-group">
                                <label>Nome</label>
                                <input name="name" type="text">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password" id="password">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Conferma Password</label>
                                <input name="password_confirmation" type="password" id="password_confirmation">
                                @error('password_confirmation')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="button">
                                <button type="submit" class="btn">Registrati</button>
                            </div>
                            <p class="outer-link">Sei già registrato? <a href="{{ route('login') }}"> Accedi ora</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Registration section -->


</x-layouts.main>
