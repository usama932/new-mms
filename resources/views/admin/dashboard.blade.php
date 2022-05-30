<x-app-layout>
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title page-title">Dashboard</h4>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
            {
                "symbols": [
                {
                    "description": "GOLD/USD",
                    "proName": "TVC:GOLD"
                },
                {
                    "description": "SILVER/USD",
                    "proName": "TVC:SILVER"
                },
                {
                    "description": "PLATINUM/USD",
                    "proName": "TVC:PLATINUM"
                },
                {
                    "description": "PALLADIUM/USD",
                    "proName": "TVC:PALLADIUM"
                },
                {
                    "description": "BTC/USD",
                    "proName": "CRYPTOCAP:BTC"
                }
            ],
                "colorTheme": "light",
                "isTransparent": false,
                "showSymbolLogo": false,
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->
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
                                    <a href="{{ route('orders.index') }}"  style="color:#DBAE58" class="link   ">View Report</a>
                                </div>
                            </div>

                            <div class="data">

                                <div class="data-group">
                                    <div  style="color:#488A99"  class="amount">${{ $total_sales }}</div>

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

                            </div>
                            <div class="data">
                                <div class="data-group">
                                    <div   style="color:#488A99"  class="amount">${{ $avg_total }}</div>

                                </div>
                            </div>

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
                                            <div style="color:#488A99" class="amount "><b>{{ $total_order }}</b></div>
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
                                            <div style="color:#DBAE58" class="amount "><b>{{ $total_customer }}</b></div>
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
                                            <div style="color:#AC3E31" class="amount "><b>{{ $total_staff }}</b></div>
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
                            <div class="nk-tb-col text-primary"><span class="d-none d-sm-inline"><strong  style="color: #DBAE58;" >Message</strong></span></div>
                        </div>
                        @foreach ($queries as $query)
                        <div class="nk-tb-item">
                            <div class="nk-tb-col tb-col-sm">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-blue-dim">
                                        <span>{{ $query->id }}</span>
                                    </div>
                                    <div class="user-name">
                                        <span class="tb-lead">{{ $query->send_by }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="tb-sub">{{ $query->subject }}</span>
                            </div>

                            <div class="nk-tb-col">


                                    @if(strlen($query->message) > 100)
                                    {{substr($query->message,0,100)}}
                                    <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
                                    <span class="read-more-content"> {{substr($query->message,100,strlen($query->message))}}
                                    <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span> </span>
                                    @else
                                    {{$query->message}}
                                    @endif


                            </div>

                        </div>
                        @endforeach



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

                        </div>
                        <ul class="nk-top-products">
                            @foreach($products as $product)
                            <li class="item">
                                <div class="thumb">
                                    @if($product->images != null)
                                    <img src="{{asset($product->images->image)}}"  class="rounded w-40% h-20% py-4 px-1"">
                                    @else
                                     No image
                                    @endif
                                </div>
                                <div class="info">
                                    <div class="title">{{$product->title}} </div>
                                    <div class="price">${{$product->product_id}}</div>
                                </div>
                                <div class="total">
                                    <div style="color:#488A99" class="amount">{{$product->price}}</div>

                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div><!-- .col -->
            {{-- <div class="col-xxl-4 col-md-6">
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
            </div> --}}
            <!-- .col -->

        </div><!-- .row -->
    </div><!-- .nk-block -->

</x-app-layout>
