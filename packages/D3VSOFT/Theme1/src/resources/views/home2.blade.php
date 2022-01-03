@section('page_name'){{ 'Home' }}@endsection

@include('theme::inc.header')

{{-- {{print_r(session()->get('cart', []))}} --}}

<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        @if (is_file(public_path("$theme_path/assets/img/banner_img_01.jpg")))
                        <img class="img-fluid" src="{{asset("$theme_path/assets/img/banner_img_01.jpg")}}">
                        @else
                        <svg class="img-fluid" height="800" width="800">
                            <rect width="100%" height="100%" fill="transparent"/>
                            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="black">404</text>
                        </svg>
                        @endif
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success">1</h1>
                            <h3 class="h2">2</h3>
                            <p>
                                3
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        @if (is_file(public_path("$theme_path/assets/img/banner_img_02.jpg")))
                        <img class="img-fluid" src="{{asset("$theme_path/assets/img/banner_img_02.jpg")}}">
                        @else
                        <svg class="img-fluid" height="800" width="800">
                            <rect width="100%" height="100%" fill="transparent"/>
                            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="black">404</text>
                        </svg>
                        @endif
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">1</h1>
                            <h3 class="h2">2</h3>
                            <p>
                                3
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        @if (is_file(public_path("$theme_path/assets/img/banner_img_03.jpg")))
                        <img class="img-fluid" src="{{asset("$theme_path/assets/img/banner_img_03.jpg")}}">
                        @else
                        <svg class="img-fluid" height="800" width="800">
                            <rect width="100%" height="100%" fill="transparent"/>
                            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="black">404</text>
                        </svg>
                        @endif
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1">1</h1>
                            <h3 class="h2">2</h3>
                            <p>
                                3
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
<!-- End Banner Hero -->

@include('theme::inc.footer')
