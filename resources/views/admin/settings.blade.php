@section('page_name'){{ 'Settings' }}@endsection

@include('admin.inc.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <form action="{{route('admin.settings')}}" method="post">
        @csrf
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('page_name') <button type="submit" class="btn btn-primary"
                                data-toggle="tooltip" data-placement="top" title="Save"><i
                                    class="fas fa-save"></i></button></h1>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-warning card-outline">
                            <div class="card-header">
                                <h5 class="m-0">General</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="shop_name">
                                        <span class="text-danger">*</span>
                                        Shop Name</label>
                                    <input name="shop_name" id="shop_name" type="text" class="form-control" placeholder="Shop Name" value="{{env('SHOP_NAME')}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="title_seperator">
                                        <span class="text-danger">*</span>
                                        Title Seperator</label>
                                    <input name="title_seperator" id="title_seperator" type="text" class="form-control"
                                        placeholder="Title Seperator" value="{{env('TITLE_SEPERATOR')}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="theme_name">
                                        <span class="text-danger">*</span>
                                        Theme Name</label>
                                    <input name="theme_name" id="theme_name" type="text" class="form-control"
                                        placeholder="Theme Name" value="{{env('THEME_NAME')}}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-warning card-outline">
                            <div class="card-header">
                                <h5 class="m-0">Product</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>
                                        <span class="text-danger">*</span>
                                        Default Currency</label>
                                    <select name="default_currency_id" class="custom-select">
                                        @foreach ($currencies as $currency)
                                        <option value="{{$currency->id}}" @if(env('DEFAULT_CURRENCY_ID') == $currency->id) selected @endif>{{$currency->code}} ({{$currency->symbol}})</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tax_rate">
                                        <span class="text-danger">*</span>
                                        Tax Rate</label>
                                    <input name="tax_rate" id="tax_rate" type="text" class="form-control"
                                        placeholder="Tax Rate" value="{{env('TAX_RATE')}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">
                                        <span class="text-danger">*</span>
                                        Shipping Price</label>
                                    <div class="input-group">
                                        <input name="shipping_price" id="shipping_price" type="text" class="form-control"
                                        placeholder="Shipping Price" value="{{env('SHIPPING_PRICE')}}" required>                                        <div class="input-group-append">
                                            <div class="input-group-append">
                                                <span class="input-group-text"> {{$default_currency_code}} </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-warning card-outline">
                            <div class="card-header">
                                <h5 class="m-0">Customer</h5>
                            </div>
                            <div class="card-body">
                                SOON
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </form>
</div>
<!-- /.content-wrapper -->

@include('admin.inc.footer')
