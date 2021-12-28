@section('page_name'){{ 'Cart' }}@endsection

@include('themes.default.inc.header')

<!-- Start Content -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <table class="table">
                <tr>
                    <th class="align-middle">
                        Name
                    </th>
                    <th class="align-middle">
                        Price
                    </th>
                    <th class="align-middle">
                        Quantity
                    </th>
                    <th class="align-middle">
                        Total
                    </th>
                </tr>
                @if (session()->has('cart'))
                    @foreach (session()->get('cart') as $cart)
                        <tr>
                            <td class="align-middle">
                                {{$cart['name']}}
                            </td>
                            <td class="align-middle">
                                @if (if_discounted($cart['discount']))
                                <del>{{$cart['price']}}</del>
                                ({{discounted_price($cart['price'], $cart['discount'])}})
                                @else
                                {{$cart['price']}}
                                @endif
                                <strong>{{$default_currency_code}}</strong>
                            </td>
                            <td class="align-middle" style="width: 0;">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input class="form-control" type="number" name="" id="" value="{{$cart['quantity']}}">
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">
                                {{discounted_price($cart['price'], $cart['discount']) * $cart['quantity']}}
                                <strong>{{$default_currency_code}}</strong>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="text-center">
                            Your cart is empty.
                        </td>
                    </tr>
                @endif
            </table>
        </div>
        <div class="col-lg-4">
            <table class="table">
                <tr>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>
                        {{cart_count()}}
                    </td>
                    <td>
                        {{$cart_total_sum}}
                        <strong>{{$default_currency_code}}</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="btn btn-primary w-100">Update</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="btn btn-primary w-100">Buy</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

@include('themes.default.inc.footer')
