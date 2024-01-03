@extends('layout.index')
@section('title')
Detail Produk
@endsection
@section('content')
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="{{asset('images/foto_produk/'.$produk->foto_produk)}}" alt="">
                    </div>

                </div>
            </div>
            <!-- /Product main img -->

            <!-- Product thumb imgs -->
            <div class="col-md-2  col-md-pull-5">
                <div id="product-imgs">

                    <div class="product-preview">
                        <img src="{{asset('images/foto_produk/'.$produk->foto_produk)}}" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product thumb imgs -->

            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name">{{$produk->nama_produk}}</h2>
                    <div>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <a class="review-link" href="/add_review">10 Review(s) | Add your review</a>
                    </div>
                    <div>
                        @if ($produk->id_promo == NULL)
                        <h3 class="product-price">Rp {{number_format($produk->harga,2,',','.')}}
                            <br>
                        </h3>
                        @else
                        <?php $diskon = ($produk->harga)-(($produk->harga)*($produk->promo->diskon/100)) ?>
                        <h3 class="product-price">Rp
                            {{number_format($diskon,2,',','.')}}
                            <br>
                            <del class="product-old-price">Rp
                                {{number_format($produk->harga,2,',','.')}}</del>
                        </h3>
                        @endif
                        @if($produk->jumlah_produk > 0)
                        <span class="product-available">In Stock</span>
                        @elseif($produk->jumlah_produk <= 0 ) <span class="product-available" style="color:grey">Out
                            of
                            Stock</span>
                            @endif
                    </div>
                    <p>
                        <?= $produk->deskripsi ?>
                    </p>

                    {{-- <div class="product-options">
                        <label>
                            Size
                            <select class="input-select">
                                <option value="0">X</option>
                            </select>
                        </label>
                        <label>
                            Color
                            <select class="input-select">
                                <option value="0">Red</option>
                            </select>
                        </label>
                    </div> --}}

                    <div class="add-to-cart mt-4" style="margin-top:60px;">
                        {{-- <div class="qty-label">
                            Qty
                            <div class="input-number">
                                <input type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div> --}}
                        <a href="/cart/{{$produk->id}}"><button class="add-to-cart-btn"><i
                                    class="fa fa-shopping-cart"></i> add to
                                cart</button></a>

                    </div>

                    {{-- <ul class="product-btns">
                        <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                        <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
                    </ul> --}}

                    <ul class="product-links">
                        <li>Category:</li>
                        <li><a href="/home/kategori/{{$produk->id_kategori}}">{{$produk->kategori->nama_kategori}}</a>
                        </li>
                    </ul>

                    <ul class="product-links">
                        <li>Share:</li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>

                </div>
            </div>
            <!-- /Product details -->

            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>

                        <li><a data-toggle="tab" href="#tab2">Reviews</a></li>
                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                        <!-- tab1  -->
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <?= $produk->deskripsi ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->
                        <!-- tab3  -->
                        <div id="tab2" class="tab-pane fade in">
                            <div class="row">
                                <div class="text-center">
                                    <p class="font-italic text-muted">Will be update soon</p>
                                </div>
                                {{--
                                <!-- Rating -->
                                <div class="col-md-3">
                                    <div id="rating">
                                        <div class="rating-avg">
                                            <span>4.5</span>
                                            <div class="rating-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div style="width: 80%;"></div>
                                                </div>
                                                <span class="sum">3</span>
                                            </li>
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div style="width: 60%;"></div>
                                                </div>
                                                <span class="sum">2</span>
                                            </li>
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div></div>
                                                </div>
                                                <span class="sum">0</span>
                                            </li>
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div></div>
                                                </div>
                                                <span class="sum">0</span>
                                            </li>
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div></div>
                                                </div>
                                                <span class="sum">0</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Rating -->

                                <!-- Reviews -->
                                <div class="col-md-6">
                                    <div id="reviews">
                                        <ul class="reviews">
                                            <li>
                                                <div class="review-heading">
                                                    <h5 class="name">John</h5>
                                                    <p class="date">27 DEC 2018, 8:0 PM</p>
                                                    <div class="review-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o empty"></i>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                                        do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="review-heading">
                                                    <h5 class="name">John</h5>
                                                    <p class="date">27 DEC 2018, 8:0 PM</p>
                                                    <div class="review-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o empty"></i>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                                        do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="review-heading">
                                                    <h5 class="name">John</h5>
                                                    <p class="date">27 DEC 2018, 8:0 PM</p>
                                                    <div class="review-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o empty"></i>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                                        do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="reviews-pagination">
                                            <li class="active">1</li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Reviews -->

                                <!-- Review Form -->
                                <div class="col-md-3">
                                    <div id="review-form">
                                        <form class="review-form">
                                            <input class="input" type="text" placeholder="Your Name">
                                            <input class="input" type="email" placeholder="Your Email">
                                            <textarea class="input" placeholder="Your Review"></textarea>
                                            <div class="input-rating">
                                                <span>Your Rating: </span>
                                                <div class="stars">
                                                    <input id="star5" name="rating" value="5" type="radio"><label
                                                        for="star5"></label>
                                                    <input id="star4" name="rating" value="4" type="radio"><label
                                                        for="star4"></label>
                                                    <input id="star3" name="rating" value="3" type="radio"><label
                                                        for="star3"></label>
                                                    <input id="star2" name="rating" value="2" type="radio"><label
                                                        for="star2"></label>
                                                    <input id="star1" name="rating" value="1" type="radio"><label
                                                        for="star1"></label>
                                                </div>
                                            </div>
                                            <button class="primary-btn">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /Review Form --> --}}
                            </div>
                        </div>
                        <!-- /tab3  -->
                    </div>
                    <!-- /product tab content  -->
                </div>
            </div>
            <!-- /product tab -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- Section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3 class="title">Related Products</h3>
                </div>
            </div>

            <!-- product -->
            @foreach ($produk2->take(4) as $p)
            <div class="col-md-3 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="{{asset('images/foto_produk/'.$p->foto_produk)}}" alt="">
                        <div class="product-label">
                            <span class="sale">-30%</span>
                            @if ($p->created_at->addDays(3) >= $carbon) <span class="new">NEW</span>
                            @endif
                        </div>
                    </div>
                    <div class="product-body">
                        <p class="product-category">{{$p->kategori->nama_kategori}}</p>
                        <h3 class="product-name"><a href="#">{{$p->nama_produk}}</a></h3>
                        <h4 class="product-price">Rp {{number_format($p->harga,2,',','.')}}<del
                                class="product-old-price">$990.00</del>
                        </h4>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                            @if (Session::has('login'))
                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to
                                    wishlist</span></button>
                            @endif
                            <button class="quick-view" onclick="window.location.href='/detail/{{$p->id}}'"><i
                                    class="fa fa-eye"></i><span class="tooltipp">See
                                    Product</span></button>
                        </div>
                    </div>
                    <input type="hidden" id="user" value="{{Session::get('id')}}">
                    @if (Session::has('login'))
                    <div class="add-to-cart">
                        <a href="/cart/{{$p->id}}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                add to
                                cart</button>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
            <!-- /product -->
            @endforeach


        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /Section -->
@endsection