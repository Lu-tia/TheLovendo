<div class="flag-container">
    <form class="d-inline" action="{{ route('setLocale', $lang) }}" method="POST">
        @csrf
        <button type="submit" class="btn flag-btn">

            <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" class="flag-img" />


        </button>
    </form>
</div>
