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
                              <div class="amount">${{ $total_order }}</div>
                              <div class="nk-ecwg6-ck">
                                 <canvas class="ecommerce-line-chart-s3" id="todayOrders"></canvas>
                              </div>
                           </div>
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
                              <div  style="color:#DBAE58"  class="amount">${{ $last_order->total ?? '' }}</div>
                              <div class="nk-ecwg6-ck">
                                 <canvas class="ecommerce-line-chart-s3" id="todayRevenue"></canvas>
                              </div>
                           </div>
                           <div class="info"><span class="change down text-danger py-2"></span><small> {{ $last_order->product_id  ?? ''}}</small></div>
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
                              <div style="color:#484848"  class="amount ">${{ $total_investment }}</div>
                              <div class="nk-ecwg6-ck">
                                 <canvas class="ecommerce-line-chart-s3" id="todayVisitors"></canvas>
                              </div>
                           </div>
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
                  <img src="{{ $new->image }}" class="rounded w-50% h-20% py-4 px-1" alt="">
               </div>
               <div class="col-10 m-2">
                  <b>
                     <p>{{$new->title}}</p>
                  </b>
                  <p id='more'>
                    @if(strlen($new->description) > 100)
                    {{substr($new->description,0,100)}}
                    <span class="read-more-show hide_content">Show More<i class="fa fa-angle-down"></i></span>
                    <span class="read-more-content"> {{substr($new->description,100,strlen($new->description))}}
                    <span class="read-more-hide hide_content">Show Less <i class="fa fa-angle-up"></i></span> </span>
                    @else
                    {{$new->description}}
                    @endif
                  </p>
               </div>
            </div>
         </div>
         @endforeach

      </div>
   </div>

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
   <div class="nk-block">
    <div class="row g-gs">
        @foreach ($products as $product)
        <a href="#">
        <div class="col-xxl-3 col-lg-3 col-sm-6">
            <div class="card card-bordered product-card">
                <div class="product-thumb bg-light pt-5">
                    <a href="{{ route('product.detail',$product->id) }}l">
                        @if($products->images != null)
                        <img src="{{asset($products->images->image)}}"  style="width:70px; height:70px;">
                        @else
                         No image
                        @endif
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
</div>
</div>
</div><!-- .row -->
</div><!-- .nk-block -->
</div>
</div>
</div>
</div>

@endsection
