<div class="dashboard-sidebar">
    <div class="user-image">
        <img src="{{ Storage::url(auth()->user()->avatar) }}" alt="#">
        <h3 class="mt-3">{{ auth()->user()->firstName }} {{ auth()->user()->lastName }}</h3>
    </div>
    <div class="dashboard-menu">
        <ul>
            <li><a class="{{ request()->routeIs('users.dashboard') ? 'active' : '' }}" href="{{ route('users.dashboard') }}"><i class="lni lni-dashboard"></i> Dashboard</a></li>
            <li><a class="{{ request()->routeIs('users.profile_settings') ? 'active' : '' }}" href="{{ route('users.profile_settings') }}"><i class="lni lni-pencil-alt"></i>{{ __('ui.Modifica profilo')}}</a></li>
            <li><a class="{{ request()->routeIs('users.my_items') ? 'active' : '' }}" href="{{ route('users.my_items') }}"><i class="lni lni-checkmark-circle"></i>{{ __('ui.I miei annunci')}}</a></li>
            <li><a class="{{ request()->routeIs('wishlist.index') ? 'active' : '' }}" href="{{ route('wishlist.index') }}"><i class="lni lni-heart"></i> Wishlist</a></li>
            <li><a class="{{ request()->routeIs('articles.create') ? 'active' : '' }}" href="{{ route('articles.create') }}"><i class="lni lni-circle-plus"></i>{{ __('ui.Crea un Annuncio')}}</a></li>
            @if (auth()->user()->is_revisor)
                <li>
                    <a class="{{ request()->routeIs('revisor.index') ? 'active' : '' }}" href="{{ route('revisor.index') }}">
                        <i class="lni lni-write"></i>
                        {{ __('ui.Annunci da revisionare')}}
                        @if ($articles_to_check_count)
                        <span class="loader">{{ $articles_to_check_count}}</span>
                        @else
                            
                        @endif
                         
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>

<!-- CSS -->
<style>
    .dashboard-menu .badge {
        background-color: red;
        color: white;
        border-radius: 50%;
        padding: 0.25em 0.5em;
        font-size: 0.875em;
        margin-right: 0.5em;
    }
</style>
