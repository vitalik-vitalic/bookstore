@extends('layouts.base')
@section('content')
<!--=================================
        Hero Area
        ===================================== -->
    <section class="hero-area hero-slider-1">
        <div class="sb-slick-slider" data-slick-setting='{
                            "autoplay": true,
                            "fade": true,
                            "autoplaySpeed": 3000,
                            "speed": 3000,
                            "slidesToShow": 1,
                            "dots":true
                            }'>
            <div class="single-slide bg-shade-whisper  ">
                <div class="container">
                    <div class="home-content text-center text-sm-left position-relative">
                        <div class="hero-partial-image image-right">
                            <img src="{{asset('image/products/'.$latestProducts[0]->picture)}}" alt="">
                        </div>
                        <div class="row no-gutters ">
                            <div class="col-xl-6 col-md-6 col-sm-7">
                                <div class="home-content-inner content-left-side">
                                    <h1>{{$latestProducts[0]->author}}</h1>
                                    <h2>{{$latestProducts[0]->name}}</h2>
                                    <a href="#html" data-id="{{$latestProducts[0]->id}}" id="good-{{$latestProducts[0]->id}}-{{$latestProducts[0]->price}}" class="btn btn-outlined--primary buy addCart">
                                        {{$latestProducts[0]->price}} - Order Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide bg-ghost-white">
                <div class="container">
                    <div class="home-content text-center text-sm-left position-relative">
                        <div class="hero-partial-image image-left">
                            <img src="{{asset('image/products/'.$latestProducts[1]->picture)}}" alt="">
                        </div>
                        <div class="row align-items-center justify-content-start justify-content-md-end">
                            <div class="col-lg-6 col-xl-7 col-md-6 col-sm-7">
                                <div class="home-content-inner content-right-side">
                                    <h1>{{$latestProducts[1]->author}}</h1>
                                    <h2>{{$latestProducts[1]->name}}</h2>
                                    <a href="{{asset('/product-details/'.$latestProducts[1]->id)}}">{{$latestProducts[1]->price}} - Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        Home Features Section
        ===================================== -->
    <section class="mb--30">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 mt--30">
                    <div class="feature-box h-100">
                        <div class="icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="text">
                            <h5>Free Shipping Item</h5>
                            <p> Orders over $500</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt--30">
                    <div class="feature-box h-100">
                        <div class="icon">
                            <i class="fas fa-redo-alt"></i>
                        </div>
                        <div class="text">
                            <h5>Money Back Guarantee</h5>
                            <p>100% money back</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt--30">
                    <div class="feature-box h-100">
                        <div class="icon">
                            <i class="fas fa-piggy-bank"></i>
                        </div>
                        <div class="text">
                            <h5>Cash On Delivery</h5>
                            <p>Lorem ipsum dolor amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mt--30">
                    <div class="feature-box h-100">
                        <div class="icon">
                            <i class="fas fa-life-ring"></i>
                        </div>
                        <div class="text">
                            <h5>Help & Support</h5>
                            <p>Call us : + 0123.4567.89</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        Promotion Section One
        ===================================== -->
    <section class="section-margin">
        <h2 class="sr-only">Promotion Section</h2>
        <div class="container">
            <div class="row space-db--30">
                <div class="col-lg-6 col-md-6 mb--30">
                    <a href="" class="promo-image promo-overlay">
                        <img src="image/bg-images/promo-banner-with-text.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 mb--30">
                    <a href="" class="promo-image promo-overlay">
                        <img src="image/bg-images/promo-banner-with-text-2.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        Home Slider Tab
        ===================================== -->
    <section class="section-padding">
        <h2 class="sr-only">Home Tab Slider Section</h2>
        <div class="container">
            <div class="sb-custom-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="shop-tab" data-toggle="tab" href="#shop" role="tab"
                           aria-controls="shop" aria-selected="false">
                            Featured Products
                        </a>
                        <span class="arrow-icon"></span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="men-tab" data-toggle="tab" href="#men" role="tab"
                           aria-controls="men" aria-selected="false">
                            New Arrivals
                        </a>
                        <span class="arrow-icon"></span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="woman-tab" data-toggle="tab" href="#woman" role="tab"
                           aria-controls="woman" aria-selected="false">
                            Most view products
                        </a>
                        <span class="arrow-icon"></span>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane active" id="shop" role="tabpanel" aria-labelledby="shop-tab">
                        <div class="product-slider multiple-row  slider-border-multiple-row  sb-slick-slider"
                             data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 8000,
                            "slidesToShow": 5,
                            "rows":2,
                            "dots":true
                        }' data-slick-responsive='[
                            {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1} },
                            {"breakpoint":320, "settings": {"slidesToShow": 1} }
                        ]'>
                            @foreach($booksComputerLiterature as $booksComputerLiterature)
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="" class="author">
                                                {{$booksComputerLiterature->author}}
                                            </a>
                                            <h3><a href="{{asset('/product-details/'.$booksComputerLiterature->id)}}">
                                                    {{$booksComputerLiterature->name}}
                                                </a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="{{asset('image/products/'.$booksComputerLiterature->picture)}}" alt="newArrivals">
                                                <div class="hover-contents">
                                                    <a href="{{asset('/product-details/'.$booksComputerLiterature->id)}}" class="hover-image">
                                                        <img src="{{asset('image/products/'.$booksComputerLiterature->picture)}}" alt="newArrivals2">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="#html" data-id="{{$booksComputerLiterature->id}}"
                                                           id="good-{{$booksComputerLiterature->id}}-{{$booksComputerLiterature->price}}"
                                                           class="single-btn buy addCart"> <i class="fas fa-shopping-basket"></i> </a>
                                                        <a href="{{asset('/wishlist')}}" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="{{asset('/compare')}}" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <button data-id="{{$booksComputerLiterature->id}}" class="quickModalBtn single-btn"><i class="fas fa-eye"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price-new">{{$booksComputerLiterature->price}}</span>
                                                @if(isset($booksComputerLiterature->oldPrice))
                                                    <del class="price-old">{{$booksComputerLiterature->oldPrice}}</del>
                                                @endif
                                                @if(isset($booksComputerLiterature->discount) && ($booksComputerLiterature->finaldate > date("Y-m-d H:i:s")))
                                                    <span  class="price-discount">{{$booksComputerLiterature->discount}}%</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{--<div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            jpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Rpple iPad with Retina Display
                                                MD510LL/A</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-1.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-1.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Bpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Koss KPH7 Lightweight Portable
                                                Headphone</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-2.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-3.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Cpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Beats EP Wired On-Ear Headphone-Black</a>
                                        </h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-3.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-2.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Dpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Beats Solo2 Solo 2 Wired On-Ear
                                                Headphone</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-4.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-5.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Lpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Beats Solo3 Wireless On-Ear Headphones
                                                2</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-5.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-4.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Fpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">3 Ways To Have (A) More Appealing
                                                BOOK</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-6.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-7.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Epple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">In 10 Minutes, I'll Give You The Truth
                                                About</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-7.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-6.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Fpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">5 Ways To Get Through To Your BOOK</a>
                                        </h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-8.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-9.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Gpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">What Can You Do To Save Your BOOK</a>
                                        </h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-9.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-8.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="#" class="author">
                                            Hpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">From Destruction By Social Media?</a>
                                        </h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-10.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-11.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Gpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Find Out More About BOOK By Social
                                                Media?</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-11.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-10.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Vpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Read This Controversial BOOK By
                                                Social Media?</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-12.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-11.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                    <div class="tab-pane " id="men" role="tabpanel" aria-labelledby="men-tab">
                        <div class="product-slider multiple-row  slider-border-multiple-row  sb-slick-slider"
                             data-slick-setting='{
                                        "autoplay": true,
                                        "autoplaySpeed": 8000,
                                        "slidesToShow": 5,
                                        "rows":2,
                                        "dots":true
                                    }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                                    ]'>
                            @foreach($newArrivals as $oneNewArrivalsBook)
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            {{$oneNewArrivalsBook->author}}
                                        </a>
                                        <h3><a href="{{asset('/product-details/'.$oneNewArrivalsBook->id)}}">
                                                {{$oneNewArrivalsBook->name}}
                                            </a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="{{asset('image/products/'.$oneNewArrivalsBook->picture)}}" alt="newArrivals">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details/'.$oneNewArrivalsBook->id)}}" class="hover-image">
                                                    <img src="{{asset('image/products/'.$oneNewArrivalsBook->picture)}}" alt="newArrivals2">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="#html" data-id="{{$oneNewArrivalsBook->id}}"
                                                       id="good-{{$oneNewArrivalsBook->id}}-{{$oneNewArrivalsBook->price}}"
                                                       class="single-btn buy addCart"> <i class="fas fa-shopping-basket"></i> </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <button data-id="{{$oneNewArrivalsBook->id}}" class="quickModalBtn single-btn"><i class="fas fa-eye"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price-new">{{$oneNewArrivalsBook->price}}</span>
                                            @if(isset($oneNewArrivalsBook->oldPrice))
                                                <del class="price-old">{{$oneNewArrivalsBook->oldPrice}}</del>
                                            @endif
                                            @if(isset($oneNewArrivalsBook->discount) && ($oneNewArrivalsBook->finaldate > date("Y-m-d H:i:s")))
                                                <span  class="price-discount">{{$oneNewArrivalsBook->discount}}%</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{--<div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Bpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Koss KPH7 Lightweight Portable
                                                Headphone</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-2.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-3.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Cpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Beats EP Wired On-Ear
                                                Headphone-Black</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-1.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-2.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Dpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Beats Solo2 Solo 2 Wired On-Ear
                                                Headphone</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-4.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-5.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Lpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Beats Solo3 Wireless On-Ear
                                                Headphones 2</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-7.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-4.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Fpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">3 Ways To Have (A) More Appealing
                                                BOOK</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-6.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-7.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Epple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">In 10 Minutes, I'll Give You The
                                                Truth About</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-5.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-6.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Fpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">5 Ways To Get Through To Your
                                                BOOK</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-8.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-9.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Gpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">What Can You Do To Save Your BOOK</a>
                                        </h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-3.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-8.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Hpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">From Destruction By Social Media?</a>
                                        </h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-9.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-11.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Gpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Find Out More About BOOK By Social
                                                Media?</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-10.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-10.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Apple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Read This Controversial BOOK By
                                                Social Media?</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-9.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-11.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                    <div class="tab-pane" id="woman" role="tabpanel" aria-labelledby="woman-tab">
                        <div class="product-slider multiple-row  slider-border-multiple-row  sb-slick-slider"
                             data-slick-setting='{
                                        "autoplay": true,
                                        "autoplaySpeed": 8000,
                                        "slidesToShow": 5,
                                        "rows":2,
                                        "dots":true
                                    }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                                    ]'>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            jpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Zpple fPad with Retina Display
                                                MD510LL/A</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-1.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-1.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Bpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Koss KPH7 Lightweight Portable
                                                Headphone</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-4.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-3.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Cpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Beats EP Wired On-Ear
                                                Headphone-Black</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-3.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-2.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Dpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Beats Solo2 Solo 2 Wired On-Ear
                                                Headphone</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-1.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-5.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Lpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Beats Solo3 Wireless On-Ear
                                                Headphones 2</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-11.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-4.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Fpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">3 Ways To Have (A) More Appealing
                                                BOOK</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-10.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-7.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Epple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">In 10 Minutes, I'll Give You The
                                                Truth About</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-9.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-6.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Fpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">5 Ways To Get Through To Your
                                                BOOK</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-8.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-9.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Gpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">What Can You Do To Save Your BOOK</a>
                                        </h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-5.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-8.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Hpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">From Destruction By Social Media?</a>
                                        </h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-3.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-11.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Gpple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Find Out More About BOOK By Social
                                                Media?</a></h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-11.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-10.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            Apple
                                        </a>
                                        <h3><a href="{{asset('/product-details')}}">Read This Controversial BOOK By
                                                Social Media? Out More</a>
                                        </h3>
                                    </div>
                                    <div class="product-card--body">
                                        <div class="card-image">
                                            <img src="image/products/product-12.jpg" alt="">
                                            <div class="hover-contents">
                                                <a href="{{asset('/product-details')}}" class="hover-image">
                                                    <img src="image/products/product-11.jpg" alt="">
                                                </a>
                                                <div class="hover-btns">
                                                    <a href="{{asset('/cart')}}" class="single-btn">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a>
                                                    <a href="{{asset('/wishlist')}}" class="single-btn">
                                                        <i class="fas fa-heart"></i>
                                                    </a>
                                                    <a href="{{asset('/compare')}}" class="single-btn">
                                                        <i class="fas fa-random"></i>
                                                    </a>
                                                    <a href="#" data-toggle="modal" data-target="#quickModal"
                                                       class="single-btn">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        Deal of the day
        ===================================== -->
    <section class="section-margin">
        <div class="container-fluid">
            <div class="promo-section-heading">
                <h2>Deal of the day up to 20% off Special offer</h2>
            </div>
            <div class="product-slider with-countdown  slider-border-single-row sb-slick-slider" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 6,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1400, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":575, "settings": {"slidesToShow": 2} },
                {"breakpoint":490, "settings": {"slidesToShow": 1} }
            ]'>
                @foreach($dealOfTheDayProducts as $product)
                    <div class="single-slide">
                        @php
                            $priceWithDiscount = round(($product->price / (1 + ($product->discount / 100))), 2);
                        @endphp
                        <div class="product-card">
                            <div class="product-header">
                                <a href="#" class="author">
                                    {{$product->author}}
                                </a>
                                <h3><a href="{{asset('/product-details/'.$product->product_id)}}">{{$product->name}}</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="{{asset('image/products/'.$product->picture)}}" alt="">
                                    <div class="hover-contents">
                                        <a href="{{asset('/product-details/'.$product->product_id)}}" class="hover-image">
                                            <img src="{{asset('image/products/'.$product->picture)}}" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            {{--<a href="#html" data-id="{{$product->product_id}}"
                                               id="good-{{$product->product_id}}-{{$product->price}}"
                                               class="single-btn buy addCart"> <i class="fas fa-shopping-basket"></i>
                                            </a>--}}
                                            <a id="good-{{$product->product_id}}-{{$priceWithDiscount}}"
                                               class="single-btn buy addCart">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="{{asset('/wishlist')}}" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="{{asset('/compare')}}" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <button data-id="{{$product->id}}" class="quickModalBtn single-btn"><i class="fas fa-eye"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">{{$priceWithDiscount}}</span>
                                    <del class="price-old">{{$product->price}}</del>
                                    <span class="price-discount">{{$product->discount}}%</span>
                                </div>
                                <div class="count-down-block">
                                    @php
                                        $date = date_create($product->finaldate);
                                        $finaDate = date_format($date,"m/d/Y");
                                    @endphp
                                    <div class="product-countdown" data-countdown="{{$finaDate}}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--@php
                        $priceWithDiscount = round(($product->price / (1 + ($product->discount / 100))), 2);
                    @endphp--}}
                {{--<div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                {{$product->author}}
                            </a>
                            <h3><a href="{{asset('/product-details')}}">{{$product->name}}
                                </a>
                            </h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="{{asset('image/products/'.$product->picture)}}" alt="">
                                <div class="hover-contents">
                                    <a href="{{asset('/product-details/'.$product->id)}}" class="hover-image">
                                        <img src="{{asset('image/products/'.$product->picture)}}" alt="">
                                    </a>
                                    <div class="hover-contents">
                                        <a href="{{asset('/product-details/'.$product->id)}}" class="hover-image">
                                            <img src="{{asset('image/products/'.$product->picture)}}" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="{{asset('/cart')}}" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="{{asset('/wishlist')}}" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="{{asset('/compare')}}" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal"
                                               class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">{{$product->price}}</span>
                                <del class="price-old">{{$product->price}}</del>
                                <span class="price-discount">{{$product->discount}}%</span>
                            </div>
                            <div class="count-down-block">
                                @php
                                    $date = new DateTime($product->finaldate);
                                @endphp
                                <div class="product-countdown" data-countdown="{{$date->format('m/d/Y')}}"></div>
                            </div>
                        </div>
                    </div>
                </div>--}}
                @endforeach
                {{--<div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="#" class="author">
                                Upple
                            </a>
                            <h3><a href="{{asset('/product-details')}}">Here Is A Quick Cure For Book</a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-1.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="{{asset('/product-details')}}" class="hover-image">
                                        <img src="image/products/product-1.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="{{asset('/cart')}}" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="{{asset('/wishlist')}}" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="{{asset('/compare')}}" class="single-btn">
                                            <i class="fas fa-random"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                           class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                            <div class="count-down-block">
                                <div class="product-countdown" data-countdown="01/10/2020"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="#" class="author">
                                Ypple
                            </a>
                            <h3><a href="{{asset('/product-details')}}">a Half Very Simple Things You To Save</a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-3.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="{{asset('/product-details')}}" class="hover-image">
                                        <img src="image/products/product-2.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="{{asset('/cart')}}" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="{{asset('/wishlist')}}" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="{{asset('/compare')}}" class="single-btn">
                                            <i class="fas fa-random"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                           class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                            <div class="count-down-block">
                                <div class="product-countdown" data-countdown="01/10/2020"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="#" class="author">
                                Epple
                            </a>
                            <h3><a href="{{asset('/product-details')}}">What You Can Learn From Bill Gates</a>
                            </h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-5.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="{{asset('/product-details')}}" class="hover-image">
                                        <img src="image/products/product-4.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="{{asset('/cart')}}" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="{{asset('/wishlist')}}" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="{{asset('/compare')}}" class="single-btn">
                                            <i class="fas fa-random"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                           class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                            <div class="count-down-block">
                                <div class="product-countdown" data-countdown="01/10/2020"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="#" class="author">
                                Rpple
                            </a>
                            <h3><a href="{{asset('/product-details')}}">Create Better BOOK With The Help Of Your</a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-6.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="{{asset('/product-details')}}" class="hover-image">
                                        <img src="image/products/product-4.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="{{asset('/cart')}}" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="{{asset('/wishlist')}}" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="{{asset('/compare')}}" class="single-btn">
                                            <i class="fas fa-random"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                           class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                            <div class="count-down-block">
                                <div class="product-countdown" data-countdown="10/01/2020"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="#" class="author">
                                Tpple
                            </a>
                            <h3><a href="{{asset('/product-details')}}">Turn Your BOOK Into High Machine</a>
                            </h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-8.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="{{asset('/product-details')}}" class="hover-image">
                                        <img src="image/products/product-7.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="{{asset('/cart')}}" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="{{asset('/wishlist')}}" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="{{asset('/compare')}}" class="single-btn">
                                            <i class="fas fa-random"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                           class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                            <div class="count-down-block">
                                <div class="product-countdown" data-countdown="01/05/2020"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="#" class="author">
                                Mpple
                            </a>
                            <h3><a href="{{asset('/product-details')}}">Revolutionize Your BOOK With These Easy
                                </a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-13.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="{{asset('/product-details')}}" class="hover-image">
                                        <img src="image/products/product-11.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="{{asset('/cart')}}" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="{{asset('/wishlist')}}" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="{{asset('/compare')}}" class="single-btn">
                                            <i class="fas fa-random"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                           class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                            <div class="count-down-block">
                                <div class="product-countdown" data-countdown="01/05/2020"></div>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <!--=================================
        Best Seller Product
        ===================================== -->
    <section class="section-margin bg-image section-padding-top section-padding"
             data-bg="image/bg-images/best-seller-bg.jpg">
        <div class="container">
            <div class="section-title section-title--bordered mb-0">
                <h2>Best BEST SELLER BOOKS</h2>
            </div>
            <div class="best-seller-block">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="author-image">
                            <img src="image/others/best-seller-author.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="sb-slick-slider product-slider product-list-slider multiple-row slider-border-multiple-row"
                             data-slick-setting='{
                                    "autoplay": false,
                                    "autoplaySpeed": 8000,
                                    "slidesToShow":2,
                                    "rows":2,
                                    "dots":true
                                }' data-slick-responsive='[
                                    {"breakpoint":1200, "settings": {"slidesToShow": 1} },
                                    {"breakpoint":992, "settings": {"slidesToShow": 1} },
                                    {"breakpoint":768, "settings": {"slidesToShow": 1} },
                                    {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                    {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                ]'>
                            @foreach($bestSailingProductsOutput as $bestSailingBook)
                                <div class="single-slide">
                                    <div class="product-card card-style-list">
                                        <div class="card-image">
                                            <img src="{{asset('image/products/'.$bestSailingBook->picture)}}" alt="bestSailingBook">
                                        </div>
                                        <div class="product-card--body">
                                            <div class="product-header">
                                                <a href="#" class="author">
                                                    {{$bestSailingBook->author}}
                                                </a>
                                                <h3><a href="{{asset('/product-details/'.$bestSailingBook->id)}}">
                                                        {{$bestSailingBook->name}}
                                                    </a></h3>
                                            </div>
                                            <div class="price-block">
                                                <span class="price-new">{{$bestSailingBook->price}}</span>
                                                @if(isset($bestSailingBook->oldPrice))
                                                    <del class="price-old">{{$bestSailingBook->oldPrice}}</del>
                                                @endif
                                                @if(isset($bestSailingBook->discount) && ($bestSailingBook->finaldate > date("Y-m-d H:i:s")))
                                                    <span  class="price-discount">{{$bestSailingBook->discount}}%</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{--<div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        <img src="image/products/product-1.jpg" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Epple
                                            </a>
                                            <h3><a href="{{asset('/product-details')}}">Here Is Quick Cure BOOK This
                                                    Will Help

                                                </a></h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        <img src="image/products/product-2.jpg" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Wpple
                                            </a>
                                            <h3><a href="{{asset('/product-details')}}">Do You Really Need It? This
                                                    Will Help You

                                                </a></h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        <img src="image/products/product-3.jpg" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Ypple
                                            </a>
                                            <h3><a href="{{asset('/product-details')}}">Very Simple Things You
                                                    Can Save BOOK



                                                </a>
                                            </h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        <img src="image/products/product-5.jpg" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Mople
                                            </a>
                                            <h3><a href="{{asset('/product-details')}}">What You Can Learn From Bill Gates

                                                </a></h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-card card-style-list">
                                    <div class="card-image">
                                        <img src="image/products/product-4.jpg" alt="">
                                    </div>
                                    <div class="product-card--body">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Cpple
                                            </a>
                                            <h3><a href="{{asset('/product-details')}}">3 Ways Create Better BOOK With
                                                    Help

                                                </a></h3>
                                        </div>
                                        <div class="price-block">
                                            <span class="price">£51.20</span>
                                            <del class="price-old">£51.20</del>
                                            <span class="price-discount">20%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        CHILDREN’S BOOKS
        ===================================== -->
    <section class="section-margin">
        <div class="container">
            <div class="section-title section-title--bordered">
                <h2>CHILDREN’S BOOKS</h2>
            </div>
            <div class="product-list-slider slider-two-column product-slider multiple-row sb-slick-slider slider-border-multiple-row"
                 data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow":3,
                                            "rows":2,
                                            "dots":true
                                        }' data-slick-responsive='[
                                            {"breakpoint":1200, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":992, "settings": {"slidesToShow": 2} },
                                            {"breakpoint":768, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                            {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                        ]'>
                @foreach($booksForChildrens as $oneBook)
                    <div class="single-slide">
                    <div class="product-card card-style-list">
                        <div class="card-image">
                            <img src="{{asset('image/products/'.$oneBook->picture)}}" alt="childrenBook">
                        </div>
                        <div class="product-card--body">
                            <div class="product-header">
                                <a href="#" class="author">
                                    {{$oneBook->author}}
                                </a>
                                <h3><a href="{{asset('/product-details/'.$oneBook->id)}}">{{$oneBook->name}}</a></h3>
                            </div>
                            <div class="price-block">
                                <span class="price-new">{{$oneBook->price}}</span>
                                @if(isset($oneBook->oldPrice))
                                    <del class="price-old">{{$oneBook->oldPrice}}</del>
                                @endif
                                @if(isset($oneBook->discount) && ($oneBook->finaldate > date("Y-m-d H:i:s")))
                                    <span  class="price-discount">{{$oneBook->discount}}%</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{--<div class="single-slide">
                    <div class="product-card card-style-list">
                        <div class="card-image">
                            <img src="image/products/product-1.jpg" alt="">
                        </div>
                        <div class="product-card--body">
                            <div class="product-header">
                                <a href="#" class="author">
                                    Dpple
                                </a>
                                <h3><a href="{{asset('/product-details')}}">Turn Your BOOK Into High Machine</a>
                                </h3>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card card-style-list">
                        <div class="card-image">
                            <img src="image/products/product-3.jpg" alt="">
                        </div>
                        <div class="product-card--body">
                            <div class="product-header">
                                <a href="#" class="author">
                                    Epple
                                </a>
                                <h3><a href="{{asset('/product-details')}}">BOOK: Do You Really Need It? This </a></h3>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card card-style-list">
                        <div class="card-image">
                            <img src="image/products/product-4.jpg" alt="">
                        </div>
                        <div class="product-card--body">
                            <div class="product-header">
                                <a href="#" class="author">
                                    Ppple
                                </a>
                                <h3><a href="{{asset('/product-details')}}">Here Is A Quick Cure For Book</a>
                                </h3>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card card-style-list">
                        <div class="card-image">
                            <img src="image/products/product-5.jpg" alt="">
                        </div>
                        <div class="product-card--body">
                            <div class="product-header">
                                <a href="#" class="author">
                                    Ypple
                                </a>
                                <h3><a href="{{asset('/product-details')}}">What You Can Learn From Bill Gates</a>
                                </h3>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card card-style-list">
                        <div class="card-image">
                            <img src="image/products/product-6.jpg" alt="">
                        </div>
                        <div class="product-card--body">
                            <div class="product-header">
                                <a href="#" class="author">
                                    Wpple
                                </a>
                                <h3><a href="{{asset('/product-details')}}">3 Ways Create Better BOOK With</a></h3>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <!--=================================
        Promotion Section Two
        ===================================== -->
    <div class="section-margin">
        <div class="container">
            <div class="row space-db--30">
                <div class="col-lg-8 mb--30">
                    <div class="promo-wrapper promo-type-one">
                        <a href="#" class="promo-image  promo-overlay bg-image"
                           data-bg="image/bg-images/promo-banner-mid.jpg">
                            <!-- <img src="image/bg-images/promo-banner-mid.jpg" alt=""> -->
                        </a>
                        <div class="promo-text">
                            <div class="promo-text-inner">
                                <h2>Buy 3. Get Free 1.</h2>
                                <h3>50% off for selected products in Pustok.</h3>
                                <a href="#" class="btn btn-outlined--red-faded">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb--30">
                    <div class="promo-wrapper promo-type-two ">
                        <a href="#" class="promo-image promo-overlay bg-image"
                           data-bg="image/bg-images/promo-banner-small.jpg">
                            <!-- <img src="image/bg-images/promo-banner-small.jpg" alt=""> -->
                        </a>
                        <div class="promo-text">
                            <div class="promo-text-inner">
                                <span class="d-block price">$26.00</span>
                                <h2>Praise for <br>
                                    The Night Child</h2>
                                <a href="#" class="btn btn-outlined--primary">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
        ARTS & PHOTOGRAPHY BOOKS
        ===================================== -->
    <section class="section-margin">
        <div class="container">
            <div class="section-title section-title--bordered">
                <h2>ARTS & PHOTOGRAPHY BOOKS</h2>
            </div>
            <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 5,
                "dots":true
            }' data-slick-responsive='[
                {"breakpoint":1500, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 1} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
                @foreach($booksArtAndCulture as $oneBookArtAndCulture)
                    <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="#" class="author">
                                {{$oneBookArtAndCulture->author}}
                            </a>
                            <h3><a href="{{asset('/product-details/'.$oneBookArtAndCulture->id)}}">
                                    {{$oneBookArtAndCulture->name}}
                                </a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="{{asset('image/products/'.$oneBookArtAndCulture->picture)}}" alt="artAndCulture">
                                <div class="hover-contents">
                                    <a href="{{asset('/product-details/'.$oneBookArtAndCulture->id)}}" class="hover-image">
                                        <img src="{{asset('image/products/'.$oneBookArtAndCulture->picture)}}" alt="artAndCulture">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="#html" data-id="{{$oneBookArtAndCulture->id}}"
                                           id="good-{{$oneBookArtAndCulture->id}}-{{$oneBookArtAndCulture->price}}"
                                           class="single-btn buy addCart"> <i class="fas fa-shopping-basket"></i> </a>
                                        <a href="{{asset('/wishlist')}}" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="{{asset('/compare')}}" class="single-btn">
                                            <i class="fas fa-random"></i>
                                        </a>
                                        {{--<input type="button" data-id="{{$product->id}}" class="quickModalBtn" value="Modal2">--}}
                                        <button data-id="{{$oneBookArtAndCulture->id}}" class="quickModalBtn single-btn"><i class="fas fa-eye"></i></button>
                                        {{--<a href="#" data-id="{{$product->id}}" --}}{{--data-toggle="modal" data-target="#quickModal"--}}{{--
                                           class="quickModalBtn single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price-new">{{$oneBookArtAndCulture->price}}</span>
                                @if(isset($oneBookArtAndCulture->oldPrice))
                                    <del class="price-old">{{$oneBookArtAndCulture->oldPrice}}</del>
                                @endif
                                @if(isset($oneBookArtAndCulture->discount) && ($oneBookArtAndCulture->finaldate > date("Y-m-d H:i:s")))
                                    <span  class="price-discount">{{$oneBookArtAndCulture->discount}}%</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{--<div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                Jpple
                            </a>
                            <h3><a href="{{asset('/product-details')}}">Turn Your BOOK Into High Machine</a>
                            </h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-2.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="{{asset('/product-details')}}" class="hover-image">
                                        <img src="image/products/product-1.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="{{asset('/cart')}}" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="{{asset('/wishlist')}}" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="{{asset('/compare')}}" class="single-btn">
                                            <i class="fas fa-random"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                           class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                Wpple
                            </a>
                            <h3><a href="{{asset('/product-details')}}">Create Better BOOK With The Help Of Your</a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-3.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="{{asset('/product-details')}}" class="hover-image">
                                        <img src="image/products/product-2.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="{{asset('/cart')}}" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="{{asset('/wishlist')}}" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="{{asset('/compare')}}" class="single-btn">
                                            <i class="fas fa-random"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                           class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                Epple
                            </a>
                            <h3><a href="{{asset('/product-details')}}">What You Can Learn From Bill Gates</a>
                            </h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-5.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="{{asset('/product-details')}}" class="hover-image">
                                        <img src="image/products/product-4.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="{{asset('/cart')}}" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="{{asset('/wishlist')}}" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="{{asset('/compare')}}" class="single-btn">
                                            <i class="fas fa-random"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                           class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                Hpple
                            </a>
                            <h3><a href="{{asset('/product-details')}}">a Half Very Simple Things You To Save</a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-6.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="{{asset('/product-details')}}" class="hover-image">
                                        <img src="image/products/product-4.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="{{asset('/cart')}}" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="{{asset('/wishlist')}}" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="{{asset('/compare')}}" class="single-btn">
                                            <i class="fas fa-random"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                           class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="#" class="author">
                                Bpple
                            </a>
                            <h3><a href="{{asset('/product-details')}}">Here Is A Quick Cure For Book</a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-8.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="{{asset('/product-details')}}" class="hover-image">
                                        <img src="image/products/product-7.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="{{asset('/cart')}}" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="{{asset('/wishlist')}}" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="{{asset('/compare')}}" class="single-btn">
                                            <i class="fas fa-random"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                           class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="#" class="author">
                                zpple
                            </a>
                            <h3><a href="{{asset('/product-details')}}">Do You Really Need It? This Will Help You
                                </a>
                            </h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="image/products/product-13.jpg" alt="">
                                <div class="hover-contents">
                                    <a href="{{asset('/product-details')}}" class="hover-image">
                                        <img src="image/products/product-11.jpg" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="{{asset('/cart')}}" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="{{asset('/wishlist')}}" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="{{asset('/compare')}}" class="single-btn">
                                            <i class="fas fa-random"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                           class="single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price">£51.20</span>
                                <del class="price-old">£51.20</del>
                                <span class="price-discount">20%</span>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <!--=================================
            Promotion Section Three
        ===================================== -->
    <section class="section-margin">
        <div class="promo-wrapper promo-type-three">
            <a href="#" class="promo-image promo-overlay bg-image" data-bg="image/bg-images/promo-banner-full.jpg">
            </a>
            <div class="promo-text w-100 ml-0">
                <div class="container">
                    <div class="row w-100">
                        <div class="col-lg-7">
                            <h2>I Love This Idea!</h2>
                            <h3>Cover up front of book and
                                leave summary</h3>
                            <a href="#" class="btn btn--yellow">$78.09 - Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        Home Blog Slider
        ===================================== -->
    <!--=================================
        Home Blog
        ===================================== -->
    {{--<section class="section-margin">
        <div class="container">
            <div class="section-title">
                <h2>LATEST BLOGS</h2>
            </div>
            <div class="blog-slider sb-slick-slider" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 2,
                "dots": true
            }' data-slick-responsive='[
                {"breakpoint":1200, "settings": {"slidesToShow": 1} }
            ]'>
                <div class="single-slide">
                    <div class="blog-card">
                        <div class="image">
                            <img src="image/others/blog-grid-1.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="content-header">
                                <div class="date-badge">
                                        <span class="date">
                                            13
                                        </span>
                                    <span class="month">
                                            Aug
                                        </span>
                                </div>
                                <h3 class="title"><a href="blog-details.html">How to Water and Care for Mounted</a>
                                </h3>
                            </div>
                            <p class="meta-para"><i class="fas fa-user-edit"></i>Post by <a href="#">Hastech</a></p>
                            <article class="blog-paragraph">
                                <h2 class="sr-only">blog-paragraph</h2>
                                <p>Virtual reality and 3-D technology are already well-established in the
                                    entertainment...</p>
                            </article>
                            <a href="blog-details.html" class="card-link">Read More <i
                                    class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="blog-card">
                        <div class="image">
                            <img src="image/others/blog-grid-2.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="content-header">
                                <div class="date-badge">
                                        <span class="date">
                                            19
                                        </span>
                                    <span class="month">
                                            Jan
                                        </span>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Why You Never See BLOG TITLE That </a>
                                </h3>
                            </div>
                            <p class="meta-para"><i class="fas fa-user-edit"></i>Post by <a href="#">Hastech</a></p>
                            <article class="blog-paragraph">
                                <h2 class="sr-only">blog-paragraph</h2>
                                <p>Virtual reality and 3-D technology are already well-established in the
                                    entertainment...</p>
                            </article>
                            <a href="blog-details.html" class="card-link">Read More <i
                                    class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="blog-card">
                        <div class="image">
                            <img src="image/others/blog-grid-3.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="content-header">
                                <div class="date-badge">
                                        <span class="date">
                                            31
                                        </span>
                                    <span class="month">
                                            Aug
                                        </span>
                                </div>
                                <h3 class="title"><a href="blog-details.html">What Everyone Must Know About </a>
                                </h3>
                            </div>
                            <p class="meta-para"><i class="fas fa-user-edit"></i>Post by <a href="#">Hastech</a></p>
                            <article class="blog-paragraph">
                                <h2 class="sr-only">blog-paragraph</h2>
                                <p>Virtual reality and 3-D technology are already well-established in the
                                    entertainment...</p>
                            </article>
                            <a href="blog-details.html" class="card-link">Read More <i
                                    class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!--=================================
        Footer
        ===================================== -->
    <!-- Modal -->
    <div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
         aria-labelledby="quickModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="product-details-modal">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- Product Details Slider Big Image-->
                            <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'>
                                <div class="single-slide">
                                    <img src="image/products/product-details-1.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="image/products/product-details-2.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="image/products/product-details-3.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="image/products/product-details-4.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="image/products/product-details-5.jpg" alt="">
                                </div>
                            </div>
                            <!-- Product Details Slider Nav -->
                            <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
                                 data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
                                <div class="single-slide">
                                    <img src="image/products/product-details-1.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="image/products/product-details-2.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="image/products/product-details-3.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="image/products/product-details-4.jpg" alt="">
                                </div>
                                <div class="single-slide">
                                    <img src="image/products/product-details-5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 mt--30 mt-lg--30">
                            <div class="product-details-info pl-lg--30 ">
                                <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
                                <h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
                                <ul class="list-unstyled">
                                    <li>Ex Tax: <span class="list-value"> £60.24</span></li>
                                    <li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a></li>
                                    <li>Product Code: <span class="list-value"> model1</span></li>
                                    <li>Reward Points: <span class="list-value"> 200</span></li>
                                    <li>Availability: <span class="list-value"> In Stock</span></li>
                                </ul>
                                <div class="price-block">
                                    <span class="price-new">£73.79</span>
                                    <del class="price-old">£91.86</del>
                                </div>
                                <div class="rating-widget">
                                    <div class="rating-block">
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star star_on"></span>
                                        <span class="fas fa-star "></span>
                                    </div>
                                    <div class="review-widget">
                                        <a href="">(1 Reviews)</a> <span>|</span>
                                        <a href="">Write a review</a>
                                    </div>
                                </div>
                                <article class="product-details-article">
                                    <h4 class="sr-only">Product Summery</h4>
                                    <p>Long printed dress with thin adjustable straps. V-neckline and wiring under
                                        the Dust with ruffles
                                        at the bottom
                                        of the
                                        dress.</p>
                                </article>
                                <div class="add-to-cart-row">
                                    <div class="count-input-block">
                                        <span class="widget-label">Qty</span>
                                        <input type="number" class="form-control text-center" value="1">
                                    </div>
                                    <div class="add-cart-btn">
                                        <a href="" class="btn btn-outlined--primary"><span
                                                class="plus-icon">+</span>Add to Cart</a>
                                    </div>
                                </div>
                                <div class="compare-wishlist-row">
                                    <a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                                    <a href="" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="widget-social-share">
                        <span class="widget-label">Share:</span>
                        <div class="modal-social-share">
                            <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
