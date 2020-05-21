<!-- Modal -->
{{--<div>--}}
    {{--Product Id is - {{$productDetail->id}}--}}
<script src="{{asset('js/cart.js')}}"></script>
    <div class="product-details-modal">
        <div class="row">
            <div class="col-lg-5">
                <div class="single-slide">
                    <img src="{{asset('image/products/'.$productDetail->picture)}}" alt="">
                </div>
                {{--<!-- Product Details Slider Big Image-->
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
                </div>--}}
                <!-- Product Details Slider Nav -->
                {{--<div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
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
                </div>--}}
            </div>
            <div class="col-lg-7 mt--30 mt-lg--30">
                <div class="product-details-info pl-lg--30 ">
                    {{--<p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>--}}
                    <h3 class="product-title"><a href="{{asset('/product-details/'.$productDetail->id)}}">{{$productDetail->name}}</a></h3>
                    <ul class="list-unstyled">
                        <li>Статус: <span class="list-value"> {{$productDetail->status}}</span></li>
                        <li>Автор: <span class="list-value"> {{$productDetail->author}}</span></li>
                        <li>Издательство: <span class="list-value"> {{$productDetail->publisher}}</span></li>
                        <li>Год: <span class="list-value"> {{$productDetail->year}}</span></li>
                        <li>Страниц: <span class="list-value"> {{$productDetail->pages}}</span></li>
                        <li>ISBN: <span class="list-value"> {{$productDetail->isbn}}</span></li>
                        <li>Вес: <span class="list-value"> {{$productDetail->weight}}</span></li>
                    </ul>
                    <div class="price-block">
                        <span class="price-new">{{$productDetail->price}}</span>
                        @if(isset($productDetail->oldPrice))
                            <del class="price-old">{{$productDetail->oldPrice}}</del>
                        @endif
                        @if(isset($productDetail->discount) && ($productDetail->finaldate > date("Y-m-d H:i:s")))
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
                            <a href="{{asset('/product-details/'.$productDetail->id)}}">({{count($productReviews)}} Reviews)</a> {{--<span>|</span>--}}
                            {{--<a href="">Write a review</a>--}}
                        </div>
                    </div>
                    {{--<div class="rating-widget">
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
                    </div>--}}
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
                            {{--<a href="#html" data-id="{{$productDetail->id}}" id="good-{{$productDetail->id}}-{{$productDetail->price}}" class="btn btn-outlined--primary buy addCart"><span class="plus-icon">+</span>Add to
                                Cart</a>--}}
                            <a href="" data-id="{{$productDetail->id}}" id="good-{{$productDetail->id}}-{{$productDetail->price}}" class="btn btn-outlined--primary buy addCart"><span
                                    class="plus-icon">+</span>Add to Cart</a>
                        </div>
                    </div>
                    {{--<div class="compare-wishlist-row">
                        <a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                        <a href="" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    {{--<div class="modal-footer">
        <div class="widget-social-share">
            <span class="widget-label">Share:</span>
            <div class="modal-social-share">
                <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
            </div>
        </div>
    </div>--}}
{{--</div>--}}
{{--<div class="modal fade modal-quick-view show" id="quickModal" tabindex="-1" role="dialog"
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
                                <p>Long printed dress with thin adjustable straps. V-neckline and wiring
                                    under the Dust with ruffles at the bottom
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
</div>--}}
