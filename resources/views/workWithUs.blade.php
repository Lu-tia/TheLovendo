<x-layouts.main>





    <!-- Start Contact Section -->
    <section class="contact section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="dashboard-block mt-0">
                        <h3 class="block-title">{{ __('ui.Invia la tua candidatura') }}</h3>
                        <div class="inner-block">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="default-form-style" method="POST" action="{{ route('applicationMail') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group mx-4">
                                            <label>{{ __('ui.Nome') }}<span>*</span></label>
                                            <input name="nome" type="text" class="form-control"
                                                placeholder="{{ __('ui.Inserisci il tuo nome') }}" value="{{ old('nome') }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mx-4">
                                            <label>{{ __('ui.Cognome') }}<span>*</span></label>
                                            <input name="cognome" type="text" class="form-control"
                                                placeholder="{{ __('ui.Inserisci il tuo cognome') }}" value="{{ old('cognome') }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mx-4">
                                            <label for="email">{{ __('ui.Email') }}*</label>
                                            <input disabled type="email" class="form-control" id="email"
                                                name="email" placeholder="{{ __('ui.Inserisci la tua mail') }}"
                                                value="{{ auth()->user()->email }}">
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group ms-4">
                                            <label>{{ __('ui.Età') }}<span>*</span></label>
                                            <input name="eta" type="number" class="form-control"
                                                placeholder="{{ __('ui.Inserisci la tua età') }}" value="{{ old('eta') }}">
                                        </div>
                                    </div>
                                    <div class="col-5 me-4">
                                        <div class="form-group">
                                            <label>{{ __('ui.Città') }}<span>*</span></label>
                                            <input name="citta" type="text" class="form-control"
                                                placeholder="{{ __('ui.Inserisci la tua città') }}" value="{{ old('citta') }}">
                                        </div>
                                    </div>
                                    <div class="col-10 mx-4 mb-3">
                                        <label class="text-black" for="customFile">Curriculum*</label>
                                        <input name="curriculum" type="file" class="form-control mt-3" id="customFile">
                                    </div>
                                    <div class="col-12 mx-4 mt-3">
                                        <div class="form-group button mb-0 d-flex">
                                            <button type="submit" class="btn btn-primary ms-auto me-5">{{ __('ui.Invia') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main>
