<x-layouts.main>
    <div id="flashpage" class="container flashpage vh-100 mt-5 pt-5">
        <div class="row text-center mt-5">
            <div class="col-12">
                <h3>{{ __('ui.Annuncio creato con successo') }}</h3>
            </div>
            <div class="col-12 mt-5">
                <p>{{ __('ui.Il tuo annuncio è in fase di controllo e riceverai una mail non appena verrà pubblicato') }}
                </p>
            </div>
            <div class="col-12 justify-content-center d-flex mt-5">
                <div class="spinner">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/flashpage.js') }}"></script>
</x-layouts.main>
