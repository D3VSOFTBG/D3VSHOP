@section('page_name'){{ 'Product' }}@endsection

@include('theme1::inc.header')

<section class="item-details section">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="product-images">
                        <main id="gallery">
                            <div class="main-img">
                                @if (is_file(public_path("/storage/img/products/$product->image")))
                                <img src="{{asset("/storage/img/products/$product->image")}}" id="current" alt="#">
                                @else
                                <svg width="100%" height="100%">
                                    <rect width="100%" height="100%" fill="transparent" />
                                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle"
                                        fill="black">404</text>
                                </svg>
                                @endif
                            </div>
                        </main>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="product-info">
                        <h1 class="title">{{$product->name}}</h1>

                        <h3 class="price">
                            {{discounted_price($product->price, $product->discount)}}&nbsp;{{$default_currency_code}}
                            @if (if_discounted($product->discount))
                            <span class="discount-price">{{$product->price}}&nbsp;{{$default_currency_code}}</span>
                            @endif
                        </h3>

                        <p class="info-text">{{$product->description}}</p>

                        <div class="bottom-content">
                            <form action="{{route('cart.add')}}" method="post">
                                @csrf

                                <input type="hidden" name="id" value="{{$product->id}}">
                                <div class="row mb-2">
                                    <div class="col">
                                        <input type="number" class="form-control" name="quantity" id="quantity"
                                            value="1">
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary w-100">Add to Cart</button>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-primary w-100" data-bs-toggle="modal"
                                        data-bs-target="#Details">Details</button>
                                    <div class="modal fade" id="Details" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="m-0 table table-bordered">
                                                        @if ($product->brand)
                                                        <tr>
                                                            <td>
                                                                Brand
                                                            </td>
                                                            <td>
                                                                {{$product->brand}}
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        <tr>
                                                            <td>
                                                                SKU
                                                            </td>
                                                            <td>
                                                                {{$product->sku}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Serial number
                                                            </td>
                                                            <td>
                                                                {{$product->serial_number}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Quantity
                                                            </td>
                                                            <td>
                                                                {{$product->quantity}}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('theme1::inc.footer')
