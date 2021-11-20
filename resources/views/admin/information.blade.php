@section('page_name'){{ 'Information' }}@endsection

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
                <div class="col-12">
                    <div class="card card-warning card-outline">
                        <div class="card-header">
                            <h5 class="m-0">{{env('APP_NAME')}}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <strong>URL:</strong> {{env('APP_URL')}}
                                <br/>
                                <strong>Broadcast Driver:</strong> {{env('BROADCAST_DRIVER')}}
                                <br/>
                                <strong>Cache Driver:</strong> {{env('CACHE_DRIVER')}}
                                <br/>
                                <strong>Queue Connection:</strong> {{env('QUEUE_CONNECTION')}}
                                <br/>
                                <strong>Session Driver:</strong> {{env('SESSION_DRIVER')}}
                                <br/>
                                <strong>Session Lifetime:</strong> {{env('SESSION_LIFETIME')}}
                                <br/>
                                <strong>Broadcast Driver:</strong> {{env('BROADCAST_DRIVER')}}
                                <br/>
                                <strong>Mail Driver:</strong> {{env('MAIL_DRIVER')}}
                                <br/>
                                <strong>Mail Host:</strong> {{env('MAIL_HOST')}}
                                <br/>
                                <strong>Mail Port:</strong> {{env('MAIL_PORT')}}
                                <br/>
                                <strong>Mail Username:</strong> {{env('MAIL_USERNAME')}}
                                <br/>
                                <strong>Mail Encryption:</strong> {{env('MAIL_ENCRYPTION')}}
                                <br/>
                                <strong>Database Connection:</strong> {{env('DB_CONNECTION')}}
                                <br/>
                                <strong>Database Host:</strong> {{env('DB_HOST')}}
                                <br/>
                                <strong>Database Name:</strong> {{env('DB_DATABASE')}}
                                <br/>
                                <strong>Database Port:</strong> {{env('DB_PORT')}}
                                <br/>
                                <strong>Database Username:</strong> {{env('DB_USERNAME')}}
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

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

@include('admin.inc.footer')
