@extends('layouts.app_frontend')
@section('contant')
  <!-- breadcrumb-area start -->
  <div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h2 class="breadcrumb-title">Blog Details</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Blog Details</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- Blog Area Start -->
<div class="blog-grid pb-100px pt-100px main-blog-page single-blog-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 offset-lg-2">
                <div class="blog-posts">
                    <div class="single-blog-post blog-grid-post">
                        <div class="blog-image single-blog" data-aos="fade-up" data-aos-delay="200">
                            <img class="img-fluid h-auto" src="{{ asset('uploads/blog_photo/') }}/{{ $blog->blog_photo }}" alt="blog" />
                        </div>
                        <div class="blog-post-content-inner mt-30px" data-aos="fade-up" data-aos-delay="400">
                            <div class="blog-athor-date">
                                <a class="blog-date height-shape" href="#"><i class="fa fa-calendar"
                                        aria-hidden="true"></i> {{  \carbon\carbon::now()->format('jS  F Y ')  }}</a>

                            </div>
                            <h4 class="blog-title">{{ $blog->blog_title }}</h4>
                            <p data-aos="fade-up">
                               {!! $blog->blog_description !!}
                            </p>
                        </div>

                    </div>
                    <!-- single blog post -->
                </div>
                <div class="blog-single-tags-share d-sm-flex justify-content-between">
                    <div class="blog-single-share mb-xs-15px d-flex" data-aos="fade-up" data-aos-delay="200">
                        <ul class="social">
                            <li class="m-0">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google"></i></a>
                            </li>
                        </ul>
                        <span class="title"><a class="ml-10px" href="#"> 2 <i class="fa fa-comments m-0"></i></a></span>
                    </div>
                    <div class="blog-single-tags d-flex" data-aos="fade-up" data-aos-delay="200">
                        <span class="title">Tags: </span>
                        <ul class="tag-list">
                            <li><a href="#">Fashion,</a></li>
                            <li><a href="#">eCommerce,</a></li>
                            <li><a href="#">Dress</a></li>
                        </ul>
                    </div>
                </div>
                <div class="blog-nav">
                    <div class="row">
                        <div class="col-6">
                            <a class="nav-left" href="#"><i class="fa fa-angle-left"></i></a>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <a class="nav-right" href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="blog-comment-form">
                    <h2 class="comment-heading" data-aos="fade-up" data-aos-delay="200">Leave a Comment</h2>
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="single-form mb-lm-15px">
                                <input type="text" placeholder="Name *" />
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="single-form mb-lm-15px">
                                <input type="email" placeholder="Email *" />
                            </div>
                        </div>
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="500">
                            <div class="single-form mb-lm-15px">
                                <input type="email" placeholder="Subject (Optinal)" />
                            </div>
                        </div>
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="single-form">
                                <textarea placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                            <button class="btn btn-primary btn-hover-dark border-0 mt-30px" type="submit">Post Comment
                                <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blag Area End -->
@endsection
