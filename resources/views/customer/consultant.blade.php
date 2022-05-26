@extends('layouts.customer')
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-block-head-sub    text-dark"><h5 class="text-dark"><em class="icon ni ni-chevrons-left"></em> Request Consultation</h5></div>
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
        </div></div>
        <div class="col-6"><div class="card text-white ">

            <div class="card-inner ">
                <div class="d-flex mx-3">
                    <div class="user-avatar bg-lighter p-5" >
                    <em class="icon ni ni-chat-circle "></em>
                </div>
                <div  class="pl-4 py-1">
                    <p class="card-title text-dark">Chat with our sales team</p>
                    <button  style="background-color: #394048; color: white; " class="btn btn-xl  float-center">Live Chat</button>
                </div>

            </div>

            </div>
        </div></div>
    </div>

        <div class="nk-content-inner">

            <div class="nk-content-body col-12 " style="background-color: white">
                <div class="content-page  ">
                    <div >
                        <div  class="nk-block-head-content  " style=" padding-block: 25px;">
                            <div class="text-center"><h3>Book a meeting</h3>
                                <p>Go from no-code to an in-demand junior web developer</p></div>

                        </div>
                    </div><!-- .nk-block-head -->

                    <form action="#">
                                    <div class="row g-5 pt-5">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="full-name-1">First  Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="full-name-1" placeholder="First  Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="full-name-1">Last Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="full-name-1" placeholder="Last  Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="email-address-1">Email</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="email-address-1" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="email-address-1">Phone Number</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="email-address-1" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="email-address-1">Company name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="email-address-1" placeholder="Company name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label" for="email-address-1">Website URL</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="email-address-1" placeholder="Website URL">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-topics">Employees</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" id="fv-topics" name="fv-topics" data-placeholder="Select Employees" required>
                                                        <option label="Select Employees" value=""></option>
                                                        <option value="fv-gq">Employees 1</option>
                                                        <option value="fv-tq">Employees 2</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-topics">Country of Company</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" id="fv-topics" name="fv-topics" data-placeholder="Select a  Company" required>
                                                        <option label="empty" value=""></option>
                                                        <option value="fv-gq">Company A</option>
                                                        <option value="fv-tq">Company B</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label" for="cf-default-textarea">Additional notes</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm" id="cf-default-textarea" ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="col-lg-12 text-center" >
                                            <div class="form-group " >
                                                <button type="submit" style="background-color: #394048; color: white; " class="btn btn-xl  float-center">Send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form><!-- .nk-block -->
                </div><!-- .content-page -->
            </div>
        </div>
    </div>
</div>
@endsection
