@extends('layouts.customer')
@section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
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
                     <h3 class="nk-block-title page-title">Payment Details</h3>
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
                                    <div class="panel-body">
                                       @if (Session::has('success'))
                                       <div class="alert alert-success text-center">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                          <p>{{ Session::get('success') }}</p>
                                       </div>
                                       @endif
                                       <form role="form" action="{{ route('stripe.post') }}" method="post" class="validation"
                                          data-cc-on-file="false"
                                          data-stripe-publishable-key="pk_test_51Kt84ZFmfKjVIRdxIp5U6KEmkVmp2Uir9ffvOgmTwYtl7yu0n3WSyGeHz0rZgonMS6CbHa8bT2egBwCFScHVxdIT0059ZQAGJV"
                                          id="payment-form">
                                          @csrf
                                          <div class='form-row row'>
                                             <div class='col-12 form-group required'>
                                                <label class='control-label'>Name on Card</label> <input
                                                   class='form-control' size='4' type='text'>
                                             </div>
                                          </div>
                                          <div class='form-row row'>
                                             <div class='col-12 form-group card required'>
                                                <label class='control-label'>Card Number</label> <input
                                                   autocomplete='off' class='form-control card-num' size='20'
                                                   type='text'>
                                             </div>
                                          </div>
                                          <div class='form-row row'>
                                             <div class='col-12 col-md-4 form-group cvc required'>
                                                <label class='control-label'>CVC</label>
                                                <input autocomplete='off' class='form-control card-cvc' placeholder='e.g 415' size='4'
                                                   type='text'>
                                             </div>
                                             <div class='col-12 col-md-4 form-group expiration required'>
                                                <label class='control-label'>Expiration Month</label> <input
                                                   class='form-control card-expiry-month' placeholder='MM' size='2'
                                                   type='text'>
                                             </div>
                                             <div class='col-12 col-md-4 form-group expiration required'>
                                                <label class='control-label'>Expiration Year</label> <input
                                                   class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                                   type='text'>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-12">
                                                <button class="btn btn-danger btn-lg btn-block" type="submit">Pay Now</button>
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
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
   $(function() {
       var $form         = $(".validation");
     $('form.validation').bind('submit', function(e) {
       var $form         = $(".validation"),
           inputVal = ['input[type=email]', 'input[type=password]',
                            'input[type=text]', 'input[type=file]',
                            'textarea'].join(', '),
           $inputs       = $form.find('.required').find(inputVal),
           $errorStatus = $form.find('div.error'),
           valid         = true;
           $errorStatus.addClass('hide');

           $('.has-error').removeClass('has-error');
       $inputs.each(function(i, el) {
         var $input = $(el);
         if ($input.val() === '') {
           $input.parent().addClass('has-error');
           $errorStatus.removeClass('hide');
           e.preventDefault();
         }
       });

       if (!$form.data('cc-on-file')) {
         e.preventDefault();
         Stripe.setPublishableKey($form.data('stripe-publishable-key'));
         Stripe.createToken({
           number: $('.card-num').val(),
           cvc: $('.card-cvc').val(),
           exp_month: $('.card-expiry-month').val(),
           exp_year: $('.card-expiry-year').val()
         }, stripeHandleResponse);
       }

     });

     function stripeHandleResponse(status, response) {
        var $form         = $(".validation");
           if (response.error) {
               $('.error')
                   .removeClass('hide')
                   .find('.alert')
                   .text(response.error.message);
           } else {
               var token = response['id'];
               $form.find('input[type=text]').empty();
               $form.append(`<input type='hidden' name='stripeToken' value='${token}'/>`);
               $form.get(0).submit();
           }
       }

   });
</script>
@endsection
