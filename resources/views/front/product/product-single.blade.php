@extends('front.master')

@section('content')
    
    <div id="toast">
        <div id="img">😵</div>
        <div id="desc">A notification message..</div>
    </div>

    <div class="product-section section mt-90 mb-90">
        <div class="container">
            <div class="row mb-90">
                <div class="col-lg-6 col-12 mb-50">
                    <!-- Image -->
                    <div class="single-product-image thumb-right">
                        <div class="tab-content">
                            <div id="single-image-1" class="tab-pane fade show active big-image-slider">
                                <div class="big-image">
                                    <img style="height: 390px;" src="{{ asset($product->product_image) }}" alt="Big Image">
                                    <a href="{{ asset($product->product_image) }}" class="big-image-popup">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="big-image">
                                    <img style="height: 390px;" src="{{ asset($product->product_image) }}" alt="Big Image">
                                    <a href="{{ asset($product->product_image) }}" class="big-image-popup">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="big-image">
                                    <img style="height: 390px;" src="{{ asset($product->product_image) }}" alt="Big Image">
                                    <a href="{{ asset($product->product_image) }}" class="big-image-popup">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="thumb-image-slider nav" data-vertical="true">
                            <a class="thumb-image active" data-toggle="tab" href="#single-image-1">
                                <img style="height: 117px;" src="{{ asset($product->product_image) }}" alt="Thumbnail Image">
                            </a>
                            <a class="thumb-image" data-toggle="tab" href="#single-image-2">
                                <img style="height: 117px;" src="{{ asset($product->product_image) }}" alt="Thumbnail Image">
                            </a>
                            <a class="thumb-image" data-toggle="tab" href="#single-image-3">
                                <img style="height: 117px;" src="{{ asset($product->product_image) }}" alt="Thumbnail Image">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12 mb-50">
                    <!-- Content -->
                    <div class="single-product-content">
                        <!-- Category & Title -->
                        <div class="head-content">
                            <div class="category-title">
                                <a href="#" class="cat">{{ $product->category->category_name }}</a>
                                <h5 class="title">{{ $product->product_name }}</h5>
                            </div>
                            <h5 class="price">{{ $product->product_price }}</h5>
                        </div>

                        <div class="single-product-description">
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>

                            <div class="desc">
                                <p>{{ substr($product->product_description, 0, 150) }}</p>
                            </div>
                            <span class="availability">Availability: <span>In Stock</span></span>
                            
                                <div class="quantity-colors">
                                    <div class="quantity">
                                        <h5>Quantity</h5>
                                        <div class="qty-input">
                                            <input type="number" onchange="myQty($(this).val());" value="1" name="myQty">
                                        </div>
                                        
                                    </div>
{{--                                    <div class="colors">--}}
{{--                                        <h5>Color</h5>--}}
{{--                                        <select class="nice-select">--}}
{{--                                            <option>red</option>--}}
{{--                                            <option>black</option>--}}
{{--                                            <option>yellow</option>--}}
{{--                                            <option>grey</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
                                </div>

                            <div class="actions">
                                <a href="#" class="add-to-cart" onclick="event.preventDefault(); addToCart($(this))">
                                    <i class="ti-shopping-cart"></i>
                                    <span>ADD TO CART</span>
                                </a>
                                <input type="hidden" class="product_id" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" class="qty" value="1" name="qty">
                                
                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>
                            </div>

                            <div class="tags">
                                <h5>Tags:</h5>
                                <a href="#">Electronic</a>
                                <a href="#">Smartphone</a>
                                <a href="#">Phone</a>
                                <a href="#">Charger</a>
                                <a href="#">Powerbank</a>
                            </div>

                            <div class="share">
                                <h5>Share: </h5>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 col-12 ml-auto mr-auto">
                    <ul class="single-product-tab-list nav">
                        <li><a href="#product-description" class="active" data-toggle="tab" >description</a></li>
                        <li><a href="#product-specifications" data-toggle="tab" >specifications</a></li>
                        <li><a href="#product-reviews" data-toggle="tab" >reviews</a></li>
                    </ul>

                    <div class="single-product-tab-content tab-content">
                        <div class="tab-pane fade show active" id="product-description">
                            <div class="row">
                                <div class="single-product-description-content col-lg-8 col-12">
                                    <h4>Introducing Flex 3310</h4>
                                    <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora in</p>
                                    <h4>Stylish Design</h4>
                                    <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                                    <h4>Digital Camera, FM Radio & many more...</h4>
                                    <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                                </div>
                                <div class="single-product-description-image col-lg-4 col-12">
                                    <img src="{{ asset('/front') }}/assets/images/single-product/description.png" alt="description">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="product-specifications">
                            <div class="single-product-specification">
                                <ul>
                                    <li>Full HD Camcorder</li>
                                    <li>Dual Video Recording</li>
                                    <li>X type battery operation</li>
                                    <li>Full HD Camcorder</li>
                                    <li>Dual Video Recording</li>
                                    <li>X type battery operation</li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="product-reviews">
                            <div class="product-ratting-wrap">
                                <div class="pro-avg-ratting">
                                    <h4>4.5 <span>(Overall)</span></h4>
                                    <span>Based on 9 Comments</span>
                                </div>
                                <div class="ratting-list">
                                    <div class="sin-list float-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>(5)</span>
                                    </div>
                                    <div class="sin-list float-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(3)</span>
                                    </div>
                                    <div class="sin-list float-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(1)</span>
                                    </div>
                                    <div class="sin-list float-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(0)</span>
                                    </div>
                                    <div class="sin-list float-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(0)</span>
                                    </div>
                                </div>

                                <div class="rattings-wrapper">
                                    <div class="sin-rattings">
                                        <div class="ratting-author">
                                            <h3>Cristopher Lee</h3>
                                            <div class="ratting-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                        <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                                    </div>

                                    <div class="sin-rattings">
                                        <div class="ratting-author">
                                            <h3>Nirob Khan</h3>
                                            <div class="ratting-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                        <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                                    </div>

                                    <div class="sin-rattings">
                                        <div class="ratting-author">
                                            <h3>MD.ZENAUL ISLAM</h3>
                                            <div class="ratting-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                        <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                                    </div>
                                </div>

                                <div class="ratting-form-wrapper fix">
                                    <h3>Add your Comments</h3>
                                    <form action="#">
                                        <div class="ratting-form row">
                                            <div class="col-12 mb-15">
                                                <h5>Rating:</h5>
                                                <div class="ratting-star fix">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12 mb-15">
                                                <label for="name">Name:</label>
                                                <input id="name" placeholder="Name" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 mb-15">
                                                <label for="email">Email:</label>
                                                <input id="email" placeholder="Email" type="text">
                                            </div>
                                            <div class="col-12 mb-15">
                                                <label for="your-review">Your Review:</label>
                                                <textarea name="review" id="your-review" placeholder="Write a review"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <input value="add review" type="submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div><!-- Single Product Section End -->

    <!-- Related Product Section Start -->
    <div class="product-section section mb-70">
        <div class="container">
            <div class="row">

                <!-- Section Title Start -->
                <div class="col-12 mb-40">
                    <div class="section-title-one" data-title="RELATED PRODUCT"><h1>RELATED PRODUCT</h1></div>
                </div><!-- Section Title End -->

                <!-- Product Tab Content Start -->
                <div class="col-12">

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

                </div><!-- Product Tab Content End -->

            </div>
        </div>
    </div><!-- Related Product Section End -->

@stop
