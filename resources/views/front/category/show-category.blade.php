
@extends('front.master')

@section('content')
    
    <div id="toast">
        <div id="img">😵</div>
        <div id="desc">Item added to the cart</div>
    </div>

    <div class="product-section section mt-90 mb-90">
        <div class="container">
            <div class="row">
                <div class="col mb-50">
                    <div class="category-page-title"><h4>CATEGORIES  -  {{ $category->category_name }}</h4></div>
                </div>
            </div>

            <div class="row">
                @foreach($products as $product)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">
                            <!-- Image -->
                            <div class="image">
                                <a href="{{ route('product-single', ['id' => $product->id, 'name' => preg_replace('/\s+/u', '-', trim($product->product_name))]) }}" class="img">
                                    <img src="{{ asset($product->product_image) }}" alt="Product Image" style="height: 300px;">
                                </a>
                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart" onclick="event.preventDefault(); addToCart($(this))">
                                    <i class="ti-shopping-cart"></i>
                                    <span>ADD TO CART</span>
                                </a>
                                <input type="hidden" class="product_id" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" class="qty" value="1" name="qty">
                            </div>
                            <!-- Content -->
                            <div class="content">
                                <!-- Category & Title -->
                                <div class="category-title">
                                    <a href="#" class="cat">{{ $product->category->category_name }}</a>
                                    <h5 class="title"><a href="javascript: void(0);">{{ $product->product_name }}</a></h5>
                                </div>
                                <!-- Price & Ratting -->
                                <div class="price-ratting">
                                    <h5 class="price"><span class="old">{{ $product->product_price }}</span> Tk. {{ $product->product_price }}</h5>
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
                 @endforeach
            </div>
            <!-- Pagination -->
            <div class="row mt-30">
                <div class="col">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div><!-- Single Product Section End -->
@endsection
