<x-layouts.main>

    <div class="container vh-100 mt-5 pt-5">
        <div class="row text-center mt-5">
            <div class="col-12">
                <h3>{{ __('ui.Annuncio creato con successo') }}</h3>
            </div>
            <div class="col-12 mt-5">
                <p>{{ __('ui.Il tuo annuncio è in fase di controllo e riceverai una mail non appena verrà pubblicato')}}</p>
            </div>
            <div class="col-12 pt-5">
                <div class="form-group button mb-0">
                    <a href="{{ route('homepage') }}">
                        <button type="submit" class="btn">{{ __('ui.Torna alla Home')}}</button>
                    </a>
                    <a href="{{ route('articles.create') }}">
                        <button type="submit" class="btn">{{ __('ui.Inserisci un nuovo articolo')}}</button>
                    </a>
                </div>
            </div>
        </div>
    </div>


</x-layouts.main>
