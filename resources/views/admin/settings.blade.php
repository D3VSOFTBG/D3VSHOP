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
                                <h5 class="m-0">General - SOON</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="shop_name">
                                        Shop Name</label>
                                    <input name="shop_name" type="text" class="form-control" placeholder="Shop Name" value="{{$settings}}">
                                </div>
                                <div class="form-group">
                                    <label for="title_seperator">
                                        Title Seperator</label>
                                    <input name="title_seperator" type="text" class="form-control"
                                        placeholder="Title Seperator" value="">
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
                                        Default Currency</label>
                                    <select name="default_currency" class="custom-select">
                                        <option value="EUR">EUR (€)</option>
                                        <option value="USD">USD ($)</option>
                                    </select>
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
