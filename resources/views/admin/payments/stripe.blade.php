@section('page_name'){{ 'Stripe' }}@endsection

@include('admin.inc.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <form action="{{route('admin.payments.stripe')}}" method="post">
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
                    <div class="col">
                        <div class="card card-warning card-outline">
                            <div class="card-header">
                                <h5 class="m-0">Settings</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>
                                        Environment</label>
                                    <select name="environment" class="custom-select">
                                        <option value="live" @if($stripe[0]['environment'] == 1) selected @endif>Live</option>
                                        <option value="test" @if($stripe[0]['environment'] == 0) selected @endif>Test</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="test_public_key">
                                        Test Public Key</label>
                                    <input name="test_public_key" id="test_public_key" type="text" class="form-control" placeholder="Test Public Key" value="{{$stripe[0]['test_public_key']}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="test_secret_key">
                                        Test Secret Key</label>
                                    <input name="test_secret_key" id="test_secret_key" type="text" class="form-control"
                                        placeholder="Test Secret Key" value="{{$stripe[0]['test_secret_key']}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="live_public_key">
                                        Live Public Key</label>
                                    <input name="live_public_key" id="live_public_key" type="text" class="form-control" placeholder="Live Public Key" value="{{$stripe[0]['live_public_key']}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="live_secret_key">
                                        Live Secret Key</label>
                                    <input name="live_secret_key" id="live_secret_key" type="text" class="form-control"
                                        placeholder="Live Secret Key" value="{{$stripe[0]['live_secret_key']}}" required>
                                </div>
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
