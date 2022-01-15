@section('page_name'){{ 'Privacy Policy' }}@endsection

@include('admin.inc.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <form action="{{route('admin.info.privacy')}}" method="post">
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
                        <textarea name="text" id="summernote">
                            {{$info}}
                        </textarea>
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
