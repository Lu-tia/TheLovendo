<x-layouts.main>
    
    <!-- Start Hero Area -->
    <section class="hero-area overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="hero-text text-center">
                        <div class="section-heading">
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">Lavora con noi</h2>
                            <p class="wow fadeInUp" data-wow-delay=".5s">Unisciti al nostro team!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
    <!-- Start Contact Section -->
    <section class="contact section">
        <div class="container">
            <div class="dashboard-block mt-0">
                <h3 class="block-title">Invia la tua candidatura</h3>
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
                    <form class="default-form-style" method="POST" action="{{ route('applicationMail') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mx-4">
                                    <label>Nome<span>*</span></label>
                                    <input name="nome" type="text" class="form-control" placeholder="Inserisci il tuo nome">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mx-4">
                                    <label>Cognome<span>*</span></label>
                                    <input name="cognome" type="text" class="form-control" placeholder="Inserisci il tuo cognome">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mx-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Inserisci la tua mail">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group ms-4">
                                    <label>Età<span>*</span></label>
                                    <input name="eta" type="number" class="form-control" placeholder="Inserisci la tua età">
                                </div>
                            </div>
                            <div class="col-5 me-4">
                                <div class="form-group">
                                    <label>Città<span>*</span></label>
                                    <input name="citta" type="text" class="form-control" placeholder="Inserisci la tua città">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mx-4">
                                    <label>Curriculum<span>*</span></label>
                                    <div class="custom-file">
                                        <input name="curriculum" type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Scegli file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mx-4">
                                <div class="form-group button mb-0">
                                    <button type="submit" class="btn btn-primary">Invia</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main>
