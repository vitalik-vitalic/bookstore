@extends('layouts.base')
@section('content')
    <section class="breadcrumb-section">
        <h2 class="sr-only">Site Breadcrumb</h2>
        <div class="container">
            <div class="breadcrumb-contents">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Login</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!--=============================================
=            Login Register page content         =
=============================================-->
    <main class="page-section inner-page-sec-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb--30 mb-lg--0">
                    <!-- Login Form s-->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="login-form">
                            <h4 class="login-title">New Customer</h4>
                            <p><span class="font-weight-bold">I am a new customer</span></p>
                            <div class="row">
                                <div class="col-md-12 col-12 mb--15">
                                    <label for="email">Full Name</label>
                                    <input class="mb-0 form-control @error('name') is-invalid @enderror" type="text" id="name"
                                           placeholder="Enter your full name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12 mb--20">
                                    <label for="email">Email</label>
                                    <input class="mb-0 form-control @error('email') is-invalid @enderror" type="email" id="email" placeholder="Enter Your Email Address Here.." name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb--20">
                                    <label for="password">Password</label>
                                    <input class="mb-0 form-control @error('password') is-invalid @enderror" type="password" id="password" placeholder="Enter your password" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb--20">
                                    <label for="password">Repeat Password</label>
                                    <input class="mb-0 form-control" type="password" id="password-confirm" placeholder="Repeat your password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-outlined">
                                        {{ __('Register') }}
                                    </button>
                                    {{--<a href="#" class="btn btn-outlined">Register</a>--}}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="login-form">
                            <h4 class="login-title">Returning Customer</h4>
                            <p><span class="font-weight-bold">I am a returning customer</span></p>
                            <div class="row">
                                <div class="col-md-12 col-12 mb--15">
                                    <label for="email">Enter your email address here...</label>
                                    <input class="mb-0 form-control @error('email') is-invalid @enderror" type="email" id="email"
                                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter you email address here...">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12 mb--20">
                                    <label for="password">Password</label>
                                    <input class="mb-0 form-control @error('password') is-invalid @enderror" type="password" name="password" id="login-password" placeholder="Enter your password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                {{--<div class="col-md-12">
                                    <a href="{{ route('login') }}" class="btn btn-outlined">Login</a>
                                </div>--}}
                                <button type="submit" class="btn btn-outlined">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
