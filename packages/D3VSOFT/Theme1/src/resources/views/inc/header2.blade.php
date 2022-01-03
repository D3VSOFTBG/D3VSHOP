<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{env('SHOP_NAME')}} {{env('TITLE_SEPERATOR')}} @yield('page_name')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset("$theme_path/assets/img/favicon.ico")}}">

    <link rel="stylesheet" href="{{asset("$theme_path/assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("$theme_path/assets/css/templatemo.min.css")}}">
    <link rel="stylesheet" href="{{asset("$theme_path/assets/css/custom.css")}}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{asset("$theme_path/assets/css/fontawesome.min.css")}}">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="{{asset("$theme_path/assets/css/slick.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("$theme_path/assets/css/slick-theme.css")}}">
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar bg-dark navbar-light" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="mx-auto">
                <a class="btn btn-outline-warning"><i class="fas fa-search"></i> Search</a>
                <a href="{{route('cart')}}" class="btn btn-outline-warning"><i class="fas fa-shopping-cart"></i> ({{cart_count()}})</a>
            </div>
        </div>
    </nav>

    <!-- Close Top Nav -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container">
          <a class="navbar-brand text-success logo" href="{{route('home')}}">{{env('SHOP_NAME')}}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('shop')}}">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Account
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    @if (Auth::check())
                    <li>
                        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                    <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                    @endif
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
