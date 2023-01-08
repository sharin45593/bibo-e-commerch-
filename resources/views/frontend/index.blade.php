@extends('layouts.app_frontend')

@section('contant')
            <!-- Hero/Intro Slider Start -->
   <div class="section ">
       <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
           <!-- Hero slider Active -->
           <div class="swiper-wrapper">
               <!-- Single slider item -->
               <div class="hero-slide-item-2 slider-height swiper-slide d-flex bg-color1">
                   <div class="container align-self-center">
                       <div class="row">
                           <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                               <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                   <span class="category">The perfect gift for everyone</span>
                                   <h2 class="title-1">Stylish and affordable</h2>
                                   <a href="{{ route('shop') }}" class="btn btn-lg btn-primary btn-hover-dark"> Shop
                                       Now <i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                               </div>
                           </div>
                           <div
                               class="col-xl-6 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                               <div class="show-case">
                                   <div class="hero-slide-image">
                                       <img src="{{ asset("frontend/images") }}/slider-image/slider-1-1.png" alt="" />
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- Single slider item -->
               <div class="hero-slide-item-2 slider-height swiper-slide d-flex bg-color2">
                   <div class="container align-self-center">
                       <div class="row">
                           <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                               <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                   <span class="category">The perfect gift for everyone</span>
                                   <h2 class="title-1">Stylish and affordable</h2>
                                   <a href="{{ route('shop') }}" class="btn btn-lg btn-primary btn-hover-dark"> Shop
                                       Now <i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                               </div>
                           </div>
                           <div
                               class="col-xl-6 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                               <div class="show-case">
                                   <div class="hero-slide-image">
                                       <img src="{{ asset("frontend/images") }}/slider-image/slider_2_2.png" alt="" />
                                   </div>
                               </div>

                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!-- Add Pagination -->
           <div class="swiper-pagination swiper-pagination-white"></div>
           <!-- Add Arrows -->
           <div class="swiper-buttons">
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
           </div>
       </div>
   </div>

   <!-- Hero/Intro Slider End -->

   <!-- Feature Area Srart -->
   <div class="feature-area  mt-n-65px">
       <div class="container">
           <div class="row">
               <div class="col-lg-4 col-md-6 ">
                   <!-- single item -->
                   <div style="height: 200px" class="single-feature">
                       <div class="feature-icon">
                           <img src="{{ asset("frontend/images") }}/icons/1.png" alt="">
                       </div>
                       <div class="feature-content">
                           <h4 class="title">“On Time Delivery”</h4>
                           <span class="sub-title">
                            All items are shipped <br> within 24 hours of purchase.
                            </span>
                       </div>
                   </div>
               </div>
               <!-- single item -->
               <div class="col-lg-4 col-md-6 ">
                   <div style="height: 200px" class="single-feature">
                       <div class="feature-icon">
                           <img src="{{ asset("frontend/images") }}/icons/2.png" alt="">
                       </div>
                       <div class="feature-content">
                           <h4 class="title">“Easy Payment Method” </h4>
                           <span class="sub-title">We make your purchase as easy and as convenient as possible.</span>
                       </div>
                   </div>
               </div>
               <!-- single item -->
               <div class="col-lg-4 col-md-6">
                   <div style="height: 200px" class="single-feature">
                       <div class="feature-icon">
                           <img src="{{ asset("frontend/images") }}/icons/3.png" alt="">
                       </div>
                       <div class="feature-content">
                           <h4 class="title">“Quality assurance”</h4>
                           <span class="sub-title">At bibo trend, customer satisfaction is paramount</span>
                       </div>
                   </div>
                   <!-- single item -->
               </div>
           </div>
       </div>
   </div>
   <!-- Feature Area End -->

   <!-- Product Area Start -->
   <div class="product-area pt-100px pb-100px">
       <div class="container">
           <!-- Section Title & Tab Start -->
           <div class="row">
               <!-- Section Title Start -->
               <div class="col-12">
                   <div class="section-title text-center mb-0">
                       <h2 class="title">ALL products</h2>
                       <!-- Tab Start -->
                       <div class="nav-center">
                           <ul class="product-tab-nav nav align-items-center justify-content-center">
                               <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                       href="#tab-product--all">All</a></li>

                                   @foreach ($categories as $category )

                                   <li class="nav-item mb-2"><a class="nav-link" data-bs-toggle="tab"
                                           href="#tab-product-{{ $category->id}}"> {{ $category->category_name}} </a>
                                   </li>
                                   @endforeach

                           </ul>
                       </div>
                       <!-- Tab End -->
                   </div>
               </div>
               <!-- Section Title End -->
           </div>
           <!-- Section Title & Tab End -->

           <div class="row">
               <div class="col">
                   <div class="tab-content mb-30px0px">
                       <!-- all tab start -->
                       <div class="tab-pane fade show active" id="tab-product--all">
                           <div class="row">
                               @foreach ($products as $product )
                               <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                   data-aos-delay="200">
                                @include('parts.product_thumb')
                               </div>
                               @endforeach
                               @if( $total_products>16)
                               <a  href={{route('shop') }} class="btn btn-lg btn-primary btn-hover-dark m-auto"> See All</a>
                               @endif

                           </div>
                       </div>
                       <!-- all tab end -->

                       @foreach ($categories as $category )
                       <!-- category wise tab start -->
                       <div class="tab-pane fade" id="tab-product-{{ $category->id}}">
                           <div class="row">
                                 @forelse (APP\Models\product::where('category_id', $category->id)->get() as $product )
                                 <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                    @include('parts.product_thumb')
                                   </div>

                               @empty
                             <div class="col-12">
                                 <div class="alert alert-danger">
                                     No product to show in this category

                                 </div>

                             </div>
                                 @endforelse
                           </div>
                       </div>
                       <!-- category wise tab end -->
                       @endforeach


               </div>
           </div>
       </div>
   </div>
   <!-- Product Area End -->

        <!-- Banner Area Start -->
        <div class="banner-area pt-100px pb-100px plr-15px">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-12">
                    <div class="section-title text-center mb-0">
                        <h2 class="title mb-3px">Categories</h2>

                    </div>
                    <hr>
                </div>
                <!-- Section Title End -->
            </div>
            <div class="row m-2">

                @foreach ($categories as $category )
                <div class="d-none col-12 col-lg-4 center-col mb-md-30px mb-lm-30px mb-3 category_div">
                    <div class="single-banner-2">
                        <img src="{{ asset('uploads/category_photo')}}/{{ $category->category_photo }}" alt=" not found">
                        <div class="item-disc">
                            <h4 style="background-color:#0e8b6c" class="text-white p-4" class="title">Best Collection <br>
                                For {{ $category->category_name }}</h4>
                            <a href="{{ route('category.details',$category->slug) }}" class="shop-link btn btn-primary">Shop Now <i
                                    class="fa fa-shopping-basket ml-5px" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            <button id="loadMore" href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark m-auto mb-5"> See More <span id="how_many_left"></span> <i class="fa fa-arrow-right ml-15px" aria-hidden="true"></i></button>
        </div>
        <!-- Banner Area End -->




        <!-- Deal Area Start -->
        <div class="deal-area deal-bg -2" data-bg-image="{{ asset("frontend/images") }}/deal-img/ads.jpg">
            <div class="container ">
                <div class="row">
                    <div class="col-12">
                        <div class="deal-inner position-relative pt-100px pb-100px">
                            <div class="deal-wrapper">
                                <span  class="category">#FASHION SHOP</span>
                                <h3 style="color: white" class="title">Deal Of The Day</h3>
                                <div class="deal-timing">
                                    <div data-countdown="2023/05/15"></div>
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
        </div>
        <!-- Deal Area End -->



  <!-- Related product Area Start -->
  <div style="padding: 100px" class="related-product-area pb-100px">
    <div class="container">

        <div class="row">
            <!-- Section Title Start -->
            <div class="col-12">
                <div class="section-title text-center mb-0">
                    <h2 class="title mb-3px">Upcomming products</h2>

                </div>
                <hr>
            </div>
            <!-- Section Title End -->
        </div>

        <div class="new-product-slider swiper-container slider-nav-style-1 small-nav">
            <div class="new-product-wrapper swiper-wrapper">

                @forelse  ( $upcomming_products as  $upcomming_product)

                <div class="new-product-item swiper-slide">
                    <!-- Single Prodect -->
                    <div class="product">
                        <div class="thumb">
                            <a href="single-product.html" class="image">
                                <img  src="{{ asset('uploads/product_photo') }}/{{ $upcomming_product->product_photo}}" alt="not found">
                            </a>
                            <span class="badges">
                                <span class="bg-success new p-3">Comming Soon</span>
                            </span>
                            <a href="{{  route('upcomming.products.single',$upcomming_product->id)}}" title="Add To Cart" class=" add-to-cart">Details</a>
                        </div>
                        <div class="content">
                            <span class="ratings">
                                <span class="rating-wrap">
                                    <span class="star" style="width: 100%"></span>
                                </span>

                            </span>
                            <h5 class="title"><a href="single-product.html">{{  $upcomming_product->product_name }}
                                </a>
                            </h5>
                            <span class="price">
                                <span class="new">{!! substr($upcomming_product->product_description,0, 20); !!} ...</span>
                            </span>


                        </div>
                    </div>
                </div>
                @empty
                <div class="alert alert-danger m-auto"> NO DATA TO SHOW</div>
                 @endforelse


            </div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
<!-- Related product Area End -->












@endsection


