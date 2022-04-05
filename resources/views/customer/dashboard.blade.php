@extends('layouts.customer')
@section('content')
<div class="container-fluid">
   <div class="nk-content-inner">
      <div class="nk-content-body">
         <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
               <div class="nk-block-head-content">
                  <h4 class="nk-block-title page-title">Dashboard</h4>
               </div>
               <!-- .nk-block-head-content -->
            </div>
            <!-- .nk-block-between -->
         </div>
         <!-- .nk-block-head -->
         <div class="nk-block">
            <div class="row g-gs">
               <div class="col-xxl-4 col-md-6">
                  <div class="card   h-100">
                     <div class="d-flex">
                        <div class="m-5">
                           <h6 style="color:#488A99 ;">WELCOME</h6>
                           <h5  style="color: #DBAE58;"><b>{{Auth::user()->name}}</b></h5>
                           <p style="color: #AC3E31;">User Since {{Auth::user()->created_at}}</p>
                        </div>
                        <div class="card mt-4 mr-3 mb-4 p-3">
                           <!-- <div class="row"> -->
                           <div class="col-12">
                              <h1  style="color: #488A99;" class="text-center pt-3"><b>A +</b></h1>
                              <small  style="color: #AC3E31;"><b>Overall Portfolio Grade</b></small>
                              <!-- </div> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
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
                        <p class="mt-4 text-grey">
                           <b style="color: #DBAE58;font-size: 15px;">Gold</b><br>
                           <small>
                              Current $31043
                        <p style="color:#AC3E31;padding-top: 3rem; padding-left: 5px;">(+6%)</p></small> </p>
                        <div class="nk-msg-media user-avatar bg-white mt-4 mx-3">
                           <img src="./images/platinum.PNG" alt="">
                        </div>
                        <p class="mt-4">
                           <b style="color: #DBAE58;font-size: 15px;">Platinum</b><br>
                           <small>
                              Current $31043
                        <p style="color:#AC3E31;padding-top: 3rem; padding-left: 5px;">(+6%)</p></small> </p>
                     </div>
                     <div class="d-flex">
                        <div class="nk-msg-media user-avatar bg-white mt-4 mx-3">
                           <img src="./images/silver.PNG" alt="">
                        </div>
                        <p class="mt-4">
                           <b style="color: #DBAE58;font-size: 15px;">Silver</b><br>
                           <small>
                              Current $31043
                        <p style="color:#AC3E31;padding-top: 3rem; padding-left: 5px;">(+6%)</p></small> </p>
                        <div class="nk-msg-media user-avatar bg-white mt-4 mx-3">
                           <img src="./images/platinum.PNG" alt="">
                        </div>
                        <p class="mt-4">
                           <b style="color: #DBAE58;font-size: 15px;">Palladium</b><br>
                           <small>
                              Current $31043
                        <p style="color:#AC3E31;padding-top: 3rem; padding-left: 5px;">(+6%)</p></small> </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xxl-12">
         <div class="row g-gs">
            <div class="col-xxl-3  col-sm-3">
               <div class="card">
                  <div class="nk-ecwg nk-ecwg6">
                     <div class="card-inner">
                        <div class="card-title-group">
                           <div class="card-title">
                              <h6 class="title">Total Order This Year</h6>
                           </div>
                        </div>
                        <div class="data">
                           <div class="data-group">
                              <div class="amount">3,890</div>
                              <div class="nk-ecwg6-ck">
                                 <canvas class="ecommerce-line-chart-s3" id="todayOrders"></canvas>
                              </div>
                           </div>
                           <div class="info"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><small> from previous period</small></div>
                        </div>
                     </div>
                     <!-- .card-inner -->
                  </div>
                  <!-- .nk-ecwg -->
               </div>
               <!-- .card -->
            </div>
            <div class="col-xxl-3  col-sm-3">
               <div class="card">
                  <div class="nk-ecwg nk-ecwg6">
                     <div class="card-inner">
                        <div class="card-title-group">
                           <div class="card-title">
                              <h6 class="title">Last Order</h6>
                           </div>
                        </div>
                        <div class="data">
                           <div class="data-group">
                              <div  style="color:#DBAE58"  class="amount">3,890</div>
                              <div class="nk-ecwg6-ck">
                                 <canvas class="ecommerce-line-chart-s3" id="todayRevenue"></canvas>
                              </div>
                           </div>
                           <div class="info"><span class="change down text-danger py-2"></span><small> lorem ipsum</small></div>
                        </div>
                     </div>
                     <!-- .card-inner -->
                  </div>
                  <!-- .nk-ecwg -->
               </div>
               <!-- .card -->
            </div>
            <div class="col-xxl-3 col-sm-3 ">
               <div class="card">
                  <div class="nk-ecwg nk-ecwg6">
                     <div class="card-inner">
                        <div class="card-title-group">
                           <div class="card-title">
                              <h6 class="title">Average Purchase Price</h6>
                           </div>
                        </div>
                        <div class="data">
                           <div class="data-group">
                              <div   style="color:#488A99" class="amount">$3,890</div>
                              <div class="nk-ecwg6-ck">
                                 <canvas class="ecommerce-line-chart-s3" id="todayCustomers"></canvas>
                              </div>
                           </div>
                           <div class="info"><span class="change up text-grey"><em class="icon ni ni-arrow-long-up"></em >4.63%</span><small> from previous period</small></div>
                        </div>
                     </div>
                     <!-- .card-inner -->
                  </div>
                  <!-- .nk-ecwg -->
               </div>
               <!-- .card -->
            </div>
            <div class="col-xxl-3 col-sm-3">
               <div class="card">
                  <div class="nk-ecwg nk-ecwg6">
                     <div class="card-inner">
                        <div class="card-title-group">
                           <div class="card-title">
                              <h6 class="title">Total Investment</h6>
                           </div>
                        </div>
                        <div class="data">
                           <div class="data-group">
                              <div style="color:#484848"  class="amount ">$2,578</div>
                              <div class="nk-ecwg6-ck">
                                 <canvas class="ecommerce-line-chart-s3" id="todayVisitors"></canvas>
                              </div>
                           </div>
                           <div class="info"><span class="change up "><em class="icon ni ni-arrow-long-up"></em>4.63%</span><small> from previous period</small></div>
                        </div>
                     </div>
                     <!-- .card-inner -->
                  </div>
                  <!-- .nk-ecwg -->
               </div>
               <!-- .card -->
            </div>
            <div class="nk-block-between">
               <div class="nk-block-head-content">
                  <h5 class="nk-block-title page-title m-1">Recent News</h5>
               </div>
            </div>
         </div>
         <!-- .row -->
         @foreach($news as $new)
         <div class="card">
            <div class="d-flex">
               <div class="card m-2">
                  <img src="./images/product2.png" class="rounded w-50% h-20% py-4 px-1" alt="">
               </div>
               <div class="col-10 m-2">
                  <b>
                     <p>{{$new->title}}</p>
                  </b>
                  <p>{{$new->description}}
                  </p>
               </div>
            </div>
         </div>
         @endforeach

      </div>
   </div>
   <!-- .col -->
   <!-- <div class="nk-block-between">
      <div class="nk-block-head-content">

          <h4 class="nk-block-title page-title m-2">Discover Exclusive Products</h4>
      </div>
      </div> -->
</div>
<div class="nk-block nk-block-lg">
   <div class="nk-block-head mt-4">
      <div class="nk-block-between g-3">
         <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Discover Exclusive Products</h3>
         </div>
      </div>
   </div>
   <!-- .nk-block-head -->
   <div class="slider-init row" data-slick='{"slidesToShow": 4, "centerMode": false, "slidesToScroll": 1, "infinite":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 3}},{"breakpoint": 992,"settings":{"slidesToShow": 2}}, {"breakpoint": 576,"settings":{"slidesToShow": 1}} ]}'>
    @foreach($products as $product)
    <div class="col">
         <div class="card card-bordered product-card">
            <div class="product-thumb bg-lighter">
               <a href="html/product-details.html">
               <img  src="./images/product1.png" alt="" class=" py-5 px-4">
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
                  <li><a  style="color: #488A99;" href="#">{{$product->product_id}}</a></li>
               </ul>
               <h6 class="product-title"><a href="html/product-details.html">{{$product->title}}</a></h6>
               <div  style="color: #DBAE58;"class="product-price  h5">{{$product->price}}</div>
            </div>
         </div>
      </div>
      <!-- .col -->

      <!-- .col -->
   </div>
   @endforeach
</div>
</div><!-- .row -->
</div><!-- .nk-block -->
</div>
</div>
</div>
</div>
@endsection
