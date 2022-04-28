@extends('layouts.customer')
@section('content')
<style type="text/css">
    .panel-title {
    display: inline;
    font-weight: bold;
    }
    .display-table {
    display: table;
    }
    .display-tr {
    display: table-row;
    }
    .display-td {
    display: table-cell;
    vertical-align: middle;
    width: 61%;
    }
 </style>
<div class="nk-content ">
   <div class="container">
      <div class="nk-content-inner">
         <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
               <div class="nk-block-between g-3">
                  <div class="nk-block-head-content">
                     <h3 class="nk-block-title page-title">Checkout</h3>
                     <div class="nk-block-des text-soft">
                     </div>
                  </div>
                  <div class="nk-block-head-content">
                     <a href="{{ route('purchase_history',$products->id) }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                  </div>
               </div>
            </div>
            <!-- .nk-block-head -->
            <div class="nk-block d-flex">
               <div class="col-8">
                  <div class="card">
                     <div class="row g-gs">

                        <div class="col-md-8">
                           <div class="">
                              <div class="tab-pane" id="">
                                 <div class="card-inner">
                                    <form action={{ route('order.store',$products->id)   }} method= "post">
                                        @csrf
                                       <div class="row g-gs">
                                        <input type="hidden" class="form-control" id="fv-full-name" value="auth()->user()->name" name="name" required>


                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label class="form-label" for="fv-full-name">Address Line 1</label>
                                                <div class="form-control-wrap">
                                                   <input type="text" class="form-control" id="fv-full-name" name="address" required>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label class="form-label" for="fv-full-name">City</label>
                                                <div class="form-control-wrap">
                                                   <input type="text" class="form-control" id="fv-full-name" name="city" required>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label class="form-label" for="fv-topics">State</label>
                                                <div class="form-control-wrap ">
                                                   <select class="form-control form-select" id="fv-topics" name="state" data-placeholder="Select a option" required>
                                                      <option label="empty" value=""></option>
                                                      <option value="fv-gq">State 1</option>
                                                      <option value="fv-tq">State 2</option>
                                                      <option value="fv-ab">State 3</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label class="form-label" for="fv-full-name">Zip Code</label>
                                                <div class="form-control-wrap">
                                                   <input type="text" class="form-control" id="fv-full-name" name="zip_code" required>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label class="form-label" for="fv-phone">Phone</label>
                                                <div class="form-control-wrap">
                                                   <div class="input-group">
                                                      <div class="input-group-prepend">
                                                         <span class="input-group-text" id="fv-phone">+880</span>
                                                      </div>
                                                      <input type="text" class="form-control" name="phone" required>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <button type="submit">Payment method</button>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-4">
                  <div class="card p-1">
                     <div class="nk-block-head d-flex mt-1">
                        <div class="nk-block-head-content ">
                           <p class="nk-block-title mr-5"><b>Order Summary </b></p>
                        </div>
                     </div>
                     <hr class="hr border-dark">
                     <div class="row pb-2">
                        <div class="col-lg-6">
                           <div class="product-gallery mr-xl-1 mr-xxl-2" >
                              <div class="slider-item rounded">
                                 <img src="{{ $products->images->image }}" s>
                              </div>
                           </div>
                           <!-- .product-gallery -->
                        </div>
                        <!-- .col -->
                        <div class="col-lg-4">
                           <div>
                              <div class=" product-info   d-flex">
                                 <small class="product-title">{{ $products->title }}</small>
                                 <p class="text-primary">{{ $products->price  }} </p>
                              </div>
                              <div class="product-info  d-flex">
                                 <p class="text-primary"><b>{{ $products->price }}</b></p>
                              </div>
                           </div>
                        </div>
                        <!-- .col -->
                     </div>
                     <hr class="hr border-dark">
                     <div class="col-12 d-flex ">
                        <!-- <div> -->
                        <p class="mr-5"><b>SUBTOTAL:</b></p>
                        <!-- </div> -->
                        <p class="ml-5">{{ $products->price }}</p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- .nk-block -->
         </div>
      </div>
   </div>
</div>
</div>
@endsection
