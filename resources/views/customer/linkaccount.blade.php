@extends('layouts.customer')
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-block-head-sub    text-dark"><h5 class="text-dark">Tell Us About Your Current Portfolio</h5></div>
            <div class="nk-content-body  " style="background-color: white">
                <div class="content-page  ">
                    <div class="nk-content ">
                        <div class="nk-block nk-block-middle ">
                            <div class="nk-block-content nk-error-ld text-center">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="10rem" height="10rem" viewBox="0 0 90 90">
                                    <circle cx="24.83" cy="6.55" r="3.06" fill="#394048" />
                                    <circle cx="83.97" cy="28.73" r="3.03" fill="none" stroke="#394048" stroke-linecap="round" stroke-linejoin="round" />
                                    <circle cx="83.58" cy="67.84" r="1.84" fill="#394048" />
                                    <circle cx="12.04" cy="84.67" r="1.84" fill="#394048" />
                                    <rect x="3" y="47.84" width="6.12" height="1.75" fill="#394048" />
                                    <rect x="3" y="47.84" width="6.12" height="1.75" transform="translate(54.78 42.66) rotate(90)" fill="#394048" />
                                    <circle cx="45.76" cy="64.92" r="19.82" fill="#fff" />
                                    <circle cx="45.76" cy="64.92" r="18.24" fill="none" stroke="#394048" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    <path d="M37.5,22.5V43.89a23.66,23.66,0,0,1,17,.1V22.5Z" fill="#394048" stroke="#394048" stroke-linecap="round" />
                                    <path d="M20.5,22.5v23L27,51.71A23.73,23.73,0,0,1,37.5,43.89V22.5Z" fill="#394048" stroke="#394048" stroke-linecap="round" />
                                    <path d="M54.5,22.5V44a23.68,23.68,0,0,1,10.32,7.86l6.68-6.37v-23Z" fill="#394048" stroke="#394048" stroke-linecap="round" />
                                    <rect x="12" y="14" width="68" height="8" rx="2" ry="2" fill="none" stroke="#394048" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    <path d="M52,58v9.62A1.56,1.56,0,0,1,51.26,69l-4.72,2.73a1.55,1.55,0,0,1-1.56,0L40.25,69a1.55,1.55,0,0,1-.77-1.34V62.19a1.55,1.55,0,0,1,.77-1.35L45,58.11A1.56,1.56,0,0,1,46.39,58v1.62l0,0a1.22,1.22,0,0,0-1.2,0l-3.67,2.12a1.2,1.2,0,0,0-.6,1V67a1.23,1.23,0,0,0,.6,1l3.67,2.11a1.17,1.17,0,0,0,1.2,0L50,68.08a1.21,1.21,0,0,0,.61-1V57.21Z" fill="#394048" />
                                    <path d="M49.22,56.4l-1.42-.82v1.63h0V65.8a.52.52,0,0,1-.25.45L46,67.13a.52.52,0,0,1-.51,0L44,66.25a.52.52,0,0,1-.26-.45V64a.51.51,0,0,1,.26-.44l1.53-.89a.52.52,0,0,1,.51,0l.38.22V61.29l-.2-.12a.88.88,0,0,0-.86,0l-2.6,1.5a.85.85,0,0,0-.43.75v3a.85.85,0,0,0,.43.75l2.6,1.5a.83.83,0,0,0,.86,0l2.59-1.5a.86.86,0,0,0,.44-.75V58h0Z" fill="#394048" />
                                    <path d="M53.45,58.85v9.41a1.9,1.9,0,0,1-1,1.65l-5.79,3.34a1.92,1.92,0,0,1-1.91,0L39,69.91a1.9,1.9,0,0,1-1-1.65V61.57a1.9,1.9,0,0,1,1-1.65l5.78-3.34a1.92,1.92,0,0,1,1.91,0l1.09.63V55.58l-.91-.53a2.28,2.28,0,0,0-2.26,0l-6.85,4a2.25,2.25,0,0,0-1.13,2v7.91a2.27,2.27,0,0,0,1.13,2l6.85,4a2.28,2.28,0,0,0,2.26,0l6.84-4a2.27,2.27,0,0,0,1.13-2V59.68Z" fill="#394048" />
                                </svg>
                                <!-- <img  src="./images/gfx/error-404.svg" alt=""> -->
                                {{-- <h5 class="nk-error-title">Soon you will be able to</h5> --}}
                                <h5 class="nk-error-title">List all your precious metals investments into your MintTrade dashboard in this tab.</h5>
                                <p class="nk-error-text"> This will allow our experts to grade your portfolio.<br> This will also help guide you in your future diversification goals.</p>

                            </div>
                        </div><!-- .nk-block -->
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                            {{ session()->get('success') }}
                            </div>
                        @endif
                        <form action="{{ route('portfolios.store') }}" method="post">
                            @csrf
                            <div class="row g-5 pt-5">
                               <div class="col-lg-6">
                                  <div class="form-group">
                                     <label class="form-label" for="full-name-1">Product Name</label>
                                     <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="product_name" placeholder="Product  Name" required>
                                     </div>
                                  </div>
                               </div>
                               <div class="col-lg-6">
                                <div class="form-group">
                                   <label class="form-label" for="full-name-1">SKU</label>
                                   <div class="form-control-wrap">
                                      <input type="number" class="form-control" name="sku" placeholder="SKU" required>
                                   </div>
                                </div>
                             </div>
                               <div class="col-md-6">
                                <div class="form-group">
                                   <label class="form-label" for="fv-topics">Purchase From</label>
                                   <div class="form-control-wrap">
                                      <input type="text" class="form-control" name="purchase_from" id="email-address-1" placeholder="Purchase_from" required>
                                   </div>
                                </div>
                             </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                   <label class="form-label" for="fv-topics">Purchase Price</label>
                                   <div class="form-control-wrap">
                                      <input type="number" class="form-control" name="purchase_price" id="email-address-1" placeholder="Purchase_price" required>
                                   </div>
                                </div>
                             </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                   <label class="form-label" for="fv-topics">Quantity</label>
                                   <div class="form-control-wrap">
                                      <input type="number" class="form-control" name="quantity" id="email-address-1" placeholder="Quantity" required>
                                   </div>
                                </div>
                             </div>
                               <div class="col-md-6">
                                  <div class="form-group">
                                     <label class="form-label" for="fv-topics">Purchase Date</label>
                                     <div class="form-control-wrap">
                                        <input type="date" class="form-control" name="purchase_date" id="email-address-1" placeholder="Purchase date" required>
                                     </div>
                                  </div>
                               </div>

                               <div class="col-md-6">
                                <div class="form-group">
                                   <label class="form-label" for="fv-topics">Type Of Product </label>
                                   <div class="form-control-wrap ">
                                      <select class="form-control form-select"  name="type" data-placeholder="Select Employees" required>

                                         <option value="Bullion">Bullion</option>
                                         <option value="Semi-Rare">Semi-Rare</option>
                                         <option value="Graded">Graded</option>
                                         <option value="Rare">Rare</option>
                                         <option value="Collector">Collector</option>
                                         <option value="Other">Other</option>
                                      </select>
                                   </div>
                                </div>
                             </div>
                            <div  class="col-lg-12 text-center" >
                               <div class="form-group " >
                                  <button type="submit" style="background-color: #394048; color: white; " class="btn btn-xl  float-center mt-3 ">Submit Portfolio</button>
                               </div>
                            </div>
                      </div>
                      </form>
                    </div>
                </div><!-- .content-page -->
            </div>
        </div>
    </div>
</div>
@endsection
