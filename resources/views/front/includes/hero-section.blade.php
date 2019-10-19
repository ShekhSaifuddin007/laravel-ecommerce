
<style>
    .scroller{
        height: 459px;
        overflow: hidden;
    }
    .scroller::-webkit-scrollbar{
        width: 5px;
    }
    .scroller::-webkit-scrollbar-thumb{
        background-color: #f5d730;
    }
    .scroller:hover{
        overflow-y: scroll;
    }
</style>

<div class="hero-section section mb-30">
    <div class="container">
        <div class="row">
            <div class="col">

                <!-- Header Category -->
                <div class="hero-side-category">

                    <!-- Category Toggle Wrap -->
                    <div class="category-toggle-wrap">
                       <button class="category-toggle">Categories <i class="ti-menu"></i></button>
                    </div>

                    <!-- Category Menu -->
                    <nav class="category-menu scroller">
                        <ul>
                            @foreach($categories as $category)
                                <li><a href="{{ route('show-category', ['id' => $category->id, 'name' => preg_replace('/\s+/u', '-', trim($category->category_name))]) }}">{{ $category->category_name }}</a></li>
                            @endforeach
                        </ul>
                    </nav>

                </div><!-- Header Bottom End -->

                <!-- Hero Slider Start -->
                <div class="hero-slider hero-slider-two fix">

                    <!-- Hero Item Start -->
                    <div class="hero-item-two">
                        <div class="row align-items-center justify-content-between">

                            <!-- Hero Content -->
                            <div class="hero-content-two col">

                                <h2 class="offer">50% <span>OFF</span></h2>
                                <h1>IT’S <br> SIDE BY SIDE <br> REFRIGERATOR</h1>
                                <a href="#">get it now</a>

                            </div>

                            <!-- Hero Image -->
                            <div class="hero-image-two col">
                                <img src="{{ asset('/front') }}/assets/images/hero/hero-4.png" alt="Hero Image">
                            </div>

                        </div>
                    </div><!-- Hero Item End -->

                    <!-- Hero Item Start -->
                    <div class="hero-item-two">
                        <div class="row align-items-center justify-content-between">

                            <!-- Hero Content -->
                            <div class="hero-content-two col">

                                <h2 class="offer">50% <span>OFF</span></h2>
                                <h1>IT’S <br> xcafe coffee <br> machine</h1>
                                <a href="#">get it now</a>

                            </div>

                            <!-- Hero Image -->
                            <div class="hero-image-two col">
                                <img src="{{ asset('/front') }}/assets/images/hero/hero-5.png" alt="Hero Image">
                            </div>

                        </div>
                    </div><!-- Hero Item End -->

                </div><!-- Hero Slider End -->

            </div>
        </div>
    </div>
</div>