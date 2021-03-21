
<div class="header-section section">
    <!-- Header Top Start -->
    <div class="header-top header-top-two header-top-border pt-10 pb-10">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col mt-10 mb-10">
                    <!-- Header Links Start -->
                    <div class="header-links">
                        <a href="track-order-dark.html"><img src="{{ asset('/front') }}/assets/images/icons/car.png" alt="Car Icon"> <span>Track your order</span></a>
                        <a href="store-dark.html"><img src="{{ asset('/front') }}/assets/images/icons/marker.png" alt="Car Icon"> <span>Locate Store</span></a>
                    </div><!-- Header Links End -->
                </div>

                <div class="col order-12 order-xs-12 order-md-2 mt-10 mb-10 ml-auto">
                    <!-- Header Shop Links Start -->
                    <div class="header-call-us">
                        <h4>call us <br> <span><a href="tel:01254568987">01254  568  987</a></span></h4>
                    </div><!-- Header Shop Links End -->
                </div>

                <div class="col order-2 order-xs-2 order-md-12 mt-10 mb-10">
                    <!-- Header Account Links Start -->
                    <div class="header-account-links">
                        @if(Session::get('customerId'))
                            <a href="{{ route('customer-logout') }}" onclick="event.preventDefault(); document.getElementById('customerLogout').submit()">
                                <img src="{{ asset(Session::get('customerPic')) }}" style="height: 40px; width: 40px; border-radius: 50%;">
                                <span>Sing Out</span>
                            </a>
                            <form id="customerLogout" action="{{ route('customer-logout') }}" method="post">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('customer-register-form') }}">
                                <i class="icofont icofont-user-alt-7"></i>
                                <span>Sing in</span>
                            </a>
                        @endif
                    </div><!-- Header Account Links End -->
                </div>
            </div>
        </div>
    </div><!-- Header Top End -->

    <!-- Header Top Start -->
    <div class="refresh-cart">
        <div class="header-bottom header-bottom-two header-sticky">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                
                    <div class="col mt-15 mb-15">
                        <!-- Logo Start -->
                        <div class="header-logo">
                            <a href="{{ route('/') }}">
                                <img src="{{ asset('/front') }}/assets/images/logo.png" alt="Electronics eCommerce Bootstrap4 HTML Template">
                                <img class="theme-dark" src="{{ asset('/front') }}/assets/images/logo-light.png" alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
                            </a>
                        </div><!-- Logo End -->
                    </div>
                
                    <div class="col order-12 order-lg-2 order-xl-2 d-none d-lg-block">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('/') }}">HOME</a></li>
                                    <li class="menu-item-has-children"><a href="#">Category</a>
                                        <ul class="sub-menu" style="height: 400px; overflow-y: scroll;">
                                            @foreach($categories as $category)
                                                <li><a href="{{ route('show-category', ['id' => $category->id, 'name' => preg_replace('/\s+/u', '-', trim($category->category_name))]) }}">{{ $category->category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="contact-dark.html">CONTACT</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                
                    <div class="col order-2 order-lg-12 order-xl-12">
                        <div class="row justify-content-between align-items-center">
                            <div class="col">
                                <!-- Header Call Us Start -->
                                <div class="header-shop-links">
                                    <a href="compare-dark.html" class="header-compare"><i class="ti-control-shuffle"></i></a>
                                    <!-- Wishlist -->
                                    <a href="wishlist-dark.html" class="header-wishlist"><i class="ti-heart"></i> <span class="number">3</span></a>
                                    <!-- Cart -->
                                    <a href="#" class="header-cart"><i class="ti-shopping-cart"></i> @if(count($cartProducts))<span class="number">{{ count($cartProducts) }}</span>@endif</a>
                                </div><!-- Header Call Us End -->
                            </div>
                        
                            <div class="col">
                                <!-- Header Search Start -->
                                <div class="header-search">
                                    <!-- Search Toggle -->
                                    <button class="search-toggle"><i class="icofont icofont-search-alt-1"></i></button>
                                </div><!-- Header Search End -->
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="mobile-menu order-12 d-block d-lg-none col"></div>
                </div>
            
                <div class="row">
                    <div class="col">
                        <div class="header-search-container">
                            <form action="#" class="header-search-form">
                                <input type="text" placeholder="Search your product">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Header Top End -->
    </div>
    
</div>
