
@extends('admin.master')

@section('title', 'Create Brand')

@section('content')

    <div class="">
        <h5 class="text-success">{{ Session::get('message') }}</h5>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">
                    <div class="x_title">
                        <h2>Create Brand</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="{{ route('brand.store') }}" method="post" class="form-horizontal form-label-left">

                            @csrf

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="category_id" class="form-control col-md-7 col-xs-12">
                                        <option> -- Select Category -- </option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                    <small class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : '' }}</small>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Brand Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="brand_name" class="form-control col-md-7 col-xs-12" value="{{ old('brand_name') }}">
                                    <small class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : '' }}</small>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Publication Status <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label style="margin-top: 10px; margin-right: 10px;"><input type="radio" name="publication_status" value="1" class="flat"> Published</label>
                                    <label><input type="radio" name="publication_status" value="0" class="flat"> Unpublished</label>
                                    <small class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : '' }}</small>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button class="btn btn-success" type="submit">Add <i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                @if($brands->count())
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Brands <small>Information's....</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable" class="text-center table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">SL</th>
                                    <th class="text-center">Category Name</th>
                                    <th class="text-center">Brand Name</th>
                                    <th class="text-center">Publication Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php( $i = 1 )
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $brand->category->category_name }}</td>
                                    <td>{{ $brand->brand_name }}</td>
                                    <td>{{ $brand->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        <a style="float: left;" href="{{ route('brand.edit', [$brand->id]) }}" class="btn btn-success" title="Edit"><i class="fa fa-edit"></i></a>
                                        @if($brand->publication_status == 1)
                                            <a style="float: left;" href="{{ route('brand.status', [$brand->id]) }}" class="btn btn-warning" title="Unpublished"><i class="fa fa-arrow-down"></i></a>
                                        @else
                                            <a style="float: left;" href="{{ route('brand.status', [$brand->id]) }}" class="btn btn-info" title="Published"><i class="fa fa-arrow-up"></i></a>
                                        @endif
                                        <form action="{{ route('brand.destroy', ['id' => $brand->id]) }}" method="post" class="overflow_hidden">
                                            @method('DELETE')
                                            @csrf
                                            <button style="float: left;" type="submit" class="btn btn-danger" title="Move To Trashed" onclick="return confirm('Ii will move to trashed!');"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif

                @if($trashes->count())
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Trashes</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="text-center table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">Sl</th>
                                <th class="text-center">Category Name</th>
                                <th class="text-center">Brand Name</th>
                                <th class="text-center">Publication Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php( $i = 1 )
                            @foreach($trashes as $brand)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td class="text-muted">{{ $brand->category->category_name }}</td>
                                    <td>{{ $brand->brand_name }}</td>
                                    <td>{{ $brand->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        <form style="float: left;" action="{{ route('brand.restore', ['id' => $brand->id]) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-warning" title="Restore" onclick="return confirm('Are you sure to restore this..!!')"><i class="fa fa-recycle"></i></button>
                                        </form>

                                        <form style="float: left;" action="{{ route('brand.confirm.delete', ['id' => $brand->id]) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger" title="Confirm Delete" onclick="return confirm('Your Data Will Delete Permanently..!!')"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

@endsection