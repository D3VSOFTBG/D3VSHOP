@section('page_name'){{ 'Shop' }}@endsection

@include('theme1::inc.header')

<section class="product-grids section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">

                <div class="product-sidebar">

                    <div class="single-widget search">
                        <h3>Search Product</h3>
                        <form action="#">
                            <input type="text" placeholder="Search Here...">
                            <button type="submit"><i class="lni lni-search-alt"></i></button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-lg-9 col-12">
                <div class="product-grids-head">
                    <div class="product-grid-topbar">
                        <div class="row align-items-center">
                            <span>Shop</span>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-product">
                                <div class="product-image">
                                    @if (is_file(public_path("/storage/img/products/$product->image")))
                                    <img style="max-height: 288px;" src="{{asset("/storage/img/products/$product->image")}}" alt="#">
                                    @else
                                    <svg width="100%" height="100%">
                                        <rect width="100%" height="100%" fill="transparent"/>
                                        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="black">404</text>
                                    </svg>
                                    @endif
                                    <div class="button">
                                        <a href="#" class="btn"><i class="lni lni-cart"></i>
                                            Add to Cart</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4 class="title">
                                        <a href="{{url("/shop/$product->slug")}}">{{$product->name}}</a>
                                    </h4>
                                    <div class="price">
                                        <span>{{discounted_price($product->price, $product->discount)}}&nbsp;{{$default_currency_code}}</span>
                                        @if (if_discounted($product->discount))
                                        <span class="discount-price">{{$product->price}}&nbsp;{{$default_currency_code}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12">
                            {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('theme1::inc.footer')
