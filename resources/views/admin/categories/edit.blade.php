
@extends('admin.master')

@section('title', 'Edit '. $category->category_name)

@section('content')

    <div class="">
        <h5 class="text-success">{{ Session::get('message') }}</h5>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit Category <small>{{ $category->category_name }}</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="{{ route('categories.update', [$category->id]) }}" method="post" class="form-horizontal form-label-left">
                            @method('PATCH')
                            @csrf

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="category_name" class="form-control col-md-7 col-xs-12" value="{{ old('category_name') ?? $category->category_name }}">
                                    <small class="text-danger">{{ $errors->has('category_name') ? $errors->first('category_name') : '' }}</small>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Publication Status <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label style="margin-top: 10px; margin-right: 10px;"><input type="radio" name="publication_status" {{ $category->publication_status == 1 ? 'checked' : '' }} value="1" class="flat"> Published</label>
                                    <label><input type="radio" name="publication_status" {{ $category->publication_status == 0 ? 'checked' : '' }} value="0" class="flat"> Unpublished</label>
                                    <small class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : '' }}</small>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <a href="{{ route('categories.create') }}" class="btn btn-danger">Cancel <i class="fa fa-backward"></i></a>
                                    <button class="btn btn-success" type="submit">Save Change <i class="fa fa-upload"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection