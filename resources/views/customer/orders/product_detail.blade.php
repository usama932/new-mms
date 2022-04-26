@extends('layouts.customer')
@section('content')
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Product Details</h3>
                            <div class="nk-block-des text-soft">

                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <a href="{{ route('suggest') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                 </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <div class="row pb-5">
                                <div class="col-lg-6">
                                    <div class="product-gallery mr-xl-1 mr-xxl-5">
                                        <div class="slider-init" id="sliderFor" data-slick='{"arrows": false, "fade": true, "asNavFor":"#sliderNav", "slidesToShow": 1, "slidesToScroll": 1}'>

                                            <div class="slider-item rounded">
                                                <img src="{{ $products->images->image }}" class=" py-5  px-5"  alt="">
                                            </div>
                                        </div><!-- .slider-init -->
                                        <!-- .slider-nav -->
                                    </div><!-- .product-gallery -->
                                </div><!-- .col -->
                                <div class="col-lg-6">
                                    <div class="product-info mt-5 mr-xxl-5">
                                        <h4 class="product-price text-primary">$78.00 <small class="text-muted fs-14px">$98.00</small></h4>
                                        <small class="product-title"><b>{{ $products->title }}</b></small>
                                        <p>Item # :{{ $products->product_id }}</p>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li><em class="icon ni ni-star-fill"></em></li>
                                                <li><em class="icon ni ni-star-fill"></em></li>
                                                <li><em class="icon ni ni-star-fill"></em></li>
                                                <li><em class="icon ni ni-star-fill"></em></li>
                                                <li><em class="icon ni ni-star-half"></em></li>
                                            </ul>
                                            <div class="amount">(10 reviews)</div>
                                        </div>
                                        <div class="product-excrept text-soft">
                                            <p class="lead">{{ $products->description }}  </p>
                                        </div>

                                        <p>Quantity:</p>
                                        <div class="product-meta">
                                            <ul class="flex-wrap ailgn-center g-2 ">
                                                <li class="w-140px">
                                                    <div class="form-control-wrap number-spinner-wrap">
                                                        <button class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></button>
                                                        <input type="number" class="form-control number-spinner" value="0">
                                                        <button class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex"><span>Add to Cart</span></a>

                                                    <button class="btn btn-icon btn-trigger text-primary"><em class="icon ni ni-heart"></em></button>
                                                </li>

                                            </ul>
                                        </div><!-- .product-meta -->
                                    </div><!-- .product-info -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <hr class="hr border-light">
                           <!-- .row -->
                        </div>
                    </div>
                </div><!-- .nk-block -->
                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Related Products</h3>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="slider-init row" data-slick='{"slidesToShow": 4, "centerMode": false, "slidesToScroll": 1, "infinite":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 3}},{"breakpoint": 992,"settings":{"slidesToShow": 2}}, {"breakpoint": 576,"settings":{"slidesToShow": 1}} ]}'>
                        <div class="col">
                            <div class="card card-bordered product-card">
                                <div class="product-thumb bg-light">
                                    <a href="#">
                                        <img src="./images/product1.png"  class=" py-5  px-5" alt="">
                                    </a>
                                    <ul class="product-badges">
                                        <li><span class="badge badge-success">New</span></li>
                                    </ul>
                                    <ul class="product-actions">
                                        <li><a href="#"><em class="icon ni ni-cart"></em></a></li>
                                        <li><a href="#"><em class="icon ni ni-heart"></em></a></li>
                                    </ul>
                                </div>
                                <div class="card-inner text-center">
                                    <ul class="product-tags">
                                        <li><a href="#">Item # : HQ83621</a></li>
                                    </ul>
                                    <h5 class="product-title"><a href="#">Peace Silver Pendent</a></h5>
                                    <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$350</small> $324</div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col">
                            <div class="card card-bordered product-card">
                                <div class="product-thumb bg-light">
                                    <a href="#">
                                        <img class=" py-5  px-4" src="./images/product1.png" alt="">
                                    </a>
                                    <ul class="product-actions">
                                        <li><a href="#"><em class="icon ni ni-cart"></em></a></li>
                                        <li><a href="#"><em class="icon ni ni-heart"></em></a></li>
                                    </ul>
                                </div>
                                <div class="card-inner text-center">
                                    <ul class="product-tags">
                                        <li><a href="#">Item # : HQ83621</a></li>
                                    </ul>
                                    <h5 class="product-title"><a href="#">Peace Silver Pendent</a></h5>
                                    <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$209</small> $119</div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col">
                            <div class="card card-bordered product-card">
                                <div class="product-thumb bg-light">
                                    <a href="#">
                                        <img class=" py-5  px-4" src="./images/product1.png" alt="">
                                    </a>
                                    <ul class="product-badges">
                                        <li><span class="badge badge-danger">Hot</span></li>
                                    </ul>
                                    <ul class="product-actions">
                                        <li><a href="#"><em class="icon ni ni-cart"></em></a></li>
                                        <li><a href="#"><em class="icon ni ni-heart"></em></a></li>
                                    </ul>
                                </div>
                                <div class="card-inner text-center">
                                    <ul class="product-tags">
                                        <li><a href="#">Item # : HQ83621</a></li>
                                    </ul>
                                    <h5 class="product-title"><a href="#">Peace Silver Pendent</a></h5>
                                    <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$129</small> $89</div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col">
                            <div class="card card-bordered product-card">
                                <div class="product-thumb bg-light">
                                    <a href="#">
                                        <img class=" py-5  px-4" src="./images/product1.png" alt="">
                                    </a>
                                    <ul class="product-actions">
                                        <li><a href="#"><em class="icon ni ni-cart"></em></a></li>
                                        <li><a href="#"><em class="icon ni ni-heart"></em></a></li>
                                    </ul>
                                </div>
                                <div class="card-inner text-center">
                                    <ul class="product-tags">
                                        <li><a href="#">Item # : HQ83621</a></li>
                                    </ul>
                                    <h5 class="product-title"><a href="#">Peace Silver Pendent</a></h5>
                                    <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$169</small> $120</div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col">
                            <div class="card card-bordered product-card">
                                <div class="product-thumb bg-light">
                                    <a href="#">
                                        <img class=" py-5  px-4" src="./images/product1.png" alt="">
                                    </a>
                                    <ul class="product-actions">
                                        <li><a href="#"><em class="icon ni ni-cart"></em></a></li>
                                        <li><a href="#"><em class="icon ni ni-heart"></em></a></li>
                                    </ul>
                                </div>
                                <div class="card-inner text-center">
                                    <ul class="product-tags">
                                        <li><a href="#">Item # : HQ83621</a></li>
                                    </ul>
                                    <h5 class="product-title"><a href="#">Peace Silver Pendent</a></h5>
                                    <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$109</small> $78</div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col">
                            <div class="card card-bordered product-card">
                                <div class="product-thumb bg-light ">
                                    <a href="#">
                                        <img class=" py-5  px-4" src="./images/product1.png" alt="">
                                    </a>
                                    <ul class="product-actions">
                                        <li><a href="#"><em class="icon ni ni-cart"></em></a></li>
                                        <li><a href="#"><em class="icon ni ni-heart"></em></a></li>
                                    </ul>
                                </div>
                                <div class="card-inner text-center">
                                    <ul class="product-tags">
                                        <li><a href="#">Item # : HQ83621</a></li>
                                    </ul>
                                    <h5 class="product-title"><a href="#">Peace Silver Pendent</a></h5>
                                    <div class="product-price text-primary h5">$329</div>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div>
                </div>


            </div>
        </div>
    </div>
     <!-- <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">New Product</h5>
                            <div class="nk-block-des">
                                <p>Add information and add new product.</p>
                            </div>
                        </div>
                    </div>.nk-block-head -->
                    <div class="nk-block">



                        <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                            <div class="nk-block-head d-flex ">
                                <div class="nk-block-head-content mr-5">
                                    <h5 class="nk-block-title">Your Cart (1 item)</h5>
                                </div>
                                <div class="nk-block-head-content ml-5">
                                    <h5 class="nk-block-title"><em class="icon ni ni-cart"></em></h5>
                                </div>
                            </div>
                            <hr class="hr border-dark">
                            <div class="row pb-5">
                                <div class="col-lg-6">
                                    <div class="product-gallery mr-xl-1 mr-xxl-5">
                                        <!-- <div class="slider-init" id="sliderFor" data-slick='{"arrows": false, "fade": true, "asNavFor":"#sliderNav", "slidesToShow": 1, "slidesToScroll": 1}'> -->
                                            <div class="slider-item rounded">
                                                <img src="./images/product1.png" class="rounded w-150 bg-light py-5 " alt="">
                                            </div>
                                    </div><!-- .product-gallery -->
                                </div><!-- .col -->
                                <div class="col-lg-6">
                                    <div class="product-info mt-5 mr-xxl-5">

                                        <h6 class="product-title">Peace Silver Pendent</h6>
                                        <p class="text-primary">$78.00 </p>
                                        <div class="product-meta">
                                            <ul class="flex-wrap ailgn-center g-2 pt-1 ">
                                                <li class="w-140px d-flex">
                                                    <div class="form-control-wrap number-spinner-wrap">
                                                        <button class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></button>
                                                        <input type="number" class="form-control number-spinner" value="0">
                                                        <button class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></button>

                                                    </div>
                                                    <div>
                                                        <button class="btn btn-icon btn-trigger text-danger"><em class="icon ni ni-trash"></em></button>
                                                    </div>

                                            </ul>
                                        </div>

                                        <!-- .product-meta -->
                                    </div><!-- .product-info -->
                                </div><!-- .col -->
                            </div>
                            <hr class="hr border-dark">
                            <div class="nk-block">
                                <div class="row g-3">

                                    <div class="d-flex  ">
                                        <div><p>SUBTOTAL:</p></div>
                                   <div><p>$78.00</p></div>
                                    </div>

                                    <div class="d-flex  ">
                                        <div><p>TAX:</p></div>
                                   <div><p>$19</p></div>
                                    </div>
                                    <div class="d-flex  ">
                                        <div><p>Shipping</p></div>
                                   <div><p>$19</p></div>
                                    </div>
                                    <div class="col-12">
                                        <a href="html/ecommerce/Checkout.html" > <button class="btn btn-primary"><span>Check out</span></button></a>
                                    </div>
                                </div>
                            </div><!-- .nk-block -->
                        </div>
                    </div><!-- .nk-block -->
                </div>

@endsection
