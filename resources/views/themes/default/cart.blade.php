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
                        {{$cart['price']}}
                    </td>
                    <td>
                        {{$cart['quantity']}}
                    </td>
                    <td>
                        {{$cart['price'] * $cart['quantity']}}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@include('themes.default.inc.footer')
