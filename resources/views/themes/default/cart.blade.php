@section('page_name'){{ 'Cart' }}@endsection

@include('themes.default.inc.header')

<!-- Start Content -->
<div class="container py-5">
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                        Quantity
                    </th>
                    <th>
                        Total
                    </th>
                </tr>
                @foreach (session()->get('cart') as $cart)
                <tr>
                    <td>
                        {{$cart['name']}}
                    </td>
                    <td>
                        @if (if_discounted($cart['discount']))
                        <del>{{$cart['price']}}</del>
                        ({{discounted_price($cart['price'], $cart['discount'])}})
                        @else
                        {{$cart['price']}}
                        @endif
                        <strong>{{$default_currency_code}}</strong>
                    </td>
                    <td>
                        {{$cart['quantity']}}
                    </td>
                    <td>
                        {{discounted_price($cart['price'], $cart['discount']) * $cart['quantity']}}
                        <strong>{{$default_currency_code}}</strong>
                    </td>
                </tr>
                @endforeach
            </table>

            <table class="table table-bordered w-25" style="float:right">
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
                        <button class="btn btn-primary w-100">Buy</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

@include('themes.default.inc.footer')