@section('page_name'){{ 'Carriers' }}@endsection

@include('admin.inc.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('page_name')
                        <a data-toggle="modal" data-target="#create_carrier">
                            <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top"
                                title="Create">
                                <i class="fas fa-plus-circle"></i>
                            </button>
                        </a>
                    </h1>
                    <form action="{{route('admin.shop.carriers.create')}}" method="post" class="d-inline" enctype="multipart/form-data">
                        @csrf
                        <!-- Modal -->
                        <div class="modal fade" id="create_carrier" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Create carrier.</h5>
                                        <button type="button" class="close"
                                            data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="name">
                                                <span class="text-danger">*</span>
                                                Name</label>
                                            <input name="name" id="name" type="text" class="form-control"
                                                placeholder="Name" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="card dark-mode w-100">
                                                <label for="logo" class="card-header"><span
                                                        class="text-danger">*</span>
                                                    Logo</label>
                                                <div class="card-body">
                                                    <input name="logo" type="file" class="form-control-file" id="logo"
                                                        accept="image/*" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">
                                                <span class="text-danger">*</span>
                                                Description</label>
                                            <div class="input-group">
                                                <input name="description" id="description" type="text"
                                                    class="form-control" placeholder="Description" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <span class="text-danger">*</span>
                                                Status</label>
                                            <select name="status" class="custom-select">
                                                <option value="0">
                                                    No
                                                </option>
                                                <option value="1">
                                                    Yes
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <span class="text-danger">*</span>
                                                Free Shipping</label>
                                            <select name="free_shipping" class="custom-select">
                                                <option value="0">
                                                    No
                                                </option>
                                                <option value="1">
                                                    Yes
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit"
                                            class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
                            <h3 class="card-title">There are {{carrier_count()}} carriers.</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered m-0">
                                    <thead>
                                        <tr>
                                            <th class="align-middle" style="width: 0;">#</th>
                                            <th class="align-middle">Name</th>
                                            <th class="align-middle" style="width: 0;">Logo</th>
                                            <th class="align-middle">Description</th>
                                            <th class="align-middle">Status</th>
                                            <th class="align-middle">Free Shipping</th>
                                            <th class="align-middle">Created</th>
                                            <th class="align-middle">Updated</th>
                                            <th class="align-middle">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($carriers as $carrier)
                                        <tr>
                                            <td class="align-middle">
                                                {{$carrier->id}}
                                            </td>
                                            <td class="align-middle">
                                                {{$carrier->name}}
                                            </td>
                                            <td class="align-middle">
                                                <img class="w-100 h-100" src="{{asset("/storage/img/carriers/$carrier->logo")}}" alt="Logo">
                                            </td>
                                            <td class="align-middle">
                                                {{$carrier->description}}
                                            </td>
                                            <td class="align-middle">
                                                @if ($carrier->status == 1)
                                                Yes
                                                @else
                                                No
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                @if ($carrier->free_shipping == 1)
                                                Yes
                                                @else
                                                No
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                {{$carrier->created_at}}
                                            </td>
                                            <td class="align-middle">
                                                {{$carrier->updated_at}}
                                            </td>
                                            <td class="align-middle">
                                                <form action="{{route('admin.shop.carriers.delete')}}" method="post"
                                                    class="d-inline"
                                                    onclick="if(!confirm('Delete ({{$carrier->name}}).')){return false;}">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$carrier->id}}">
                                                    <button class="btn btn-danger" data-toggle="tooltip"
                                                        data-placement="top" title="Delete">
                                                        <i class="fas fa-trash"></i></button>
                                                </form>
                                                <form action="{{route('admin.shop.carriers.edit')}}" method="post" class="d-inline" enctype="multipart/form-data">
                                                    @csrf
                                                    <a data-toggle="modal" data-target="#edit_carrier_{{$carrier->id}}">
                                                        <button type="button" class="btn btn-success"
                                                            data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="fas fa-user-edit"></i></button>
                                                    </a>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="edit_carrier_{{$carrier->id}}" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit
                                                                        <strong>{{$carrier->name}}</strong>.</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id" value="{{$carrier->id}}">

                                                                    <div class="form-group">
                                                                        <label for="name">
                                                                            <span class="text-danger">*</span>
                                                                            Name</label>
                                                                        <input name="name" id="name" type="text" class="form-control"
                                                                            placeholder="Name" value="{{$carrier->name}}" required>
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <div class="card dark-mode w-100">
                                                                            <label for="logo" class="card-header"><span
                                                                                    class="text-danger">*</span>
                                                                                Logo</label>
                                                                            <div class="card-body">
                                                                                <p class="card-text">
                                                                                    <img class="w-100 h-100" src="{{asset("/storage/img/carriers/$carrier->logo")}}"
                                                                                        alt="Logo">
                                                                                </p>
                                                                                <input name="logo" type="file" class="form-control-file" id="logo"
                                                                                accept="image/*">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="description">
                                                                            <span class="text-danger">*</span>
                                                                            Description</label>
                                                                        <div class="input-group">
                                                                            <input name="description" id="description" type="text"
                                                                                class="form-control" placeholder="Description" value="{{$carrier->description}}" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>
                                                                            <span class="text-danger">*</span>
                                                                            Status</label>
                                                                        <select name="status" class="custom-select">
                                                                            <option value="0" @if ($carrier->status == 0) selected @endif>
                                                                                No
                                                                            </option>
                                                                            <option value="1" @if ($carrier->status == 1) selected @endif>
                                                                                Yes
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>
                                                                            <span class="text-danger">*</span>
                                                                            Free Shipping</label>
                                                                        <select name="free_shipping" class="custom-select">
                                                                            <option value="0" @if ($carrier->free_shipping == 0) selected @endif>
                                                                                No
                                                                            </option>
                                                                            <option value="1" @if ($carrier->free_shipping == 1) selected @endif>
                                                                                Yes
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Submit</button>
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
                            {{ $carriers->links() }}
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
