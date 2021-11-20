@section('page_name'){{ 'Users' }}@endsection

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
                            <h3 class="card-title">There are {{count($users)}} users.</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered m-0">
                                    <thead>
                                        <tr>
                                            <th style="width: 0;">#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Verified</th>
                                            <th>Role</th>
                                            <th>Registered</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td class="align-middle">
                                                {{$user->id}}
                                            </td>
                                            <td class="align-middle">
                                                {{$user->name}}
                                            </td>
                                            <td class="align-middle">
                                                {{$user->email}}
                                            </td>
                                            <td class="align-middle">
                                                {{email_verified_at($user->email_verified_at)}}
                                            </td>
                                            <td class="align-middle">
                                                {{role_name($user->role)}}
                                            </td>
                                            <td class="align-middle">
                                                {{$user->created_at}}
                                            </td>
                                            <td class="align-middle">
                                                <form action="{{route('admin.users.delete')}}" method="post"
                                                    class="d-inline" onclick="if(!confirm('Delete {{$user->name}}.')){return false;}">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$user->id}}">
                                                    <button class="btn btn-danger" data-toggle="tooltip"
                                                        data-placement="top" title="Delete">
                                                        <i class="fas fa-trash"></i></button>
                                                </form>
                                                <form action="" method="post" class="d-inline">
                                                    <a data-toggle="modal" data-target="#edit_user_{{$user->id}}">
                                                        <button type="button" class="btn btn-success"
                                                            data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="fas fa-edit"></i></button>
                                                    </a>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="edit_user_{{$user->id}}" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit {}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    ...
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Save
                                                                        changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div><!-- /.container-fluid -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

@include('admin.inc.footer')
