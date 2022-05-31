@extends('layouts.customer')
@section('content')
<div class="nk-content ">
   <div class="container-fluid">
      <div class="nk-block-head-sub text-dark">
         <h5 class="text-dark"><em class="icon ni ni-chevrons-left"></em> Request Consultation</h5>
      </div>
      @if(session()->has('success'))
      <div class="alert alert-success">
         {{ session()->get('success') }}
      </div>
      @endif
      <div class="d-flex py-4">
         <div class="col-6 ">
            <div class="card text-white ">
               <div class="card-inner ">
                  <div class="d-flex ">
                     <div class="user-avatar bg-lighter p-5 border-dark">
                        <em class="icon ni ni-call"></em>
                     </div>
                     <div  class="pl-4 py-2">
                        <p class=" text-dark">Call us direct at</p>
                        <h5 class=" text-dark">+45 52 67 29 31</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-6">
            <div class="card text-white ">
               <div class="card-inner ">
                  <div class="d-flex mx-3">
                     <div class="user-avatar bg-lighter p-5" >
                        <em class="icon ni ni-chat-circle "></em>
                     </div>
                     <div  class="pl-4 py-1">
                        <p class="card-title text-dark">Chat with our sales team</p>
                        <button  style="background-color: #394048; color: white; " class="btn btn-sm  float-center">Live Chat << Comming Soon..! >> </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="nk-content-inner">
         <div class="nk-content-body col-12 " style="background-color: white">
            <div class="content-page  ">
               <div >
                  <div  class="nk-block-head-content  " style=" padding-block: 25px;">
                     <div class="text-center">
                        <h3>Book a meeting</h3>
                        <p>Go from no-code to an in-demand junior web developer</p>
                     </div>
                  </div>
               </div>
               <!-- .nk-block-head -->
               <form action="{{ route('customer_meetings.store') }}" method="post">
                  @csrf
                  <div class="row g-5 pt-5">
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label" for="full-name-1">Client Name</label>
                           <div class="form-control-wrap">
                              <input type="text" class="form-control" name="client_name" placeholder="Client  Name" required>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label" for="email-address-1">Email</label>
                           <div class="form-control-wrap">
                              <input type="email" class="form-control"  name="email" placeholder="Email" required>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label" for="email-address-1">Phone Number</label>
                           <div class="form-control-wrap">
                              <input type="text" class="form-control" name="phone" placeholder="Phone number" required>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label" for="email-address-1">Company name</label>
                           <div class="form-control-wrap">
                              <input type="text" class="form-control" name="company_name" id="email-address-1" placeholder="Company name" required>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label" for="email-address-1">Website URL</label>
                           <div class="form-control-wrap">
                              <input type="url" class="form-control" name="website" placeholder="Website URL" required>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="form-label" for="fv-topics">Employees</label>
                           <div class="form-control-wrap ">
                              <select class="form-control form-select"  name="employees" data-placeholder="Select Employees" required>
                                 <option label="Select Employees" value=""></option>
                                 <option value="1-10">1-10</option>
                                 <option value="10-50">10-50</option>
                                 <option value="50-100">50-100</option>
                                 <option value="100+">100+</option>
                              </select>
                           </div>
                        </div>
                     </div>
                 
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="form-label" for="fv-topics">Choose a Day That Suits you Best</label>
                           <div class="form-control-wrap">
                              <input type="date" class="form-control" name="requested_Date" id="email-address-1" placeholder="Requested time" required>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label" for="fv-topics">Choose a Time That Suits you Best</label>
                           <div class="form-control-wrap">
                              <input type="time" class="form-control" name="requested_time" id="email-address-1" placeholder="Requested time" required>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 mb-2x mt-5">
                     <div class="form-group">
                        <label class="form-label" for="cf-default-textarea">Additional notes</label>
                        <div class="form-control-wrap">
                           <textarea class="form-control form-control-sm" id="cf-default-textarea" name="notes"></textarea>
                        </div>
                     </div>
                  </div>
                  <div  class="col-lg-12 text-center" >
                     <div class="form-group " >
                        <button type="submit" style="background-color: #394048; color: white; " class="btn btn-xl  float-center mt-3 ">Send message</button>
                     </div>
                  </div>
            </div>
            </form>
            <!-- .nk-block -->
         </div>
         <!-- .content-page -->
      </div>
   </div>
</div>
</div>
@endsection