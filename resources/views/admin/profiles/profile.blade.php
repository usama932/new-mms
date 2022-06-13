<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
/>
<x-app-layout>
    <div class="container-fluid">
       <div class="nk-content-inner">
          <div class="nk-content-body">
             <div class="nk-block">

                <div class="card">
                    <div class="card-inner">
                       <div class="card-head">
                          <h5 class="card-title">Profile Settinge</h5>
                       </div>
                       @if(session()->has('message'))
                       <div class="alert alert-success">
                          {{ session()->get('message') }}
                       </div>
                       @endif
                       <form action="{{route('profiles.update',$data->id)}}" method="post" enctype="multipart/form-data">
                          @csrf
                          @method('put')
                          <div class="row mb-0">
                          <div class="col-sm-12 text-center mb-0">
                            <img src="{{asset($data->profile_image)}}" style="width:30%; height:50%; margin-bottom:0% border-radius:70%" class="card-img-top" alt="">
                            </div>
                          </div>
                          <div class="row gy-4">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Profile Picture Upload</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" name="profile_image" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                          </div>
                          <div class="row g-4">
                             <div class="col-lg-6">
                                <div class="form-group">
                                   <label class="form-label" for="full-name-1">First Name</label>
                                   <div class="form-control-wrap">
                                      <input type="text" class="form-control" name="first_name" value="{{ $data->first_name }}" id="full-name-1">
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                   <label class="form-label" for="full-name-1">Last Name</label>
                                   <div class="form-control-wrap">
                                      <input type="text" class="form-control" name="last_name" value="{{ $data->last_name }}" id="full-name-1">
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                   <label class="form-label" for="email-address-1">Email address</label>
                                   <div class="form-control-wrap">
                                      <input type="email" class="form-control" name="email" value="{{$data->email}}" id="email-address-1">
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                   <label class="form-label" for="phone-no-1">Phone No</label>
                                   <div class="form-control-wrap">
                                      <input type="text" class="form-control" name="contact" value="{{$data->contact}}" id="phone-no-1">
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                   <label class="form-label" for="pay-amount-1">Street Address</label>
                                   <div class="form-control-wrap">
                                      <input type="text" class="form-control" name="street_address" value="{{$data->street_address}}">
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                   <label class="form-label" for="pay-amount-1">City</label>
                                   <div class="form-control-wrap">
                                      <input type="text" class="form-control" name="city" value="{{$data->city}}">
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                   <label class="form-label" for="pay-amount-1">State</label>
                                   <div class="form-control-wrap">
                                      <input type="text" class="form-control" name="state" value="{{$data->state}}">
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                   <label class="form-label" for="pay-amount-1">Phone Number</label>
                                   <div class="form-control-wrap">
                                      <input type="text" class="form-control" name="address" value="{{$data->contact}}" placeholder="123-456-7890"/>
                                   </div>
                                </div>
                             </div>
                             <div class="col-12">
                                <div class="text-center">
                                   <button type="submit" class="btn btn-primary btn-sm">Update Profile</button>
                                </div>
                             </div>
                          </div>
                       </form>
                    </div>
                 </div>
          </div>
       </div>
    </div>
    </x-app-layout>
