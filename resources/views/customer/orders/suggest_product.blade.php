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
                                        @if($product->images != null)
                                        <img src="{{asset($product->images->image)}}"  class="rounded w-50% h-20% py-4 px-1">
                                        @else
                                         No image
                                        @endif
                                    </a>
                                </div>
                                <div class="card-inner text-center">
                                    <ul class="product-tags">
                                        <li><a href="{{ route('product.detail',$product->id) }}">Item # {{ $product->product_id }}</a></li>
                                    </ul>
                                    <span class="product-title"><a href="{{ route('product.detail',$product->id) }}"><b>{{ $product->title }}</b></a></span>
                                    <div class="product-price text-primary h5">
                                        @if ($product->price != 0 )
                                        <a href="#" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex"><span>Add to Cart</span></a>

                                        <button class="btn btn-icon btn-trigger text-primary"><em class="icon ni ni-heart"></em></button>

                                        @else
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                            Call for Price
                                          </button>
                                        @endif

                                        </div>
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
