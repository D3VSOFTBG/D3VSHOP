@section('page_name'){{ 'Products' }}@endsection

@include('admin.inc.header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('page_name')
                        <a data-toggle="modal" data-target="#create_product">
                            <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top"
                                title="Create">
                                <i class="fas fa-plus-circle"></i>
                            </button>
                        </a>
                    </h1>
                    <form action="{{route('admin.shop.products.create')}}" method="post" class="d-inline" enctype="multipart/form-data">
                        @csrf
                        <!-- Modal -->
                        <div class="modal fade" id="create_product" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Create product.</h5>
                                        <button type="button" class="close"
                                            data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="card dark-mode w-100">
                                                <label for="image" class="card-header"><span
                                                        class="text-danger">*</span>
                                                    Image</label>
                                                <div class="card-body">
                                                    <input name="image" type="file" class="form-control-file" id="image"
                                                        accept="image/*" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="name">
                                                <span class="text-danger">*</span>
                                                Name</label>
                                            <input name="name" id="name" type="text" class="form-control"
                                                placeholder="Name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">
                                                <span class="text-danger">*</span>
                                                Price</label>
                                            <div class="input-group">
                                                <input name="price" id="price" type="text"
                                                    class="form-control" placeholder="Price" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"> {{$default_currency_code}} </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="discount_by_percent">Discount By Percent</label>
                                            <div class="input-group">
                                                <input name="discount_by_percent" id="discount_by_percent" type="number"
                                                    class="form-control" placeholder="Discount By Percent" min="0" max="100">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"> % </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="quantity">
                                                <span class="text-danger">*</span>
                                                Quantity</label>
                                            <input name="quantity" id="quantity" type="text" class="form-control"
                                                placeholder="Quantity" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="serial_number">
                                                <span class="text-danger">*</span>
                                                Serial Number</label>
                                            <input name="serial_number" id="serial_number" type="text" class="form-control"
                                                placeholder="Serial Number" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="sku">
                                                <span class="text-danger">*</span>
                                                SKU</label>
                                            <input name="sku" id="sku" type="text" class="form-control"
                                                placeholder="SKU" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="brand">
                                                Brand</label>
                                            <input name="brand" id="brand" type="text" class="form-control"
                                                placeholder="Brand">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" id="description" rows="3" placeholder="Description"></textarea>
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
                            <h3 class="card-title">There are {{product_count()}} products.</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered m-0">
                                    <thead>
                                        <tr>
                                            <th class="align-middle" style="width: 0;">#</th>
                                            <th class="align-middle" style="width: 0;">Image</th>
                                            <th class="align-middle">Name</th>
                                            <th class="align-middle">Price</th>
                                            <th class="align-middle">Discount By Percent</th>
                                            <th class="align-middle">Quantity</th>
                                            <th class="align-middle">Created</th>
                                            <th class="align-middle">Updated</th>
                                            <th class="align-middle">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                        <tr>
                                            <td class="align-middle">
                                                {{$product->id}}
                                            </td>
                                            <td class="align-middle">
                                                <img class="w-100 h-100" src="{{asset("/storage/img/products/$product->image")}}" alt="Image">
                                            </td>
                                            <td class="align-middle">
                                                {{$product->name}}
                                            </td>
                                            <td class="align-middle">
                                                @if (if_discounted($product->discount_by_percent))
                                                <del>{{$product->price}}&nbsp;<strong>{{$default_currency_code}}</strong></del>
                                                {{discounted_price($product->price, $product->discount_by_percent)}}&nbsp;<strong>{{$default_currency_code}}</strong>
                                                @else
                                                {{$product->price}}&nbsp;<strong>{{$default_currency_code}}</strong>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                {{if_null($product->discount_by_percent)}} <strong>%</strong>
                                            </td>
                                            <td class="align-middle">
                                                {{$product->quantity}}
                                            </td>
                                            <td class="align-middle">
                                                {{$product->created_at}}
                                            </td>
                                            <td class="align-middle">
                                                {{$product->updated_at}}
                                            </td>
                                            <td class="align-middle">
                                                <form action="{{route('admin.shop.products.delete')}}" method="post"
                                                    class="d-inline"
                                                    onclick="if(!confirm('Delete ({{$product->name}}).')){return false;}">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$product->id}}">
                                                    <button class="btn btn-danger" data-toggle="tooltip"
                                                        data-placement="top" title="Delete">
                                                        <i class="fas fa-trash"></i></button>
                                                </form>
                                                <form action="{{route('admin.shop.products.edit')}}" method="post" class="d-inline" enctype="multipart/form-data">
                                                    @csrf
                                                    <a data-toggle="modal" data-target="#edit_product_{{$product->id}}">
                                                        <button type="button" class="btn btn-success"
                                                            data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="fas fa-user-edit"></i></button>
                                                    </a>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="edit_product_{{$product->id}}" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit
                                                                        <strong>{{$product->name}}</strong>.</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id" value="{{$product->id}}">

                                                                    <div class="input-group">
                                                                        <div class="card dark-mode w-100">
                                                                            <label for="image" class="card-header"><span
                                                                                    class="text-danger">*</span>
                                                                                Image</label>
                                                                            <div class="card-body">
                                                                                <p class="card-text">
                                                                                    <img class="w-100 h-100" src="{{asset("/storage/img/products/$product->image")}}"
                                                                                        alt="Image">
                                                                                </p>
                                                                                <input name="image" type="file" class="form-control-file" id="image"
                                                                                accept="image/*">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="name">
                                                                            <span class="text-danger">*</span>
                                                                            Name</label>
                                                                        <input name="name" id="name" type="text" class="form-control"
                                                                            placeholder="Name"
                                                                            value="{{$product->name}}" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="price">
                                                                            <span class="text-danger">*</span>
                                                                            Price</label>
                                                                        <div class="input-group">
                                                                            <input name="price" id="price" type="text"
                                                                                class="form-control" placeholder="Price"
                                                                                value="{{$product->price}}" required>
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text">{{$default_currency_code}}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="discount_by_percent">
                                                                            <span class="text-danger">*</span>
                                                                            Discount By Percent</label>
                                                                        <div class="input-group">
                                                                            <input name="discount_by_percent" id="discount_by_percent" type="number"
                                                                                class="form-control" placeholder="Discount By Percent" value="{{$product->discount_by_percent}}" min="0" max="100" required>
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text"> % </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="quantity">
                                                                            <span class="text-danger">*</span>
                                                                            Quantity</label>
                                                                        <input name="quantity" id="quantity" type="text" class="form-control"
                                                                            placeholder="Quantity"
                                                                            value="{{$product->quantity}}" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="serial_number">
                                                                            <span class="text-danger">*</span>
                                                                            Serial Number</label>
                                                                        <input name="serial_number" id="serial_number" type="text" class="form-control"
                                                                            placeholder="Serial Number"
                                                                            value="{{$product->serial_number}}" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="sku">
                                                                            <span class="text-danger">*</span>
                                                                            SKU</label>
                                                                        <input name="sku" id="sku" type="text" class="form-control"
                                                                            placeholder="SKU"
                                                                            value="{{$product->sku}}" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="brand">
                                                                            Brand</label>
                                                                        <input name="brand" id="brand" type="text" class="form-control"
                                                                            placeholder="Brand"
                                                                            value="{{$product->brand}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="description">Description</label>
                                                                        <textarea class="form-control" id="description" rows="3" placeholder="Description">{{$product->description}}</textarea>
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
                            {{ $products->links() }}
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
