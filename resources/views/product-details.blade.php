@extends('layouts.base')
@section('content')
<section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
        <div class="breadcrumb-contents">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">Product Details</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<main class="inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row  mb--60">
            <div class="col-lg-5 mb--30">
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
                        <img src="{{asset('image/products/'.$productDetail->picture)}}" alt="">
                    </div>
                    <div class="single-slide">
                        <img src="{{asset('image/products/product-details-2.jpg')}}" alt="">
                    </div>
                    <div class="single-slide">
                        <img src="{{asset('image/products/product-details-3.jpg')}}" alt="">
                    </div>
                    <div class="single-slide">
                        <img src="{{asset('image/products/product-details-4.jpg')}}" alt="">
                    </div>
                    <div class="single-slide">
                        <img src="{{asset('image/products/product-details-5.jpg')}}" alt="">
                    </div>
                </div>
                <!-- Product Details Slider Nav -->
                <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two" data-slick-setting='{
            "infinite":true,
              "autoplay": false,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
                    <div class="single-slide">
                        <img src="{{asset('image/products/product-details-1.jpg')}}" alt="">
                    </div>
                    <div class="single-slide">
                        <img src="{{asset('image/products/product-details-2.jpg')}}" alt="">
                    </div>
                    <div class="single-slide">
                        <img src="{{asset('image/products/product-details-3.jpg')}}" alt="">
                    </div>
                    <div class="single-slide">
                        <img src="{{asset('image/products/product-details-4.jpg')}}" alt="">
                    </div>
                    <div class="single-slide">
                        <img src="{{asset('image/products/product-details-5.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="product-details-info pl-lg--30 ">
                    <p class="tag-block">Tags: {{--<a href="#">Movado</a>, <a href="#">Omega</a>--}}</p>
                    <h3 class="product-title">{{$productDetail->name}}</h3>
                    <ul class="list-unstyled">
                        <li>Статус: <span class="list-value"> {{$productDetail->status}}</span></li>
                        <li>Автор: <span class="list-value"> {{$productDetail->author}}</span></li>
                        <li>Издательство: <span class="list-value"> {{$productDetail->publisher}}</span></li>
                        <li>Год: <span class="list-value"> {{$productDetail->year}}</span></li>
                        <li>Страниц: <span class="list-value"> {{$productDetail->pages}}</span></li>
                        <li>ISBN: <span class="list-value"> {{$productDetail->isbn}}</span></li>
                        <li>Вес: <span class="list-value"> {{$productDetail->weight}}</span></li>

                        {{--<li>Reward Points: <span class="list-value"> 200</span></li>--}}

                    </ul>
                    <div class="price-block">
                        <span class="price-new">{{$productDetail->price}}</span>
                        @if(isset($productDetail->oldPrice))
                            <del class="price-old">{{$productDetail->oldPrice}}</del>
                        @endif
                        @if(isset($productDetail->discount))
                            <span  class="price-discount">{{$productDetail->discount}}%</span>
                        @endif
                    </div>
                    <div class="rating-widget">
                        <div class="rating-block">
                            @for($i=1;$i<=5;$i++)
                                @if($i <= $productDetail->rating)
                                    <span class="fas fa-star star_on"></span>
                                @else
                                    <span class="fas fa-star "></span>
                                @endif
                            @endfor
                        </div>
                        <div class="review-widget">
                            <a href="">({{count($productReviews)}} Reviews)</a> <span>|</span>
                            <a href="">Write a review</a>
                        </div>
                    </div>
                    <article class="product-details-article">
                        <h4 class="sr-only">Product Summery</h4>
                        <p>{{$productDetail->small_body}}</p>
                    </article>
                    <div class="add-to-cart-row">
                        {{--<div class="count-input-block">
                            <span class="widget-label">Qty</span>
                            <input type="number" class="form-control text-center" value="1">
                        </div>--}}
                        <div class="add-cart-btn">
                            <a href="#html" data-id="{{$productDetail->id}}" id="good-{{$productDetail->id}}-{{$productDetail->price}}" class="btn btn-outlined--primary buy addCart"><span class="plus-icon">+</span>Add to
                                Cart</a>
                        </div>
                    </div>
                    {{--<div class="compare-wishlist-row">
                        <a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                        <a href="" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                    </div>--}}
                </div>
            </div>
        </div>
        <div class="sb-custom-tab review-tab section-padding">
            <ul class="nav nav-tabs nav-style-2" id="myTab2" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab"
                       aria-controls="tab-1" aria-selected="true">
                        О книге
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab"
                       aria-controls="tab-2" aria-selected="true">
                        Отзывы ({{count($productReviews)}})
                    </a>
                </li>
            </ul>
            <div class="tab-content space-db--20" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                    <article class="review-article">
                        <h1 class="sr-only">Tab Article</h1>
                        @php
                         echo $productDetail->description;
                        @endphp
                    </article>
                </div>
                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                    <div class="review-wrapper">
                        <h2 class="title-lg mb--20">{{count($productReviews)}} REVIEW FOR "{{$productDetail->name}}"</h2>
                        @foreach($productReviews as $review)
                        <div class="review-comment mb--20">
                            <div class="avatar">
                                @php
                                    $wasMatch = false;
                                @endphp
                                @foreach($allUsers as $user)
                                    @if($review->user_id == $user->id)
                                        <img src="{{asset('public/storage/'.$user->avatar)}}" alt="">
                                            @php
                                                $wasMatch = true;
                                            @endphp
                                        @break
                                    @endif
                                @endforeach
                                @if(!$wasMatch)
                                    <img src="{{asset('public/storage/users/default.png')}}" alt="">
                                @endif
                            </div>
                            <div class="text">
                                @if(isset($review->rating) && $review->rating != null)
                                <div class="rating-block mb--15">
                                    @php
                                        for($i=0;$i<5;$i++){
                                            if($review->rating >= $i){
                                                echo '<span class="ion-android-star-outline star_on"></span>';
                                            }else{
                                                echo '<span class="ion-android-star-outline"></span>';
                                            }
                                        }
                                    @endphp{{--
                                    <span class="ion-android-star-outline star_on"></span>
                                    <span class="ion-android-star-outline star_on"></span>
                                    <span class="ion-android-star-outline star_on"></span>
                                    <span class="ion-android-star-outline"></span>
                                    <span class="ion-android-star-outline"></span>--}}
                                </div>
                                @endif
                                <h6 class="author">{{$review->name}} – <span class="font-weight-400">{{$review->created_at}}</span>
                                </h6>
                                <p>{{$review->message}}</p>
                            </div>
                        </div>
                        @endforeach
                        <h2 class="title-lg mb--20 pt--15">ADD A REVIEW</h2>
                        <div class="rating-row pt-2">
                            <p class="d-block">Your Rating</p>
                            <span class="rating-widget-block">
                                        <input type="radio" name="star" id="star1">
                                        <label for="star1"></label>
                                        <input type="radio" name="star" id="star2">
                                        <label for="star2"></label>
                                        <input type="radio" name="star" id="star3">
                                        <label for="star3"></label>
                                        <input type="radio" name="star" id="star4">
                                        <label for="star4"></label>
                                        <input type="radio" name="star" id="star5">
                                        <label for="star5"></label>
                                    </span>
                            <form id="review-form" action="{{asset('/product-details/'.$productDetail->id)}}" method="post" class="mt--15 site-form ">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="message">Comment</label>
                                            <textarea name="message" id="message" cols="30" rows="10"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input name="name" type="text" id="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input name="email" type="text" id="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="website">Website</label>
                                            <input name="website" type="text" id="website" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="submit-btn">
                                            <button type="submit" value="submit" id="submit" class="btn btn-black"
                                                    name="submit">send</button>
                                            {{--<a href="#" class="btn btn-black">Post Comment</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="tab-product-details">
<div class="brand">
<img src="image/others/review-tab-product-details.jpg" alt="">
</div>
<h5 class="meta">Reference <span class="small-text">demo_5</span></h5>
<h5 class="meta">In stock <span class="small-text">297 Items</span></h5>
<section class="product-features">
<h3 class="title">Data sheet</h3>
<dl class="data-sheet">
<dt class="name">Compositions</dt>
<dd class="value">Viscose</dd>
<dt class="name">Styles</dt>
<dd class="value">Casual</dd>
<dt class="name">Properties</dt>
<dd class="value">Maxi Dress</dd>
</dl>
</section>
</div> -->
    </div>
    <!--=================================
RELATED PRODUCTS BOOKS
===================================== -->
    <section class="">
        <div class="container">
            <div class="section-title section-title--bordered">
                <h2>RELATED PRODUCTS</h2>
            </div>
            @php
                $totalRelatedProducts = count($relatedProducts);
                $breakpoint = 2500;
            @endphp
            <div class="product-slider sb-slick-slider slider-border-single-row" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 5,
                "dots":true
            }' data-slick-responsive='[
                 @for($i =0; $i<$totalRelatedProducts; $i++)
                    {"breakpoint":{{$breakpoint -= 208}}, "settings": {"slidesToShow": {{$totalRelatedProducts-$i}} },
                @endfor
                {{--data-slick-responsive='[
                {"breakpoint":1200, "settings": {"slidesToShow": 4} },
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 1} }
            ]'--}}]'>
                @foreach($relatedProducts as $productOne)
                <div class="single-slide">
                    <div class="product-card">
                        <div class="product-header">
                            <a href="" class="author">
                                {{$productOne->author}}
                            </a>
                            <h3><a href="{{asset('/product-details/'.$productOne->id)}}">{{$productOne->name}}</a></h3>
                        </div>
                        <div class="product-card--body" >
                            <div class="card-image" >
                                <img src="{{asset('image/products/'.$productOne->picture)}}" alt="">
                                <div class="hover-contents">
                                    {{--<a href="product-details.html" class="hover-image">
                                        <img src="{{asset('image/products/product-1.jpg')}}" alt="">
                                    </a>--}}
                                    <div class="hover-btns">
                                        <a href="#html" data-id="{{$productOne->id}}"
                                           id="good-{{$productOne->id}}-{{$productOne->price}}"
                                           class="single-btn buy addCart"> <i class="fas fa-shopping-basket"></i> </a>
                                        <a href="{{asset('/wishlist')}}" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="{{asset('/compare')}}" class="single-btn">
                                            <i class="fas fa-random"></i>
                                        </a>
                                        {{--<input type="button" data-id="{{$product->id}}" class="quickModalBtn" value="Modal2">--}}
                                        <button data-id="{{$productOne->id}}" class="quickModalBtn single-btn"><i class="fas fa-eye"></i></button>
                                        {{--<a href="#" data-id="{{$product->id}}" --}}{{--data-toggle="modal" data-target="#quickModal"--}}{{--
                                           class="quickModalBtn single-btn">
                                            <i class="fas fa-eye"></i>
                                        </a>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="price-block">
                                <span class="price-new">{{$productOne->price}}</span>
                                @if(isset($productOne->oldPrice))
                                    <del class="price-old">{{$productOne->oldPrice}}</del>
                                @endif
                                @if(isset($productOne->discount))
                                    <span  class="price-discount">{{$productOne->discount}}%</span>
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
                            <h3><a href="product-details.html">Turn Your BOOK Into High Machine</a>
                            </h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="{{asset('image/products/product-2.jpg')}}" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.html" class="hover-image">
                                        <img src="{{asset('image/products/product-1.jpg')}}" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.html" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="wishlist.html" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="compare.html" class="single-btn">
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
                            <h3><a href="product-details.html">3 Ways Create Better BOOK With</a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="{{asset('image/products/product-3.jpg')}}" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.html" class="hover-image">
                                        <img src="{{asset('image/products/product-2.jpg')}}" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.html" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="wishlist.html" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="compare.html" class="single-btn">
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
                            <h3><a href="product-details.html">What You Can Learn From Bill Gates</a>
                            </h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="{{asset('image/products/product-5.jpg')}}" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.html" class="hover-image">
                                        <img src="{{asset('image/products/product-4.jpg')}}" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.html" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="wishlist.html" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="compare.html" class="single-btn">
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
                            <h3><a href="product-details.html">a Half Very Simple Things You To</a></h3>
                        </div>
                        <div class="product-card--body">
                            <div class="card-image">
                                <img src="{{asset('image/products/product-6.jpg')}}" alt="">
                                <div class="hover-contents">
                                    <a href="product-details.html" class="hover-image">
                                        <img src="{{asset('image/products/product-4.jpg')}}" alt="">
                                    </a>
                                    <div class="hover-btns">
                                        <a href="cart.html" class="single-btn">
                                            <i class="fas fa-shopping-basket"></i>
                                        </a>
                                        <a href="wishlist.html" class="single-btn">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                        <a href="compare.html" class="single-btn">
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
</main>
@endsection
