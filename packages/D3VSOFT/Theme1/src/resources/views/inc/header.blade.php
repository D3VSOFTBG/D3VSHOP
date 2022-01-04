<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{{env('SHOP_NAME')}} {{env('TITLE_SEPERATOR')}} @yield('page_name')</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <link rel="stylesheet" href="{{asset("$theme_path/assets/css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{asset("$theme_path/assets/css/LineIcons.3.0.css")}}" />
    <link rel="stylesheet" href="{{asset("$theme_path/assets/css/tiny-slider.css")}}" />
    <link rel="stylesheet" href="{{asset("$theme_path/assets/css/glightbox.min.css")}}" />
    <link rel="stylesheet" href="{{asset("$theme_path/assets/css/main.css")}}" />
</head>

<body>

    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>


    <header class="header navbar-area">

        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <span class="text-white">Welcome to {{env('SHOP_NAME')}}.</span>
                    </div>
                </div>
            </div>
        </div>
        </div>


        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <a class="navbar-brand" href="{{route('home')}}">
                            {{env('SHOP_NAME')}}
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="navbar-cart">
                            <div class="cart-items">
                                <a href="javascript:void(0)" class="btn btn-primary">
                                    <i class="lni lni-cart"></i>
                                    <span class="total-items">({{cart_count()}})</span>
                                </a>
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>{{cart_count()}} Items</span>
                                        <a href="{{route('cart')}}">View Cart</a>
                                    </div>
                                    <ul class="shopping-list">
                                        @if (session()->has('cart'))
                                            @foreach (session()->get('cart') as $id => $cart)
                                            <li>
                                                <form action="{{route('cart.delete')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$id}}">
                                                    <button type="submit" href="#" class="remove" title="Remove this item"><i
                                                        class="lni lni-close"></i></button>
                                                </form>
                                                <div class="cart-img-head">
                                                    <a class="cart-img" href="{{url("/shop/" . $cart['slug'])}}">
                                                        @if (is_file(public_path("/storage/img/products/" . $cart['image'])))
                                                        <img src="{{asset("/storage/img/products/" . $cart['image'])}}" alt="#">
                                                        @else
                                                        <svg width="100%" height="100%">
                                                            <rect width="100%" height="100%" fill="transparent" />
                                                            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle"
                                                                fill="black">404</text>
                                                        </svg>
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h4>
                                                        <a href="{{url("/shop/" . $cart['slug'])}}">
                                                        {{$cart['name']}}</a>
                                                    </h4>
                                                    <p class="quantity">
                                                        {{$cart['quantity']}}
                                                        *
                                                        <span class="amount">
                                                            {{discounted_price($cart['price'], $cart['discount'])}}&nbsp;<strong>{{get_default_currency_code()}}</strong>
                                                        </span>
                                                    </p>
                                                </div>
                                            </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">
                                                {{$cart_total_sum}}
                                                <strong>{{get_default_currency_code()}}</strong>
                                            </span>
                                        </div>
                                        <div class="button">
                                            <a href="checkout.html" class="btn animate">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="nav-inner">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="{{route('home')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('shop')}}">Shop</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

    </header>
