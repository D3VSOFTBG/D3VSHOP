@section('page_name'){{ 'Cart' }}@endsection

@include('main::inc.header')

<section class="shopping-cart section">
    <div class="container">
        <div class="table-responsive">
            <table class="m-0 table rounded" style="background-color: #fff;">
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
                                        <input type="submit" class="btn btn-primary" name="operation" value="-" @if ($cart['quantity'] <=1) disabled @endif />
                                        <input class="form-control text-center" type="number"
                                            value="{{$cart['quantity']}}" readonly />
                                        <input type="submit" class="btn btn-primary" name="operation" value="+" />
                                    </div>
                                </form>
                            </div>
                        </td>
                        <td class="align-middle text-center">
                            <button class="btn btn-danger" href="javascript:void(0)"><i
                                    class="lni lni-close"></i></button>
                        </td>
                    </tr>
                    @endforeach
                @endif
                @if (empty(cart_count()))
                <tr>
                    <td colspan="5" class="text-center">
                        Your cart is empty.
                    </td>
                </tr>
                @endif
            </table>
            <br/>
            <table class="m-0 table rounded" style="background-color: #fff;">
                <tr>
                    <th class="align-middle text-center">
                        Quantity
                    </th>
                    <th class="align-middle text-center">
                        Total
                    </th>
                </tr>
                <tr>
                    <td class="align-middle text-center">
                        {{cart_count()}}
                    </td>
                    <td class="align-middle text-center">
                        {{get_cart_total_sum()}}
                        <strong>{{get_default_currency_code()}}</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="button">
                            <a href="checkout.html" class="btn w-100">Checkout</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</section>

@include('main::inc.footer')
