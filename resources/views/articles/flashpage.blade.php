<x-layouts.main>

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
                    <a href="{{ route('homepage') }}">
                        <button type="submit" class="btn">Torna alla Home</button>
                    </a>
                    <a href="{{ route('articles.create') }}">
                        <button type="submit" class="btn">Inserisci un nuovo articolo</button>
                    </a>
                </div>
            </div>
        </div>
    </div>


</x-layouts.main>
