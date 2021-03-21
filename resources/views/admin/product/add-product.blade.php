@extends('admin.master')

@section('title', 'Create Product')

@section('content')
    <div class="">
        <h5 class="text-success">{{ Session::get('message') }}</h5>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">
                    <div class="x_title">
                        <h2>Create Product</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <span id="messageBag"></span>

                        <form id="addProduct" action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <label for="category_id">Category <span class="required">*</span> </label>
                                    <select name="category_id" class="form-control">
                                        <option> -- Select Category -- </option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                    <small class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : '' }}</small>
                                </div>

                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <label for="category_id">Brand <span class="required">*</span> </label>
                                    <select name="brand_id" class="form-control">
                                        <option> -- Select Brand -- </option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>{{ $brand->brand_name }}</option>
                                        @endforeach
                                    </select>
                                    <small class="text-danger">{{ $errors->has('brand_id') ? $errors->first('brand_id') : '' }}</small>
                                </div>

                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <label for="first-name">Product Name <span class="required">*</span></label>
                                    <input type="text" name="product_name" class="form-control" value="{{ old('product_name') }}">
                                    <small class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : '' }}</small>
                                </div>

                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <label for="first-name">Product Quantity <span class="required">*</span></label>
                                    <input type="number" name="product_qty" class="form-control" value="{{ old('product_qty') }}">
                                    <small class="text-danger">{{ $errors->has('product_qty') ? $errors->first('product_qty') : '' }}</small>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <label for="product_price">Product Price <span class="required">*</span></label>
                                    <input type="number" name="product_price" class="form-control" value="{{ old('product_price') }}">
                                    <small class="text-danger">{{ $errors->has('product_price') ? $errors->first('product_price') : '' }}</small>
                                </div>

                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <label for="category_id">Size</label>
                                    <select name="size_id" class="form-control">
                                        <option></option>
                                        <option>demo</option>
                                        <option>demo</option>
                                        <option>demo</option>
                                    </select>
                                    <small class="text-danger">{{ $errors->has('size_id') ? $errors->first('size_id') : '' }}</small>
                                </div>

                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <label for="category_id">Color</label>
                                    <select name="color_id" class="form-control">
                                        <option></option>
                                        <option>demo</option>
                                        <option>demo</option>
                                        <option>demo</option>
                                    </select>
                                    <small class="text-danger">{{ $errors->has('color_id') ? $errors->first('color_id') : '' }}</small>
                                </div>

                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <label for="first-name">Product Image <span class="required">*</span></label>
                                    <input type="file" name="product_image" class="form-control" accept="image/*">
                                    <small class="text-danger">{{ $errors->has('product_image') ? $errors->first('product_image') : '' }}</small>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-6 col-lg-6 col-xs-12">
                                    <label for="first-name">Product Description <span class="required">*</span></label>
                                    <textarea name="product_description" class="form-control" rows="10">{{ old('product_description') }}</textarea>
                                    <small class="text-danger">{{ $errors->has('product_description') ? $errors->first('product_description') : '' }}</small>
                                </div>

                                <div class="col-md-1 col-lg-1 col-xs-12"></div>

                                <div class="col-md-5 col-lg-5 col-xs-12">
                                    <label for="first-name">Publication Status <span class="required">*</span></label><br><br><br><br><br><br>
                                    <label style="margin-top: 10px; margin-right: 10px;"><input type="radio" name="publication_status" value="1" class="flat"> Published</label>
                                    <label><input type="radio" name="publication_status" value="0" class="flat"> Unpublished</label>
                                    <small class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : '' }}</small>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success">Add Product  <i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                @if(count($products))
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Products <small>Information's....</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div id="reload">
                            <div class="x_content">
                                <table id="datatable" class="text-center table table-hover table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center">SL</th>
                                        <th class="text-center">Category Name</th>
                                        <th class="text-center">Brand Name</th>
                                        <th class="text-center">Product Name</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Size</th>
                                        <th class="text-center">Color</th>
                                        <th class="text-center">Image</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Import Date</th>
                                        <th class="text-center">Last Update</th>
                                        <th class="text-center">Publication Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php( $i = 1 )
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $product->category->category_name }}</td>
                                            <td>{{ $product->brand->brand_name }}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>{{ $product->product_qty }}</td>
                                            <td>{{ $product->product_price }}</td>
                                            <td>{{ $product->size_id ? : 'N/A' }}</td>
                                            <td>{{ $product->color_id ? : 'N/A' }}</td>
                                            <td>
                                                <img src="{{ asset($product->product_image) }}" alt="Image" style="height: 100px; width: 100px;">
                                            </td>
                                            <td>
                                                {{ App\Product::getExcerpt($product->product_description) }}
                                            </td>
                                            <td>
                                                {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $product->created_at)->format('d.M.y h:i a') }}
                                            </td>
                                            <td>
                                                {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $product->updated_at)->diffForHumans() }}
                                            </td>
                                            <td>{{ $product->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                            <td>
                                                <a style="float: left;" href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn btn-success" title="Edit"><i class="fa fa-edit"></i></a>
                                                <form action="{{ route('product.delete', ['id' => $product->id]) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button style="float: left;" type="submit" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this..!!');"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection

@section('extra-js')
    <script>
        $(document).ready(function () {
            $('#addProduct').submit(function (event) {
                event.preventDefault();

                $.ajax({
                    url : "{{ route('product.store') }}",
                    method : "POST",
                    data : new FormData(this),
                    dataType : "JSON",
                    contentType : false,
                    processData : false,
                    success : function (response) {
                        //console.log(response);
                        var html = '';
                        if (response.errors)
                        {
                            html = '<div class="alert alert-danger">';
                            for (var i = 0; i < response.errors.length; i++)
                            {
                                html += '<p>' + response.errors[i] + '</p>';
                            }
                            html += '</div>';
                        }

                        if (response.success)
                        {
                            html = '<div class="alert alert-success">' + response.success + '</div>';
                            $('#addProduct')[0].reset();

                            //$url = "http://127.0.0.1:8000/product";
                            // $("#reload").load('http://127.0.0.1:8000/product');
                            $("#reload").load(location.href+ "#reload");
                        }
                        $('#messageBag').html(html);
                        $('#messageBag').fadeOut(5000);
                    }
                });
            });
        });
    </script>
@stop
