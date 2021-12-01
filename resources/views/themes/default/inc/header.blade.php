<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>{{env('SHOP_NAME')}} {{env('TITLE_SEPERATOR')}} @yield('page_name')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/themes/{{env('THEME_NAME')}}/assets/images/favicon.ico">

    <!-- font-awesome CSS -->
    <link rel="stylesheet" type="text/css" href="/themes/{{env('THEME_NAME')}}/assets/css/font-awesome.css">

    <!-- animate CSS -->
    <link rel="stylesheet" type="text/css" href="/themes/{{env('THEME_NAME')}}/assets/css/animate.css">

    <!-- slick CSS -->
    <link rel="stylesheet" type="text/css" href="/themes/{{env('THEME_NAME')}}/assets/css/slick.css">

    <!--magnific-popup CSS -->
    <link rel="stylesheet" type="text/css" href="/themes/{{env('THEME_NAME')}}/assets/css/magnific-popup.css">


    <!-- main CSS -->
    <link rel="stylesheet" type="text/css" href="/themes/{{env('THEME_NAME')}}/assets/css/style.css">

    <!-- google font CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
</head>

<body @if (Route::current()->getName() == 'home') class="home" @endif>
    <div class="site-wrapper">

        <!-- =====================================
	    	==== Start header -->
        <header class="header drank">
            <div class="topbar">
                <div class="container top-bar">
                    <div class="top-bar__left">
                        WELCOME TO <a href="#">{{env('APP_NAME')}}</a>
                    </div>
                    <div class="top-bar__right">
                        <div class="header-currency item-dropdown">
                            CURRENCY
                            <a href="#" class="top-bar__item">USD
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="content-dropdown">
                                <li><a href="#"><span class="symbol">€</span>EUR</a></li>
                                <li class="active"><a href="#"><span class="symbol">$</span>USD</a></li>
                                <li><a href="#"><span class="symbol">£</span>GBP</a></li>
                            </ul>
                        </div>
                        <div class="header-account">
                            @if (Auth::check())
                            {{Auth::user()->name}} <small><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">(LOGOUT)</a></small>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @else
                            <a href="{{route('login')}}">LOGIN</a>
                            OR
                            <a href="{{route('register')}}">REGISTER</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="header_container" style="background:url(/themes/{{env('THEME_NAME')}}/assets/images/bg_header.jpg) repeat">

                <!-- header-desktop -->
                <div class="header-menu  header-desktop">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                <a class="logo" href="{{route('home')}}">
                                    <img src="/themes/{{env('THEME_NAME')}}/assets/images/logo.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-10 header-menu-main">
                                <div class="site-header d-flex justify-content-between align-items-center">
                                    <div class="site-header__search">
                                        <form method="get" class="searchform" action="#">
                                            <div class="wiget-search input-group">
                                                <input name="s" maxlength="40" class="form-control input-search"
                                                    type="text" size="20" placeholder="Search entire store here...">
                                                <span class="input-group-addon input-large btn-search">
                                                    <span class="fa fa-search"></span>
                                                    <input type="submit" class="fa" value="">
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- cart -->
                                    <div class="site-header__icon  d-flex justify-content-between align-items-center">
                                        <div class="features_icon">
                                            <div class="features_icon__images">
                                                <img src="/themes/{{env('THEME_NAME')}}/assets/images/icon_1.png" alt="">
                                            </div>
                                            <div class="features_icon__description">
                                                <h4>CUSTOMER SUPPORT</h4>
                                                <div>
                                                    1800-888-99-5555
                                                </div>
                                            </div>
                                        </div>
                                        <div class="features_icon">
                                            <div class="features_icon__images">
                                                <img src="/themes/{{env('THEME_NAME')}}/assets/images/icon_2.png" alt="">
                                            </div>
                                            <div class="features_icon__description">
                                                <h4>CONTACT US</h4>
                                                <div>
                                                    info@example.com
                                                </div>
                                            </div>
                                        </div>
                                        <div class="site-header__cart item-dropdown">
                                            <div class="features_icon">
                                                <div class="features_icon__images">
                                                    <img src="/themes/{{env('THEME_NAME')}}/assets/images/icon_3.png" alt="">
                                                </div>
                                                <div class="features_icon__description">
                                                    <h4>MY CART <span class="cartcount">3(ITEMS)</span></h4>
                                                    <div>
                                                        <span class="cartcost">$129.58</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget_shopping_cart_content  content-dropdown">
                                                <div class="cart_list">
                                                    <div class="media widget-product">
                                                        <div class="media-left">
                                                            <a href="product_single.html" class="image pull-left">
                                                                <img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_1.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cart-main-content media-body">
                                                            <h3 class="name">
                                                                <a href="product_single.html">
                                                                    Sport Standard edition
                                                                </a>
                                                            </h3>
                                                            <p class="cart-item">
                                                                <span class="quantity">2 × <span
                                                                        class="price-amount amount"><span
                                                                            class="price-currencySymbol">$</span>100.00</span></span>
                                                            </p>
                                                            <a href="#" class="remove" title="Remove this item">×</a>
                                                        </div>
                                                    </div>
                                                    <div class="media widget-product">
                                                        <div class="media-left">
                                                            <a href="product_single.html" class="image pull-left">
                                                                <img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_2.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cart-main-content media-body">
                                                            <h3 class="name">
                                                                <a href="product_single.html">
                                                                    Casual Premium edition
                                                                </a>
                                                            </h3>
                                                            <p class="cart-item">
                                                                <span class="quantity">1× <span
                                                                        class="price-amount amount"><span
                                                                            class="price-currencySymbol">$</span>50.00</span></span>
                                                            </p>
                                                            <a href="#" class="remove" title="Remove this item">×</a>
                                                        </div>
                                                    </div>
                                                    <div class="media widget-product">
                                                        <div class="media-left">
                                                            <a href="product_single.html" class="image pull-left">
                                                                <img src="/themes/{{env('THEME_NAME')}}/assets/images/product/product_3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cart-main-content media-body">
                                                            <h3 class="name">
                                                                <a href="product_single.html">
                                                                    Gold Limited edition
                                                                </a>
                                                            </h3>
                                                            <p class="cart-item">
                                                                <span class="quantity">2 × <span
                                                                        class="price-amount amount"><span
                                                                            class="price-currencySymbol">$</span>100.00</span></span>
                                                            </p>
                                                            <a href="#" class="remove" title="Remove this item">×</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="total"><strong>Subtotal:</strong>
                                                    <span class="price-amount amount">
                                                        <span class="price-currencySymbol">$</span>450.00</span>
                                                </p>
                                                <p class="buttons clearfix">
                                                    <a href="cart.html"
                                                        class="btn view-cart btn-default btn-normal pull-right">View
                                                        Cart</a>
                                                    <a href="checkout.html"
                                                        class="btn check-out btn-primary btn-normal pull-left">Checkout</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- menu -->
                                <div class="header-main">
                                    <div class="row">
                                        <div class="header-left col-md-10">
                                            <nav id="nav" class="navbar">
                                                <!--  Main navigation  -->
                                                <ul class="main-nav nav navbar-nav navbar-right">
                                                    <li class="dropdown active">
                                                        <a href="{{route('home')}}">Home</a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="{{route('admin')}}">Admin</a>
                                                    </li>
                                                    <li class="dropdown"><a href="about.html">About</a></li>
                                                    <li class="dropdown">
                                                        <a href="#">Pages</a>
                                                        <b class="caret"></b>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="faq.html">FAQ</a></li>
                                                            <li><a href="404.html">Page 404</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="blog.html">Blog</a>
                                                        <b class="caret"></b>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="blog.html">Blog Grid</a></li>
                                                            <li><a href="blog_standard.html">Blog Standard</a></li>
                                                            <li><a href="blog_list.html">Blog List</a></li>
                                                            <li><a href="blog_list2.html">Blog List style2</a></li>
                                                            <li><a href="blog_single.html">Single Blog</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product_list_sidebar_left.html">
                                                            <span class="label_menu hot">Hot</span>
                                                            Sale
                                                        </a></li>
                                                    <li><a href="contact.html"> contact</a></li>

                                                </ul>
                                                <!-- /Main navigation -->
                                            </nav>
                                        </div>
                                        <div class="header-right col-md-2">
                                            <ul class="social">
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-google"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /header-desktop -->

                <!-- header-mobile -->
                <div class="header-mobile">
                    <div id="header" class="site-header-mobile">
                        <nav class="navigation navbar navbar-default">
                            <div class="container">
                                <div class="navbar-header">
                                    <button type="button" class="open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="{{route('home')}}"><img src="/themes/{{env('THEME_NAME')}}/assets/images/logo.png"
                                            alt=""></a>
                                </div>
                                <!-- search -->
                                <div class="search_mobile">
                                    <div class="ps-search-btn">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                    <div class="ps-search">
                                        <div class="ps-search__content">
                                            <a class="ps-search__close" href="#"><span></span></a>
                                            <h3 class="search_title">Enter your keyword</h3>
                                            <form method="get" class="searchform" action="#">
                                                <div class="wiget-search input-group">
                                                    <input name="s" maxlength="40" class="form-control input-search"
                                                        type="text" size="20" placeholder="Searching...">

                                                    <span class="input-group-addon input-large btn-search">
                                                        <span class="fa fa-search"></span>
                                                        <input type="submit" class="fa" value="">
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--end search -->
                                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-mobile">
                                    <button class="close-navbar"><i class="fa fa-close"></i></button>
                                    <ul class="nav navbar-nav small-nav">
                                        <li class="menu-item-has-children">
                                            <a href="{{route('home')}}">Home <b class="caret"></b></a>
                                            <ul class="sub-menu">
                                                <li><a href="../v_white/{{route('home')}}">Home White</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="product_grid.html">Product <b class="caret"></b></a>

                                            <ul class="sub-menu">
                                                <li><a href="product_grid.html">Product grid sidebar right</a></li>
                                                <li><a href="product_grid_sidebar_left.html">Product grid sidebar
                                                        left</a></li>
                                                <li><a href="product_list.html">Product list sidebar right</a></li>
                                                <li><a href="product_list_sidebar_left.html">Product list sidebar
                                                        left</a></li>
                                                <li><a href="product_single.html">Product single </a></li>
                                                <li><a href="product_single2.html">Product single2</a></li>
                                                <li><a href="product_single_no_sidebar.html">Product single Full</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="about.html">About</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="faq.html">Pages<b class="caret"></b></a>

                                            <ul class="sub-menu">
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="404.html">Page 404</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="blog.html">Blog<b class="caret"></b></a>

                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog Grid</a></li>
                                                <li><a href="blog_standard.html">Blog Standard</a></li>
                                                <li><a href="blog_list.html">Blog List</a></li>
                                                <li><a href="blog_list2.html">Blog List style2</a></li>
                                                <li><a href="blog_single.html">Single Blog</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="contact.html">contact</a></li>
                                    </ul>
                                </div><!-- end of nav-collapse -->
                            </div><!-- end of container -->
                        </nav>
                    </div>
                </div>
                <!-- /header-mobile -->

            </div>

            <div class="footer-mobile-bar">
                <ul class="columns-2">
                    <li class="my-account">
                        <a class="my-accrount-footer" href="account.html">
                            <i class="fa fa-user-o" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="cart">
                        <a class="footer-cart-contents" href="cart.html" title="View your shopping cart">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            <span class="count">1</span>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <!-- End header ====
	    	======================================= -->
