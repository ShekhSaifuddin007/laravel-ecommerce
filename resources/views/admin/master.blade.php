
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
    <title>{{ config('app.name') }} | @yield('title')</title>
    @include('admin.includes.stylesheet')
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('admin.includes.sidebar')

        <!-- top navigation -->
        @include('admin.includes.top-nav')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
               All Copyright &copy; Reserved by <a href="#">{{ config('app.name') }}</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
    @include('admin.includes.script-file')
    @yield('extra-js')
</body>
</html>
