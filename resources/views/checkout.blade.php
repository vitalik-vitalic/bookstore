@extends('layouts.base')
@section('content')
    <section class="breadcrumb-section">
        <h2 class="sr-only">Site Breadcrumb</h2>
        <div class="container">
            <div class="breadcrumb-contents">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <main id="content" class="page-section inner-page-sec-padding-bottom space-db--20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Checkout Form s-->
                    <form id="checkoutForm" method="post" action="{{asset('/checkout/'.Auth::user()->id)}}">
                        {{--Генерация токена--}}
                        {!! csrf_field() !!}
                    <div class="checkout-form">
                        <div class="row row-40">
                            <div class="col-12">
                                <h1 class="quick-title">Checkout</h1>
                                <!-- Slide Down Trigger  -->
                                {{--<div class="checkout-quick-box">
                                    <p><i class="far fa-sticky-note"></i>Returning customer? <a href="javascript:"
                                                                                                class="slide-trigger" data-target="#quick-login">Click
                                            here to login</a></p>
                                </div>--}}
                                <!-- Slide Down Blox ==> Login Box  -->
                                {{--<div class="checkout-slidedown-box" id="quick-login">
                                    <form action="./">
                                        <div class="quick-login-form">
                                            <p>If you have shopped with us before, please enter your details in the
                                                boxes below. If you are a new
                                                customer
                                                please
                                                proceed to the Billing & Shipping section.</p>
                                            <div class="form-group">
                                                <label for="quick-user">Username or email *</label>
                                                <input type="text" placeholder="" id="quick-user">
                                            </div>
                                            <div class="form-group">
                                                <label for="quick-pass">Password *</label>
                                                <input type="text" placeholder="" id="quick-pass">
                                            </div>
                                            <div class="form-group">
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <a href="#" class="btn btn-outlined   mr-3">Login</a>
                                                    <div class="d-inline-flex align-items-center">
                                                        <input type="checkbox" id="accept_terms" class="mb-0 mr-1">
                                                        <label for="accept_terms" class="mb-0">I’ve read and accept
                                                            the terms &amp; conditions</label>
                                                    </div>
                                                </div>
                                                <p><a href="javascript:" class="pass-lost mt-3">Lost your
                                                        password?</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>--}}
                                <!-- Slide Down Trigger  -->
                                {{--<div class="checkout-quick-box">
                                    <p><i class="far fa-sticky-note"></i>Have a coupon? <a href="javascript:"
                                                                                           class="slide-trigger" data-target="#quick-cupon">
                                            Click here to enter your code</a></p>
                                </div>
                                <!-- Slide Down Blox ==> Cupon Box -->
                                <div class="checkout-slidedown-box" id="quick-cupon">
                                    <form action="./">
                                        <div class="checkout_coupon">
                                            <input type="text" class="mb-0" placeholder="Coupon Code">
                                            <a href="" class="btn btn-outlined">Apply coupon</a>
                                        </div>
                                    </form>
                                </div>--}}
                            </div>
                            <div class="col-lg-7 mb--20">
                                <!-- Billing Address -->
                                <div id="billing-form" class="mb-40">
                                    <h4 class="checkout-title">Billing Address</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>First Name*</label>
                                            @if(isset($billingAddress->first_name) && ($billingAddress->first_name != null))
                                                <input type="text" name="first_name" placeholder="First Name" value="{{$billingAddress->first_name}}">
                                            @else
                                                <input type="text" name="first_name" placeholder="First Name" required>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Last Name*</label>
                                            @if(isset($billingAddress->last_name) && ($billingAddress->last_name != null))
                                                <input type="text" name="last_name" placeholder="Last Name" value="{{$billingAddress->last_name}}">
                                            @else
                                                <input type="text" name="last_name" placeholder="Last Name" required>
                                            @endif
                                        </div>
                                        <div class="col-12 mb--20">
                                            <label>Company Name</label>
                                            @if(isset($billingAddress->company_name) && ($billingAddress->company_name != null))
                                                <input type="text" name="company_name" placeholder="Company Name" value="{{$billingAddress->company_name}}">
                                            @else
                                                <input type="text" name="company_name" placeholder="Company Name">
                                            @endif
                                        </div>
                                        <div class="col-12 col-12 mb--20">
                                            <label>Country*</label>
                                            <select name="country" class="nice-select" value="asda">
                                                @php
                                                    $selected = '';
                                                @endphp
                                                @foreach($listOfAllCountries as $countrie)
                                                    @php
                                                        if(isset($billingAddress->country) &&
                                                            ($billingAddress->country != null) &&
                                                            ($billingAddress->country == $countrie->country_name)){
                                                            $selected = 'selected';
                                                        }else{
                                                            $selected = '';
                                                        }
                                                    @endphp
                                                    <option {{$selected}}>{{$countrie->country_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Email Address*</label>
                                            @if(isset($billingAddress->email_address) && ($billingAddress->email_address != null))
                                                <input name="email_address" type="email" placeholder="Email Address" value="{{$billingAddress->email_address}}" required>
                                            @else
                                                <input name="email_address" type="email" placeholder="Email Address" required>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Phone no*</label>
                                            @if(isset($billingAddress->phone_no) && ($billingAddress->phone_no != null))
                                                <input name="phone_no" type="text" placeholder="Phone number" value="{{$billingAddress->phone_no}}" required>
                                            @else
                                                <input name="phone_no" type="text" placeholder="Phone number" required>
                                            @endif
                                        </div>
                                        <div class="col-12 mb--20">
                                            <label>Address*</label>
                                            @if(isset($billingAddress->address1) && ($billingAddress->address1 != null))
                                                <input name="address1" type="text" placeholder="Address line 1" value="{{$billingAddress->address1}}" required>
                                            @else
                                                <input name="address1" type="text" placeholder="Address line 1" required>
                                            @endif
                                            @if(isset($billingAddress->address2) && ($billingAddress->address2 != null))
                                                <input name="address2" type="text" placeholder="Address line 2" value="{{$billingAddress->address2}}" required>
                                            @else
                                                <input name="address2" type="text" placeholder="Address line 2" required>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Town/City*</label>
                                            @if(isset($billingAddress->city) && ($billingAddress->city != null))
                                                <input name="city" type="text" placeholder="Town/City" value="{{$billingAddress->city}}" required>
                                            @else
                                                <input name="city" type="text" placeholder="Town/City" required>
                                            @endif
                                        </div>
                                        {{--<div class="col-md-6 col-12 mb--20">
                                            <label>State*</label>
                                            <input type="text" placeholder="State">
                                        </div>--}}
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Zip Code*</label>
                                            @if(isset($billingAddress->zip_code) && ($billingAddress->zip_code != null))
                                                <input name="zip_code" type="text" placeholder="Zip Code" value="{{$billingAddress->zip_code}}" required>
                                            @else
                                                <input name="zip_code" type="text" placeholder="Zip Code" required>
                                            @endif
                                        </div>
                                        {{--<div class="col-12 mb--20 ">
                                            <div class="block-border check-bx-wrapper">
                                                <div class="check-box">
                                                    <input type="checkbox" id="create_account">
                                                    <label for="create_account">Create an Acount?</label>
                                                </div>
                                                <div class="check-box">
                                                    <input type="checkbox" id="shiping_address" data-shipping>
                                                    <label for="shiping_address">Ship to Different Address</label>
                                                </div>
                                            </div>
                                        </div>--}}
                                    </div>
                                </div>
                                <!-- Shipping Address -->
                                <div id="shipping-form" class="mb--40">
                                    <h4 class="checkout-title">Shipping Address</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>First Name*</label>
                                            <input type="text" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Last Name*</label>
                                            <input type="text" placeholder="Last Name">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Email Address*</label>
                                            <input type="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Phone no*</label>
                                            <input type="text" placeholder="Phone number">
                                        </div>
                                        <div class="col-12 mb--20">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="Company Name">
                                        </div>
                                        <div class="col-12 mb--20">
                                            <label>Address*</label>
                                            <input type="text" placeholder="Address line 1">
                                            <input type="text" placeholder="Address line 2">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Country*</label>
                                            <select size="10" class="nice-select">
                                                @foreach($listOfAllCountries as $countrie)
                                                    <option>{{$countrie->country_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Town/City*</label>
                                            <input type="text" placeholder="Town/City">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>State*</label>
                                            <input type="text" placeholder="State">
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Zip Code*</label>
                                            <input type="text" placeholder="Zip Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="order-note-block mt--30">
                                    <label for="order-note">Order notes</label>
                                    <textarea name="order_notes" id="order-note" cols="30" rows="10" class="order-note"
                                              placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <!-- Cart Total -->
                                    <div class="col-12">
                                        <div class="checkout-cart-total">
                                            <h2 class="checkout-title">YOUR ORDER</h2>
                                            <h4>Product <span>Total</span></h4>
                                            @php
                                                $totalSum = 0.0;
                                            @endphp
                                            <ul>
                                                @foreach($arr_obj as $one)
                                                    @if(isset($one) && ($one != null))
                                                        @php
                                                            if(is_numeric($one->price)){
                                                                $totalSum += $one->price;
                                                            }
                                                        @endphp
                                                <li><span class="left" data-id="{{$one->id}}">{{$one->name}}</span> <span
                                                        class="right">{{$one->price}}</span></li>
                                                {{--<li><span class="left">Auctor gravida pellentesque X 02 </span><span
                                                        class="right">$50.00</span></li>
                                                <li><span class="left">Condimentum posuere consectetur X 01</span>
                                                    <span class="right">$29.00</span></li>
                                                <li><span class="left">Habitasse dictumst elementum X 01</span>
                                                    <span class="right">$10.00</span></li>--}}
                                                    @endif
                                                @endforeach
                                            </ul>
                                            {{--<p>Sub Total <span></span></p>--}}
                                            {{--<p>Shipping Fee <span></span></p>--}}
                                            <h4>Grand Total <span>{{$totalSum}}</span></h4>
                                            {{--<div class="method-notice mt--25">
                                                <article>
                                                    <h3 class="d-none sr-only">blog-article</h3>
                                                    Sorry, it seems that there are no available payment methods for
                                                    your state. Please contact us if you
                                                    require
                                                    assistance
                                                    or wish to make alternate arrangements.
                                                </article>
                                            </div>--}}
                                            {{--<div class="term-block">
                                                <input type="checkbox" id="accept_terms2">
                                                <label for="accept_terms2">I’ve read and accept the terms &
                                                    conditions</label>
                                            </div>--}}
                                            <button type="submit" class="place-order w-100">Place order</button>
                                            {{--<button class="place-order w-100">Place order</button>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
