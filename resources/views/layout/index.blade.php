<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="{{asset('img/logo.png')}}" width="15" height="15">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>@yield('title') </title>
    @include('layout.link')

</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
                </ul>
                <ul class="header-links pull-right">
                    <li>
                        <div>

                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-user-o"></i>
                                @if(Session::has('login'))
                                <span>{{Session::get('name')}}</span>
                                @else
                                <span>My Account</span>
                                @endif
                            </a>
                            &nbsp;
                            @if(Session::has('login'))
                            <a href="/logout">
                                <i class="fa fa-sign-out"></i>
                                <span>Logout</span>
                            </a>
                            @endif
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="/" class="logo">
                                <img src="{{asset('assets/img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form>
                                <select class="input-select">
                                    <option value="0">All Categories</option>
                                    @foreach ($kategori as $k)
                                    <option value="{{$k->id}}">{{$k->nama_kategori}}</option>
                                    @endforeach

                                </select>
                                <input class="input" placeholder="Search here">
                                <button class="search-btn">Search</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    @if (Session::has('login'))
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            <div>
                                <a href="#">
                                    <i class="fa fa-heart-o"></i>
                                    <span>Your Wishlist</span>
                                    <div class="qty">2</div>
                                </a>
                            </div>
                            <!-- /Wishlist -->

                            <!-- Cart -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Your Cart</span>
                                    <div class="qty">{{ $jumlah->count() }}
                                    </div>
                                </a>
                                <div class="cart-dropdown">
                                    <div class="cart-list">
                                        @if ($jumlah == NULL)
                                        <p class="text-center text-muted font-italic">No Product on Cart</p>
                                        @else
                                        @foreach ($jumlah as $k)
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="{{asset('images/foto_produk/'.$k->produk->foto_produk)}}"
                                                    alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">{{$k->produk->nama_produk}}</a>
                                                </h3>
                                                @if ($k->produk->id_promo == NULL)
                                                <h4 class="product-price">Rp
                                                    {{number_format($k->produk->harga,2,',','.')}}</h4>
                                                @else
                                                <?php $diskon = ($k->produk->harga)-(($k->produk->harga)*($k->produk->promo->diskon/100)) ?>
                                                <h4 class="product-price">Rp
                                                    {{number_format($diskon,2,',','.')}}
                                                    <br>
                                                    <del class="product-old-price">Rp
                                                        {{number_format($k->produk->harga,2,',','.')}}</del>
                                                </h4>
                                                @endif

                                            </div>
                                            <a href="/hapus-cart/{{$k->id}}"><button class="delete"><i
                                                        class="fa fa-close"></i></button></a>
                                        </div>
                                        @endforeach
                                        @endif


                                    </div>

                                    <div class="cart-summary">
                                        <small>{{ $jumlah->count() }} Item(s) selected</small>
                                        <h5>SUBTOTAL: Rp {{number_format($data,2,',','.')}} </h5>
                                    </div>
                                    <div class="cart-btns">
                                        <a href="#">View Cart</a>
                                        <a href="/checkout">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cart -->
                            <div class="col-md-3 clearfix">
                                <div class="header-ctn">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                            <div class="menu-toggle">
                                                <a href="#">
                                                    <i class="fa fa-bars"></i>
                                                    <span>Menu</span>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @else
                            <!-- Menu Toogle -->
                            <div class="col-md-3clearfix">
                                <div class="header-ctn">
                                    <!-- Wishlist -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                            <i class="fa fa-bars"></i>
                                            <span>Menu</span>
                                        </a>
                                        <div class="cart-dropdown">

                                            <ul>
                                                <div class="divider">

                                                    <li><a class="p-2" href="/login"><i
                                                                class="fa fa-user"></i>&nbspLogin</a>
                                                    </li>
                                                </div>
                                                @if(Session::has('login'))
                                                <div class="divider">
                                                    <li><a class="p-2" href="/logout"><i
                                                                class="fa fa-sign-out"></i>&nbspLogout</a>
                                                    </li>
                                                </div>
                                                @endif
                                            </ul>


                                        </div>
                                        @endif




                                        <!-- /ACCOUNT -->
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- container -->
                            </div>
                            <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                {{-- <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Hot Deals</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Laptops</a></li>
                    <li><a href="#">Smartphones</a></li>
                    <li><a href="#">Cameras</a></li>
                    <li><a href="#">Accessories</a></li>
                </ul> --}}
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    @yield('content')

    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                        <form>
                            <input class="input" type="email" placeholder="Enter Your Email">
                            <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                        </form>
                        <ul class="newsletter-follow">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->

    <!-- FOOTER -->
    <footer id="footer">
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">About Us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut.</p>
                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Categories</h3>
                            <ul class="footer-links">
                                <li><a href="#">Hot deals</a></li>
                                <li><a href="#">Laptops</a></li>
                                <li><a href="#">Smartphones</a></li>
                                <li><a href="#">Cameras</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Information</h3>
                            <ul class="footer-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Service</h3>
                            <ul class="footer-links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">View Cart</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->

        <!-- bottom footer -->
        <div id="bottom-footer" class="section">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="footer-payments">
                            <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                            <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                        </ul>
                        <span class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </span>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    @include('layout.script')
    @include('vendor.sweetalert.alert')
</body>

</html>