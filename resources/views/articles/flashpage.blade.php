<x-layouts.main>
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Ad Listings Grid</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Listings Grid</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <div class="container vh-100">
        <div class="row text-center mt-5">
            <div class="col-12">
                <h3>Complimenti!</h3>
            </div>
            <div class="col-12">
                <p>L'articolo è stato creato con successo</p>
            </div>
            <div class="col-12 pt-5">
                <div class="form-group button mb-0">
                    <a href="{{route('homepage')}}">
                        <button type="submit" class="btn">Torna alla Home</button>
                    </a>
                    <a href="{{route('articles.create')}}">
                        <button type="submit" class="btn">Inserisci un nuovo articolo</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
        
</x-layouts.main>