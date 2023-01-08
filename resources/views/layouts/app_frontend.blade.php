<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from template.hasthemes.com/jesco/jesco/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Sep 2021 07:18:43 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="index, follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BiboTrend / E-commerce</title>
    <meta name="description" content="Jesco - Fashoin eCommerce HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/images') }}/favicon/fav.png" type="image/png">


    <!-- vendor css (Icon Font) -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.bundle.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="assets/css/vendor/font.awesome.css" /> -->

    <!-- plugins css (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="assets/css/plugins/venobox.css" /> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/vendor.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins/plugins.min.css')}} " />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">



    <!-- Main Style -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->

</head>

<body>

    <!-- Top Bar -->

    <div class="header-to-bar">
        <marquee direction="scroll">★ ★ ★ ★ ★ HELLO EVERYONE! 25% Off All Products ★ ★ ★ ★ ★ &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp; ★ ★ ★ ★ ★ HELLO EVERYONE! 25% Off All Products ★ ★ ★ ★ ★ &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp; ★ ★ ★ ★ ★ HELLO EVERYONE! 25% Off All Products ★ ★ ★ ★ ★</marquee>
    </div>

    <!-- Top Bar -->
    <!-- Header Area Start -->
    <header>
        <div style="background-color: #333333" class="header-main sticky-nav ">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="{{ route('index')}}"><img src="{{ asset('frontend/images') }}/logo/bibo-logo.png" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <div class="col align-self-center d-none d-lg-block">
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{ route('index')}}">Home</a></li>
                                <li><a href="{{ route('shop')}}">Shop</a></li>
                                <li><a href="{{ route('about')}}">About us</a></li>
                                <li><a target="_blank" href="{{ route('cart')}}">Cart</a></li>
                                <li><a target="_blank" href="{{ route('blog')}}">Blog</a></li>
                                <li><a href="{{ route('faq')}}">FAQ</a></li>




                            </ul>
                        </div>
                    </div>
                    <!-- Header Action Start -->
                    <div class="col col-lg-auto align-self-center pl-0">
                        <div class="header-actions">
                            @guest
                                @if(Route::currentRouteName() == 'product.details')

                                <a href="{{ route('customer')}}?previous_page={{ url()->full() }}" class="header-action-btn login-btn">Sign In</a>
                                @else

                               <a href="{{ route('customer')}}"" class="header-action-btn login-btn">Sign In</a>
                                @endif
                           @else
                           <a href="{{ route('home')}}"" class="header-action-btn login-btn">{{ auth()->user()->name}}</a>
                           @endguest
                            <!-- Single Wedge Start -->
                            <a href="#" class="header-action-btn" data-bs-toggle="modal" data-bs-target="#searchActive">
                                <i style="color: #fff" class="pe-7s-search"></i>
                            </a>
                            <!-- Single Wedge End -->
                            <!-- Single Wedge Start -->
                            {{-- <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                                <i style="color: #fff" class="pe-7s-like"></i>
                            </a> --}}
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart"
                                class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i style="color: #fff" class="pe-7s-shopbag"></i>
                                <span class="header-action-num">{{ total_cart_amount() }}</span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu"
                                class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i style="color: #fff" class="pe-7s-menu"></i>
                            </a>
                        </div>
                        <!-- Header Action End -->
                    </div>
                </div>
            </div>
    </header>
    <!-- Header Area End -->
    <div class="offcanvas-overlay"></div>

    <!-- OffCanvas Wishlist Start -->
    {{-- <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="{{ asset('frontend/images') }}/product-image/1.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Women's Elizabeth Coat</a>
                            <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="{{ asset('frontend/images') }}/product-image/2.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Long sleeve knee length</a>
                            <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="{{ asset('frontend/images') }}/product-image/3.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Cool Man Wearing Leather</a>
                            <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- OffCanvas Wishlist End -->
    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="{{ asset('frontend/images') }}/product-image/1.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Women's Elizabeth Coat</a>
                            <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="{{ asset('frontend/images') }}/product-image/2.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Long sleeve knee length</a>
                            <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="{{ asset('frontend/images') }}/product-image/3.jpg"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Cool Man Wearing Leather</a>
                            <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons mt-30px">
                    <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>

        <div class="inner customScroll">

            <div class="offcanvas-menu mb-4">
                <ul>
                    <li><a href="{{ route('index')}}">Home</a></li>
                    <li><a href="{{ route('shop')}}">Shop</a></li>
                    <li><a href="{{ route('about')}}">About us</a></li>
                    <li><a target="_blank" href="{{ route('cart')}}">Cart</a></li>
                    <li><a target="_blank" href="{{ route('blog')}}">Blog</a></li>
                    <li><a href="{{ route('faq')}}">FAQ</a></li>


                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-auto">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->
    <div>
        @yield('contant')
    </div>

     <!-- Footer Area Start -->
     <div class="footer-area">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                            <div class="single-wedge">
                                <div class="footer-logo">
                                    <a href="{{ route('index')}}"><img src="{{ asset('frontend/images') }}/logo/bibo-logo.png" alt="Site Logo" /></a>
                                </div>
                                <p style="text-align: justify" class="about-text">A unique item for every occasion, every personality and every style. Our collection includes a wide range of traditional and contemporary wall decor, home accessories, and antique pieces. If you are not satisfied with your purchase, we will refund or exchange it at no additional cost to you.
                                </p>
                                <ul class="link-follow">
                                    <li>
                                        <a title="youtube" href="https://www.youtube.com/channel/UCUup0P347iZVvlpD_Fk_adw" target="_black"><i class="fa fa-youtube" aria-hidden="true"></i>
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="m-0" title="Tumblr" href="https://www.tiktok.com/@bibo.trend1?is_from_webapp=1&sender_device=pc"><i class="fa fa-glide"></i>
                                                aria-hidden="true"></fab></a>
                                    </li>
                                    <li>
                                        <a title="Tumblr" href="https://www.pinterest.com/bibotrend/" target="_black"><i class="fa fa-pinterest" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Facebook" href="https://www.facebook.com/bibotrend/" target="_black"><i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Instagram" href="https://www.instagram.com/accounts/login/?next=/bibotrend/" target="_black"><i class="fa fa-instagram" aria-hidden="true"></i>
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-3 col-sm-6 col-lg-3 mb-md-30px mb-lm-30px pl-lg-50px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Quick Links</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="{{ route('index')}}">Home
                                                </a></li>
                                            <li class="li"><a class="single-link" href="{{ route('shop')}}">Shop</a></li>
                                            <li class="li"><a class="single-link" href="{{ route('about')}}">About</a></li>
                                            <li class="li"><a class="single-link" href="{{ route('cart')}}">cart</a></li>
                                            <li class="li"><a class="single-link" href="{{ route('blog')}}">Blog</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-3 col-lg-3 col-sm-6 mb-lm-30px pl-lg-50px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Other Page</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="{{ route('index')}}">Home
                                            </a></li>
                                        <li class="li"><a class="single-link" href="{{ route('shop')}}">Shop</a></li>
                                        <li class="li"><a class="single-link" href="{{ route('about')}}">About</a></li>
                                        <li class="li"><a class="single-link" href="{{ route('cart')}}">cart</a></li>
                                        <li class="li"><a class="single-link" href="{{ route('blog')}}">Blog</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        {{-- <div class="col-md-3 col-lg-2 col-sm-6 mb-lm-30px pl-lg-50px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Company</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="index.html">Jesco</a>
                                            </li>
                                            <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a></li>
                                            <li class="li"><a class="single-link" href="contact.html">Contact us</a></li>
                                            <li class="li"><a class="single-link" href="login.html">Log in</a></li>
                                            <li class="li"><a class="single-link" href="#">Help</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-4 col-lg-3 col-sm-6">
                            <div class="single-wedge">

                                <h4 class="footer-herading">Store Information.</h4>
                                <div class="footer-links">
                                    <!-- News letter area -->
                                    {{-- <p class="address"> House 51, 2nd Floor, Block k, Road 27, Banani, Dhaka 1213, Bangladesh</p>
                                    <p class="phone">Phone/Fax:<a href="tel:0123456789">0123456789</a></p> --}}
                                    <p class="mail">Email:<a href="mailto:contact@bibotrend.com">contact@bibotrend.com</a></p>
                                    {{-- <p><img src="{{ asset('frontend/images') }}/icons/payment.png" alt="Site Logo"  class="payment-img img-fulid" /></p> --}}
                                    <a target="_blank" href="https://www.sslcommerz.com/" title="SSLCommerz" alt="SSLCommerz"><img style="width:300px;height:auto;" src="https://securepay.sslcommerz.com/public/image/SSLCommerz-Pay-With-logo-All-Size-01.png" /></a>


                                    <!-- News letter area  End -->
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="copy-text">{{carbon\carbon::now()-> FORMAT('Y')}} <strong>BiboTrend</strong> ©  all right reserve  <i style="color: rgb(159, 14, 14)" class="fa fa-heart"
                                    aria-hidden="true"></i> By <a style="color: rgb(184, 5, 5)" target="_blank" href="https://feenixlab.com/">
                                    <strong> FeenixLab</strong></a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End -->

<!-- Search Modal Start -->
<div class="modal popup-search-style" id="searchActive">
    <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
    <div class="modal-overlay">
        <div class="modal-dialog p-0" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h2>Search Your Product</h2>
                    <form class="navbar-form position-relative" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search here...">
                        </div>
                        <button type="submit" class="submit-btn"><i class="pe-7s-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->

<!-- Login Modal Start -->
<div class="modal popup-login-style" id="loginActive">
    <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
    <div class="modal-overlay">
        <div class="modal-dialog p-0" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="login-content">
                        <h2>Log in</h2>
                        <h3>Log in your account</h3>
                        <form action="#">
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password">
                            <div class="remember-forget-wrap">
                                <div class="remember-wrap">
                                    <input type="checkbox">
                                    <p>Remember</p>
                                    <span class="checkmark"></span>
                                </div>
                                <div class="forget-wrap">
                                    <a href="#">Forgot your password?</a>
                                </div>
                            </div>
                            <button type="button">Log in</button>
                            <div class="member-register">
                                <p> Not a member? <a href="login.html"> Register now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Modal End -->
<!-- Modal -->
<div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                        <!-- Swiper -->
                        <div class="swiper-container zoom-top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                        src="{{asset('fontend/images')}}/product-image/zoom-image/1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                        src="{{asset('fontend/images')}}/product-image/zoom-image/2.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                        src="{{asset('fontend/images')}}/product-image/zoom-image/3.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                        src="{{asset('fontend/images')}}/product-image/zoom-image/4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-container zoom-thumbs mt-3 mb-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                        src="{{asset('fontend/images')}}/product-image/small-image/1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                        src="{{asset('fontend/images')}}/product-image/small-image/2.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                        src="{{asset('fontend/images')}}/product-image/small-image/3.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                        src="{{asset('fontend/images')}}/product-image/small-image/4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-details-content quickview-content">
                            <h2>Ardene Microfiber Tights</h2>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">$18.90</li>
                                </ul>
                            </div>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="read-review"><a class="reviews" href="#">( 5 Customer Review
                                        )</a></span>
                            </div>
                            <p class="mt-30px mb-0">Lorem ipsum dolor sit amet, consect adipisicing elit, sed do
                                eiusmod tempor incidi ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco
                                laboris nisi
                                ut aliquip ex ea commodo </p>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                </div>
                                <div class="pro-details-cart">
                                    <button class="add-cart" href="#"> Add To
                                        Cart</button>
                                </div>
                                <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                    <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                </div>
                                <div class="pro-details-compare-wishlist pro-details-compare">
                                    <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                                </div>
                            </div>
                            <div class="pro-details-sku-info pro-details-same-style  d-flex">
                                <span>SKU: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Ch-256xl</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex">
                                <span>Categories: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Fashion.</a>
                                    </li>
                                    <li>
                                        <a href="#">eCommerce</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-social-info pro-details-same-style d-flex">
                                <span>Share: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->


    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    {{-- <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>

    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script> --}}

    <!--Plugins JS-->
     {{-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/countdown.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script> --}}

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="{{ asset('frontend/js/vendor/vendor.min.js')}}"></script>
    <script src="{{ asset('frontend/js/plugins/plugins.min.js')}}"></script>
    <script src="{{ asset('frontend/js/plugins/custom.js')}}"></script>




    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6295f2fbb0d10b6f3e74e781/1g4crqa8u';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(function () {
        $(".category_div").slice(0, 3).removeClass('d-none');
        $("#loadMore").on('click', function (e) {
            $('#how_many_left').html($(".category_div.d-none").length -3 );
                e.preventDefault();
                $(".category_div.d-none").slice(0, 3).removeClass('d-none');
                if ($(".category_div.d-none").length == 0) {
                    $("#loadMore").remove();
                }
            });
        });
        </script>
        <!-- Main Js -->

        @yield('footer_scripts');
        <script src="{{ asset('frontend/js/main.js')}}"></script>
    </body>


<!-- Mirrored from template.hasthemes.com/jesco/jesco/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Sep 2021 07:19:21 GMT -->
</html>
