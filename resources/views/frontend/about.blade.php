@extends('layouts.app_frontend')
@section('contant')

    <!-- About Intro Area start-->
    <div class="about-intro-area">
        <div class="container position-relative h-100 d-flex align-items-center">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-intro-content">
                        <h2 class="title">About Us</h2>
                        <p style="text-align: justify">Bibo Trend is a one-stop shop for you to find everything from home decor to antique pieces, with the help of our online store that offers competitive prices.
                            <br><br>
                            As the technological world has developed, online shopping has become more and more popular. At bibo trend, we know your time and money is precious. That's why we offer timely shipping on all products. The only thing you will have to worry about is the perfect gift for the loved ones in your life. No matter what the occasion may be, bibo trend has got you covered with our wide range of retail items that are guaranteed to please everyone from a toddler to a grandparent!
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-4px intro-left">
                <img src="{{ asset('frontend') }}/images/about-image/intro-left.png" alt="" class="intro-left-image">
            </div>
            <div class="intro-right">
                <img src="{{ asset('frontend') }}/images/about-image/about1.png" alt="" class="intro-right-image">
            </div>
        </div>
    </div>

    <!-- About Intro Area End-->
       <!-- Feature Area Srart -->
       <div class="feature-area pb-100px pt-100px bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- single item -->
                    <div style="height: 200px" class="single-feature border-0">
                        <div class="feature-icon">
                            <img src="{{ asset('frontend') }}/images/icons/1.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">On Time Delivery</h4>
                            <span class="sub-title">All items are shipped within 24 hours of purchase.</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="col-lg-4 col-md-6 mb-md-30px mb-lm-30px mt-lm-30px">
                    <div style="height: 200px" class="single-feature border-0">
                        <div class="feature-icon">
                            <img src="{{ asset('frontend') }}/images/icons/2.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Easy Payment Method</h4>
                            <span class="sub-title">We make your purchase as easy and as convenient as possible.</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="col-lg-4 col-md-6 ">
                    <div style="height: 200px" class="single-feature border-0">
                        <div class="feature-icon">
                            <img src="{{ asset('frontend') }}/images/icons/3.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Quality assurance</h4>
                            <span class="sub-title">At bibo trend, customer satisfaction is paramount</span>
                        </div>
                    </div>
                    <!-- single item -->
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Area End -->


    <!-- Service Area Start -->

    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="service-left align-self-center align-items-center">
                        <img src="{{ asset('frontend') }}/images/about-image/about2.png" alt="" class="service-left-image">
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="service-right-content align-self-center align-items-center">
                        <h2 class="title">
                            The perfect gift for everyone
                        </h2>
                        <p style="text-align: justify">A unique item for every occasion, every personality and every style. Our collection includes a wide range of traditional and contemporary wall decor, home accessories, and antique pieces. At bibo trend, customer satisfaction is paramount. We take it seriously to make things as simple as possible. That's why we offer a 100% satisfaction guarantee on all of our items. If you are not satisfied with your purchase, we will refund or exchange it at no additional cost to you.</p>
                        <span class="sami-title">
                            Excellent customer service
                            </span>
                            <p style="text-align: justify">We're committed to delivering excellence to our customers. We have a team of highly trained, experienced and enthusiastic customer service representatives who are always happy to answer any questions you may have about our products or service.</p>
                        <a href="{{ route('shop') }}" class="btn btn-primary service-btn"> Shop Now <i
                                class="fa fa-shopping-basket ml-10px" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Area End -->
    {{-- <div class="deal-area deal-bg -2 mt-30px mb-40px" role="banner">
        <img src="{{ asset("frontend/images") }}/about-image/Frame 1.jpg" alt="Banner Image"/>
      </div> --}}



    {{-- <div class="deal-area deal-bg -2 mt-30px mb-40px" data-bg-image="{{ asset("frontend/images") }}/deal-img/pay.jpg">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <div class="deal-inner position-relative pt-100px pb-100px">
                        <div class="deal-wrapper">
                            <span  class="category">#FASHION SHOP</span>
                            <h3 style="color: white" class="title">Deal Of The Day</h3>
                            <div  class="deal-timing">
                                <div data-countdown="2021/05/15"></div>
                            </div>
                            <a href="{{ route('shop') }}" class="btn btn-lg btn-primary btn-hover-dark m-auto"> Shop
                                Now <i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                        </div>
                        <div class="deal-image">
                            <img class="img-fluid" src="{{ asset("frontend/images") }}/deal-img/ads-.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Team Area Start -->

    {{-- <div class="team-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-30px0px">
                        <h2 class="title line-height-1">#ourteam</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-lm-30px">
                    <!-- Single Team -->
                    <div class="team-wrapper">
                        <div class="team-image overflow-hidden">
                            <img src="{{ asset('frontend') }}/images/team/1.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h6 class="title">Howard Burns</h6>
                            <span class="sub-title">Our Team</span>
                        </div>
                        <ul class="team-social d-flex">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    <!-- Single Team -->
                </div>
                <div class="col-md-4 mb-lm-30px">
                    <!-- Single Team -->
                    <div class="team-wrapper">
                        <div class="team-image overflow-hidden">
                            <img src="{{ asset('frontend') }}/images/team/2.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h6 class="title">Lester Houser</h6>
                            <span class="sub-title">Our Team</span>
                        </div>
                        <ul class="team-social d-flex">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    <!-- Single Team -->
                </div>
                <div class="col-md-4">
                    <!-- Single Team -->
                    <div class="team-wrapper">
                        <div class="team-image overflow-hidden">
                            <img src="{{ asset('frontend') }}/images/team/3.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h6 class="title">Craig Chaney</h6>
                            <span class="sub-title">Our Team</span>
                        </div>
                        <ul class="team-social d-flex">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    <!-- Single Team -->
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Team Area End -->


{{--
    <!-- Testimonial Area Start -->
    <div class="testimonial-area pb-40px pt-100px ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-0">
                        <h2 class="title line-height-1">#testimonials</h2>
                    </div>
                </div>
            </div>
            <!-- Slider Start -->
            <div class="testimonial-wrapper swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slider Single Item -->
                    <div class="swiper-slide">
                        <div class="testi-inner">
                            <div class="reating-wrap">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="testi-content">
                                <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                                </p>
                            </div>
                            <div class="testi-author">
                                <div class="author-img">
                                    <img src="{{ asset('frontend') }}/images/testimonial-image/1.png" alt="">
                                </div>
                                <div class="author-name">
                                    <h4 class="name">Daisy Morgan</h4>
                                    <span class="title">Happy Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item -->
                    <div class="swiper-slide">
                        <div class="testi-inner">
                            <div class="reating-wrap">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="testi-content">
                                <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                                </p>
                            </div>
                            <div class="testi-author">
                                <div class="author-img">
                                    <img src="{{ asset('frontend') }}/images/testimonial-image/2.png" alt="">
                                </div>
                                <div class="author-name">
                                    <h4 class="name">Leah Chatman</h4>
                                    <span class="title">Happy Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item -->
                    <div class="swiper-slide">
                        <div class="testi-inner">
                            <div class="reating-wrap">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="testi-content">
                                <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                                </p>
                            </div>
                            <div class="testi-author">
                                <div class="author-img">
                                    <img src="{{ asset('frontend') }}/images/testimonial-image/3.png" alt="">
                                </div>
                                <div class="author-name">
                                    <h4 class="name">Reyna Chung</h4>
                                    <span class="title">Happy Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item -->
                    <div class="swiper-slide">
                        <div class="testi-inner">
                            <div class="reating-wrap">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="testi-content">
                                <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                                </p>
                            </div>
                            <div class="testi-author">
                                <div class="author-img">
                                    <img src="{{ asset('frontend') }}/images/testimonial-image/1.png" alt="">
                                </div>
                                <div class="author-name">
                                    <h4 class="name">Daisy Morgan</h4>
                                    <span class="title">Happy Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item -->
                    <div class="swiper-slide">
                        <div class="testi-inner">
                            <div class="reating-wrap">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="testi-content">
                                <p>Lorem ipsum dolor sit amet, consect adipisici elit, sed do eiusmod tempol incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniamfhq nostrud exercitation.
                                </p>
                            </div>
                            <div class="testi-author">
                                <div class="author-img">
                                    <img src="{{ asset('frontend') }}/images/testimonial-image/2.png" alt="">
                                </div>
                                <div class="author-name">
                                    <h4 class="name">Reyna Chung</h4>
                                    <span class="title">Happy Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item -->
                </div>
            </div>
            <!-- Slider Start -->
        </div>
    </div>
    <!-- Testimonial Area End -->

    <!-- Brand area start -->
    <div class="brand-area pb-100px">
        <div class="container">
            <div class="brand-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="{{ asset('frontend') }}/images/brand-logo/1.png" alt="" /></a>
                    </div>
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="{{ asset('frontend') }}/images/brand-logo/2.png" alt="" /></a>
                    </div>
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="{{ asset('frontend') }}/images/brand-logo/3.png" alt="" /></a>
                    </div>
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="{{ asset('frontend') }}/images/brand-logo/4.png" alt="" /></a>
                    </div>
                    <div class="swiper-slide brand-slider-item text-center">
                        <a href="#"><img class=" img-fluid" src="{{ asset('frontend') }}/images/brand-logo/5.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand area end --> --}}

@endsection
