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
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-right">
                                                    <em class="icon ni ni-search"></em>
                                                </div>
                                                <input type="text" class="form-control" id="default-04" placeholder="Search">
                                            </div>
                                        </li>

                                        <li class="nk-block-tools-opt">
                                            <a href="#" data-target="addProduct" class="toggle btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a href="#" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-histroy"></em><span>Purchase History</span></a>
                                        </li>
                                        <li class="nk-block-tools-opt">
                                            <a href="#" data-target="addProduct" class="toggle btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a href="#" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-cart"></em><span>Your Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-xxl-3 col-lg-3 col-sm-6">
                            <div class="card card-bordered product-card">
                                <div class="product-thumb bg-light pt-5">
                                    <a href="html/ecommerce/product-detail.html">
                                        <img  src="./images/product1.png" alt=""  >
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
                                    <span class="product-title"><a href="html/ecommerce/product-detail.html"><b>Peace Silver Pendent</b></a></span>
                                    <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$98.00</small>$78.00</div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-xxl-3 col-lg-3 col-sm-6">
                            <div class="card card-bordered product-card">
                                <div class="product-thumb bg-light pt-5 pb-5">
                                    <a href="html/ecommerce/product-detail.html">
                                        <img  src="./images/product2.png" alt=""  >
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
                                    <span class="product-title"><a href="html/product-detail.html"><b>Gold Rings</b></a></span>
                                    <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$98.00</small>$78.00</div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-xxl-3 col-lg-3 col-sm-6">
                            <div class="card card-bordered product-card">
                                <div class="product-thumb bg-light pt-5 ">
                                    <a href="html/ecommerce/product-detail.html">
                                        <img  src="./images/Products.png" alt="" class="py-3"  >
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
                                    <span class="product-title"><a href="html/product-detail.html"><b>Gold Rings</b></a></span>
                                    <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$129</small> $89</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-3 col-sm-6">
                            <div class="card card-bordered product-card">
                                <div class="product-thumb bg-light pt-5">
                                    <a href="html/ecommerce/product-detail.html">
                                        <img  src="./images/product 3.png" alt="" class="py-2" >
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
                                    <span class="product-title"><a href="html/product-detail.html"><b>Peace Silver Pendent</b></a></span>
                                    <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$129</small> $89</div>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div>
                    <div class="row g-gs">
                        <div class="col-xxl-3 col-lg-3 col-sm-6">
                            <div class="card card-bordered product-card">
                                <div class="product-thumb bg-light pt-5">
                                    <a href="html/ecommerce/product-detail.html">
                                        <img  src="./images/product1.png" alt=""  class="py-4" >
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
                                    <span class="product-title"><a href="html/product-details.html"><b>Peace Silver Pendent</b></a></span>
                                    <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$98.00</small>$78.00</div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-xxl-3 col-lg-3 col-sm-6">
                            <div class="card card-bordered product-card">
                                <div class="product-thumb bg-light py-5">
                                    <a href="html/ecommerce/product-detail.html">
                                        <img src="./images/product2.png" alt=""  class="py-4" >
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
                                    <span class="product-title"><a href="html/product-detail.html"><b>Gold Rings</b></a></span>
                                    <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$98.00</small>$78.00</div>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-xxl-3 col-lg-3 col-sm-6">
                            <div class="card card-bordered product-card">
                                <div class="product-thumb bg-light py-5">
                                    <a href="html/ecommerce/product-detail.html">
                                        <img  src="./images/Products.png" alt=""  class="py-3" >
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
                                    <span class="product-title"><a href="html/product-detail.html"><b>Gold Rings</b></a></span>
                                    <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$129</small> $89</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-3 col-sm-6">
                            <div class="card card-bordered product-card">
                                <div class="product-thumb bg-light py-5">
                                    <a href="html/ecommerce/product-detail.html">
                                        <img  src="./images/product 3.png" alt=""  class="py-2">
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
                                    <span class="product-title"><a href="html/product-detail.html"><b>Peace Silver Pendent</b></a></span>
                                    <div class="product-price text-primary h5"><small class="text-muted del fs-13px">$129</small> $89</div>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div>
                </div><!-- .nk-block -->

            </div>
        </div>
    </div>
@endsection
