@extends('layouts.base')
@section('content')
<section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
        <div class="breadcrumb-contents">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<main class="inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-2">
                <div class="shop-toolbar with-sidebar mb--30">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <!-- Product View Mode -->
                            <div class="product-view-mode">
                                <a href="#" class="sorting-btn active" data-target="grid"><i
                                        class="fas fa-th"></i></a>
                                <a href="#" class="sorting-btn" data-target="grid-four">
											<span class="grid-four-icon">
												<i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
											</span>
                                </a>
                                <a href="#" class="sorting-btn" data-target="list "><i
                                        class="fas fa-list"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6  mt--10 mt-sm--0">
									<span class="toolbar-status">
										Showing {{$products->firstItem()}} to
                                        @if($products->lastPage() == $products->currentPage())
                                            {{($products->total() - $products->firstItem()) + $products->firstItem()}}
                                        @else
                                            {{($products->firstItem() + $products->perPage()) - 1}}
                                        @endif
                                            of {{$products->total()}} ({{$products->lastpage()}} Pages)
									</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">
                            <div class="sorting-selection">
                                <span>Show:</span>
                                @php
                                    $optionsValuesArray = [3,5,9,10,12];
                                @endphp
                                <select id="recOnPageSelect" class="form-control nice-select sort-select">
                                    @foreach($optionsValuesArray as $optionValue)
                                        @php
                                            $selectedValue = ''
                                        @endphp
                                        @if((isset($_COOKIE['rec_in_page'])) &&
                                            ($_COOKIE['rec_in_page'] != null) &&
                                            ($optionValue == $_COOKIE['rec_in_page']))
                                            @php
                                                $selectedValue = 'selected'
                                            @endphp
                                        {{--@elseif($optionValue == 9)
                                            @php
                                                $selectedValue = 'selected'
                                            @endphp--}}
                                        @endif
                                            <option {{$selectedValue}}>{{$optionValue}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
                            <div class="sorting-selection">
                                <span>Sort By:</span>
                                <select id="sortSelect" class="form-control nice-select sort-select mr-0">
                                    <option value="defaultSorting" >Default Sorting</option>
                                    <option value="A-Z">Sort
                                        By:Name (A - Z)</option>
                                    <option value="Z-A">Sort
                                        By:Name (Z - A)</option>
                                    <option value="Low->High">Sort
                                        By:Price (Low &gt; High)</option>
                                    <option value="High->Low">Sort
                                        By:Price (High &gt; Low)</option>
                                    <option value="HighestRating">Sort
                                        By:Rating (Highest)</option>
                                    <option value="LowestRating">Sort
                                        By:Rating (Lowest)</option>
                                    {{--<option value="">Sort
                                        By:Model (A - Z)</option>
                                    <option value="">Sort
                                        By:Model (Z - A)</option>--}}
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-toolbar d-none">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <!-- Product View Mode -->
                            <div class="product-view-mode">
                                <a href="#" class="sorting-btn active" data-target="grid"><i
                                        class="fas fa-th"></i></a>
                                <a href="#" class="sorting-btn" data-target="grid-four">
											<span class="grid-four-icon">
												<i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
											</span>
                                </a>
                                <a href="#" class="sorting-btn" data-target="list "><i
                                        class="fas fa-list"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-4 col-sm-6  mt--10 mt-sm--0">
									<span class="toolbar-status">
										Showing 1 to 9 of 14 ({{$products->lastpage()}} Pages)
									</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6  mt--10 mt-md--0">
                            <div class="sorting-selection">
                                <span>Show:</span>
                                <select id="recOnPageSelect" class="form-control nice-select sort-select">
                                    <option value="" selected="selected">3</option>
                                    <option value="">9</option>
                                    <option value="">5</option>
                                    <option value="">10</option>
                                    <option value="">12</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
                            <div class="sorting-selection">
                                <span>Sort By:</span>
                                <select class="form-control nice-select sort-select mr-0">
                                    <option value="" selected="selected">Default Sorting</option>
                                    <option value="">Sort
                                        By:Name (A - Z)</option>
                                    <option value="">Sort
                                        By:Name (Z - A)</option>
                                    <option value="">Sort
                                        By:Price (Low &gt; High)</option>
                                    <option value="">Sort
                                        By:Price (High &gt; Low)</option>
                                    <option value="">Sort
                                        By:Rating (Highest)</option>
                                    <option value="">Sort
                                        By:Rating (Lowest)</option>
                                    <option value="">Sort
                                        By:Model (A - Z)</option>
                                    <option value="">Sort
                                        By:Model (Z - A)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop-product-wrap grid with-pagination row space-db--30 shop-border">
                    @foreach($products as $product)
                    <div class="col-lg-4 col-sm-6">
                        <div class="product-card">
                            <div class="product-grid-content">
                                <div class="product-header">
                                    <a href="{{asset('/searchAuthor/'.$product->author)}}" class="author">
                                        {{$product->author}}
                                    </a>
                                    <h3><a href="{{asset('/product-details/'.$product->id)}}">{{$product->name}}</a></h3>
                                </div>
                                <div class="product-card--body">
                                    <div class="card-image">
                                        <img src="{{asset('image/products/'.$product->picture)}}" alt="">
                                        <div class="hover-contents">
                                            <a href="{{asset('/product-details/'.$product->id)}}" class="hover-image">
                                                <img src="{{asset('image/products/'.$product->picture)}}" alt="">
                                            </a>
                                            <div class="hover-btns">
                                                <a href="#html" data-id="{{$product->id}}"
                                                                id="good-{{$product->id}}-{{$product->price}}"
                                                                class="single-btn buy addCart"> <i class="fas fa-shopping-basket"></i> </a>
                                                <a href="{{asset('/wishlist')}}" class="single-btn">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                                <a href="{{asset('/compare')}}" class="single-btn">
                                                    <i class="fas fa-random"></i>
                                                </a>
                                                {{--<input type="button" data-id="{{$product->id}}" class="quickModalBtn" value="Modal2">--}}
                                                <button data-id="{{$product->id}}" class="quickModalBtn single-btn"><i class="fas fa-eye"></i></button>
                                                {{--<a href="#" data-id="{{$product->id}}" --}}{{--data-toggle="modal" data-target="#quickModal"--}}{{--
                                                   class="quickModalBtn single-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-block">
                                        <span class="price-new">{{$product->price}}</span>
                                        @if(isset($product->oldPrice))
                                            <del class="price-old">{{$product->oldPrice}}</del>
                                        @endif
                                        @if(isset($product->discount) && ($product->finaldate > date("Y-m-d H:i:s")))
                                            <span  class="price-discount">{{$product->discount}}%</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-content">
                                <div class="card-image">
                                    <img src="{{asset('image/products/'.$product->picture)}}" alt="">
                                </div>
                                <div class="product-card--body">
                                    <div class="product-header">
                                        <a href="" class="author">
                                            {{$product->author}}
                                        </a>
                                        <h3><a href="{{asset('/product-details/'.$product->id)}}" tabindex="0">{{$product->name}}</a></h3>
                                    </div>
                                    <article>
                                        <h2 class="sr-only">Card List Article</h2>
                                        <p>{{$product->small_body}}</p>
                                    </article>
                                    <div class="price-block">
                                        <span class="price-new">{{$product->price}}</span>
                                        @if(isset($product->oldPrice))
                                            <del class="price-old">{{$product->oldPrice}}</del>
                                        @endif
                                        {{--<span class="price"></span>
                                        @if(isset($product->oldPrice))

                                            <del class="price-old">£91.86</del>
                                            <del class="price-old">{{$product->oldPrice}}</del>
                                        @else
                                            <del class="price-old">{{$product->price}}</del>
                                        @endif
                                        <span class="price-discount">0%</span>--}}
                                    </div>
                                    <div class="rating-block">
                                        @for($i=1;$i<=5;$i++)
                                            @if($i <= $product->rating)
                                                <span class="fas fa-star star_on"></span>
                                            @else
                                                <span class="fas fa-star "></span>
                                            @endif
                                        @endfor
                                    </div>
                                    <div class="btn-block">
                                        <a href="#html" data-id="{{$product->id}}"
                                           id="good-{{$product->id}}-{{$product->price}}"
                                           class="btn btn-outlined buy addCart"> Add To Cart </a>
                                        <a href="" class="card-link"><i class="fas fa-heart"></i> Add To
                                            Wishlist</a>
                                        <a href="" class="card-link"><i class="fas fa-random"></i> Add To
                                            Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Pagination Block -->
                <div class="row pt--30">
                    <div class="col-md-12">
                        <div class="pagination-block">
                            @include('pagination.default', ['paginator' => $products->appends(request()->input())])
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                {{--<div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
                     aria-labelledby="quickModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="product-details-modal">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <!-- Product Details Slider Big Image-->
                                        <div class="product-details-slider sb-slick-slider arrow-type-two"
                                             data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
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
                                    <div class="col-lg-7 mt--30 mt-lg--30">
                                        <div class="product-details-info pl-lg--30 ">
                                            <p class="tag-block">Tags: <a href="#">Movado</a>, <a
                                                    href="#">Omega</a></p>
                                            <h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
                                            <ul class="list-unstyled">
                                                <li>Ex Tax: <span class="list-value"> £60.24</span></li>
                                                <li>Brands: <a href="#" class="list-value font-weight-bold">
                                                        Canon</a></li>
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
                                                <p>Long printed dress with thin adjustable straps. V-neckline
                                                    and wiring under the Dust with ruffles at the bottom
                                                    of the
                                                    dress.</p>
                                            </article>
                                            <div class="add-to-cart-row">
                                                <div class="count-input-block">
                                                    <span class="widget-label">Qty</span>
                                                    <input type="number" class="form-control text-center"
                                                           value="1">
                                                </div>
                                                <div class="add-cart-btn">
                                                    <a href="" class="btn btn-outlined--primary"><span
                                                            class="plus-icon">+</span>Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="compare-wishlist-row">
                                                <a href="" class="add-link"><i class="fas fa-heart"></i>Add to
                                                    Wish List</a>
                                                <a href="" class="add-link"><i class="fas fa-random"></i>Add to
                                                    Compare</a>
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
                </div>--}}
            </div>
            <div class="col-lg-3  mt--40 mt-lg--0">
                <div class="inner-page-sidebar">
                    <!-- Accordion -->
                    <div class="single-block">
                        <h3 class="sidebar-title">Categories</h3>
                        <ul class="sidebar-menu--shop">
                            @foreach($categories as $one)
                                @php
                                    $totalProducts = 0;
                                @endphp
                                @if($one->parent_id == 0)
                                    @foreach($productsTotal as $item)
                                        @foreach($item as $key => $value)
                                        @if(($one->name == $key) && ($value !== 0))
                                            @php
                                                $totalProducts = $value;
                                            @endphp
                                        @endif
                                        @endforeach
                                    @endforeach
                                    <li><a href="{{asset('/shop/'.$one->id)}}">{{$one->name}} ({{$totalProducts}})</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <!-- Price -->
                    <div class="single-block">
                        <h3 class="sidebar-title">Fillter By Price</h3>
                        <div class="range-slider pt--30">
                            <div class="sb-range-slider"></div>
                            <div class="slider-price">
                                <p>
                                    <input type="text" id="amount" readonly="">
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Size -->
                    <div class="single-block">
                        <h3 class="sidebar-title">Publisher</h3>
                        <ul class="sidebar-menu--shop menu-type-2">
                            @foreach($publishersTotal as $key => $value)
                                @foreach($value as $m => $n)
                                    <li><a href="{{asset('/searchPublisher/'.$m)}}">{{$m}} <span>({{$n}})</span></a></li>
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                    {{--<!-- Color -->
                    <div class="single-block">
                        <h3 class="sidebar-title">Select By Color</h3>
                        <ul class="sidebar-menu--shop menu-type-2">
                            <li><a href="">Black <span>(5)</span></a></li>
                            <li><a href="">Blue <span>(6)</span></a></li>
                            <li><a href="">Brown <span>(4)</span></a></li>
                            <li><a href="">Green <span>(7)</span></a></li>
                            <li><a href="">Pink <span>(6)</span></a></li>
                            <li><a href="">Red <span>(5)</span></a></li>
                            <li><a href="">White <span>(8)</span></a></li>
                            <li><a href="">Yellow <span>(11)</span> </a></li>
                        </ul>
                    </div>--}}
                    <!-- Promotion Block -->
                    <div class="single-block">
                        <a href="" class="promo-image sidebar">
                            <img src="{{asset('image/others/home-side-promo.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
