<div class="col-12">
    <div class="tab-content " id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
            <div class="row ">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Item -->
                    <div class="single-item-grid">
                        <div class="image">
                            <a href="item-details.html"><img src="https://via.placeholder.com/600x400" alt="#"></a>
                            <i class=" cross-badge lni lni-bolt"></i>
                            <span class="flat-badge sale">Sale</span>
                        </div>
                        <div class="content">
                            <a href="javascript:void(0)" class="tag">Mobile</a>
                            <h3 class="title">
                                <a href="item-details.html">{{ $article->title }}</a>
                            </h3>
                            <p class="location"><a href="javascript:void(0)"><i class="lni lni-map-marker">
                                    </i>{{ $article->city }}</a></p>
                            <ul class="info">
                                <li class="price">{{ $article->price }}€</li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
</div>