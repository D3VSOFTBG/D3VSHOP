@section('page_name'){{ 'Cart' }}@endsection

@include('theme1::inc.header')

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
                    <th class="align-middle">
                        Action
                    </th>
                </tr>
                @if (session()->has('cart'))
                    @foreach (session()->get('cart') as $id => $cart)
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
                            <td class="align-middle" style="width: 200px;">
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
                            <td class="align-middle">
                                {{discounted_price($cart['price'], $cart['discount']) * $cart['quantity']}}
                                <strong>{{$default_currency_code}}</strong>
                            </td>
                            <td class="align-middle">
                                <form action="{{route('cart.delete')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$id}}">
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                                </form>
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
        </form>
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
                        <button class="btn btn-success w-100">Buy</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

@include('theme1::inc.footer')
