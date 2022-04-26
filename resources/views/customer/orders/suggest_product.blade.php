@extends('layouts.customer')
@section('content')
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Suggested Products</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>

                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        @foreach ($products as $product)
                        <a href="#">
                        <div class="col-xxl-3 col-lg-3 col-sm-6">
                            <div class="card card-bordered product-card">
                                <div class="product-thumb bg-light pt-5">
                                    <a href="{{ route('product.detail',$product->id) }}l">
                                        <img  src="{{ $product->images->image }}" alt=""  >
                                    </a>
                                    <ul class="product-badges">
                                        <li><span class="badge badge-success">New</span></li>
                                    </ul>

                                </div>
                                <div class="card-inner text-center">
                                    <ul class="product-tags">
                                        <li><a href="{{ route('product.detail',$product->id) }}">Item # {{ $product->product_id }}</a></li>
                                    </ul>
                                    <span class="product-title"><a href="{{ route('product.detail',$product->id) }}"><b>{{ $product->title }}</b></a></span>
                                    <div class="product-price text-primary h5">{{ $product->price }}</div>
                                </div>
                            </div>
                        </div>
                        </a>
                        @endforeach
                        <!-- .col -->
                        <!-- .col -->
                    </div>
                </div><!-- .nk-block -->

            </div>
        </div>
    </div>
@endsection
