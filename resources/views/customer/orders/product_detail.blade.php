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
                                        @if ($products->price != 0 )
                                        <h4 class="product-price text-primary">{{ $products->price }} </h4>

                                        @else
                                        <h4 class="product-price text-primary">Price Not Available </h4>

                                        @endif

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
                                            <div class="amount">{{ $products->availability }}</div>
                                        </div>
                                        <div class="product-excrept text-soft">
                                            <p class="lead">{{ $products->description }}  </p>
                                        </div>

                                        <p>Quantity:</p>
                                        <div class="product-meta">
                                            <ul class="flex-wrap ailgn-center g-2 ">
                                                {{-- <li class="w-140px">
                                                    <div class="form-control-wrap number-spinner-wrap">
                                                        <button class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></button>
                                                        <input type="number" class="form-control number-spinner" value="0">
                                                        <button class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></button>
                                                    </div>
                                                </li> --}}
                                                <li>
                                                    @if ($products->price != 0 )
                                                    <a href="#" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex"><span>Add to Cart</span></a>

                                                    <button class="btn btn-icon btn-trigger text-primary"><em class="icon ni ni-heart"></em></button>

                                                    @else
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                        Call for Price
                                                      </button>
                                                    @endif
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
                       @foreach ($r_product as $product)


                        <div class="col">
                            <div class="card card-bordered product-card">
                                <div class="product-thumb bg-light">
                                    <a href="#">
                                        <img src="{{asset($product->images->image)}}"  class=" py-5  px-5" alt="">
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
                                        <li><a href="#">Item # :{{ $product->product_id }}</a></li>
                                    </ul>
                                    <h5 class="product-title"><a href="#">:{{ $products->title }}</a></h5>
                                    <div class="product-price text-primary h5">:{{ $products->price }}</div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </div>

                    <div class="nk-block">
                        <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                            <div class="nk-block-head d-flex ">
                                <div class="nk-block-head-content mr-5">
                                    <h5 class="nk-block-title">Your Cart (1 item)</h5>
                                </div>

                            </div>
                            <hr class="hr border-dark">
                            <div class="row pb-5">
                                <div class="col-lg-6">
                                    <div class="product-gallery mr-xl-1 mr-xxl-5" style="margin-top: 30px">
                                        <!-- <div class="slider-init" id="sliderFor" data-slick='{"arrows": false, "fade": true, "asNavFor":"#sliderNav", "slidesToShow": 1, "slidesToScroll": 1}'> -->
                                            <div class="slider-item rounded" >
                                                <img src="{{ $products->images->image }}" alt="">
                                            </div>
                                    </div><!-- .product-gallery -->
                                </div><!-- .col -->
                                <div class="col-lg-6">
                                    <div class="product-info mt-5 mr-xxl-5">

                                        <h6 class="product-title">:{{ $products->title }}</h6>
                                        <p class="text-primary">:{{ $products->price}} </p>

                                        <!-- .product-meta -->
                                    </div><!-- .product-info -->
                                </div><!-- .col -->
                            </div>
                            <hr class="hr border-dark">
                            <div class="nk-block">
                                <div class="row g-3">

                                    <div class="d-flex  ">
                                        <div><p>SUBTOTAL:</p></div>
                                   <div><p>:{{ $products->price }}</p></div>
                                    </div>
                                    <div class="col-12">
                                        <a href="{{ route('checkout', $products->id) }}" > <button class="btn btn-primary"><span>Check out</span></button></a>
                                    </div>
                                </div>
                            </div><!-- .nk-block -->
                        </div>
                    </div><!-- .nk-block -->
                </div>
//modal
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Call For Price</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card text-white ">
                <div class="card-inner ">
                   <div class="d-flex ">
                      <div class="user-avatar bg-lighter p-5 border-dark">
                         <em class="icon ni ni-call"></em>
                      </div>
                      <div  class="pl-4 py-2">
                         <p class=" text-dark">Call us direct at</p>
                         <h5 class=" text-dark">+45 52 67 29 31</h5>
                      </div>
                   </div>
                </div>
             </div>
        </div>

      </div>
    </div>
  </div>
@endsection
