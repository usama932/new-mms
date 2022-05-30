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
                                    <form action={{ route('order.store',$products->id) }} method= "post">
                                        @csrf
                                       <div class="row g-gs">
                                        <input type="hidden" class="form-control" id="fv-full-name" value="{{  auth()->user()->name}}" name="name" required>
                                        <input type="hidden" class="form-control" id="fv-full-name" value="{{  $products->id}}" name="product_id" required>
                                        <input type="hidden" class="form-control" id="fv-full-name" value="{{  $products->price}}" name="total" required>
                                        <input type="hidden" class="form-control" id="fv-full-name" value="{{  $products->description}}" name="description" required>

                                          <div class="col-md-12">
                                             <div class="form-group">
                                                <label class="form-label" for="fv-full-name">Address </label>
                                                <div class="form-control-wrap">
                                                   <input type="text" class="form-control" id="fv-full-name" name="address" required>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label class="form-label" for="fv-full-name">City</label>
                                                <option value="">Select Country</option>
                                                
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label class="form-label" for="fv-topics">State</label>
                                                <select class="form-control" id="state-dropdown">
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                               <label class="form-label" for="fv-topics">City</label>
                                               <select class="form-control" id="city-dropdown">
                                            </select>
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
                                                         <span class="input-group-text" id="fv-phone">+1</span>
                                                      </div>
                                                      <input type="text" class="form-control" name="phone" required>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-12" style="text-align:right">
                                             <div class="form-group">
                                                <button type="submit" class="btn btn-success" >Pay Now</button>
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
<script type="text/javascript" src="/javascripts/jquery-3.1.1.min.js"></script>
<script>
    $(document).ready(function() {
    $('#country-dropdown').on('change', function() {
    var country_id = this.value;
    $("#state-dropdown").html('');
    $.ajax({
    url:"{{url('get-states-by-country')}}",
    type: "POST",
    data: {
    country_id: country_id,
    _token: '{{csrf_token()}}'
    },
    dataType : 'json',
    success: function(result){
    $('#state-dropdown').html('<option value="">Select State</option>');
    $.each(result.states,function(key,value){
    $("#state-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
    });
    $('#city-dropdown').html('<option value="">Select State First</option>');
    }
    });
    });
    $('#state-dropdown').on('change', function() {
    var state_id = this.value;
    $("#city-dropdown").html('');
    $.ajax({
    url:"{{url('get-cities-by-state')}}",
    type: "POST",
    data: {
    state_id: state_id,
    _token: '{{csrf_token()}}'
    },
    dataType : 'json',
    success: function(result){
    $('#city-dropdown').html('<option value="">Select City</option>');
    $.each(result.cities,function(key,value){
    $("#city-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
    });
    }
    });
    });
    });
    </script>
@endsection
<script>
    $(document).ready(function() {
    $('#country-dropdown').on('change', function() {
    var country_id = this.value;
    $("#state-dropdown").html('');
    $.ajax({
    url:"{{url('get-states-by-country')}}",
    type: "POST",
    data: {
    country_id: country_id,
    _token: '{{csrf_token()}}'
    },
    dataType : 'json',
    success: function(result){
    $.each(result.states,function(key,value){
    $("#state-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
    });
    $('#city-dropdown').html('<option value="">Select State First</option>');
    }
    });
    });
    $('#state-dropdown').on('change', function() {
    var state_id = this.value;
    $("#city-dropdown").html('');
    $.ajax({
    url:"{{url('get-cities-by-state')}}",
    type: "POST",
    data: {
    state_id: state_id,
    _token: '{{csrf_token()}}'
    },
    dataType : 'json',
    success: function(result){
    $.each(result.cities,function(key,value){
    $("#city-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
    });
    }
    });
    });
    });
    </script>
