@extends('layout.index')
@section('title')
Halaman Index
@endsection
@section('content')
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- shop -->
            @foreach($kategori as $k)
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="{{asset('images/cover/'.$k->cover)}}" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>{{$k->nama_kategori}}<br>Collection</h3>
                        <a href="/home/kategori/{{$k->id}}" class="cta-btn">Shop now <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- /shop -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">New Products</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                            <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                            <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                            <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <!-- product -->
                                @if($produk->isEmpty())
                                <p class="text-center font-italic ">
                                    No Product Available
                                </p>

                                @else
                                @foreach ($produk as $p)
                                <div class="product">
                                    <div class="product-img">
                                        <img src="{{asset('images/foto_produk/'.$p->foto_produk)}}" alt="">
                                        <div class="product-label">


                                            @if($p->promo==NULL)

                                            @else
                                            <span class="sale">-{{$p->promo->diskon}}%</span>
                                            @endif
                                            @if ($p->created_at->addDays(3) >= $carbon)
                                            <span class="new">NEW</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">{{$p->kategori->nama_kategori}}</p>
                                        <h3 class="product-name"><a href="#">{{$p->nama_produk}}</a></h3>
                                        @if ($p->id_promo == NULL)
                                        <h4 class="product-price">Rp {{number_format($p->harga,2,',','.')}}
                                            <br>
                                        </h4>
                                        @else
                                        <?php $diskon = ($p->harga)-(($p->harga)*($p->promo->diskon/100)) ?>
                                        <h4 class="product-price">Rp
                                            {{number_format($diskon,2,',','.')}}
                                            <br>
                                            <del class="product-old-price">Rp
                                                {{number_format($p->harga,2,',','.')}}</del>
                                        </h4>
                                        @endif

                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <input type="hidden" name="id" id="id" value="{{$p->id}}">
                                        <div class="product-btns">
                                            @if (Session::has('login'))
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                    class="tooltipp">add to
                                                    wishlist</span></button>
                                            @endif
                                            <button class="quick-view"
                                                onclick="window.location.href='/detail/{{$p->id}}'"><i
                                                    class="fa fa-eye"></i><span class="tooltipp">See
                                                    Product</span></button>
                                        </div>
                                    </div>
                                    <input type="hidden" id="user" value="{{Session::get('id')}}">
                                    @if (Session::has('login'))
                                    <div class="add-to-cart">
                                        <a href="/cart/{{$p->id}}"><button class="add-to-cart-btn"><i
                                                    class="fa fa-shopping-cart"></i>
                                                add to
                                                cart</button>
                                        </a>
                                    </div>
                                    @endif
                                </div>
                                @endforeach
                                @endif
                                <!-- /product -->
                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="hot-deal">
                    <ul class="hot-deal-countdown">
                        <li>
                            <div>
                                <h3>02</h3>
                                <span>Days</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>10</h3>
                                <span>Hours</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>34</h3>
                                <span>Mins</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>60</h3>
                                <span>Secs</span>
                            </div>
                        </li>
                    </ul>
                    <h2 class="text-uppercase">hot deal this week</h2>
                    <p>New Collection Up to 50% OFF</p>
                    <a class="primary-btn cta-btn" href="#">Shop now</a>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Top selling</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
                            <li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
                            <li><a data-toggle="tab" href="#tab2">Cameras</a></li>
                            <li><a data-toggle="tab" href="#tab2">Accessories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab2" class="tab-pane fade in active">
                            <div class="products-slick" data-nav="#slick-nav-2">
                                @if($produk->isEmpty())
                                <p class="text-center font-italic ">
                                    No Product Available
                                </p>
                                @else
                                <!-- product -->
                                @foreach ($produk as $p)
                                <div class="product">
                                    <div class="product-img">
                                        <img src="{{asset('images/foto_produk/'.$p->foto_produk)}}" alt="">
                                        <div class="product-label">
                                            @if($p->promo==NULL)

                                            @else
                                            <span class="sale">{{$p->promo->diskon}}%</span>
                                            @endif
                                            @if ($p->created_at->addDays(3) >= $carbon) <span class="new">NEW</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">{{$p->kategori->nama_kategori}}</p>
                                        <h3 class="product-name"><a href="#">{{$p->nama_produk}}</a></h3>
                                        @if ($p->id_promo == NULL)
                                        <h4 class="product-price">Rp {{number_format($p->harga,2,',','.')}}
                                            <br>
                                        </h4>
                                        @else
                                        <?php $diskon = ($p->harga)-(($p->harga)*($p->promo->diskon/100)) ?>
                                        <h4 class="product-price">Rp
                                            {{number_format($diskon,2,',','.')}}
                                            <br>
                                            <del class="product-old-price">Rp
                                                {{number_format($p->harga,2,',','.')}}</del>
                                        </h4>
                                        @endif

                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <input type="hidden" name="id" id="id" value="{{$p->id}}">
                                        <div class="product-btns">
                                            @if (Session::has('login'))
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                    class="tooltipp">add to
                                                    wishlist</span></button>
                                            @endif
                                            <button class="quick-view"
                                                onclick="window.location.href='/detail/{{$p->id}}'"><i
                                                    class="fa fa-eye"></i><span class="tooltipp">See
                                                    Product</span></button>
                                        </div>
                                    </div>
                                    <input type="hidden" id="user" value="{{Session::get('id')}}">
                                    @if (Session::has('login'))
                                    <div class="add-to-cart">
                                        <a href="/cart/{{$p->id}}"><button class="add-to-cart-btn"><i
                                                    class="fa fa-shopping-cart"></i>
                                                add to
                                                cart</button>
                                        </a>
                                    </div>
                                    @endif
                                </div>
                                @endforeach
                                @endif
                                <!-- /product -->
                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Top selling</h4>
                    <div class="section-nav">
                        <div id="slick-nav-3" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-3">
                    <div>
                        @foreach ($produk->take(3) as $p)
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{asset('images/foto_produk/'.$p->foto_produk)}}" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">{{$p->kategori->nama_kategori}}</p>
                                <h3 class="product-name"><a href="#">{{$p->nama_produk}}</a></h3>
                                @if ($p->id_promo == NULL)
                                <h4 class="product-price">Rp {{number_format($p->harga,2,',','.')}}
                                    <br>
                                </h4>
                                @else
                                <?php $diskon = ($p->harga)-(($p->harga)*($p->promo->diskon/100)) ?>
                                <h4 class="product-price">Rp
                                    {{number_format($diskon,2,',','.')}}
                                    <br>
                                    <del class="product-old-price">Rp
                                        {{number_format($p->harga,2,',','.')}}</del>
                                </h4>
                                @endif
                            </div>
                        </div>
                        <!-- /product widget -->
                        @endforeach
                    </div>

                    <div>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{asset('assets/img/product01.png')}}" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            </div>
                        </div>
                        <!-- /product widget -->


                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Top selling</h4>
                    <div class="section-nav">
                        <div id="slick-nav-1" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-1">
                    <div>
                        @foreach ($produk->take(3) as $p)
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{asset('images/foto_produk/'.$p->foto_produk)}}" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">{{$p->kategori->nama_kategori}}</p>
                                <h3 class="product-name"><a href="#">{{$p->nama_produk}}</a></h3>
                                @if ($p->id_promo == NULL)
                                <h4 class="product-price">Rp {{number_format($p->harga,2,',','.')}}
                                    <br>
                                </h4>
                                @else
                                <?php $diskon = ($p->harga)-(($p->harga)*($p->promo->diskon/100)) ?>
                                <h4 class="product-price">Rp
                                    {{number_format($diskon,2,',','.')}}
                                    <br>
                                    <del class="product-old-price">Rp
                                        {{number_format($p->harga,2,',','.')}}</del>
                                </h4>
                                @endif
                            </div>
                        </div>
                        <!-- /product widget -->
                        @endforeach
                    </div>

                    <div>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{asset('assets/img/product01.png')}}" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            </div>
                        </div>
                        <!-- /product widget -->


                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Top selling</h4>
                    <div class="section-nav">
                        <div id="slick-nav-2" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-2">
                    <div>
                        @foreach ($produk->take(3) as $p)
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{asset('images/foto_produk/'.$p->foto_produk)}}" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">{{$p->kategori->nama_kategori}}</p>
                                <h3 class="product-name"><a href="#">{{$p->nama_produk}}</a></h3>
                                @if ($p->id_promo == NULL)
                                <h4 class="product-price">Rp {{number_format($p->harga,2,',','.')}}
                                    <br>
                                </h4>
                                @else
                                <?php $diskon = ($p->harga)-(($p->harga)*($p->promo->diskon/100)) ?>
                                <h4 class="product-price">Rp
                                    {{number_format($diskon,2,',','.')}}
                                    <br>
                                    <del class="product-old-price">Rp
                                        {{number_format($p->harga,2,',','.')}}</del>
                                </h4>
                                @endif
                            </div>
                        </div>
                        <!-- /product widget -->
                        @endforeach
                    </div>

                    <div>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{asset('assets/img/product01.png')}}" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            </div>
                        </div>
                        <!-- /product widget -->


                    </div>
                </div>
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    var id = document.getElementById('id').value;
    var user = document.getElementById('user').value;
    function wishlist(){
        $.ajax({
            url :"/wishlist",
            type : 'POST',
            data:{
                '_method':'POST',
                '_token':csrf_token,
                'id':id,
                'user':user,
            }
    });
}
</script>
@endsection