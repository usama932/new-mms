<x-app-layout>
    <div class="container-fluid">
       <div class="nk-content-inner">
          <div class="nk-content-body">
             <div class="nk-block">
                <div class="card">
                   <div class="card-aside-wrap">
                      <div class="card-inner card-inner-lg">
                         <div class="tab-content">
                            <div class="tab-pane active" id="personal">
                               <div class="nk-block-head nk-block-head-lg">
                                  <div class="nk-block-between">
                                     <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Profile Setting</h4>
                                     </div>
                                  </div>
                               </div>
                               <!-- .nk-block-head -->
                               <div class="nk-block">
                                  <div class="nk-data data-list">
                                     <div class="data-head">
                                        <h6 class="overline-title">Basics</h6>
                                     </div>
                                     <div class="data-item " data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                           <span class="data-label"> Name</span>
                                           <span class="data-value">{{$data->name}}</span>
                                        </div>
                                     </div>
                                     <!-- data-item -->
                                     ><!-- data-item -->
                                     <div class="data-item">
                                        <div class="data-col">
                                           <span class="data-label">Email</span>
                                           <span class="data-value">{{$data->email}}</span>
                                        </div>
                                     </div>
                                     <!-- data-item -->
                                     <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                           <span class="data-label">Contact</span>
                                           <span class="data-value text-soft">{{$data->contact}}</span>
                                        </div>
                                     </div>
                                     <!-- data-item -->
                                     <!-- data-item -->
                                     <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                        <div class="data-col">
                                           <span class="data-label">Address</span>
                                           <span class="data-value"><br>{{$data->address}}</span>
                                        </div>
                                     </div>
                                     <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                           <span class="data-label">Role</span>
                                           <span class="data-value">{{$data->roled_as}}</span>
                                        </div>
                                     </div>
                                     <!-- data-item -->
                                  </div>
                                  <!-- data-list -->
                               </div>
                               <!-- .nk-block -->
                            </div>
                            <!-- .tab-pane -->
                         </div>
                         <!-- .tab-content -->
                      </div>
                      <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                         <div class="card-inner-group" data-simplebar>
                            <div class="card-inner">
                               <div class="user-card">
                                  <div class="user-avatar bg-primary">
                                     <span>AB</span>
                                  </div>
                                  <div class="user-info">
                                     <span class="lead-text">{{$data->name}}</span>
                                     <span class="sub-text">{{$data->email}}</span>
                                  </div>

                               </div>
                               <div class="modal fade" role="dialog" id="profile-edit">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                                        <div class="modal-body modal-body-lg">
                                            <h5 class="title">Update Profile</h5>
                                            <ul class="nk-nav nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#personal">Personal</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#address">Address</a>
                                                </li>
                                            </ul><!-- .nav-tabs -->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="personal">
                                                    <div class="row gy-4">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="full-name">Full Name</label>
                                                                <input type="text" class="form-control form-control-lg" id="full-name" value="Abu Bin Ishtiyak" placeholder="Enter Full name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="display-name">Display Name</label>
                                                                <input type="text" class="form-control form-control-lg" id="display-name" value="Ishtiyak" placeholder="Enter display name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="phone-no">Phone Number</label>
                                                                <input type="text" class="form-control form-control-lg" id="phone-no" value="+880" placeholder="Phone Number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="birth-day">Date of Birth</label>
                                                                <input type="text" class="form-control form-control-lg date-picker" id="birth-day" placeholder="Enter your name">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="latest-sale">
                                                                <label class="custom-control-label" for="latest-sale">Use full name to display </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                                <li>
                                                                    <a href="#" class="btn btn-lg btn-primary">Update Profile</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .tab-pane -->
                                                <div class="tab-pane" id="address">
                                                    <div class="row gy-4">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="address-l1">Address Line 1</label>
                                                                <input type="text" class="form-control form-control-lg" id="address-l1" value="2337 Kildeer Drive">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="address-l2">Address Line 2</label>
                                                                <input type="text" class="form-control form-control-lg" id="address-l2" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="address-st">State</label>
                                                                <input type="text" class="form-control form-control-lg" id="address-st" value="Kentucky">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="address-county">Country</label>
                                                                <select class="form-select" id="address-county" data-ui="lg">
                                                                    <option>Canada</option>
                                                                    <option>United State</option>
                                                                    <option>United Kindom</option>
                                                                    <option>Australia</option>
                                                                    <option>India</option>
                                                                    <option>Bangladesh</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                                <li>
                                                                    <a href="#" class="btn btn-lg btn-primary">Update Address</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .tab-pane -->
                                            </div><!-- .tab-content -->
                                        </div><!-- .modal-body -->
                                    </div><!-- .modal-content -->
                                </div><!-- .modal-dialog -->
                            </div>
                               <!-- .user-card -->
                            </div>
                            <!-- .card-inner -->
                            <div class="card-inner">
                               <div class="user-account-info py-0">
                                  <h6 class="overline-title-alt">Last Login</h6>
                                  <p>06-29-2020 02:39pm</p>
                                  <h6 class="overline-title-alt">Login IP</h6>
                                  <p>192.129.243.28</p>
                               </div>
                            </div>
                            <!-- .card-inner -->
                         </div>
                         <!-- .card-inner-group -->
                      </div>
                      <!-- card-aside -->
                   </div>
                   <!-- .card-aside-wrap -->
                </div>
                <!-- .card -->
             </div>
             <!-- .nk-block -->
          </div>
       </div>
    </div>
 </x-app-layout>
