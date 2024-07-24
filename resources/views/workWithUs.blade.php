<x-layouts.main>





    <!-- Start Contact Section -->
    <section class="contact section mt-5">
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
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class=" mt-0 p-4 bg-custom">
                        <h2 class=" text-center">{{ __('ui.Invia la tua candidatura') }}</h2>
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
                                            <label class="label-custom">{{ __('ui.Nome') }}<span>*</span></label>
                                            <input name="nome" type="text" class="form-control border-none"
                                                placeholder="{{ __('ui.Nome') }}" value="{{ old('nome') }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mx-4">
                                            <label class="label-custom">{{ __('ui.Cognome') }}<span>*</span></label>
                                            <input name="cognome" type="text" class="form-control work-with-us-custom"
                                                placeholder="{{ __('ui.Cognome') }}" value="{{ old('cognome') }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mx-4">
                                            <label class="label-custom" for="email">{{ __('ui.Email') }}*</label>
                                            <input disabled type="email" class="form-control" id="email" name="email"
                                                placeholder="{{ __('ui.Mail') }}" value="{{ auth()->user()->email }}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group ms-4">
                                            <label class="label-custom">{{ __('ui.Età') }}<span>*</span></label>
                                            <input name="eta" type="number" class="form-control"
                                                placeholder="{{ __('ui.Età') }}" value="{{ old('eta') }}">
                                        </div>
                                    </div>
                                    <div class="col-6 me-4">
                                        <div class="form-group">
                                            <label class="label-custom">{{ __('ui.Città') }}<span>*</span></label>
                                            <input name="citta" type="text" class="form-control"
                                                placeholder="{{ __('ui.Città') }}" value="{{ old('citta') }}">
                                        </div>
                                    </div>
                                    <div class="col-10 mx-4 mb-3">
                                        <label class="label-custom" for="customFile">Curriculum*</label>
                                        <input name="curriculum" type="file" class="form-control mt-3" id="customFile">
                                    </div>
                                    <div class="col-12 mx-4 mt-3">
                                        <div class="form-group button mb-0 d-flex">
                                            <button type="submit" class="btn btn-primary ms-auto me-5">{{ __('ui.Invia')
                                                }}</button>
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