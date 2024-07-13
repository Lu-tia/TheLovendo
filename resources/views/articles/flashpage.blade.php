<x-layouts.main>

    <div class="container vh-100 mt-5 pt-5">
        <div class="row text-center mt-5">
            <div class="col-12">
                <h3>Annuncio creato con successo</h3>
            </div>
            <div class="col-12 mt-5">
                <p>Il tuo annuncio è in fase di controllo e riceverai una mail non appena verrà pubblicato</p>
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
