@section('page_name'){{ 'Orders' }}@endsection

@include('admin.inc.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('page_name')</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">There are {{order_count()}} orders.</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered m-0">
                                    <thead>
                                        <tr>
                                            <th class="align-middle" style="width: 0;">#</th>
                                            <th class="align-middle">Customer</th>
                                            <th class="align-middle">Total</th>
                                            <th class="align-middle">Country</th>
                                            <th class="align-middle">Created</th>
                                            <th class="align-middle">Updated</th>
                                            <th class="align-middle">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                        <tr>
                                            <td class="align-middle">
                                                {{$order->id}}
                                            </td>
                                            <td class="align-middle">
                                                {{$order->customer}}
                                            </td>
                                            <td class="align-middle">

                                                {{$order->total}}
                                                <strong>{{$currencies[$order->currency_id - 1]['code']}}</strong>
                                            </td>
                                            <td class="align-middle">
                                                {{$order->country}}
                                            </td>
                                            <td class="align-middle">
                                                {{$order->created_at}}
                                            </td>
                                            <td class="align-middle">
                                                {{$order->updated_at}}
                                            </td>
                                            <td class="align-middle">

                                                <!--INFO-->
                                                <a data-toggle="modal" data-target="#info{{$order->id}}">
                                                    <button type="button" class="btn btn-primary" data-toggle="tooltip"
                                                        data-placement="top" title="Info">
                                                        <i class="fas fa-info"></i>
                                                    </button>
                                                </a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="info{{$order->id}}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Info #<strong>{{$order->id}}</strong></h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <nav>
                                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                                      <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home{{$order->id}}" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                                                                      <a class="nav-link" id="nav-products-tab" data-toggle="tab" href="#nav-products{{$order->id}}" role="tab" aria-controls="nav-products" aria-selected="false">Products</a>
                                                                    </div>
                                                                </nav>
                                                                <div class="tab-content" id="nav-tabContent">
                                                                    <div class="tab-pane fade show active" id="nav-home{{$order->id}}" role="tabpanel" aria-labelledby="nav-home-tab">
                                                                        <table class="table m-0">
                                                                            <tr>
                                                                                <th>
                                                                                    #
                                                                                </th>
                                                                                <td>
                                                                                    {{$order->id}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    Invoice
                                                                                </th>
                                                                                <td>
                                                                                    <a href="{{url("invoice/$order->id")}}" download>Download</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    Customer
                                                                                </th>
                                                                                <td>
                                                                                    {{$order->customer}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    Total
                                                                                </th>
                                                                                <td>
                                                                                    {{$order->total}}
                                                                                    <strong>{{$currencies[$order->currency_id - 1]['code']}}</strong>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    Phone
                                                                                </th>
                                                                                <td>
                                                                                    {{$order->phone}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    Email
                                                                                </th>
                                                                                <td>
                                                                                    {{$order->email}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    Country
                                                                                </th>
                                                                                <td>
                                                                                    {{$order->country}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    City
                                                                                </th>
                                                                                <td>
                                                                                    {{$order->city}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    Address 1
                                                                                </th>
                                                                                <td>
                                                                                    {{$order->address_1}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    Address 2
                                                                                </th>
                                                                                <td>
                                                                                    {{$order->address_2}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    Postal code
                                                                                </th>
                                                                                <td>
                                                                                    {{$order->postal_code}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    Created
                                                                                </th>
                                                                                <td>
                                                                                    {{$order->created_at}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    Updated
                                                                                </th>
                                                                                <td>
                                                                                    {{$order->updated_at}}
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="nav-products{{$order->id}}" role="tabpanel" aria-labelledby="nav-products-tab">

                                                                        @foreach ($ordered_products as $op)
                                                                            @if ($op->order_id == $order->id)

                                                                                <table class="table m-0">
                                                                                    <tr class="bg-primary">
                                                                                        <th>
                                                                                            #
                                                                                        </th>
                                                                                        <td>
                                                                                            {{$op->id}}
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>
                                                                                            Name
                                                                                        </th>
                                                                                        <td>
                                                                                            {{$op->name}}
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>
                                                                                            Price
                                                                                        </th>
                                                                                        <td>
                                                                                            {{$op->price}}
                                                                                            <strong>{{$currencies[$order->currency_id - 1]['code']}}</strong>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>
                                                                                            Discount By Percent
                                                                                        </th>
                                                                                        <td>
                                                                                            {{$op->discount_by_percent}} <strong>%</strong>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>
                                                                                            Quantity
                                                                                        </th>
                                                                                        <td>
                                                                                            {{$op->quantity}}
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>
                                                                                            Serial Number
                                                                                        </th>
                                                                                        <td>
                                                                                            {{$op->serial_number}}
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>
                                                                                            SKU
                                                                                        </th>
                                                                                        <td>
                                                                                            {{$op->sku}}
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>

                                                                            @endif
                                                                        @endforeach

                                                                    </div>
                                                                  </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/INFO-->

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{ $orders->links() }}
                        </div>
                    </div><!-- /.container-fluid -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('admin.inc.footer')
