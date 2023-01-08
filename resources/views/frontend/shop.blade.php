@extends('layouts.app_frontend')

@section('contant')



    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Shop</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('shop') }}">Shop</a></li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!-- Shop Page Start  -->
    <div class="shop-category-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side start -->
                        <p><span>{{ $products->count()}}</span> Products Found of <span>{{ $total_products}}</span></p>
                        <!-- Left Side End -->
                        <div class="shop-tab nav">
                            <a class="active" href="#shop-grid" data-bs-toggle="tab">
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </a>

                        </div>
                        <!-- Right Side Start -->
                        {{-- <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Sort By:</p>
                            </div>
                            <div class="shop-select">
                                <select class="shop-sort">
                                    <option data-display="Relevance">Relevance</option>
                                    <option value="1"> Name, A to Z</option>
                                    <option value="2"> Name, Z to A</option>
                                    <option value="3"> Price, low to high</option>
                                    <option value="4"> Price, high to low</option>
                                </select>

                            </div>
                        </div> --}}
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">

                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            @foreach ($products as $product)
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                @include('parts.product_thumb')
                                            </div>

                                            @endforeach

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Tab Content Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-md-60px mb-lm-60px">
                    <div class="shop-sidebar-wrap">
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget-search">
                            <form id="widgets-searchbox" action="">
                                <input class="input-field" type="text" placeholder="Search" name="ss" value="{{ isset($_GET['ss'])? $_GET['ss']:''}}">
                                <button class="widgets-searchbox-btn" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- Sidebar single item -->
                        <form action="">
                        <div class="row mb-4">
                                <div class="col-6">
                                    <input class="form-control" type="text" placeholder="Min" name="min">
                                </div>
                                <div class="col-6">
                                    <input class="form-control" type="text" placeholder="Max" name="max">
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary blog-btn">Search</button>
                                </div>

                            </div>
                            </form>

                        {{-- <div class="sidebar-widget mt-8">
                            <h4 class="sidebar-title">Price Filter</h4>
                            <div class="price-filter">

                                <div class="price-slider-amount">
                                    <input type="text" id="amount" class="p-0 h-auto lh-1" name="price"
                                        placeholder="Add Your Price" />
                                </div>
                                <div id="slider-range"></div>
                            </div>
                        </div> --}}
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Category</h4>

                            <div class="sidebar-widget-category">
                                @foreach ($categories as $categorie)
                                <ul>
                                    <li><i class="fa fa-check-circle"></i>
                                        {{ $categorie->category_name }}</li>

                                </ul>
                                @endforeach
                            </div>
                        </div>
                            {{-- <div class="sidebar-widget-category">
                                <ul>
                                    <li><a href="#" class="selected m-0">Accesasories <span>(6)</span> </a></li>
                                    <li><a href="#" class="">Computer <span>(4)</span> </a></li>
                                    <li><a href="#" class="">Covid-19 <span>(2)</span> </a></li>
                                    <li><a href="#" class="">Electronics <span>(6)</span> </a></li>
                                    <li><a href="#" class="">Frame Sunglasses <span>(12)</span> </a></li>
                                    <li><a href="#" class="">Furniture <span>(7)</span> </a></li>
                                    <li><a href="#" class="">Genuine Leather <span>(9)</span> </a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Color</h4>
                            <div class="sidebar-widget-list color">
                                @foreach ($colors as $color)

                                <ul>
                                    <li> <span style="background-color: {{$color->color_code}} " > &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</span>

                                        {{ $color->color_name }}</li><br><br>



                                </ul>
                                @endforeach
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Size</h4>
                            <div class="sidebar-widget-list size">
                                @foreach ($sizes as $size)

                                <ul>
                                    <li><i class="fa fa-check-circle"></i>
                                        {{ $size->size_name }}</li>

                                </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page End  -->
@endsection
