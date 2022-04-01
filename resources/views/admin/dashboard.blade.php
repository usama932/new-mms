<x-app-layout>

                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title page-title">Dashboard</h4>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-xxl-4 col-md-6">
                                            <div  class="card h-100">
                                                <div class="nk-ecwg nk-ecwg1 ">
                                                    <div class="card-inner ">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">Total Sales</h6>
                                                            </div>
                                                            <div class="card-tools">
                                                                <a href="#"  style="color:#DBAE58" class="link   ">View Report</a>
                                                            </div>
                                                        </div>
                                                        <div class="data">
                                                            <div style="color:#488A99" class="amount ">$74,958.49</div>
                                                            <div class="info "><strong>$7,395.37</strong> in last month</div>
                                                        </div>
                                                        <div class="data">
                                                            <h6 style="color:#AC3E31" class="sub-title ">This week so far</h6>
                                                            <div class="data-group">
                                                                <div  style="color:#488A99"  class="amount">$1,338.72</div>
                                                                <div class="info text-right text-warning "><span class="change up  "><em class="icon ni ni-arrow-long-up "></em>4.63%</span><br><span  style="color:#DBAE58">vs. last week</span></div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="nk-ecwg1-ck">
                                                        <canvas class="ecommerce-line-chart-s1" id="totalSales"></canvas>
                                                    </div>
                                                </div><!-- .nk-ecwg -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-4 col-md-6">
                                            <div class="card h-100">
                                                <div class="nk-ecwg nk-ecwg2">
                                                    <div class="card-inner">
                                                        <div class="card-title-group mt-n1">
                                                            <div class="card-title">
                                                                <h6 class="title">Averarge order</h6>
                                                            </div>
                                                            <div class="card-tools mr-n1">
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#" class="active"><span>15 Days</span></a></li>
                                                                            <li><a href="#"><span>30 Days</span></a></li>
                                                                            <li><a href="#"><span>3 Months</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="data">
                                                            <div class="data-group">
                                                                <div   style="color:#488A99"  class="amount">$463.35</div>
                                                                <div class="info text-right"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span  style="color:#DBAE58">vs. last week</span></div>
                                                            </div>
                                                        </div>
                                                        <h6 class="sub-title">Orders over time</h6>
                                                    </div><!-- .card-inner -->
                                                    <div class="nk-ecwg2-ck">
                                                        <canvas class="ecommerce-bar-chart-s1" id="averargeOrder"></canvas>
                                                    </div>
                                                </div><!-- .nk-ecwg -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-4">
                                            <div class="row g-gs">
                                                <div class="col-xxl-12 col-md-4">
                                                    <div class="card">
                                                        <div class="nk-ecwg nk-ecwg3">
                                                            <div class="card-inner pb-0">
                                                                <div class="card-title-group">
                                                                    <div class="card-title">
                                                                        <h6 style="color:#488A99" class="title">Orders</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="data">
                                                                    <div class="data-group">
                                                                        <div style="color:#488A99" class="amount "><b>320</b></div>
                                                                        <div class="info text-right"><span class="change up text-black"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span class="text-black">vs. last week</span></div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div class="nk-ecwg3-ck">
                                                                <canvas class="ecommerce-line-chart-s1" id="totalOrders"></canvas>
                                                            </div>
                                                        </div><!-- .nk-ecwg -->
                                                    </div><!-- .card -->
                                                </div><!-- .col -->
                                                <div class="col-xxl-12 col-md-4">
                                                    <div class="card">
                                                        <div class="nk-ecwg nk-ecwg3">
                                                            <div class="card-inner pb-0">
                                                                <div class="card-title-group">
                                                                    <div class="card-title">
                                                                        <h6 style="color:#488A99" class="title">Customers</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="data">
                                                                    <div class="data-group">
                                                                        <div style="color:#DBAE58" class="amount "><b>320</b></div>
                                                                        <div class="info text-right"><span class="change up text-black"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span class="text-black">vs. last week</span></div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div class="nk-ecwg3-ck">
                                                                <canvas class="ecommerce-line-chart-s1" id="totalCustomers"></canvas>
                                                            </div>
                                                        </div><!-- .nk-ecwg -->
                                                    </div><!-- .card -->
                                                </div>
                                                <div class="col-xxl-12 col-md-4">
                                                    <div class="card">
                                                        <div class="nk-ecwg nk-ecwg3">
                                                            <div class="card-inner pb-0">
                                                                <div class="card-title-group">
                                                                    <div class="card-title">
                                                                        <h6  style="color:#488A99" class="title">Staff</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="data">
                                                                    <div class="data-group">
                                                                        <div style="color:#AC3E31" class="amount "><b>320</b></div>
                                                                        <div class="info text-right"><span class="change up text-black"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span class="text-black">vs. last week</span></div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-inner -->
                                                            <div class="nk-ecwg3-ck">
                                                                <canvas class="ecommerce-line-chart-s1" id="totalStaff"></canvas>
                                                            </div>
                                                        </div><!-- .nk-ecwg -->
                                                    </div><!-- .card -->
                                                </div>
                                                <!-- .col -->
                                            </div><!-- .row -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-8">
                                            <div class="card card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title" >Queries</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-list mt-n2">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col tb-col-sm text-primary "><span><strong  style="color: #DBAE58;" >Customer</strong></span></div>
                                                        <div class="nk-tb-col tb-col-md text-primary"><span><strong  style="color: #DBAE58;">Title</strong></span></div>
                                                        <div class="nk-tb-col text-primary"><span class="d-none d-sm-inline"><strong  style="color: #DBAE58;" >Status</strong></span></div>
                                                        <div class="nk-tb-col text-primary"><span class="d-none d-sm-inline"><strong  style="color: #DBAE58;">Action</strong></span></div>
                                                    </div>
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-blue-dim">
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
                                                            <a href="#"   style="background-color: #488A99;" class="btn btn-icon btn-sm text-white"><em class="icon ni ni-eye"></em></a>
                                                        </div>
                                                    </div>

                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-purple-dim">
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
                                                            <a href="#"  style="background-color: #488A99;" class="btn btn-icon btn-sm text-white"><em class="icon ni ni-eye"></em></a>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-success-dim">
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
                                                            <a href="#"  style="background-color: #488A99;" class="btn btn-icon btn-sm text-white" ><em  class="icon ni ni-eye"></em></a>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-blue-dim">
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
                                                            <a href="#" style="background-color: #488A99;" class="btn btn-icon btn-sm text-white"><em class="icon ni ni-eye"></em></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div>
                                        <div class="col-xxl-4 col-md-6">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group mb-2">
                                                        <div class="card-title">
                                                            <h6 class="title">Top products</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle link link-light link-sm dropdown-indicator" data-toggle="dropdown">Weekly</a>
                                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Daily</span></a></li>
                                                                        <li><a href="#" class="active"><span>Weekly</span></a></li>
                                                                        <li><a href="#"><span>Monthly</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nk-top-products">
                                                        <li class="item">
                                                            <div class="thumb">
                                                                <img src="./images/product/a.png" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <div class="title">Pink Fitness Tracker</div>
                                                                <div class="price">$99.00</div>
                                                            </div>
                                                            <div class="total">
                                                                <div style="color:#488A99" class="amount">$990.00</div>
                                                                <div  style="color:#AC3E31" class="count">10 Sold</div>
                                                            </div>
                                                        </li>
                                                        <li class="item">
                                                            <div class="thumb">
                                                                <img src="./images/product/b.png" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <div class="title">Purple Smartwatch</div>
                                                                <div class="price">$99.00</div>
                                                            </div>
                                                            <div class="total">
                                                                <div style="color:#488A99" class="amount">$990.00</div>
                                                                <div   style="color:#AC3E31" class="count">10 Sold</div>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-xxl-4 col-md-6">
                                            <div class="card    h-100">
                                                 <div class="d-flex">
                                                    <!-- <div class="user-card">
                                                        <img src="./images/product2.png" alt="" class="rounded bg-black-dim   mt-4 mx-3" width="30%" height="30%">
                                                        <p class="mt-4">Gold<br><small> Current $31043<p class="text-warning pt-5">(+6%)</p></small> </p>
                                                </div> -->
                                                    <div class="nk-msg-media user-avatar bg-white mt-4 mx-3">
                                                        <img src="./images/product2.png" alt="">
                                                    </div>
                                                 <p class="mt-4 "><b style="color: #DBAE58;font-size: 15px;">Gold</b><br><small> Current $31043<p   style="color:#AC3E31;padding-top: 3rem; padding-left: 5px;">(+6%)</p></small> </p>
                                                    <div class="nk-msg-media user-avatar bg-white mt-4 mx-3">
                                                        <img src="./images/platinum.PNG" alt="">
                                                    </div>
                                                    <p class="mt-4"><b style="color: #DBAE58;font-size: 15px;">Platinum</b>   <br><small> Current $31043<p   style="color:#AC3E31;padding-top: 3rem; padding-left: 5px;">(+6%)</p></small> </p>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="nk-msg-media user-avatar bg-white mt-4 mx-3">
                                                        <img src="./images/silver.PNG" alt="">
                                                    </div>
                                                    <p class="mt-4"> <b style="color: #DBAE58;font-size: 15px;">Silver</b><br><small> Current $31043<p   style="color:#AC3E31;padding-top: 3rem; padding-left: 5px;">(+6%)</p></small> </p>
                                                    <div class="nk-msg-media user-avatar bg-white mt-4 mx-3">
                                                        <img src="./images/platinum.PNG" alt="">
                                                    </div>
                                                    <p class="mt-4"> <b style="color: #DBAE58;font-size: 15px;">Palladium</b><br><small> Current $31043<p  style="color:#AC3E31;padding-top: 3rem; padding-left: 5px;">(+6%)</p></small> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col -->

                                    </div><!-- .row -->
                                </div><!-- .nk-block -->

</x-app-layout>
