<x-layouts.main>
    <div class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="row">
            @if (session()->has('message'))
                <div class="alert alert-warning d-flex justify-content-between">
                    <p>{{ session('message') }}</p>
                    <form action="{{route('rollback',['article' => $article_to_check])}}" method="post">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-danger me-3" type="submit">Annulla ultima modifica</button>
                    </form>
                </div>
            @endif
            @if (session()->has('rollback'))
                <div class="alert alert-warning d-flex">
                    {{ session('rollback') }}
                </div>
            @endif
            @if ($article_to_check)           
            <div class="col-6">
                <img src="{{asset('assets/images/placeholder/600x400.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-6">
                <h3>{{$article_to_check->title}}</h3>
                <p>{{$article_to_check->body}}</p>
                <p>{{$article_to_check->user->name}}</p>
            </div>
            <div class="col-12 mt-5 d-flex justify-content-center">
                <form action="{{route('accept',['article' => $article_to_check])}}" method="post">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-success me-3" type="submit">ACCETTA</button>
                </form>
                <form action="{{route('reject',['article' => $article_to_check])}}" method="post">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-danger me-3" type="submit">RIFIUTA</button>
                </form>
            </div>
            @else
            <div class="col-12">
                <h3>Nessun articolo da revisionare</h3>
            </div>
            <div class="col-12">
                <button>
                    <a href="{{route('homepage')}}">Torna alla homepage</a>
                </button>
            </div>
            @endif
        </div>
    </div>
</x-layouts.main>