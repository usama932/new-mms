@extends('layouts.staff')
@section('content')

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
                               @if(session()->has('message'))
                               <div class="alert alert-success">
                                   {{ session()->get('message') }}
                               </div>
                                @endif
                               <form action="{{route('staff_profiles.update', $data->id)}}" method="post">
                                 @csrf
                                 @method('put')
                               <div class="nk-block">
                                  <div class="nk-data data-list">
                                     <div class="data-head">
                                        <h6 class="overline-title">Basics</h6>
                                     </div>
                                     <div class="data-item " data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                           <span class="data-label"> Name</span>
                                         <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                                        </div>
                                     </div>
                                     <!-- data-item -->
                                     ><!-- data-item -->
                                     <div class="data-item">
                                        <div class="data-col">
                                           <span class="data-label">Email</span>
                                           <input type="email" class="form-control" name="email" value="{{$data->email}}">

                                        </div>
                                     </div>
                                     <!-- data-item -->
                                     <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                           <span class="data-label">Contact</span>
                                           <input type="text" class="form-control" name="contact" value="{{$data->contact}}">
                                        </div>
                                     </div>
                                     <!-- data-item -->
                                     <!-- data-item -->
                                     <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                        <div class="data-col">
                                           <span class="data-label">Address</span>
                                           <input type="text" class="form-control" name="address" value="{{$data->address}}">
                                        </div>
                                     </div>
                                     <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                           <span class="data-label">Role</span>
                                           <input type="roled_as" class="form-control" name="roled_as" value="{{$data->roled_as}}" disabled>
                                        </div>
                                     </div>
                                     <!-- data-item -->
                                  </div>
                                  <!-- data-list -->
                               </div>
                               <button type="submit"  style="float: right;">Update Profile</button>
                               <!-- .nk-block -->
                            </div>
                           </form>
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
  @endsection
