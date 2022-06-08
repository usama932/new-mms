<x-guest-layout>
    <div class="nk-app-root">
       <!-- main @s -->
       <div class="nk-main ">
          <!-- wrap @s -->
          <div class="nk-wrap nk-wrap-nosidebar">
             <!-- content @s -->
             <div class="nk-content ">
                <div class="nk-block nk-block-middle nk-auth-body  wide-xl">
                   <div class="nk-block nk-block-lg">
                      <div class="nk-block-head">
                         <div class="nk-block-head-content">
                            <h4 class="title nk-block-title">Wizard Form - Basic</h4>
                            <div class="nk-block-des">
                               <p>A basic demostration of wizard form.</p>
                            </div>
                         </div>
                      </div>
                      <div class="card card-bordered">
                         <div class="brand-logo pb-4 text-center">
                            <a href="html/index.html" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg" src="{{asset('/images/GMRGold_Logos.png')}}" srcset="{{asset('/images/GMRGold_Logos.png')}}" alt="logo">
                            <img class="logo-dark logo-img logo-img-lg" src="{{asset('/images/GMRGold_Logos.png')}}" srcset="" alt="logo-dark">
                            </a>
                         </div>
                         <div class="card-inner">
                            @if($errors->any())
                            <div class="alert alert-danger">
                               <p><strong>Opps Something went wrong</strong></p>
                               <ul>
                                  @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                  @endforeach
                               </ul>
                            </div>
                            @endif
                            <form method="post" action='{{route('register')}}' class="nk-wizard nk-wizard-simple is-alter" id="wizard-01" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="grade" value="F">
                            <input type="hidden" name="role_id" value="customer">
                            <input type="hidden" name="is_active" value="1">
                            <div class="nk-wizard-content">
                               <div class="row gy-3">
                                  <div class="col-md-6">
                                     <div class="form-group">
                                        <label class="form-label" for="fw-first-name">First Name</label>
                                        <div class="form-control-wrap">
                                           <input type="text" data-msg="Required" class="form-control required" id="fw-first-name" name="first_name" placeholder="Enter Your First Name" required>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6">
                                     <div class="form-group">
                                        <label class="form-label" for="fw-last-name">Last Name</label>
                                        <div class="form-control-wrap">
                                           <input type="text" data-msg="Required" class="form-control required" id="last_name" name="last_name" placeholder="Enter Your Last Name" required>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6">
                                     <div class="form-group">
                                        <label class="form-label" for="fw-email-address">Email Address</label>
                                        <div class="form-control-wrap">
                                           <input type="text" data-msg="Required" data-msg-email="Wrong Email" class="form-control required email" id="email" name="email" placeholder="Enter Your Email Address" required>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6">
                                     <div class="form-group">
                                        <label class="form-label" for="fw-mobile-number">Phone Number</label>
                                        <div class="form-control-wrap">
                                           <input type="text" data-msg="Required" class="form-control required" id="fw-mobile-number" name="contact" placeholder="Enter Your Phone Number" required>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6">
                                     <div class="form-group">
                                        <label class="form-label" for="fw-email-address">Street Address</label>
                                        <div class="form-control-wrap">
                                           <input type="text" data-msg="Required" data-msg-email="Wrong Email" class="form-control required email" id="street_address" name="street_address" placeholder="Enter Your Street Address" required>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6">
                                     <div class="form-group">
                                        <label class="form-label" for="fw-mobile-number">City</label>
                                        <div class="form-control-wrap">
                                           <input type="text" data-msg="Required" class="form-control required" id="fw-mobile-number" name="city" placeholder="Enter Your City" required>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6">
                                     <div class="form-group">
                                        <label class="form-label" for="fw-mobile-number">State</label>
                                        <div class="form-control-wrap">
                                           <input type="text" data-msg="Required" class="form-control required" id="fw-mobile-number" name="state" placeholder="Enter Your State" required>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6">
                                     <div class="form-group">
                                        <label class="form-label" for="fw-mobile-number">Profile Picture (Optional)</label>
                                        <div class="form-control-wrap">
                                           <input type="file" data-msg="Required" class="form-control required" id="fw-mobile-number" name="profile_image" placeholder="Enter Your State" >
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="nk-wizard-content">
                               <div class="row gy-3">
                                  <div class="col-md-6">
                                     <div class="form-group">
                                        <label class="form-label" for="fw-password">Password</label>
                                        <div class="form-control-wrap">
                                           <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your Password">
                                        </div>
                                     </div>
                                  </div>
                                  <!-- .col -->
                                  <div class="col-md-6">
                                     <div class="form-group">
                                        <label class="form-label" for="fw-re-password">Re-Password</label>
                                        <div class="form-control-wrap">
                                           <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required placeholder="Enter your Confirm Password">
                                        </div>
                                     </div>
                                  </div>
                                  <!-- .col -->
                                  <div class="col-md-12">
                                     <div class="custom-control custom-checkbox">
                                        <input type="checkbox" data-msg="Required" class="custom-control-input required" name="fw-policy" id="fw-policy" required>
                                        <label class="custom-control-label" for="fw-policy">I agreed Terms and policy</label>
                                     </div>
                                  </div>
                               </div>
                               <!-- .row -->
                            </div>
                            <div class="text-center">
                               <button type="submit" class="btn btn-secondary btn-sm">Register</button>
                            </div>
                            </form>
                         </div>
                      </div>
                   </div>
                   <!-- .nk-block -->
                </div>
                <div class="nk-footer nk-auth-footer-full">
                   <div class="container wide-lg">
                      <div class="row g-3">
                         <div class="col-lg-6 order-lg-last">
                            <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                               <li class="nav-item">
                                  <a class="nav-link" href="#">Terms & Condition</a>
                               </li>
                               <li class="nav-item">
                                  <a class="nav-link" href="#">Privacy Policy</a>
                               </li>
                               <li class="nav-item">
                                  <a class="nav-link" href="#">Help</a>
                               </li>
                            </ul>
                         </div>
                         <div class="col-lg-6">
                            <div class="nk-block-content text-center text-lg-left">
                               <p class="text-soft">&copy; 2022 MintTrade. All Rights Reserved.</p>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <!-- wrap @e -->
          </div>
          <!-- content @e -->
       </div>
       <!-- main @e -->
    </div>
 </x-guest-layout>
