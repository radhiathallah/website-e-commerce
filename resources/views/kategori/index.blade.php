@extends('layout.index')
@section('title')
Kategori
@endsection
@section('content')
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- ASIDE -->
            <div id="aside" class="col-md-3">
                <!-- aside Widget -->
                <div class="aside">
                    <h1 class="aside-title" style="font-size:28px;">{{$kategori1->nama_kategori}}</h1>
                </div>
                <!-- /aside Widget -->

                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">Kategori</h3>
                    @foreach ($kategori as $k)
                    <div class="checkbox-filter" style="margin:0 0 20px 0;">
                        <a class="mb-2" href="{{$k->id}}">
                            <span></span>
                            {{$k->nama_kategori}}
                            <small class="text-muted">({{$k->produk->where('id_kategori',$k->id)->count()}})</small>
                        </a>
                    </div>
                    @endforeach
                </div>
                <!-- /aside Widget -->

                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">Recomendation</h3>
                    @foreach ($produk->take(4) as $p)
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
                    @endforeach

                </div>
                <!-- /aside Widget -->
            </div>
            <!-- /ASIDE -->

            <!-- STORE -->
            <div id="store" class="col-md-9">
                <!-- store top filter -->
                <div class="store-filter clearfix">
                    <div class="store-sort">
                        <label>
                            Sort By:
                            <select class="input-select">
                                <option value="0">Popular</option>
                                <option value="1">Position</option>
                            </select>
                        </label>

                        <label>
                            Show:
                            <select class="input-select">
                                <option value="0">20</option>
                                <option value="1">50</option>
                            </select>
                        </label>
                    </div>
                    <ul class="store-grid">
                        <li class="active"><i class="fa fa-th"></i></li>
                        <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                    </ul>
                </div>
                <!-- /store top filter -->

                <!-- store products -->
                <div class="row">
                    @foreach ($data3 as $p)
                    <!-- product -->
                    <div class="col-md-4 col-xs-6">
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
                                    <button class="quick-view" onclick="window.location.href='/detail/{{$p->id}}'"><i
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
                    </div>
                    <!-- /product -->
                    @endforeach


                </div>
                <!-- /store products -->

                <!-- store bottom filter -->
                <div class="store-filter clearfix">
                    <span class="store-qty">Showing 20-100 products</span>
                    <ul class="store-pagination">
                        <li class="active">1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <!-- /store bottom filter -->
            </div>
            <!-- /STORE -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
@endsection