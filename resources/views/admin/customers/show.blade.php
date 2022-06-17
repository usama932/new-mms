<x-app-layout>
    <div class="container-fluid">
       <div class="nk-content-inner">
          <div class="nk-content-body">
             <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                   <div class="nk-block-head-content">
                      <h3 class="nk-block-title page-title">Customers</h3>
                   </div>
                   <!-- .nk-block-head-content -->
                   <div class="nk-block-head-content">
                      <div class="toggle-wrap nk-block-tools-toggle">
                         <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                         <div class="toggle-expand-content" data-content="more-options">
                            <ul class="nk-block-tools g-3">
                               <li>
                                  <div class="form-control-wrap">
                                     <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-search"></em>
                                     </div>
                                     <input type="text" class="form-control" id="default-04" placeholder="Search ">
                                  </div>
                               </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                   <!-- .nk-block-head-content -->
                </div>
                <!-- .nk-block-between -->
             </div>
             <!-- .nk-block-head -->
             <div class="nk-block">
                <!-- .nk-tb-list -->
                <div class="card">
                   <div class="card-inner">
                      <ul class="nav nav-tabs">
                         <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabItem5"><em class="icon ni ni-user"></em><span>Profile</span></a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabItem6"><em class="icon ni ni-lock-alt"></em><span>Purchase History</span></a>
                         </li>
                      </ul>
                      <div class="tab-content">
                         <div class="tab-pane active" id="tabItem5">
                            <p>Personal Information</p>
                            <div class="row mb-5">
                               <div class="col-3">
                                  <span class="sub-text">First Name</span>
                               </div>
                               <div class="col-3">
                                  <span class="sub-text">{{$meeting->first_name}}</span>
                               </div>
                               <div class="col-3">
                                <span class="sub-text">Last Name</span>
                             </div>
                             <div class="col-3">
                                <span class="sub-text">{{$meeting->last_name}}</span>
                             </div>

                            </div>
                            <div class="row mb-5">
                               <div class="col-3">
                                  <span class="sub-text">Contact No</span>
                               </div>
                               <div class="col-3">
                                  <span class="sub-text">{{$meeting->contact}}</span>
                               </div>
                               <div class="col-3">
                                <span class="sub-text"> Email</span>
                             </div>
                             <div class="col-3">
                                <span class="sub-text">{{$meeting->email}}</span>
                             </div>

                            </div>
                            <div class="row mb-5">
                                <div class="col-3">
                                    <span class="sub-text">Street Address 1</span>
                                 </div>
                                 <div class="col-3">
                                    <span class="sub-text">{{$meeting->street_address}}</span>
                                 </div>
                                 <div class="col-3">
                                    <span class="sub-text">Street Address 2</span>
                                 </div>
                                 <div class="col-3">
                                    <span class="sub-text">{{$meeting->street_address1}}</span>
                                 </div>
                            </div>
                            <div class="row mb-5">
                               <div class="col-3">
                                  <span class="sub-text">Grade</span>
                               </div>
                               <div class="col-3">
                                  <span class="sub-text">{{$meeting->grade}}</span>
                               </div>
                            </div>
                         </div>
                         <div class="tab-pane" id="tabItem6">
                            <div class="card card-preview">
                               <div class="card-inner">
                                  <table class="datatable-init table">
                                     <thead>
                                        <tr>
                                           <th>Order #</th>
                                           <th>Product</th>
                                           <th>Date</th>
                                           <th>Total</th>
                                           <th>Status</th>
                                           <th>Action</th>
                                        </tr>
                                     </thead>
                                     <tbody>
                                        @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{$customer->id}}</td>
                                            <td>{{$customer->product_id}}</td>
                                            <td>{{$customer->Created_at}}</td>
                                            <td>{{$customer->total}}</td>
                                            <td>{{$customer->status}}</td>
                                            <td>
                                            </td>
                                            <td>
                                             <li><a href="{{route('orders.show',$customer->id)}}"><em class="icon ni ni-eye"></em><span>View Selected</span></a></li>
                                             <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Order</span></a></li>
                                            </td>
                                         </tr>
                                        @endforeach


                                     </tbody>
                                  </table>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- .nk-block -->
             </div>
          </div>
       </div>
    </div>

 </x-app-layout>
