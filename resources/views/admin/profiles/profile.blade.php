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
