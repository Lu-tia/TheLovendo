<x-layouts.main>
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Login</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->


    <section class="password reset section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-5">

                    <form class="px-5 py-4  border rounded" action="{{ route('password.email') }}" method="POST">
                        <h2 class="title mb-3 px-2">Password dimenticata?</h2>

                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email
                                utente</label>
                            <input type="email" name="email" class="form-control" id="email">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-dark">Recupera Ora</button>

                    </form>
                </div>
            </div>
        </div>
    </section>


    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 border rounded" action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email
                            utente</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>

                    <button type="submit" class="btn btn-dark">Recupera Ora</button>

                </form>
            </div>
        </div>
    </div> --}}


</x-layouts.main>
