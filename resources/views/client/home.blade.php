@extends('client.index')
@push('css')
    <link rel="stylesheet" href="{{url('client/assets/css/style.css')}}" />
@endpush
@push('scripts')
    <script src="{{url('client/assets/js/main.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endpush
@section('content')
    @if(session('success'))
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif
    <!-- Hero/Intro Slider Start -->
    <div class="section">
        <div class="hero-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Single Hero Slider Item Start -->
                    <div class="hero-slide-item-two swiper-slide">

                        <!-- Hero Slider Background Image Start-->
                        <div class="hero-slide-bg">
                            <img src="{{asset('storage/'.$data_banner[0]->image)}}" alt="" />
                        </div>
                        <!-- Hero Slider Background Image End-->

                        <!-- Hero Slider Container Start -->
                        <div class="container">

                            <div class="row">
                                <div class="hero-slide-content col-lg-8 col-xl-6 col-12 text-lg-center text-left">
                                    <h2 class="title">
                                       Kí Ức Tuổi Thơ
                                    </h2>
                                    <p>Giảm tới  20% cho sản phẩm đã chọn</p>
                                    <a href="{{route('product_shop')}}" class="btn btn-lg btn-primary btn-hover-dark">Shop Now</a>
                                </div>
                            </div>

                        </div>
                        <!-- Hero Slider Container End -->

                    </div>
                    <!-- Single Hero Slider Item End -->

                    <!-- Single Hero Slider Item Start -->
                    <div class="hero-slide-item-two swiper-slide">

                        <!-- Hero Slider Background Image Start -->
                        <div class="hero-slide-bg">
                            <img src="{{asset('storage/'.$data_banner[1]->image)}}" alt="" />
                        </div>
                        <!-- Hero Slider Background Image End -->

                        <!-- Hero Slider Container Start -->
                        <div class="container">
                            <div class="row">
                                <div class="hero-slide-content col-lg-8 col-xl-6 col-12 text-lg-center text-left">
                                    <h2 class="title">
                                        Quê Hương<br />
                                       Buổi Chiều Tà
                                    </h2>
                                    <p>Giảm tới 30% cho sản phẩm đã chọn</p>
                                    <a href="{{route('product_shop')}}" class="btn btn-lg btn-primary btn-hover-dark">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Hero Slider Container End -->

                    </div>
                    <!-- Single Hero Slider Item End -->
                </div>

                <!-- Swiper Pagination Start -->
                <div class="swiper-pagination d-md-none"></div>
                <!-- Swiper Pagination End -->

                <!-- Swiper Navigation Start -->
                <div class="home-slider-prev swiper-button-prev main-slider-nav d-md-flex d-none"><i
                        class="pe-7s-angle-left"></i></div>
                <div class="home-slider-next swiper-button-next main-slider-nav d-md-flex d-none"><i
                        class="pe-7s-angle-right"></i></div>
                <!-- Swiper Navigation End -->

            </div>
        </div>
    </div>
    <!-- Hero/Intro Slider End -->

    <!-- Feature Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="feature-wrap">
                <div class="row row-cols-lg-4 row-cols-xl-auto row-cols-sm-2 row-cols-1 justify-content-between mb-n5">
                    <!-- Feature Start -->
                    <div class="col mb-5" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature">
                            <div class="icon text-primary align-self-center">
                                <img src="{{asset('client/assets/images/icons/feature-icon-2.png')}}" alt="Feature Icon">
                            </div>
                            <div class="content">
                                <h5 class="title">Free Shipping</h5>
                                <p>Free shipping on all order</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature End -->

                    <!-- Feature Start -->
                    <div class="col mb-5" data-aos="fade-up" data-aos-delay="500">
                        <div class="feature">
                            <div class="icon text-primary align-self-center">
                                <img src="{{asset('client/assets/images/icons/feature-icon-3.png')}}" alt="Feature Icon">
                            </div>
                            <div class="content">
                                <h5 class="title">Support 24/7</h5>
                                <p>Support 24 hours a day</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature End -->
                    <!-- Feature Start -->
                    <div class="col mb-5" data-aos="fade-up" data-aos-delay="700">
                        <div class="feature">
                            <div class="icon text-primary align-self-center">
                                <img src="{{asset('client/assets/images/icons/feature-icon-4.png')}}" alt="Feature Icon">
                            </div>
                            <div class="content">
                                <h5 class="title">Money Return</h5>
                                <p>Back guarantee under 5 days</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature End -->

                    <!-- Feature Start -->
                    <div class="col mb-5" data-aos="fade-up" data-aos-delay="900">
                        <div class="feature">
                            <div class="icon text-primary align-self-center">
                                <img src="{{asset('client/assets/images/icons/feature-icon-1.png')}}" alt="Feature Icon">
                            </div>
                            <div class="content">
                                <h5 class="title">Order Discount</h5>
                                <p>Onevery order over $150</p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Section End -->

    <!-- Banner Section Start -->
    <div class="section">
        <div class="container">

            <!-- Banners Start -->
       
            <!-- Banners End -->
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Product Section Start -->
    <div class="section section-padding mt-0">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <!-- Tab Start -->
                <div class="col-12">
                    <ul class="product-tab-nav nav justify-content-center mb-10 title-border-bottom mt-n3">
                        <li class="nav-item" data-aos="fade-up" data-aos-delay="300"><a class="nav-link active mt-3"
                                                                                        data-bs-toggle="tab" href="#tab-product-all">Sản phẩm mới</a></li>
                        <li class="nav-item" data-aos="fade-up" data-aos-delay="400"><a class="nav-link mt-3"
                                                                                        data-bs-toggle="tab" href="#tab-product-clothings">Bán chạy nhất</a></li>
                        <li class="nav-item" data-aos="fade-up" data-aos-delay="500"><a class="nav-link mt-3"
                                                                                        data-bs-toggle="tab" href="#tab-product-all">Giá tốt nhất</a></li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <!-- Section Title & Tab End -->

            <!-- Products Tab Start -->
            <div class="row">
                <div class="col">
                    <div class="tab-content position-relative">
                        <div class="tab-pane fade show active" id="tab-product-all">
                            <div class="product-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">

                                        @foreach($data_new_arrivals as $key => $value)
                                        <!-- Product Start -->

                                        <div class="swiper-slide product-wrapper">

                                            <!-- Single Product Start -->
                                            <div class="product product-border-left mb-10" data-aos="fade-up"
                                                 data-aos-delay="300">
                                                <div class="thumb">

                                                    <a href="{{route('product_detail', [$value->id])}}" class="image">

                                                        <img class="first-image"
                                                             src="{{asset('storage/'.json_decode($value->image)[0])}}"
                                                             alt="Product" />

                                                        <img class="second-image"
                                                             src="{{asset('storage/'.json_decode($value->image)[1])}}"
                                                             alt="Product" />

                                                    </a>
                                                    <div class="actions">
                                                        <a href="#" class="action wishlist"><i
                                                                class="pe-7s-like"></i></a>
                                                        <a href="#" class="action quickview" data-bs-toggle="modal"
                                                           data-bs-target="#exampleModalCenter"><i
                                                                class="pe-7s-search"></i></a>
                                                        <a href="#" class="action compare"><i
                                                                class="pe-7s-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <?php $brands = \App\Models\brands::find($value->id_brands)
                                                        ?>
                                                    <h4 class="sub-title"><a href="{{route('product_detail', [$value->id])}}">{{$brands->name}}</a></h4>
                                                    <h5 class="title"><a href="{{route('product_detail', [$value->id])}}">{{$value->name}}</a></h5>
                                                    <span class="ratings">
                                                        <span class="rating-wrap">
                                                            <span class="star" style="width: 100%"></span>
                                                        </span>
                                                        <span class="rating-num">(4)</span>
                                                    </span>
                                                    <span class="price">
                                                        <span class="new">{{number_format($value->sale_price, 0, ',', '.')}} VNĐ</span>
                                                        <span class="old">{{number_format($value->old_price, 0, ',', '.')}} VNĐ</span>
                                                    </span>
                                                    @if($user_check == true )
                                                    <form action="{{route('add_to_cart')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="amount" value="1">
                                                        <input type="hidden" name="data_product" value="{{json_encode($value)}}">
                                                        <button type="submit" class="btn btn-sm btn-outline-dark btn-hover-primary">Thêm vào giỏ hàng</button>
                                                    </form>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- Single Product End -->

                                        </div>
                                        <!-- Product End -->

                                        @endforeach

                                    </div>

                                    <!-- Swiper Pagination Start -->
                                    <div class="swiper-pagination d-md-none"></div>
                                    <!-- Swiper Pagination End -->

                                    <!-- Next Previous Button Start -->
                                    <div
                                        class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none">
                                        <i class="pe-7s-angle-right"></i></div>
                                    <div
                                        class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none">
                                        <i class="pe-7s-angle-left"></i></div>
                                    <!-- Next Previous Button End -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-product-clothings">
                            <div class="product-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">

                                        @foreach($data_best_sellers as $key => $value)
                                            <!-- Product Start -->
                                            <div class="swiper-slide product-wrapper">

                                                <!-- Single Product Start -->
                                                <div class="product product-border-left mb-10" data-aos="fade-up"
                                                     data-aos-delay="300">
                                                    <div class="thumb">

                                                        <a href="{{route('product_detail', [$value->id])}}" class="image">

                                                            <img class="first-image"
                                                                 src="{{asset('storage/'.json_decode($value->image)[0])}}"
                                                                 alt="Product" />

                                                            <img class="second-image"
                                                                 src="{{asset('storage/'.json_decode($value->image)[1])}}"
                                                                 alt="Product" />

                                                        </a>
                                                        <div class="actions">
                                                            <a href="#" class="action wishlist"><i
                                                                    class="pe-7s-like"></i></a>
                                                            <a href="#" class="action quickview" data-bs-toggle="modal"
                                                               data-bs-target="#exampleModalCenter"><i
                                                                    class="pe-7s-search"></i></a>
                                                            <a href="#" class="action compare"><i
                                                                    class="pe-7s-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                            <?php $brands = \App\Models\brands::find($value->id_brands)
                                                            ?>
                                                        <h4 class="sub-title"><a href="{{route('product_detail', [$value->id])}}">{{$brands->name}}</a></h4>
                                                        <h5 class="title"><a href="{{route('product_detail', [$value->id])}}">{{$value->name}}</a></h5>
                                                        <span class="ratings">
                                                        <span class="rating-wrap">
                                                            <span class="star" style="width: 100%"></span>
                                                        </span>
                                                        <span class="rating-num">(4)</span>
                                                    </span>
                                                        <span class="price">
                                                        <span class="new">{{number_format($value->sale_price, 0, ',', '.')}} VNĐ</span>
                                                        <span class="old">{{number_format($value->old_price, 0, ',', '.')}} VNĐ</span>
                                                    </span>
                                                        <button class="btn btn-sm btn-outline-dark btn-hover-primary">Thêm vào giỏ hàng</button>
                                                    </div>
                                                </div>
                                                <!-- Single Product End -->

                                            </div>
                                            <!-- Product End -->
                                        @endforeach

                                    </div>

                                    <!-- Swiper Pagination Start -->
                                    <div class="swiper-pagination d-md-none"></div>
                                    <!-- Swiper Pagination End -->

                                    <!-- Next Previous Button Start -->
                                    <div
                                        class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none">
                                        <i class="pe-7s-angle-right"></i></div>
                                    <div
                                        class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none">
                                        <i class="pe-7s-angle-left"></i></div>
                                    <!-- Next Previous Button End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Products Tab End -->
        </div>
    </div>
    <!-- Product Section End -->

    <!-- Banner Fullwidth Start -->
    
    <!-- Banner Fullwidth End -->

    <!-- Product List Start -->
  
    <!-- Product List End -->

    <!-- Banner Section Start -->
 
    <!-- Banner Section End -->

    <!-- Product Deal Section Start -->
    <div class="section section-padding mt-0 overflow-hidden">
        <div class="container">

            <!-- Section Title & Tab Start -->
            <div class="row">
                <!-- Tab Start -->
                <div class="col-12">
                    <div class="section-title-produt-tab-wrapper">
                        <div class="section-title m-0" data-aos="fade-right" data-aos-delay="300">
                            <h1 class="title">Ưu đãi hàng ngày</h1>
                        </div>
                        <ul class="product-tab-nav nav mt-n3" data-aos="fade-left" data-aos-delay="300">
                            <li class="nav-item"><a class="nav-link active mt-3" data-bs-toggle="tab"
                                                    href="#product-deal-all">Sản phẩm mới</a></li>
                            <li class="nav-item"><a class="nav-link mt-3" data-bs-toggle="tab"
                                                    href="#product-deal-clothings">Bán chạy nhất</a></li>
                            <li class="nav-item"><a class="nav-link mt-3" data-bs-toggle="tab"
                                                    href="#product-deal-all">Giá tốt nhất</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Tab End -->
            </div>
            <!-- Section Title & Tab End -->

            <!-- Products Tab Start -->
            <div class="row">
                <div class="col">
                    <div class="tab-content position-relative">
                        <div class="tab-pane fade show active" id="product-deal-all">
                            <div class="product-deal-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach($data_daily_deal as $key => $value)
                                        <!-- Product Start -->
                                        <div class="swiper-slide product-wrapper" data-aos="fade-right"
                                             data-aos-delay="600">

                                            <!-- Single Product Deal Start -->
                                            <div class="product single-deal-product product-border-left">
                                                <div class="thumb">
                                                    <a href="{{route('product_detail', [$value->id])}}" class="image">
                                                        <img src="{{asset('storage/'.json_decode($value->image)[0])}}"
                                                             alt="Product" />
                                                    </a>
                                                    <span class="badges">
                                                        <span class="sale">-30%</span>
                                                    </span>
                                                </div>
                                                <div class="content">
                                                    <p class="inner-desc">Nhanh lên! Ưu đãi kết thúc sau:</p>
                                                    <div class="countdown-area">
                                                        <div class="countdown-wrapper d-flex"
                                                             data-countdown="2023/08/20"></div>
                                                    </div>
                                                        <?php $brands = \App\Models\brands::find($value->id_brands)
                                                        ?>
                                                    <h4 class="sub-title"><a href="{{route('product_detail', [$value->id])}}"{{$brands->name}}</a></h4>
                                                    <h5 class="title"><a href="{{route('product_detail', [$value->id])}}">{{$value->name}}
                                                            </a></h5>
                                                    <span class="ratings">
                                                        <span class="rating-wrap">
                                                            <span class="star" style="width: 100%"></span>
                                                        </span>
                                                        <span class="rating-num">(4)</span>
                                                    </span>
                                                    <span class="price">
                                                        <span class="new">{{number_format($value->sale_price, 0, ',', '.')}} VNĐ</span>
                                                        <span class="old">{{number_format($value->old_price, 0, ',', '.')}} VNĐ</span>
                                                    </span>
                                                    @if($user_check == true )
                                                        <form action="{{route('add_to_cart')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="amount" value="1">
                                                            <input type="hidden" name="data_product" value="{{json_encode($value)}}">
                                                            <button type="submit" class="btn btn-sm btn-outline-dark btn-hover-primary">Thêm vào giỏ hàng</button>
                                                        </form>
                                                    @endif

                                                </div>
                                            </div>
                                            <!-- Single Product Deal End -->

                                        </div>
                                        <!-- Product End -->
                                        @endforeach

                                    </div>

                                    <!-- Swiper Pagination Start -->
                                    <div class="swiper-pagination d-md-none"></div>
                                    <!-- Swiper Pagination End -->

                                    <!-- Next Previous Button Start -->
                                    <div
                                        class="swiper-product-deal-next swiper-button-next swiper-button-white d-md-flex d-none">
                                        <i class="pe-7s-angle-right"></i></div>
                                    <div
                                        class="swiper-product-deal-prev swiper-button-prev swiper-button-white d-md-flex d-none">
                                        <i class="pe-7s-angle-left"></i></div>
                                    <!-- Next Previous Button End -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-deal-clothings">
                            <div class="product-deal-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach($data_daily_deal as $key => $value)
                                            <!-- Product Start -->
                                            <div class="swiper-slide product-wrapper" data-aos="fade-right"
                                                 data-aos-delay="600">

                                                <!-- Single Product Deal Start -->
                                                <div class="product single-deal-product product-border-left">
                                                    <div class="thumb">
                                                        <a href="{{route('product_detail', [$value->id])}}" class="image">
                                                            <img src="{{asset('storage/'.json_decode($value->image)[0])}}"
                                                                 alt="Product" />
                                                        </a>
                                                        <span class="badges">
                                                        <span class="sale">-30%</span>
                                                    </span>
                                                    </div>
                                                    <div class="content">
                                                        <p class="inner-desc">Nhanh lên! Ưu đãi kết thúc sau:</p>
                                                        <div class="countdown-area">
                                                            <div class="countdown-wrapper d-flex"
                                                                 data-countdown="2023/08/20"></div>
                                                        </div>
                                                            <?php $brands = \App\Models\brands::find($value->id_brands)
                                                            ?>
                                                        <h4 class="sub-title"><a href="{{route('product_detail', [$value->id])}}"{{$brands->name}}</a></h4>
                                                        <h5 class="title"><a href="{{route('product_detail', [$value->id])}}">{{$value->name}}
                                                            </a></h5>
                                                        <span class="ratings">
                                                        <span class="rating-wrap">
                                                            <span class="star" style="width: 100%"></span>
                                                        </span>
                                                        <span class="rating-num">(4)</span>
                                                    </span>
                                                        <span class="price">
                                                        <span class="new">{{number_format($value->sale_price, 0, ',', '.')}} VNĐ</span>
                                                        <span class="old">{{number_format($value->old_price, 0, ',', '.')}} VNĐ</span>
                                                    </span>
                                                        @if($user_check == true )
                                                            <form action="{{route('add_to_cart')}}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="amount" value="1">
                                                                <input type="hidden" name="data_product" value="{{json_encode($value)}}">
                                                                <button type="submit" class="btn btn-sm btn-outline-dark btn-hover-primary">Thêm vào giỏ hàng</button>
                                                            </form>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Single Product Deal End -->

                                            </div>
                                            <!-- Product End -->
                                        @endforeach

                                    </div>

                                    <!-- Swiper Pagination Start -->
                                    <div class="swiper-pagination d-md-none"></div>
                                    <!-- Swiper Pagination End -->

                                    <!-- Next Previous Button Start -->
                                    <div
                                        class="swiper-product-deal-next swiper-button-next swiper-button-white d-md-flex d-none">
                                        <i class="pe-7s-angle-right"></i></div>
                                    <div
                                        class="swiper-product-deal-prev swiper-button-prev swiper-button-white d-md-flex d-none">
                                        <i class="pe-7s-angle-left"></i></div>
                                    <!-- Next Previous Button End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Products Tab End -->

        </div>
    </div>
    <!-- Product Deal Section End -->

    <!-- Brand Logo Start -->
  
    <!-- Brand Logo End -->

    <!-- Blog Section Start -->
   
    <!-- Blog Section End -->
@endsection
