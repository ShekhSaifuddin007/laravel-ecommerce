<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@if($cartProducts->count())({{ $cartProducts->count() }})@endif Ecommerce App</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    @include('front.includes.stylesheet')
    <script src="{{ asset('/front') }}/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Modernizer JS -->
    <script src="{{ asset('/front') }}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body class="theme-dark">
<!-- Header Section Start -->
    @include('front.includes.header')
<!-- Header Section End -->
<!-- Mini Cart Wrap Start -->
    @include('front.includes.mini-cart')
<!-- Mini Cart Wrap End -->
<!-- Cart Overlay -->
    @if(count($cartProducts))<div class="cart-overlay"></div>@endif
    @yield('content')
    @include('front.includes.brand-subs')
<!-- Footer Section Start -->
    @include('front.includes.footer')
<!-- Footer Section End -->
<!-- JS
============================================ -->
<!-- jQuery JS -->
    @include('front.includes.script')

    @yield('extra-js')

    </body>
</html>
