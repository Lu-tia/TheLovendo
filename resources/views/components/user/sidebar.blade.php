<div class="dashboard-sidebar">
    <div class="user-image">
        <img src="{{auth()->user()->providers[0]->social_avatar ?? Storage::url(auth()->user()->avatar)}}" alt="#">
        <h3 class="mt-3">{{auth()->user()->firstName}} {{auth()->user()->lastName}}</h3>
    </div>
    <div class="dashboard-menu">
        <ul>
            <li><a class="{{ (request()->routeIs('users.dashboard')) ? 'active' : '' }}" href="{{route('users.dashboard',['user' => auth()->user()])}}"><i class="lni lni-dashboard"></i> Dashboard</a></li>
            <li><a class="{{ (request()->routeIs('users.profile_settings')) ? 'active' : '' }}" href="{{route('users.profile_settings',['user' => auth()->user()])}}"><i class="lni lni-pencil-alt"></i>
                Modifica Profilo</a></li>
                <li><a class="{{ (request()->routeIs('users.my_items')) ? 'active' : '' }}" href="{{route('users.my_items',['user' => auth()->user()])}}"><i class="lni lni-checkmark-circle"></i> I miei annunci</a></li>
                <li><a href="{{ route('wishlist.index') }}"><i class="lni lni-heart"></i> Whishlist</a></li>
                <li><a class="{{ (request()->routeIs('articles.create')) ? 'active' : '' }}" href="{{route('articles.create',['user' => auth()->user()])}}"><i class="lni lni-circle-plus"></i> Crea un annuncio</a></li>
                @if (auth()->user()->is_revisor)
                <li><a class="{{ (request()->routeIs('revisor.index')) ? 'active' : '' }}" href="{{route('revisor.index',['user' => auth()->user()])}}"><i class="lni lni-write"></i> Annunci da revisionare {{$articles_to_check_count ?? ''}}</a></li>
                @endif
            </ul>
        </div>
    </div>
    <!-- Start Dashboard Sidebar -->
</div>