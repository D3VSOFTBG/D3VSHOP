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
                                    <label for="webhook">
                                        Webhook</label>
                                    <input name="webhook" id="webhook" type="text" class="form-control" placeholder="Stripe Webhook" value="{{route('stripe-webhook')}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Environment</label>
                                    <select name="environment" class="custom-select">
                                        <option value="live" @if($stripe[0]['environment'] == 1) selected @endif>Live</option>
                                        <option value="test" @if($stripe[0]['environment'] == 0) selected @endif>Test</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="test_webhook_secret">
                                        Test Webhook Secret</label>
                                    <input name="test_webhook_secret" id="test_webhook_secret" type="text" class="form-control" placeholder="Test Webhook Secret" value="{{$stripe[0]['test_webhook_secret']}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="test_publishable_key">
                                        Test Publishable Key</label>
                                    <input name="test_publishable_key" id="test_publishable_key" type="text" class="form-control" placeholder="Test Publishable Key" value="{{$stripe[0]['test_publishable_key']}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="test_secret_key">
                                        Test Secret Key</label>
                                    <input name="test_secret_key" id="test_secret_key" type="text" class="form-control"
                                        placeholder="Test Secret Key" value="{{$stripe[0]['test_secret_key']}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="test_webhook_secret">
                                        Live Webhook Secret</label>
                                    <input name="live_webhook_secret" id="live_webhook_secret" type="text" class="form-control" placeholder="Live Webhook Secret" value="{{$stripe[0]['live_webhook_secret']}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="live_publishable_key">
                                        Live Publishable Key</label>
                                    <input name="live_publishable_key" id="live_publishable_key" type="text" class="form-control" placeholder="Live Publishable Key" value="{{$stripe[0]['live_publishable_key']}}" required>
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
