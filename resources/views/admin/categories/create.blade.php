
@extends('admin.master')

@section('title', 'Create Category')

@section('content')

    <div class="">
        <h5 class="text-success">{{ Session::get('message') }}</h5>
        <div class="clearfix"></div>
        <div class="row" style="overflow: hidden;">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Create Category</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="{{ route('categories.store') }}" method="post" class="form-horizontal form-label-left">

                            @csrf

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="category_name" class="form-control col-md-7 col-xs-12" value="{{ old('category_name') }}">
                                    <small class="text-danger">{{ $errors->has('category_name') ? $errors->first('category_name') : '' }}</small>
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

                @if($categories->count())
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Categories <small>Information's....</small></h2>
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
                                    <th class="text-center">Publication Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php( $sl = 1 )
                            @php ($category = 0)
                            {{--@foreach($categories as $category)--}}
                            @while($category < $categories->count())
                                <tr>
                                    <td>{{ $sl++ }}</td>
                                    <td>{{ $categories->get($category)->category_name }}</td>
                                    <td>{{ $categories->get($category)->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        <a style="float: left" href="{{ route('categories.edit', [$categories->get($category)->id] ) }}" class="btn btn-success" title="Edit"><i class="fa fa-edit"></i></a>
                                        @if($categories->get($category)->publication_status == 1)
                                            <a style="float: left" href="{{ route('categories.status', [$categories->get($category)->id]) }}" class="btn btn-warning" title="Unpublished"><i class="fa fa-arrow-down"></i></a>
                                        @else
                                            <a style="float: left" href="{{ route('categories.status', [$categories->get($category)->id]) }}" class="btn btn-info" title="Published"><i class="fa fa-arrow-up"></i></a>
                                        @endif
                                        <form action="{{ route('categories.destroy', [$categories->get($category)->id]) }}" method="post" class="overflow_hidden">
                                            @method('DELETE')
                                            @csrf
                                            <button style="float: left" type="submit" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this..!!');"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            {{--@endforeach--}}
                                @php ( $category++ )
                            @endwhile
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

@endsection
