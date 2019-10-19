
@extends('admin.master')

@section('title', 'Update Product')

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
                        <form id="addProduct" name="productForm" action="{{ route('product.update') }}" method="post" enctype="multipart/form-data">
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
                                <input type="hidden" name="product_id" value="{{ $product->id }}">

                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <label for="first-name">Product Name <span class="required">*</span></label>
                                    <input type="text" name="product_name" class="form-control" value="{{ old('product_name') ?? $product->product_name }}">
                                    <small class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : '' }}</small>
                                </div>

                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <label for="first-name">Product Quantity <span class="required">*</span></label>
                                    <input type="number" name="product_qty" class="form-control" value="{{ old('product_qty') ?? $product->product_qty }}">
                                    <small class="text-danger">{{ $errors->has('product_qty') ? $errors->first('product_qty') : '' }}</small>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <label for="product_price">Product Price <span class="required">*</span></label>
                                    <input type="number" name="product_price" class="form-control" value="{{ old('product_price') ?? $product->product_price }}">
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
                                    <label for="first-name">Publication Status <span class="required">*</span></label><br>
                                    <label style="margin-top: 10px; margin-right: 10px;">
                                        <input type="radio" {{ $product->publication_status == 1 ? 'checked' : null }} name="publication_status" value="1" class="flat"> Published
                                    </label>
                                    <label>
                                        <input type="radio" {{ $product->publication_status == 0 ? 'checked' : null }} name="publication_status" value="0" class="flat"> Unpublished
                                    </label>
                                    <small class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : '' }}</small>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-6 col-lg-6 col-xs-12">
                                    <label for="first-name">Product Description <span class="required">*</span></label>
                                    <textarea name="product_description" class="form-control" rows="10">{{ old('product_description') ?? $product->product_description }}</textarea>
                                    <small class="text-danger">{{ $errors->has('product_description') ? $errors->first('product_description') : '' }}</small>
                                </div>

                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <label for="first-name">Product Image <span class="required">*</span></label>
                                    <input type="file" name="product_image" class="form-control" accept="image/*"><br>
                                    <img src="{{ asset($product->product_image) }}" alt="" style="height: 100px; width: 100px;">
                                    <small class="text-danger">{{ $errors->has('product_image') ? $errors->first('product_image') : '' }}</small>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <a href="{{ route('product') }}" class="btn btn-danger">Cancel <i class="fa fa-backward"></i></a>
                                        <button type="submit" class="btn btn-success">Update Product <i class="fa fa-upload"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.forms['productForm'].elements['category_id'].value = '{{ $product->category_id }}';
        document.forms['productForm'].elements['brand_id'].value = '{{ $product->brand_id }}';
    </script>

@endsection