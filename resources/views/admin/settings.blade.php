@section('page_name'){{ 'Settings' }}@endsection

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
                                    Shop Name</label>
                                <input name="shop_name" type="text" class="form-control" placeholder="Shop Name">
                            </div>
                            <div class="form-group">
                                <label for="title_seperator">
                                    Title Seperator</label>
                                <input name="title_seperator" type="text" class="form-control"
                                    placeholder="Title Seperator">
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
                                <label for="default_currency">
                                    Default Currency</label>
                                <input name="default_currency" type="text" class="form-control" placeholder="Default Currency">
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
                            <p class="card-text">

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('admin.inc.footer')
