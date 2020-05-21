@extends('layouts.base')
@section('content')
<section class="breadcrumb-section">
    <h2 class="sr-only">Site Breadcrumb</h2>
    <div class="container">
        <div class="breadcrumb-contents">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">My Account</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<div class="page-section inner-page-sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <!-- My Account Tab Menu Start -->
                    <div class="col-lg-3 col-12">
                        <div class="myaccount-tab-menu nav" role="tablist">
                            <a href="#dashboad" class="active" data-toggle="tab"><i
                                    class="fas fa-tachometer-alt"></i>
                                Dashboard</a>
                            <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                            <a href="#download" data-toggle="tab"><i class="fas fa-download"></i> Download</a>
                            <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i>
                                Payment
                                Method</a>
                            <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
                                address</a>
                            <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account
                                Details</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                                {{ __('Logout') }}</a>
                        </div>
                    </div>
                    <!-- My Account Tab Menu End -->
                    <!-- My Account Tab Content Start -->
                    <div class="col-lg-9 col-12 mt--30 mt-lg--0">
                        <div class="tab-content" id="myaccountContent">
                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Dashboard</h3>
                                    <div class="welcome mb-20">
                                        <p>Hello, <strong>{{Auth::user()->name}}</strong> (If Not <strong>{{Auth::user()->name}} </strong><a href="login-register.html" class="logout">
                                                 Logout</a>)</p>
                                    </div>
                                    <p class="mb-0">From your account dashboard. you can easily check &amp; view
                                        your
                                        recent orders, manage your shipping and billing addresses and edit your
                                        password and account details.</p>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->
                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="orders" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Orders</h3>
                                    <div class="myaccount-table table-responsive text-center">
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $counter = 0;
                                            @endphp
                                            @foreach($allUserOrders as $order)
                                                @php
                                                    $counter +=1;
                                                @endphp
                                                <tr>
                                                    <td>{{$counter}}</td>
                                                    <td>{{$billingAddress[0]->first_name.' '.$billingAddress[0]->last_name}}</td>
                                                    <td>{{$order->created_at}}</td>
                                                    <td>{{$order->status}}</td>
                                                    <td>@php
                                                        $productsIds = array();
                                                        $totalPrice = 0;
                                                        $tempArray = explode( ',', $order->body );
                                                        foreach($tempArray as $item){
                                                            $tempArray2 = explode( ':', $item );
                                                            $counter2 = 0;
                                                            foreach ($tempArray2 as $item) {
                                                                $counter2 += 1;
                                                                if($counter2 == 3){
                                                                    $totalPrice +=  $item;
                                                                }

                                                                if(($counter2 == 1) && isset($item) && ($item != null)){
                                                                    array_push($productsIds,$item);
                                                                }
                                                            }
                                                        }
                                                        $productsIdsToString = implode(",", $productsIds);
                                                    @endphp
                                                    {{$totalPrice}}</td>
                                                    <td><a href="cart.html" class="btn" data-href="{{$productsIdsToString}}">View</a></td>
                                                </tr>
                                            @endforeach
                                            {{--<tr>
                                                <td>1</td>
                                                <td>Mostarizing Oil</td>
                                                <td>Aug 22, 2018</td>
                                                <td>Pending</td>
                                                <td>$45</td>
                                                <td><a href="cart.html" class="btn">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Katopeno Altuni</td>
                                                <td>July 22, 2018</td>
                                                <td>Approved</td>
                                                <td>$100</td>
                                                <td><a href="cart.html" class="btn">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Murikhete Paris</td>
                                                <td>June 12, 2017</td>
                                                <td>On Hold</td>
                                                <td>$99</td>
                                                <td><a href="cart.html" class="btn">View</a></td>
                                            </tr>--}}
                                            {{--{{$allUserOrders->links()}}--}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->
                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="download" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Downloads</h3>
                                    <div class="myaccount-table table-responsive text-center">
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Product</th>
                                                <th>Date</th>
                                                <th>Expire</th>
                                                <th>Download</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Mostarizing Oil</td>
                                                <td>Aug 22, 2018</td>
                                                <td>Yes</td>
                                                <td><a href="#" class="btn">Download File</a></td>
                                            </tr>
                                            <tr>
                                                <td>Katopeno Altuni</td>
                                                <td>Sep 12, 2018</td>
                                                <td>Never</td>
                                                <td><a href="#" class="btn">Download File</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->
                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Payment Method</h3>
                                    <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->
                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Billing Address</h3>
                                    <address>
                                        <p><strong>{{Auth::user()->name}}</strong></p>
                                        @if(isset($billingAddress[0]))
                                        <p>{{$billingAddress[0]->address1}}, <br>
                                            {{$billingAddress[0]->zip_code}}, <br>
                                            {{$billingAddress[0]->city}}</p>
                                        <p>Mobile: {{$billingAddress[0]->phone_no}}</p>
                                        @endif
                                    </address>
                                    <a href="#" class="btn btn--primary"><i class="fa fa-edit"></i>Edit
                                        Address</a>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->
                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="account-info" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Account Details</h3>
                                    <div class="account-details-form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-lg-6 col-12  mb--30">
                                                    <input id="first-name" placeholder="First Name" type="text">
                                                </div>
                                                <div class="col-lg-6 col-12  mb--30">
                                                    <input id="last-name" placeholder="Last Name" type="text">
                                                </div>
                                                <div class="col-12  mb--30">
                                                    <input id="display-name" placeholder="Display Name"
                                                           type="text" value="{{Auth::user()->name}}">
                                                </div>
                                                <div class="col-12  mb--30">
                                                    <input id="email" placeholder="Email Address" type="email" value="{{Auth::user()->email}}">
                                                </div>
                                                <div class="col-12  mb--30">
                                                    <h4>Password change</h4>
                                                </div>
                                                <div class="col-12  mb--30">
                                                    <input id="current-pwd" placeholder="Current Password"
                                                           type="password">
                                                </div>
                                                <div class="col-lg-6 col-12  mb--30">
                                                    <input id="new-pwd" placeholder="New Password"
                                                           type="password">
                                                </div>
                                                <div class="col-lg-6 col-12  mb--30">
                                                    <input id="confirm-pwd" placeholder="Confirm Password"
                                                           type="password">
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn--primary">Save Changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->
                        </div>
                    </div>
                    <!-- My Account Tab Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
