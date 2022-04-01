@extends('layouts.staff')
@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title page-title">Dashboard</h4>
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDefault">Modal Default</button> -->
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="row g-gs">
           <!-- .col -->
            <div class="col-xxl-6">
                <div class="row g-gs">
                    <div class="col-xxl-12 col-md-6">
                        <div class="card">
                            <div class="nk-ecwg nk-ecwg3">
                                <div class="card-inner pb-4">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6  style="color:#488A99" class="title">Orders</h6>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="data-group">
                                            <div  style="color:#AC3E31" class="amount">320</div>
                                            <div class="info text-right"><span  class="change up "  ><em class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs. this month</span></div>
                                        </div>
                                    </div>
                                </div><!-- .card-inner -->
                                <div class="nk-ecwg3-ck">
                                    <canvas class="ecommerce-line-chart-s1" id="totalOrders"></canvas>
                                </div>
                            </div>

                        </div>
                        <div class="card ">
                            <div class="nk-ecwg nk-ecwg3">
                                <div class="card-inner pb-4">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 style="color:#488A99" class="title">Customers</h6>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="data-group">
                                            <div  style="color:#DBAE58" class="amount">320</div>
                                            <div  class="info text-right"><span  style="color: #AC3E31;"  class="change up "><em  class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs. this month</span></div>
                                        </div>
                                    </div>
                                </div><!-- .card-inner -->
                                <div class="nk-ecwg3-ck">
                                    <canvas class="ecommerce-line-chart-s1" id="totalCustomers"></canvas>
                                </div>
                            </div><!-- .nk-ecwg -->
                        </div>
                    </div>
                    <!-- <div class="col-xxl-12 col-md-6 pt-5"> -->
                        <div class=" col-md-6">
                            <div class="card    h-5 ">
                                 <div class="d-flex">
                                    <div class="nk-msg-media user-avatar bg-white mt-3 mx-3">
                                        <img src="./images/product2.png" alt="">
                                    </div>
                                 <p style="color: #484848;" class="mt-3"><b style="color: #DBAE58;font-size: 15px;">Gold</b><br><small> Current $31043<p  style="color: #AC3E31;font-size: medium;padding-top:2.5rem; padding-left: 5px;">(+6%)</p></small> </p>
                                </div>
                            </div>
                            <div class="card    h-5">
                                <div class="d-flex">
                                   <div class="nk-msg-media user-avatar bg-white mt-3 mx-3">
                                       <img src="./images/platinum.PNG" alt="">
                                   </div>
                                   <p class="mt-3"><b style="color: #DBAE58;font-size: 15px;">Platinum</b><br><small> Current $31043<p  style="color: #AC3E31;font-size: medium;padding-top:2.5rem; padding-left: 5px;">(+6%)</p></small> </p>
                               </div>
                           </div>
                           <div class="card    h-5">
                           <div class="d-flex">
                               <div class="nk-msg-media user-avatar bg-white mt-3 mx-3">
                                   <img src="./images/silver.PNG" alt="">
                               </div>
                               <p class="mt-3"><b style="color: #DBAE58;font-size: 15px;">Silver</b><br><small> Current $31043<p style="color: #AC3E31;font-size: medium;padding-top:2.5rem; padding-left: 5px;">(+6%)</p></small> </p>
                           </div>
                           </div>
                               <div class="card    h-5">
                              <div class="d-flex">
                            <div class="nk-msg-media user-avatar bg-white mt-3 mx-3">
                                <img src="./images/silver.PNG" alt="">
                            </div>
                            <p class="mt-3"><b style="color: #DBAE58;font-size: 15px;">Palladium</b><br><small> Current $31043<p  style="color: #AC3E31;font-size: medium;padding-top:2.5rem; padding-left: 5px;">(+6%)</p></small> </p>

                             </div>
                           </div>
                        </div>
                    <!-- </div> -->


                    <!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
            <div class="col-xxl-8">
                <div class="card card-full">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Queries</h6>
                            </div>
                        </div>
                    </div>
                    <div class="nk-tb-list mt-n2">
                        <div class="nk-tb-item nk-tb-head">
                            <div class="nk-tb-col tb-col-sm text-primary "><span style="color: #DBAE58;"><strong>Customer</strong></span></div>
                            <div class="nk-tb-col tb-col-md text-primary"><span style="color: #DBAE58;"><strong>Title</strong></span></div>
                            <div class="nk-tb-col text-primary"><span  style="color: #DBAE58;" class="d-none d-sm-inline"><strong>Status</strong></span></div>
                            <div class="nk-tb-col text-primary"><span style="color: #DBAE58;" class="d-none d-sm-inline"><strong>Action</strong></span></div>
                        </div>
                        <div class="nk-tb-item">
                            <div class="nk-tb-col tb-col-sm">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-danger-dim">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-name">
                                        <span class="tb-lead">lorem ipsum</span>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="tb-sub">lorem ipsum is a sit amet</span>
                            </div>

                            <div class="nk-tb-col">
                                <span class="badge badge-dot badge-dot-xs badge-success">Paid</span>
                            </div>
                            <div class="nk-tb-col">
                                <a href="#"   style=" background-color: #488A99;" class="btn btn-icon btn-sm text-white"><em class="icon ni ni-eye"></em></a>
                            </div>
                        </div>

                        <div class="nk-tb-item">
                            <div class="nk-tb-col tb-col-sm">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-warning-dim">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-name">
                                        <span class="tb-lead">lorem ipsum</span>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="tb-sub">lorem ipsum is a sit amet</span>
                            </div>

                            <div class="nk-tb-col">
                                <span class="badge badge-dot badge-dot-xs badge-danger">Closed</span>
                            </div>
                            <div class="nk-tb-col">
                                <a href="#"  style=" background-color: #488A99;" class="btn btn-icon btn-sm text-white"><em class="icon ni ni-eye"></em></a>
                            </div>
                        </div>
                        <div class="nk-tb-item">
                            <div class="nk-tb-col tb-col-sm">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-danger-dim">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-name">
                                        <span class="tb-lead">lorem ipsum</span>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="tb-sub">lorem ipsum is a sit amet</span>
                            </div>

                            <div class="nk-tb-col">
                                <span class="badge badge-dot badge-dot-xs badge-danger">Closed</span>
                            </div>
                            <div class="nk-tb-col">
                                <a href="#"   style=" background-color: #488A99;" class="btn btn-icon btn-sm  text-white"><em class="icon ni ni-eye"></em></a>
                            </div>
                        </div>
                        <div class="nk-tb-item">
                            <div class="nk-tb-col tb-col-sm">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-warning-dim">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-name">
                                        <span class="tb-lead">lorem ipsum</span>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="tb-sub">02/11/2020</span>
                            </div>

                            <div class="nk-tb-col">
                                <span class="badge badge-dot badge-dot-xs badge-warning">Awaiting Client's response</span>
                            </div>
                            <div class="nk-tb-col">
                                <a href="#"   style=" background-color: #488A99;" class="btn btn-icon btn-sm text-white"><em class="icon ni ni-eye"></em></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .card -->
            </div>
            <!-- .col -->
           <!-- .col -->

        </div><!-- .row -->
    </div><!-- .nk-block -->
</div>
@endsection
