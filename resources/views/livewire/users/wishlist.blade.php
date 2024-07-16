<div>
    <div class="dashboard-block mt-0">
        <h3 class="block-title">Wishlist</h3>
        <!-- Start Items Area -->
        <div class="my-items">
            <!-- Start Item List Title -->
            <div class="item-list-title">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5 col-12">
                        <p>Titolo</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Categoria</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Condizione</p>
                    </div>
                </div>
            </div>
            <!-- End List Title -->
            @forelse ($wishlists as $wishlist)
            <div class="single-item-list">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="item-image">
                            <img src="" alt="#">
                            <div class="content">
                                <h3 class="title"><a href="javascript:void(0)">{{$wishlist->article->title}}</a></h3>
                                <span class="price">{{$wishlist->article->price}}€</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>{{$wishlist->article->category->name}}</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>{{$wishlist->article->condition}}</p>
                        
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 align-right">
                        <ul class="action-btn">
                            <li><a href="{{ route('articles.show', $wishlist->article->id) }}"><i class="lni lni-eye"></i></a></li>
                            <li>
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="lni lni-trash"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
     
      
            @empty
                Nessun annuncio trovato
            @endforelse
          
    
</div>