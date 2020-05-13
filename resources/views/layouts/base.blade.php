<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pustok - Book Store HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/plugins.css')}}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/main.css')}}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('image/favicon.ico')}}">
</head>
<body>
@if(Auth::user())
    <div class="row">
        @include('error')
    </div>
@endif
<div class="site-wrapper" id="top">
    <div class="site-header d-none d-lg-block">
        <div class="header-middle pt--10 pb--10">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 ">
                        <a href="{{asset('/')}}" class="site-brand">
                            <img src="{{asset('image/logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <div class="header-phone ">
                            <div class="icon">
                                <i class="fas fa-headphones-alt"></i>
                            </div>
                            <div class="text">
                                <p>Free Support 24/7</p>
                                <p class="font-weight-bold number">+01-202-555-0181</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="main-navigation flex-lg-right">
                            <ul class="main-menu menu-right ">
                                @foreach($menus as $item)
                                <li class="menu-item">
                                    <a href="{{asset($item->link)}}">{{$item->name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom pb--10">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <nav class="category-nav   ">
                            <div>
                                <a href="javascript:void(0)" class="category-trigger"><i
                                        class="fa fa-bars"></i>Browse
                                    categories</a>
                                <ul class="category-menu">
                                    @foreach($result as $row)

                                        @php
                                            $class = '';
                                        @endphp

                                        @foreach($result as $row2)
                                            @if($row->id === $row2->parent_id)
                                                @php
                                                    $class = 'has-children';
                                                @endphp
                                            @endif
                                        @endforeach

                                        @if($row->parent_id === 0)
                                            <li class="cat-item {{$class}}">
                                            <a href="{{asset('shop/'.$row->id)}}" data-href="{{$row->id}}">{{$row->name}}</a>
                                                @if($class !== '')
                                                    <ul class="sub-menu">
                                                @foreach($result as $row3)
                                                    @if($row->id == $row3->parent_id)
                                                        <li><a href="{{asset('shop/'.$row3->id)}}" data-href="{{$row3->id}}">{{$row3->name}}</a></li>
                                                    @endif
                                                @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endif
                                        @endforeach


                                    {{--@php
                                        //$result from VarsServiceProvider
                                        foreach($result as $row) {
                                            $class = '';
                                            foreach($result as $row2) {
                                                if($row->id === $row2->parent_id){
                                                    $class = 'has-children';
                                                }
                                            }

                                            if($row->parent_id === 0){
                                                echo '<li class="cat-item '.$class.'">';
                                                echo '<a href="shop/'.$row->id.'" data-href="'.$row->id.'">'.$row->name.'</a> ';
                                                if($class !== ''){
                                                    echo '<ul class="sub-menu">';
                                                    foreach ($result as $row3){
                                                        if($row->id == $row3->parent_id){
                                                            echo '<li><a href="shop/'.$row3->id.'" data-href="'.$row3->id.'">'.$row3->name.'</a></li>';
                                                    }
                                                }
                                                    echo '</ul>';
                                                }
                                                echo '</li>';
                                            }
                                        }
                                    @endphp--}}
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-5">
                        <div class="header-search-block">
                            <input type="text" id="searchText" name="search-text" placeholder="Search entire store here">
                            <button id="searchButtonMain" class="search-btn">Search</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="main-navigation flex-lg-right">
                            <div class="cart-widget">
                                <div class="login-block">
                                    @if(Auth()->user())
                                    <a href="{{asset('/my-account')}}" class="font-weight-bold">My account</a>
                                    @else
                                    <a href="{{asset('/login-register')}}" class="font-weight-bold">Login</a> <br>
                                    <span>or</span><a href="{{asset('/login-register')}}">Register</a>
                                    @endif
                                </div>
                                <div class="cart-block">
                                    <div class="cart-total">
                                            <span class="text-number">
                                                @php
                                                $itemsInCart = 0;
                                                //$totalSum = count($arr_obj);
                                                $totalSum = 0;
                                                $isMenuVisible = false;
                                                foreach ($arr_obj as $one){
                                                    if(isset($one) && ($one != null)){
                                                         $itemsInCart = count($arr_obj);
                                                         if(is_numeric($one->price)){
                                                             $totalSum += $one->price;
                                                         }
                                                         $isMenuVisible = true;
                                                    }
                                                }
                                                @endphp
                                                {{$itemsInCart}}
                                            </span>
                                        <a href="{{asset('/cart')}}"><span class="text-item">
                                            Shopping Cart
                                            </span></a>
                                        <span class="price">
                                            {{$totalSum}}
                                                <i class="fas fa-chevron-down"></i>

                                            </span>
                                    </div>
                                    @if($isMenuVisible)
                                    <div class="cart-dropdown-block">
                                        <div class=" single-cart-block ">
                                            {{--@if(count($arr_obj) >= 2)
                                                @for($i = 1; $i < 3;$i++)
                                                    <div class="cart-product">
                                                        <a href="{{asset('/product-details')}}" class="image">
                                                            <img src="{{asset('image/products/'.$arr_obj[$i]->picture)}}" alt="">
                                                        </a>
                                                        <div class="content">
                                                            <h3 class="title"><a href="{{asset('/product-details/'.$arr_obj[$i]->id)}}">{{$arr_obj[$i]->name}}</a>
                                                            </h3>
                                                            <p class="price"><span class="qty">1 ×</span> {{$arr_obj[$i]->price}}</p>
                                                            <button class="cross-btn"><i class="fas fa-times"></i></button>
                                                        </div>
                                                    </div>
                                                @endfor
                                                    <a href="{{asset('/cart')}}" class="btn"> ... </a>
                                            @else--}}
                                                @foreach($arr_obj as $one)
                                                    @if(isset($one) && ($one != null))
                                                        <div class="cart-product">
                                                            <a href="{{asset('/product-details/'.$one->id)}}" class="image">
                                                                <img src="{{asset('image/products/'.$one->picture)}}" alt="">
                                                            </a>
                                                            <div class="content">
                                                                <h3 class="title"><a href="{{asset('/product-details/'.$one->id)}}">{{$one->name}}</a>
                                                                </h3>
                                                                <p class="price"><span class="qty">1 ×</span> {{$one->price}}</p>
                                                                <a class="cross-btn" href="{{asset('/deleteItemFromCart/'.$one->id)}}"><i class="fas fa-times"></i></a>
                                                                {{--<button class="cross-btn"><i class="fas fa-times"></i></button>--}}
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            {{--@endif--}}

                                        </div>
                                        <div class=" single-cart-block ">
                                            <div class="btn-block">
                                                <a href="{{asset('/cart')}}" class="btn">View Cart <i
                                                        class="fas fa-chevron-right"></i></a>
                                                <a href="{{asset('/checkout')}}" class="btn btn--primary">Check Out <i
                                                        class="fas fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-mobile-menu">
        <header class="mobile-header d-block d-lg-none pt--10 pb-md--10">
            <div class="container">
                <div class="row align-items-sm-end align-items-center">
                    <div class="col-md-4 col-7">
                        <a href="{{asset('/')}}" class="site-brand">
                            <img src="{{asset('image/logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-5 order-3 order-md-2">
                        <nav class="category-nav   ">
                            <div>
                                <a href="javascript:void(0)" class="category-trigger"><i
                                        class="fa fa-bars"></i>Browse
                                    categories</a>
                                <ul class="category-menu">
                                    @php
                                        //$result from VarsServiceProvider
                                        foreach($result as $row) {
                                            $class = '';
                                            foreach($result as $row2) {
                                                if($row->id === $row2->parent_id){
                                                    $class = 'has-children';
                                                }
                                            }

                                            if($row->parent_id === 0){
                                                echo '<li class="cat-item '.$class.'">';
                                                echo '<a href="#">'.$row->name.'</a> ';
                                                if($class !== ''){
                                                    echo '<ul class="sub-menu">';
                                                    foreach ($result as $row3){
                                                        if($row->id == $row3->parent_id){
                                                            echo '<li><a href="#">'.$row3->name.'</a></li>';
                                                    }
                                                }
                                                    echo '</ul>';
                                                }
                                                echo '</li>';
                                            }
                                        }
                                    @endphp
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-3 col-5  order-md-3 text-right">
                        <div class="mobile-header-btns header-top-widget">
                            <ul class="header-links">
                                <li class="sin-link">
                                    <a href="{{asset('/cart')}}" class="cart-link link-icon"><i class="ion-bag"></i></a>
                                </li>
                                <li class="sin-link">
                                    <a href="javascript:" class="link-icon hamburgur-icon off-canvas-btn"><i
                                            class="ion-navicon"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Off Canvas Navigation Start-->
        <aside class="off-canvas-wrapper">
            <div class="btn-close-off-canvas">
                <i class="ion-android-close"></i>
            </div>
            <div class="off-canvas-inner">
                <!-- search box start -->
                <div class="search-box offcanvas">
                    <input type="text" id="searchText2" name="search-text" placeholder="Search Here">
                    <button id="searchButtonMain2" class="search-btn"><i class="ion-ios-search-strong"></i></button>
                </div>
                <!-- search box end -->
                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav class="off-canvas-nav">
                        <ul class="mobile-menu main-mobile-menu">
                            @foreach($menus as $item)
                                <li class="menu-item">
                                    <a href="{{asset($item->link)}}">{{$item->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
                <nav class="off-canvas-nav">
                    <ul class="mobile-menu menu-block-2">
                        <li class="menu-item-has-children">
                            <a href="#">Currency - USD $ <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li> <a href="cart.html">USD $</a></li>
                                <li> <a href="checkout.html">EUR €</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Lang - Eng<i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li>Eng</li>
                                <li>Ban</li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">My Account <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="">My Account</a></li>
                                <li><a href="">Order History</a></li>
                                <li><a href="">Transactions</a></li>
                                <li><a href="">Downloads</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="off-canvas-bottom">
                    <div class="contact-list mb--10">
                        <a href="" class="sin-contact"><i class="fas fa-mobile-alt"></i>(12345) 78790220</a>
                        <a href="" class="sin-contact"><i class="fas fa-envelope"></i>examle@handart.com</a>
                    </div>
                    <div class="off-canvas-social">
                        <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="single-icon"><i class="fas fa-rss"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </aside>
        <!--Off Canvas Navigation End-->
    </div>
    <div class="sticky-init fixed-header common-sticky">
        <div class="container d-none d-lg-block">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <a href="{{asset('/')}}" class="site-brand">
                        <img src="{{asset('image/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="main-navigation flex-lg-right">
                        <ul class="main-menu menu-right ">
                            @foreach($menus as $item)
                                <li class="menu-item">
                                    <a href="{{asset($item->link)}}">{{$item->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')

</div>
<!--=================================
    Brands Slider
    ===================================== -->
<section class="section-margin">
    <h2 class="sr-only">Brand Slider</h2>
    <div class="container">
        <div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow": 6
                                            }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 4} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
            <div class="single-slide">
                <img src="{{asset('image/others/brand-1.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('image/others/brand-2.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('image/others/brand-3.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('image/others/brand-4.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('image/others/brand-5.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('image/others/brand-6.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('image/others/brand-1.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('image/others/brand-2.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>
<!--=================================
    Footer Area
    ===================================== -->
<footer class="site-footer">
    <div class="container">
        <div class="row justify-content-between  section-padding">
            <div class=" col-xl-3 col-lg-4 col-sm-6">
                <div class="single-footer pb--40">
                    <div class="brand-footer footer-title">
                        <img src="{{asset('image/logo--footer.png')}}" alt="">
                    </div>
                    <div class="footer-contact">
                        <p><span class="label">Address:</span><span class="text">Example Street 98, HH2 BacHa, New
                                    York,
                                    USA</span></p>
                        <p><span class="label">Phone:</span><span class="text">+18088 234 5678</span></p>
                        <p><span class="label">Email:</span><span class="text">suport@hastech.com</span></p>
                    </div>
                </div>
            </div>
            <div class=" col-xl-3 col-lg-2 col-sm-6">
                <div class="single-footer pb--40">
                    <div class="footer-title">
                        <h3>Information</h3>
                    </div>
                    <ul class="footer-list normal-list">
                        @foreach($information as $item)
                        <li><a href="{{asset($item->link)}}">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class=" col-xl-3 col-lg-2 col-sm-6">
                <div class="single-footer pb--40">
                    <div class="footer-title">
                        <h3>Extras</h3>
                    </div>
                    <ul class="footer-list normal-list">
                        @foreach($extras as $item)
                            <li><a href="{{asset($item->link)}}">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class=" col-xl-3 col-lg-4 col-sm-6">
                <div class="footer-title">
                    <h3>Newsletter Subscribe</h3>
                </div>
                <div class="newsletter-form mb--30">
                    <form action="./php/mail.php">
                        <input type="email" class="form-control" placeholder="Enter Your Email Address Here...">
                        <button class="btn btn--primary w-100">Subscribe</button>
                    </form>
                </div>
                <div class="social-block">
                    <h3 class="title">STAY CONNECTED</h3>
                    <ul class="social-list list-inline">
                        <li class="single-social facebook"><a href=""><i class="ion ion-social-facebook"></i></a>
                        </li>
                        <li class="single-social twitter"><a href=""><i class="ion ion-social-twitter"></i></a></li>
                        <li class="single-social google"><a href=""><i
                                    class="ion ion-social-googleplus-outline"></i></a></li>
                        <li class="single-social youtube"><a href=""><i class="ion ion-social-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p class="copyright-heading">Suspendisse in auctor augue. Cras fermentum est ac fermentum tempor. Etiam
                vel
                magna volutpat, posuere eros</p>
            <a href="#" class="payment-block">
                <img src="{{asset('image/icon/payment.png')}}" alt="">
            </a>
            <p class="copyright-text">Copyright © 2019 <a href="#" class="author">Pustok</a>. All Right Reserved.
                <br>
                Design By Pustok</p>
        </div>
    </div>
</footer>
<!-- Use Minified Plugins Version For Fast Page Load -->
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/ajax-mail.js')}}"></script>
<script src="{{asset('js/jquery.cookie.js')}}"></script>
<script src="{{asset('js/bookstore.js')}}"></script>
<script src="{{asset('js/cart.js')}}"></script>
@stack('scripts')
<script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
