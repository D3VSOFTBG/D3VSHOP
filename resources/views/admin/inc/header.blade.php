<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>D3VSHOP {{setting('TITLE_SEPERATOR')}} @yield('page_name')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/storage/img/global/' . setting('FAVICON'))}}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
      <!-- summernote -->
    <link rel="stylesheet" href="{{asset('/plugins/summernote/summernote-bs4.min.css')}}">
    <!-- Admin Style -->
    <link rel="stylesheet" href="{{asset('/assets/css/d3vsoft.css')}}">

    @if (str_contains(Request::url(), 'info'))
    <style>
        .card {
            background-color: white !important;
            color: black !important;
        }
    </style>
    @endif

    @if ($errors->any())
    <script>
        alert('{{ implode(' ', $errors->all(':message')) }}');
    </script>
    @endif

</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{asset('/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <img src="{{gravatar(Auth::user()->email)}}" height="20" width="20" class="img-circle elevation-2" alt="User Image">
                        &nbsp;
                        {{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user-tag"></i> &nbsp; {{role_name(Auth::user()->role)}}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
                            <i class="fas fa-sign-out-alt"></i> &nbsp; Logout
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('admin')}}" class="brand-link">
                <img src="{{asset('/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">D3VSHOP</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{route('admin')}}"
                                class="nav-link @if (Route::currentRouteName() == 'admin') active @endif">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item @if (str_contains(Request::url(), 'shop')) menu-open @endif">
                            <a href="#" class="nav-link @if (str_contains(Request::url(), 'shop')) active @endif">
                                <i class="nav-icon fas fa-store"></i>
                                <p>
                                    Shop
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.shop.products')}}" class="nav-link @if (Route::currentRouteName() == 'admin.shop.products') active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Products</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.shop.orders')}}" class="nav-link @if (Route::currentRouteName() == 'admin.shop.orders') active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Orders</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.shop.carriers')}}" class="nav-link @if (Route::currentRouteName() == 'admin.shop.carriers') active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Carriers</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.shop.users')}}" class="nav-link @if (Route::currentRouteName() == 'admin.shop.users') active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Users</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.shop.settings')}}" class="nav-link @if (Route::currentRouteName() == 'admin.shop.settings') active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Settings</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.shop.details')}}" class="nav-link @if (Route::currentRouteName() == 'admin.shop.details') active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Details</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.shop.packages')}}" class="nav-link @if (Route::currentRouteName() == 'admin.shop.packages') active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Packages</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item @if (str_contains(Request::url(), 'payments')) menu-open @endif">
                            <a href="#" class="nav-link @if (str_contains(Request::url(), 'payments')) active @endif">
                                <i class="nav-icon fas fa-credit-card"></i>
                                <p>
                                    Payments
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.payments.stripe')}}" class="nav-link @if (Route::currentRouteName() == 'admin.payments.stripe') active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Stripe</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item @if (str_contains(Request::url(), 'info')) menu-open @endif">
                            <a href="#" class="nav-link @if (str_contains(Request::url(), 'info')) active @endif">
                                <i class="nav-icon fas fa-info"></i>
                                <p>
                                    Info
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.info.about')}}" class="nav-link @if (Route::currentRouteName() == 'admin.info.about') active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>About</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.info.privacy')}}" class="nav-link @if (Route::currentRouteName() == 'admin.info.privacy') active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Privacy</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.info.tos')}}" class="nav-link @if (Route::currentRouteName() == 'admin.info.tos') active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TOS</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item @if (str_contains(Request::url(), 'other')) menu-open @endif">
                            <a href="#" class="nav-link @if (str_contains(Request::url(), 'other')) active @endif">
                                <i class="nav-icon fas fa-question-circle"></i>
                                <p>
                                    Other
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @foreach ($adminMenus as $adminMenu)
                                <li class="nav-item">
                                    <a href="{{url($adminMenu->link)}}" class="nav-link @if (str_contains(Request::url(), $adminMenu->link)) active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>{{$adminMenu->name}}</p>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
