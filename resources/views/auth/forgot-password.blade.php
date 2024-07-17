<x-layouts.main>


    <!-- start login section -->

    <section class="login section">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="form-head">
                        <h4 class="title">{{ __('ui.Password dimenticata?') }}</h4>
                        <form action="{{ route('password.email') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="button">
                                <button type="submit" class="btn">{{ __('ui.Recupera ora') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end login section -->




</x-layouts.main>
