@section('page_name'){{ 'Cart' }}@endsection

@include('theme1::inc.header')

<section class="shopping-cart section">
    <div class="container">
        <div class="table-responsive">
            <table class="m-0 table" style="background-color: #fff;">
                <tr>
                    <th class="text-center">
                        <p>Name</p>
                    </th>
                    <th class="text-center">
                        <p>Quantity</p>
                    </th>
                    <th>
                    </th>
                </tr>
                @if (session()->has('cart'))
                @foreach (session()->get('cart') as $id => $cart)
                <tr>
                    <td class="align-middle text-center">
                        <h5 class="product-name">
                            <a href="{{url("/shop/" . $cart['slug'])}}">
                                {{$cart['name']}}
                            </a>
                            <p>
                                @if (if_discounted($cart['discount']))
                                <del>{{$cart['price']}}&nbsp;<strong>{{get_default_currency_code()}}</strong></del>
                                {{discounted_price($cart['price'], $cart['discount'])}}&nbsp;<strong>{{get_default_currency_code()}}</strong>
                                @else
                                {{$cart['price']}}&nbsp;<strong>{{get_default_currency_code()}}</strong>
                                @endif
                            </p>
                        </h5>
                    </td>
                    <td class="align-middle text-center" style="width: 200px;">
                        <div class="form-group">
                            <form action="{{route('cart.update')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$id}}">
                                <div class="input-group">
                                    <input type="submit" class="btn btn-primary" name="operation" value="-" @if ($cart['quantity'] <= 1) disabled @endif />
                                    <input class="form-control text-center" type="number" value="{{$cart['quantity']}}" readonly />
                                    <input type="submit" class="btn btn-primary" name="operation" value="+" />
                                </div>
                            </form>
                        </div>
                    </td>
                    <td class="align-middle text-center">
                        <button class="btn btn-danger" href="javascript:void(0)"><i class="lni lni-close"></i></button>
                    </td>
                </tr>
                @endforeach
                @endif
            </table>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="total-amount">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-12">
                            <div class="left">
                                <div class="coupon">
                                    <form action="#" target="_blank">
                                        <input name="Coupon" placeholder="Enter Your Coupon">
                                        <div class="button">
                                            <button class="btn">Apply Coupon</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="right">
                                <ul>
                                    <li>Cart Subtotal<span>$2560.00</span></li>
                                    <li>Shipping<span>Free</span></li>
                                    <li>You Save<span>$29.00</span></li>
                                    <li class="last">You Pay<span>$2531.00</span></li>
                                </ul>
                                <div class="button">
                                    <a href="checkout.html" class="btn">Checkout</a>
                                    <a href="product-grids.html" class="btn btn-alt">Continue shopping</a>
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
