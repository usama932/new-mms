<x-app-layout>
    <style>
         .read-more-show{
      cursor:pointer;
      color: #ed8323;
    }
    .read-more-hide{
      cursor:pointer;
      color: #ed8323;
    }

    .hide_content{
      display: none;
        </style>
    <div class="container-fluid">
       <div class="nk-content-inner">
          <div class="nk-content-body">
             <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                   <div class="nk-block-head-content">
                      <h3 class="nk-block-title page-title">Consultation Meetings</h3>
                      <h3 class="nk-block-title page-title"><a href="{{ route('meetings.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                      </svg></a></h3>
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
                            <a class="nav-link active" data-toggle="tab" href="#tabItem5"><em class="icon ni ni-user"></em><span>Meetings Detail</span></a>
                         </li>

                      </ul>
                      <div class="tab-content">
                         <div class="tab-pane active" id="tabItem5">
                            <p>Personal Information</p>
                            <div class="row mb-5">
                               <div class="col-3">
                                  <span class="sub-text"> Name</span>
                               </div>
                               <div class="col-3">
                                  <span class="sub-text">{{$meeting->client_name}}</span>
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
                                  <span class="sub-text">Contact No</span>
                               </div>
                               <div class="col-3">
                                  <span class="sub-text">{{$meeting->phone}}</span>
                               </div>
                               <div class="col-3">
                                  <span class="sub-text">Requested Date</span>
                               </div>
                               <div class="col-3">
                                  <span class="sub-text">{{$meeting->requested_Date}}</span>
                               </div>
                            </div>
                            <div class="row mb-5">
                               <div class="col-3">
                                  <span class="sub-text">Requested Time</span>
                               </div>
                               <div class="col-3">
                                  <span class="sub-text">{{$meeting->requested_time}}</span>
                               </div>


                                <div class="col-3">
                                   <span class="sub-text">Website</span>
                                </div>
                                <div class="col-3">
                                   <span class="sub-text">{{$meeting->website}}</span>
                                </div>
                            </div>
                                <div class="row mb-5">
                                <div class="col-3">
                                   <span class="sub-text">Company Name</span>
                                </div>
                                <div class="col-3">
                                   <span class="sub-text">{{$meeting->company_name}}</span>
                                </div>


                                <div class="col-3">
                                   <span class="sub-text">Employees</span>
                                </div>
                                <div class="col-3">
                                   <span class="sub-text">{{$meeting->employees}}</span>
                                </div>
                             </div>
                             <div class="row mb-5">
                                <div class="col-3">
                                   <span class="sub-text">Notes</span>
                                </div>
                                <div class="col-9">
                                    <span class="sub-text">
                                        @if(strlen($meeting->notes) > 100)
                                        {{substr($meeting->notes,0,100)}}
                                        <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
                                        <span class="read-more-content"> {{substr($meeting->notes,100,strlen($meeting->notes))}}
                                        <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span> </span>
                                        @else
                                        {{$meeting->notes}}
                                        @endif
                                        </span>
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
