@extends('layouts.customer')
@section('content')
<div class="container-fluid">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">

                    <div class="col-12 ml-3 ">

                        <div class="nk-block-between g-3">
                            <span>Purchase History</span>
                             <!-- <div class="nk-block-head-content"> -->
                                <!-- <p ><b>Purchase History</b></p> -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="more-options">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-search"></em>
                                                    </div>
                                                    <input type="text" class="form-control" id="default-04" placeholder="Search ">
                                                </div>
                                            </li>
                                            <!-- <li>
                                                    <div class="form-control-wrap  d-flex">
                                                        <span class="mr-1">Type</span>
                                                        <div class="form-control-select">
                                                            <select class="form-control " >
                                                                <option value="">Order</option>
                                                                <option value="1">1</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                            </li> -->
                                            <li>
                                                    <div class="form-control-wrap d-flex ">
                                                        <span class="mr-1">Order</span>
                                                        <div class="form-control-select">
                                                            <select class="form-control " >
                                                                <option value="">SQ-00000</option>
                                                                <option value="1">SQ-00000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                            </li>
                                            <li>
                                                    <div class="form-control-wrap d-flex ">
                                                        <span class="mr-1" >From</span>
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control date-picker">
                                                            </div>

                                                        </div>
                                                    </div>
                                            </li>
                                            <li>
                                                    <div class="form-control-wrap  d-flex">
                                                        <span class="mr-1">To</span>
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control date-picker">
                                                            </div>

                                                        </div>
                                                    </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                    </div>

                        <!-- <div class="nk-block-head-content">
                            <a href="html/ecommerce/customers.html" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            <a href="html/ecommerce/customers.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                        </div> -->

                    </div>

              <!-- .nk-block-between -->
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="nk-tb-list is-separate mb-3">
                    <div class="nk-tb-item nk-tb-head">
                        <div class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid">
                                <label class="custom-control-label" for="uid"></label>
                            </div>
                        </div>
                        <div class="nk-tb-col"><span class="sub-text">Order No</span></div>
                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Order Date</span></div>
                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Bill-to Name</span></div>
                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Total</span></div>

                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Action</span></div>

                    </div><!-- .nk-tb-item -->
                    <div class="nk-tb-item">
                        <div class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid1">
                                <label class="custom-control-label" for="uid1"></label>
                            </div>
                        </div>
                        <div class="nk-tb-col tb-col-md">
                            <span class="text-primary">SQ-17215812</span>
                        </div>

                        <div class="nk-tb-col tb-col-md">
                            <span>20/10/2022 </span>
                        </div>
                        <div class="nk-tb-col tb-col-lg">
                            <span>B2B Customer</span>
                        </div>
                        <div class="nk-tb-col tb-col-lg">
                            <span>$ 00.00</span>
                        </div>

                        <div class="nk-tb-col tb-col-md">
                            <span class="tb-status text-info">active</span>
                        </div>
                        <div class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown ">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger " data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right ">
                                            <ul class="link-list-opt no-bdr">
                                                <!-- <li><a href="html/ecommerce/customer-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Orders</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend</span></a></li> -->
                                                <li><a href="html/ecommerce/customer-details.html"><em class="icon ni ni-eye"></em><span>View Selected</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Selected</span></a></li>
                                                <!-- <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Grade the Customer</span></a></li> -->
                                                <!-- <li class="nk-block-tools-opt">
                                                    <a href="#" data-target="addProduct" class="toggle btn btn-icon btn-primary d-md-none"><em class="icon ni ni-activity-round"></em></a>
                                                    <a href="#" data-target="addProduct" class="toggle btn  d-none d-md-inline-flex"><em class="icon ni ni-activity-round"></em><span>Grade the Customer</span></a>
                                                </li> -->

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .nk-tb-item -->
                    <!-- .nk-tb-item -->
                    <div class="nk-tb-item">
                        <div class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid1">
                                <label class="custom-control-label" for="uid1"></label>
                            </div>
                        </div>
                        <div class="nk-tb-col tb-col-md">
                            <span class="text-primary">SQ-17215812</span>
                        </div>

                        <div class="nk-tb-col tb-col-md">
                            <span>20/10/2022 </span>
                        </div>
                        <div class="nk-tb-col tb-col-lg">
                            <span>B2B Customer</span>
                        </div>
                        <div class="nk-tb-col tb-col-lg">
                            <span>$ 00.00</span>
                        </div>

                        <div class="nk-tb-col tb-col-md">
                            <span class="tb-status text-info">active</span>
                        </div>
                        <div class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown ">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger " data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right ">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="html/ecommerce/customer-details.html"><em class="icon ni ni-eye"></em><span>View Selected</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Selected</span></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nk-tb-item">
                        <div class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid1">
                                <label class="custom-control-label" for="uid1"></label>
                            </div>
                        </div>
                        <div class="nk-tb-col tb-col-md">
                            <span class="text-primary">SQ-17215812</span>
                        </div>

                        <div class="nk-tb-col tb-col-md">
                            <span>20/10/2022 </span>
                        </div>
                        <div class="nk-tb-col tb-col-lg">
                            <span>B2B Customer</span>
                        </div>
                        <div class="nk-tb-col tb-col-lg">
                            <span>$ 00.00</span>
                        </div>

                        <div class="nk-tb-col tb-col-md">
                            <span class="tb-status text-info">active</span>
                        </div>
                        <div class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown ">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger " data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right ">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="html/ecommerce/customer-details.html"><em class="icon ni ni-eye"></em><span>View Selected</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Selected</span></a></li>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nk-tb-item">
                        <div class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid1">
                                <label class="custom-control-label" for="uid1"></label>
                            </div>
                        </div>
                        <div class="nk-tb-col tb-col-md">
                            <span class="text-primary">SQ-17215812</span>
                        </div>

                        <div class="nk-tb-col tb-col-md">
                            <span>20/10/2022 </span>
                        </div>
                        <div class="nk-tb-col tb-col-lg">
                            <span>B2B Customer</span>
                        </div>
                        <div class="nk-tb-col tb-col-lg">
                            <span>$ 00.00</span>
                        </div>

                        <div class="nk-tb-col tb-col-md">
                            <span class="tb-status text-info">active</span>
                        </div>
                        <div class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown ">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger " data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right ">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="html/ecommerce/customer-details.html"><em class="icon ni ni-eye"></em><span>View Selected</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Selected</span></a></li>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nk-tb-item">
                        <div class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid1">
                                <label class="custom-control-label" for="uid1"></label>
                            </div>
                        </div>
                        <div class="nk-tb-col tb-col-md ">
                            <span class="text-primary">SQ-17215812</span>
                        </div>

                        <div class="nk-tb-col tb-col-md">
                            <span>20/10/2022 </span>
                        </div>
                        <div class="nk-tb-col tb-col-lg">
                            <span>B2B Customer</span>
                        </div>
                        <div class="nk-tb-col tb-col-lg">
                            <span>$ 00.00</span>
                        </div>

                        <div class="nk-tb-col tb-col-md">
                            <span class="tb-status text-info">active</span>
                        </div>
                        <div class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown ">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger " data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right ">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="html/ecommerce/customer-details.html"><em class="icon ni ni-eye"></em><span>View Selected</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Selected</span></a></li>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .nk-tb-list -->
                <div class="card">
                    <div class="card-inner">
                        <div class="nk-block-between-md g-3">
                            <div class="g">
                                <ul class="pagination justify-content-center justify-content-md-start">
                                    <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-right"></em></a></li>
                                </ul><!-- .pagination -->
                            </div>
                            <div class="g">
                                <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                    <div>Page</div>
                                    <div>
                                        <select class="form-select " data-search="on" data-dropdown="xs center">
                                            <option value="page-1">1</option>
                                            <option value="page-2">2</option>
                                            <option value="page-4">4</option>
                                            <option value="page-5">5</option>
                                            <option value="page-6">6</option>
                                            <option value="page-7">7</option>
                                            <option value="page-8">8</option>
                                            <option value="page-9">9</option>
                                            <option value="page-10">10</option>
                                            <option value="page-11">11</option>
                                            <option value="page-12">12</option>
                                            <option value="page-13">13</option>
                                            <option value="page-14">14</option>
                                            <option value="page-15">15</option>
                                            <option value="page-16">16</option>
                                            <option value="page-17">17</option>
                                            <option value="page-18">18</option>
                                            <option value="page-19">19</option>
                                            <option value="page-20">20</option>
                                        </select>
                                    </div>
                                    <div>OF 100</div>
                                </div>
                            </div><!-- .pagination-goto -->
                        </div><!-- .nk-block-between -->
                    </div>
                </div>
            </div><!-- .nk-block -->
            <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h5 class="nk-block-title"> Grade the Customer</h5>
                        <div class="nk-block-des">
                            <p>Add information to edit grade.</p>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="product-title">Grades</label>
                                <div class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="com-email">
                                        <label class="custom-control-label" for="com-email"><strong>A+</strong></label>
                                    </div>
                                    <div class="custom-control custom-control-sm custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="com-email">
                                        <label class="custom-control-label" for="com-email"><strong>A</strong></label>
                                    </div>
                                    <div class="custom-control custom-control-sm custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="com-email">
                                        <label class="custom-control-label" for="com-email"><strong>B+</strong></label>
                                    </div>
                                    <div class="custom-control custom-control-sm custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="com-email">
                                        <label class="custom-control-label" for="com-email"><strong>C</strong></label>
                                    </div>
                                    <div class="custom-control custom-control-sm custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="com-email">
                                        <label class="custom-control-label" for="com-email"><strong>D</strong></label>
                                    </div>
                                    <div class="custom-control custom-control-sm custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="com-email">
                                        <label class="custom-control-label" for="com-email"><strong>F</strong></label>
                                    </div>

                                </div>

                                <!-- <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="product-title">
                                </div> -->
                            </div>
                        </div>

                        <div class="col-12 ">
                            <!-- <button class="btn btn-primary float-right"> <span>Next</span></button> -->

                                <li><a href="html/ecommerce/Customerprofile.html" class="btn btn-primary d-none d-md-inline-flex float-right" ><span>Next</span></a></li>
                                <!-- <a href="html/ecommerce/supports.html" data-target="addProduct"  class="toggle btn btn-icon btn-primary d-md-none"></a> -->
                                <!-- <a href="html/ecommerce/Customerprofile.html" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex float-right"><span>Next</span></a> -->

                        </div>
                    </div>
                </div><!-- .nk-block -->
            </div>

        </div>
    </div>
</div>
@endsection
