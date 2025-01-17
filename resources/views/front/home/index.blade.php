@extends('front.master')

@section('title', 'Home')

@section('content')
    <!-- Hero Section Start -->
        @include('front.includes.hero-section')
    <!-- Hero Section End -->

    <!-- Banner Section Start -->
{{--    <div class="banner-section section mb-60">--}}
{{--        <div class="container">--}}
{{--            <div class="row row-10">--}}

{{--                <!-- Banner -->--}}
{{--                <div class="col-md-6 col-12 mb-30">--}}
{{--                    <div class="banner">--}}
{{--                        <a href="#">--}}
{{--                            <img src="{{ asset('/front') }}/assets/images/banner/banner-8.jpg" alt="Banner">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Banner -->--}}
{{--                <div class="col-md-6 col-12 mb-30">--}}
{{--                    <div class="banner">--}}
{{--                        <a href="#">--}}
{{--                            <img src="{{ asset('/front') }}/assets/images/banner/banner-9.jpg" alt="Banner">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div><!-- Banner Section End -->--}}

    <!-- Feature Product Section Start -->
    <div class="product-section section mb-70">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-12 mb-40">
                    <div class="section-title-one" data-title="FEATURED ITEMS"><h1>FEATURED ITEMS</h1></div>
                </div><!-- Section Title End -->
                <!-- Product Tab Filter Start -->
                <div class="col-12 mb-30">
                    <div class="product-tab-filter">
                        <!-- Tab Filter Toggle -->
                        <button class="product-tab-filter-toggle">showing: <span></span><i class="icofont icofont-simple-down"></i></button>
                        <!-- Product Tab List -->
                        <ul class="nav product-tab-list">
                            <li><a class="active" data-toggle="tab" href="#tab-one">all</a></li>
                            <li><a data-toggle="tab" href="#tab-two">LAPTOP</a></li>
                            <li><a data-toggle="tab" href="#tab-one">DRONE</a></li>
                            <li><a data-toggle="tab" href="#tab-two">TV & AUDIO</a></li>
                            <li><a data-toggle="tab" href="#tab-one">PHONE & TABLET</a></li>
                            <li><a data-toggle="tab" href="#tab-two">CAMERA & PRINTER</a></li>
                        </ul>
                    </div>
                </div><!-- Product Tab Filter End -->

                <!-- Product Tab Content Start -->
                <div class="col-12">
                    <div class="tab-content">
                        <!-- Tab Pane Start -->
                        <div class="tab-pane fade show active" id="tab-one">
                            <!-- Product Slider Wrap Start -->
                            <div class="product-slider-wrap product-slider-arrow-one">
                                <!-- Product Slider Start -->
                                <div class="product-slider product-slider-4">
                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">
                                            <!-- Image -->
                                            <div class="image">
                                                <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-1.png" alt="Product Image"></a>
                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>
                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>
                                            </div>
                                            <!-- Content -->
                                            <div class="content">
                                                <!-- Category & Title -->
                                                <div class="category-title">
                                                    <a href="#" class="cat">Laptop</a>
                                                    <h5 class="title"><a href="single-product-dark.html">Zeon Zen 4 Pro</a></h5>
                                                </div>
                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">
                                                    <h5 class="price">$295.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- Product End -->
                                    </div>

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">
                                            <!-- Image -->
                                            <div class="image">
                                                <span class="label sale">sale</span>
                                                <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-2.png" alt="Product Image"></a>
                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>
                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>
                                            </div>

                                            <!-- Content -->
                                            <div class="content">
                                                <!-- Category & Title -->
                                                <div class="category-title">
                                                    <a href="#" class="cat">Drone</a>
                                                    <h5 class="title"><a href="single-product-dark.html">Aquet Drone D 420</a></h5>
                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">
                                                    <h5 class="price"><span class="old">$350</span>$275.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- Product End -->
                                    </div>

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">
                                            <!-- Image -->
                                            <div class="image">
                                                <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-3.png" alt="Product Image"></a>
                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>
                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>
                                            </div>

                                            <!-- Content -->
                                            <div class="content">
                                                <!-- Category & Title -->
                                                <div class="category-title">
                                                    <a href="#" class="cat">Games</a>
                                                    <h5 class="title"><a href="single-product-dark.html">Game Station X 22</a></h5>
                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">
                                                    <h5 class="price">$295.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- Product End -->
                                    </div>

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">
                                            <!-- Image -->
                                            <div class="image">
                                                <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-4.png" alt="Product Image"></a>
                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>
                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>
                                            </div>

                                            <!-- Content -->
                                            <div class="content">
                                                <!-- Category & Title -->
                                                <div class="category-title">
                                                    <a href="#" class="cat">Accessories</a>
                                                    <h5 class="title"><a href="single-product-dark.html">Roxxe Headphone Z 75</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">

                                                    <h5 class="price">$110.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">

                                                <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-5.png" alt="Product Image"></a>

                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>

                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title">

                                                    <a href="#" class="cat">Camera</a>
                                                    <h5 class="title"><a href="single-product-dark.html">Mony Handycam Z 105</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">

                                                    <h5 class="price">$110.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>

                                </div><!-- Product Slider End -->
                            </div><!-- Product Slider Wrap End -->

                        </div><!-- Tab Pane End -->

                        <!-- Tab Pane Start -->
                        <div class="tab-pane fade" id="tab-two">

                            <!-- Product Slider Wrap Start -->
                            <div class="product-slider-wrap product-slider-arrow-one">
                                <!-- Product Slider Start -->
                                <div class="product-slider product-slider-4">

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">

                                                <span class="label sale">sale</span>

                                                <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-6.png" alt="Product Image"></a>

                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>

                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title">

                                                    <a href="#" class="cat">Camera</a>
                                                    <h5 class="title"><a href="single-product-dark.html">Axor Digital camera</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">

                                                    <h5 class="price"><span class="old">$265</span>$199.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">

                                                <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-7.png" alt="Product Image"></a>

                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>

                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title">

                                                    <a href="#" class="cat">Camera</a>
                                                    <h5 class="title"><a href="single-product-dark.html">Silvex DSLR Camera T 32</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">

                                                    <h5 class="price">$580.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">

                                                <span class="label new">new</span>

                                                <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-8.png" alt="Product Image"></a>

                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>

                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title">

                                                    <a href="#" class="cat">Camera</a>
                                                    <h5 class="title"><a href="single-product-dark.html">Necta Instant Camera</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">

                                                    <h5 class="price">$320.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">

                                                <span class="label sale">sale</span>

                                                <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-9.png" alt="Product Image"></a>

                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>

                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title">

                                                    <a href="#" class="cat">Watch</a>
                                                    <h5 class="title"><a href="single-product-dark.html">Mascut Smart Watch</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">

                                                    <h5 class="price"><span class="old">$365</span>$295.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>

                                    <div class="col pb-20 pt-10">
                                        <!-- Product Start -->
                                        <div class="ee-product">

                                            <!-- Image -->
                                            <div class="image">

                                                <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-10.png" alt="Product Image"></a>

                                                <div class="wishlist-compare">
                                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                </div>

                                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                            </div>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Category & Title -->
                                                <div class="category-title">

                                                    <a href="#" class="cat">Watch</a>
                                                    <h5 class="title"><a href="single-product-dark.html">Z Bluetooth Headphone</a></h5>

                                                </div>

                                                <!-- Price & Ratting -->
                                                <div class="price-ratting">

                                                    <h5 class="price">$189.00</h5>
                                                    <div class="ratting">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>

                                                </div>

                                            </div>

                                        </div><!-- Product End -->
                                    </div>

                                </div><!-- Product Slider End -->
                            </div><!-- Product Slider Wrap End -->

                        </div><!-- Tab Pane End -->

                    </div>
                </div><!-- Product Tab Content End -->

            </div>
        </div>
    </div><!-- Feature Product Section End -->

    <!-- Best Deals Product Section Start -->
    <div class="product-section section mb-40">
        <div class="container">
            <div class="row">

                <!-- Section Title Start -->
                <div class="col-12 mb-40">
                    <div class="section-title-one" data-title="BEST DEALS"><h1>BEST DEALS</h1></div>
                </div><!-- Section Title End -->

                <!-- Product Tab Filter Start-->
                <div class="col-12">
                    <div class="offer-product-wrap row">

                        <!-- Product Tab Filter Start -->
                        <div class="col mb-30">
                            <div class="product-tab-filter">
                                <!-- Tab Filter Toggle -->
                                <button class="product-tab-filter-toggle">showing: <span></span><i class="icofont icofont-simple-down"></i></button>

                                <!-- Product Tab List -->
                                <ul class="nav product-tab-list">
                                    <li><a class="active" data-toggle="tab" href="#tab-three">all</a></li>
                                    <li><a data-toggle="tab" href="#tab-four">LAPTOP</a></li>
                                    <li><a data-toggle="tab" href="#tab-three">DRONE</a></li>
                                    <li><a data-toggle="tab" href="#tab-four">TV & AUDIO</a></li>
                                    <li><a data-toggle="tab" href="#tab-three">PHONE & TABLET</a></li>
                                    <li><a data-toggle="tab" href="#tab-four">CAMERA & PRINTER</a></li>
                                </ul>

                            </div>
                        </div><!-- Product Tab Filter End -->

                        <!-- Offer Time Wrap Start -->
                        <div class="col mb-30">
                            <div class="offer-time-wrap" style="background-image: url({{ asset('/front') }}/assets/images/bg/offer-products.jpg)">
                                <h1><span>UP TO</span> 55%</h1>
                                <h3>QUALITY & EXCLUSIVE <span>PRODUCTS</span></h3>
                                <h4><span>LIMITED TIME OFFER</span> GET YOUR PRODUCT</h4>
                                <div class="countdown" data-countdown="2019/06/20"></div>
                            </div>
                        </div><!-- Offer Time Wrap End -->

                        <!-- Product Tab Content Start -->
                        <div class="col-12 mb-30">
                            <div class="tab-content">

                                <!-- Tab Pane Start -->
                                <div class="tab-pane fade show active" id="tab-three">

                                    <!-- Product Slider Wrap Start -->
                                    <div class="product-slider-wrap product-slider-arrow-two">
                                        <!-- Product Slider Start -->
                                        <div class="product-slider product-slider-3">

                                            <div class="col pb-20 pt-10">
                                                <!-- Product Start -->
                                                <div class="ee-product">

                                                    <!-- Image -->
                                                    <div class="image">

                                                        <span class="label sale">sale</span>

                                                        <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-13.png" alt="Product Image"></a>

                                                        <div class="wishlist-compare">
                                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                        </div>

                                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                    </div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Category & Title -->
                                                        <div class="category-title">

                                                            <a href="#" class="cat">Games</a>
                                                            <h5 class="title"><a href="single-product-dark.html">Game Stations PW 25</a></h5>

                                                        </div>

                                                        <!-- Price & Ratting -->
                                                        <div class="price-ratting">

                                                            <h5 class="price"><span class="old">$285</span>$135.35</h5>
                                                            <div class="ratting">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div><!-- Product End -->
                                            </div>

                                            <div class="col pb-20 pt-10">
                                                <!-- Product Start -->
                                                <div class="ee-product">

                                                    <!-- Image -->
                                                    <div class="image">

                                                        <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-14.png" alt="Product Image"></a>

                                                        <div class="wishlist-compare">
                                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                        </div>

                                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                    </div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Category & Title -->
                                                        <div class="category-title">

                                                            <a href="#" class="cat">Kitchen Appliances</a>
                                                            <h5 class="title"><a href="single-product-dark.html">Zorex Coffe Maker</a></h5>

                                                        </div>

                                                        <!-- Price & Ratting -->
                                                        <div class="price-ratting">

                                                            <h5 class="price">$125.00</h5>
                                                            <div class="ratting">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div><!-- Product End -->
                                            </div>

                                            <div class="col pb-20 pt-10">
                                                <!-- Product Start -->
                                                <div class="ee-product">

                                                    <!-- Image -->
                                                    <div class="image">

                                                        <span class="label sale">sale</span>

                                                        <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-15.png" alt="Product Image"></a>

                                                        <div class="wishlist-compare">
                                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                        </div>

                                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                    </div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Category & Title -->
                                                        <div class="category-title">

                                                            <a href="#" class="cat">Home Appliances</a>
                                                            <h5 class="title"><a href="single-product-dark.html">jeilips Steam Iron K 2</a></h5>

                                                        </div>

                                                        <!-- Price & Ratting -->
                                                        <div class="price-ratting">

                                                            <h5 class="price"><span class="old">$365</span>$295.00</h5>
                                                            <div class="ratting">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div><!-- Product End -->
                                            </div>

                                            <div class="col pb-20 pt-10">
                                                <!-- Product Start -->
                                                <div class="ee-product">

                                                    <!-- Image -->
                                                    <div class="image">

                                                        <span class="label sale">sale</span>

                                                        <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-16.png" alt="Product Image"></a>

                                                        <div class="wishlist-compare">
                                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                        </div>

                                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                    </div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Category & Title -->
                                                        <div class="category-title">

                                                            <a href="#" class="cat">Tv & Audio</a>
                                                            <h5 class="title"><a href="single-product-dark.html">Nexo Andriod TV Box</a></h5>

                                                        </div>

                                                        <!-- Price & Ratting -->
                                                        <div class="price-ratting">

                                                            <h5 class="price"><span class="old">$360 </span>$250.00</h5>
                                                            <div class="ratting">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div><!-- Product End -->
                                            </div>

                                            <div class="col pb-20 pt-10">
                                                <!-- Product Start -->
                                                <div class="ee-product">

                                                    <!-- Image -->
                                                    <div class="image">

                                                        <span class="label new">new</span>

                                                        <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-17.png" alt="Product Image"></a>

                                                        <div class="wishlist-compare">
                                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                        </div>

                                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                    </div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Category & Title -->
                                                        <div class="category-title">

                                                            <a href="#" class="cat">Smartphone</a>
                                                            <h5 class="title"><a href="single-product-dark.html">Ornet Note 9</a></h5>

                                                        </div>

                                                        <!-- Price & Ratting -->
                                                        <div class="price-ratting">

                                                            <h5 class="price"><span class="old">$285</span>$230.00</h5>
                                                            <div class="ratting">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div><!-- Product End -->
                                            </div>

                                        </div><!-- Product Slider End -->
                                    </div><!-- Product Slider Wrap End -->

                                </div><!-- Tab Pane End -->

                                <!-- Tab Pane Start -->
                                <div class="tab-pane fade" id="tab-four">

                                    <!-- Product Slider Wrap Start -->
                                    <div class="product-slider-wrap product-slider-arrow-two">
                                        <!-- Product Slider Start -->
                                        <div class="product-slider product-slider-3">

                                            <div class="col pb-20 pt-10">
                                                <!-- Product Start -->
                                                <div class="ee-product">

                                                    <!-- Image -->
                                                    <div class="image">

                                                        <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-18.png" alt="Product Image"></a>

                                                        <div class="wishlist-compare">
                                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                        </div>

                                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                    </div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Category & Title -->
                                                        <div class="category-title">

                                                            <a href="#" class="cat">Tv & Audio</a>
                                                            <h5 class="title"><a href="single-product-dark.html">Xonet Speaker P 9</a></h5>

                                                        </div>

                                                        <!-- Price & Ratting -->
                                                        <div class="price-ratting">

                                                            <h5 class="price">$185.00</h5>
                                                            <div class="ratting">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div><!-- Product End -->
                                            </div>

                                            <div class="col pb-20 pt-10">
                                                <!-- Product Start -->
                                                <div class="ee-product">

                                                    <!-- Image -->
                                                    <div class="image">

                                                        <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-24.png" alt="Product Image"></a>

                                                        <div class="wishlist-compare">
                                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                        </div>

                                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                    </div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Category & Title -->
                                                        <div class="category-title">

                                                            <a href="#" class="cat">Smartphone</a>
                                                            <h5 class="title"><a href="single-product-dark.html">Sany Experia Z5</a></h5>

                                                        </div>

                                                        <!-- Price & Ratting -->
                                                        <div class="price-ratting">

                                                            <h5 class="price">$360.00</h5>
                                                            <div class="ratting">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div><!-- Product End -->
                                            </div>

                                            <div class="col pb-20 pt-10">
                                                <!-- Product Start -->
                                                <div class="ee-product">

                                                    <!-- Image -->
                                                    <div class="image">

                                                        <span class="label sale">sale</span>

                                                        <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-20.png" alt="Product Image"></a>

                                                        <div class="wishlist-compare">
                                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                        </div>

                                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                    </div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Category & Title -->
                                                        <div class="category-title">

                                                            <a href="#" class="cat">Kitchen Appliances</a>
                                                            <h5 class="title"><a href="single-product-dark.html">Jackson Toster V 27</a></h5>

                                                        </div>

                                                        <!-- Price & Ratting -->
                                                        <div class="price-ratting">

                                                            <h5 class="price"><span class="old">$185</span>$135.00</h5>
                                                            <div class="ratting">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div><!-- Product End -->
                                            </div>

                                            <div class="col pb-20 pt-10">
                                                <!-- Product Start -->
                                                <div class="ee-product">

                                                    <!-- Image -->
                                                    <div class="image">

                                                        <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-21.png" alt="Product Image"></a>

                                                        <div class="wishlist-compare">
                                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                        </div>

                                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                    </div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Category & Title -->
                                                        <div class="category-title">

                                                            <a href="#" class="cat">Kitchen Appliances</a>
                                                            <h5 class="title"><a href="single-product-dark.html">mega Juice Maker</a></h5>

                                                        </div>

                                                        <!-- Price & Ratting -->
                                                        <div class="price-ratting">

                                                            <h5 class="price">$125.00</h5>
                                                            <div class="ratting">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div><!-- Product End -->
                                            </div>

                                            <div class="col pb-20 pt-10">
                                                <!-- Product Start -->
                                                <div class="ee-product">

                                                    <!-- Image -->
                                                    <div class="image">

                                                        <span class="label new">new</span>

                                                        <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-22.png" alt="Product Image"></a>

                                                        <div class="wishlist-compare">
                                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                        </div>

                                                        <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                    </div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Category & Title -->
                                                        <div class="category-title">

                                                            <a href="#" class="cat">Kitchen Appliances</a>
                                                            <h5 class="title"><a href="single-product-dark.html">shine Microwave Oven</a></h5>

                                                        </div>

                                                        <!-- Price & Ratting -->
                                                        <div class="price-ratting">

                                                            <h5 class="price"><span class="old">$389</span>$245.00</h5>
                                                            <div class="ratting">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div><!-- Product End -->
                                            </div>

                                        </div><!-- Product Slider End -->
                                    </div><!-- Product Slider Wrap End -->

                                </div><!-- Tab Pane End -->

                            </div>
                        </div><!-- Product Tab Content End -->

                    </div>
                </div><!-- Product Tab Filter End-->

            </div>
        </div>
    </div><!-- Best Deals Product Section End -->

    <!-- Banner Section Start -->
    <div class="banner-section section mb-90">
        <div class="container">
            <div class="row">

                <!-- Banner -->
                <div class="col-12">
                    <div class="banner"><a href="#"><img src="{{ asset('/front') }}/assets/images/banner/banner-10.jpg" alt="Banner"></a></div>
                </div>

            </div>
        </div>
    </div><!-- Banner Section End -->

    <!-- Best Sell Product Section Start -->
    <div class="product-section section mb-60">
        <div class="container">
            <div class="row">

                <!-- Section Title Start -->
                <div class="col-12 mb-40">
                    <div class="section-title-one" data-title="BEST SELLER"><h1>BEST SELLERS</h1></div>
                </div><!-- Section Title End -->

                <div class="col-12">
                    <div class="row">

                        <div class="col-xl-3 col-lg-4 col-12 order-lg-1 order-2 mb-25 mt-5">
                            <div class="row">

                                <div class="col-lg-12 col-md-4 col-12 mt-5"><div class="banner"><a href="#"><img src="{{ asset('/front') }}/assets/images/banner/banner-11.jpg" alt="Banner"></a></div></div>
                                <div class="col-lg-12 col-md-4 col-12 mt-5"><div class="banner"><a href="#"><img src="{{ asset('/front') }}/assets/images/banner/banner-12.jpg" alt="Banner"></a></div></div>
                                <div class="col-lg-12 col-md-4 col-12 mt-5"><div class="banner"><a href="#"><img src="{{ asset('/front') }}/assets/images/banner/banner-13.jpg" alt="Banner"></a></div></div>

                            </div>
                        </div>

                        <div class="col-xl-9 col-lg-8 col-12 order-lg-2 order-1">
                            <div class="row">

                                <div class="col-xl-4 col-md-6 col-12 pb-30 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-5.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Camera</a>
                                                <h5 class="title"><a href="single-product-dark.html">Mony Handycam Z 105</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price">$110.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col-xl-4 col-md-6 col-12 pb-30 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <span class="label sale">sale</span>

                                            <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-6.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Camera</a>
                                                <h5 class="title"><a href="single-product-dark.html">Axor Digital camera</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price"><span class="old">$265</span>$199.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col-xl-4  col-md-6 col-12 pb-30 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-7.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Camera</a>
                                                <h5 class="title"><a href="single-product-dark.html">Silvex DSLR Camera T 32</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price">$580.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col-xl-4 col-md-6 col-12 pb-30 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <span class="label sale">sale</span>

                                            <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-9.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Watch</a>
                                                <h5 class="title"><a href="single-product-dark.html">Mascut Smart Watch</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price"><span class="old">$365</span>$295.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col-xl-4 col-md-6 col-12 pb-30 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-10.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Watch</a>
                                                <h5 class="title"><a href="single-product-dark.html">Z Bluetooth Headphone</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price">$189.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col-xl-4 col-md-6 col-12 pb-30 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <span class="label new">new</span>

                                            <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-11.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Printer</a>
                                                <h5 class="title"><a href="single-product-dark.html">Pranon Photo Printer Y 25</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price">$210.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div><!-- Best Sell Product Section End -->

    <!-- Product2 & Banner Section Start -->
    <div class="product-section section mb-60">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="row">

                        <div class="col-md-6 col-12 pb-30">

                            <!-- Product Start -->
                            <div class="ee-product-two">
                                <div class="wrap">

                                    <!-- Category -->
                                    <a href="#" class="cat">Laptop</a>

                                    <!-- Offer -->
                                    <span class="offer"> <span>25%</span>OFF </span>

                                    <!-- Image -->
                                    <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-two-1.png" alt="Product Image"></a>

                                    <!-- Add To Cart -->
                                    <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Category & Title -->
                                        <div class="title-price">

                                            <h5 class="title"><a href="single-product-dark.html">Roxxe Laptop wifi</a></h5>

                                            <h3 class="price"><span class="old">$650</span> $475.00</h3>

                                        </div>

                                        <div class="wishlist-compare">
                                            <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                            <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                        </div>

                                    </div>

                                </div>
                            </div><!-- Product End -->

                        </div>

                        <div class="col-md-6 col-12">
                            <div class="row">

                                <div class="col-lg-12 col-md-12 col-12 mb-5"><div class="banner"><a href="#"><img src="{{ asset('/front') }}/assets/images/banner/banner-14.jpg" alt="Banner"></a></div></div>
                                <div class="col-lg-12 col-md-12 col-12 mb-5"><div class="banner"><a href="#"><img src="{{ asset('/front') }}/assets/images/banner/banner-15.jpg" alt="Banner"></a></div></div>
                                <div class="col-lg-12 col-md-12 col-12 mb-5"><div class="banner"><a href="#"><img src="{{ asset('/front') }}/assets/images/banner/banner-16.jpg" alt="Banner"></a></div></div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div><!-- Product2 & Banner Section End -->

    <!-- Feature Section Start -->
    <div class="feature-section section mb-60">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <!-- Feature Start -->
                    <div class="feature-two" style="background-image: url({{ asset('/front') }}/assets/images/icons/feature-van-2-bg.png)">
                        <div class="feature-wrap">
                            <div class="icon"><img src="{{ asset('/front') }}/assets/images/icons/feature-van-2.png" alt="Feature"></div>
                            <h4>FREE SHIPPING</h4>
                            <p>Start from $100</p>
                        </div>
                    </div><!-- Feature End -->
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <!-- Feature Start -->
                    <div class="feature-two" style="background-image: url({{ asset('/front') }}/assets/images/icons/feature-walet-2-bg.png)">
                        <div class="feature-wrap">
                            <div class="icon"><img src="{{ asset('/front') }}/assets/images/icons/feature-walet-2.png" alt="Feature"></div>
                            <h4>MONEY BACK GUARANTEE</h4>
                            <p>Back within 15 days</p>
                        </div>
                    </div><!-- Feature End -->
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <!-- Feature Start -->
                    <div class="feature-two" style="background-image: url({{ asset('/front') }}/assets/images/icons/feature-shield-2-bg.png)">
                        <div class="feature-wrap">
                            <div class="icon"><img src="{{ asset('/front') }}/assets/images/icons/feature-shield-2.png" alt="Feature"></div>
                            <h4>SECURE PAYMENTS</h4>
                            <p>Payment Security</p>
                        </div>
                    </div><!-- Feature End -->
                </div>

            </div>
        </div>
    </div><!-- Feature Section End -->

    <!-- New Arrival Product Section Start -->
    <div class="product-section section mb-60">
        <div class="container">
            <div class="row">

                <!-- Section Title Start -->
                <div class="col-12 mb-40">
                    <div class="section-title-one" data-title="NEW ARRIVAL"><h1>NEW ARRIVAL</h1></div>
                </div><!-- Section Title End -->

                <div class="col-12">
                    <div class="row">

                        <div class="col-xl-9 col-lg-8 col-12">
                            <div class="row">

                                <div class="col-xl-4 col-md-6 col-12 pb-30 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <span class="label sale">sale</span>

                                            <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-16.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Tv & Audio</a>
                                                <h5 class="title"><a href="single-product-dark.html">Nexo Andriod TV Box</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price"><span class="old">$360 </span>$250.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col-xl-4 col-md-6 col-12 pb-30 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <span class="label new">new</span>

                                            <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-17.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Smartphone</a>
                                                <h5 class="title"><a href="single-product-dark.html">Ornet Note 9</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price"><span class="old">$285</span>$230.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col-xl-4 col-md-6 col-12 pb-30 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-18.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Tv & Audio</a>
                                                <h5 class="title"><a href="single-product-dark.html">Xonet Speaker P 9</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price">$185.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col-xl-4 col-md-6 col-12 pb-30 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <span class="label sale">sale</span>

                                            <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-20.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Kitchen Appliances</a>
                                                <h5 class="title"><a href="single-product-dark.html">Jackson Toster V 27</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price"><span class="old">$185</span>$135.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col-xl-4 col-md-6 col-12 pb-30 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-21.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">
                                                <a href="#" class="cat">Kitchen Appliances</a>
                                                <h5 class="title"><a href="single-product-dark.html">mega Juice Maker</a></h5>
                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">
                                                <h5 class="price">$125.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- Product End -->
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 pb-30 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">
                                        <!-- Image -->
                                        <div class="image">
                                            <span class="label new">new</span>
                                            <a href="single-product-dark.html" class="img"><img src="{{ asset('/front') }}/assets/images/product/product-22.png" alt="Product Image"></a>
                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>
                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>
                                        </div>
                                        <!-- Content -->
                                        <div class="content">
                                            <!-- Category & Title -->
                                            <div class="category-title">
                                                <a href="#" class="cat">Kitchen Appliances</a>
                                                <h5 class="title"><a href="single-product-dark.html">shine Microwave Oven</a></h5>
                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">
                                                <h5 class="price"><span class="old">$389</span>$245.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- Product End -->
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-12 mb-25 mt-5">
                            <div class="row">
                                <div class="col-lg-12 col-md-4 col-12 mt-5"><div class="banner"><a href="#"><img src="{{ asset('/front') }}/assets/images/banner/banner-17.jpg" alt="Banner"></a></div></div>
                                <div class="col-lg-12 col-md-4 col-12 mt-5"><div class="banner"><a href="#"><img src="{{ asset('/front') }}/assets/images/banner/banner-18.jpg" alt="Banner"></a></div></div>
                                <div class="col-lg-12 col-md-4 col-12 mt-5"><div class="banner"><a href="#"><img src="{{ asset('/front') }}/assets/images/banner/banner-19.jpg" alt="Banner"></a></div></div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div><!-- New Arrival Product Section End -->
@stop