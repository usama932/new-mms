@extends('layouts.staff')
@section('content')
<div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Customers</h3>

                                        </div><!-- .nk-block-head-content -->
                                       <!-- .nk-block-head-content -->

                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="card card-preview">
                                    @if(Session::has('danger'))
                                       <div class="alert alert-danger">
                                          {{ Session::get('danger') }}
                                          @php
                                          Session::forget('danger');
                                          @endphp
                                       </div>
                                       @endif
                                       @if(Session::has('success'))
                                       <div class="alert alert-success">
                                          {{ Session::get('success') }}
                                          @php
                                          Session::forget('success');
                                          @endphp
                                       </div>
                                       @endif
                                    <div class="card-inner">
                                        <table class="datatable-init table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Grade</th>
                                                    <th>Purchase</th>
                                                    <th>Contact</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($customers as $customer)
                                                <tr>
                                                    <td>{{$customer->name}}</td>
                                                    <td>{{$customer->grade}}</td>
                                                    <td>{{$customer->Purcahse}}</td>
                                                    <td>{{$customer->contact}}</td>
                                                    <td>{{$customer->email}}</td>
                                                    <td>
                                                        @php
                                                        if($customer->is_active == 1){
                                                        $status = 'Active';
                                                        }
                                                        else{
                                                        $status = 'Blocked';
                                                        }
                                                        echo $status;
                                                        @endphp
                                                    </td>
                                                    <td>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                               <li>
                                                                  <div class="drodown ">
                                                                     <a href="#" class="dropdown-toggle btn btn-icon btn-trigger " data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                     <div class="dropdown-menu dropdown-menu-right ">
                                                                        <ul class="link-list-opt no-bdr">
                                                                           <li><a href="{{route('staff_customers.show',$customer->id)}}"><em class="icon ni ni-eye"></em><span>View Customer</span></a></li>
                                                                           {{--
                                                                           <li>
                                                                              <form method="post" action="{{route('customers.update' ,$customer->id)}}">
                                                                                 @csrf
                                                                                 @method('put')
                                                                                 <input type="hidden" name="is_active" value="0" />
                                                                                 <button href="#"><em class="icon ni ni-eye"></em><span>Block</span></button>
                                                                              </form>
                                                                           </li>
                                                                           --}}
                                                                           <li class="nk-block-tools-opt">
                                                                              <a href="#" data-target="addProduct{{$customer->id}}" class="toggle btn btn-icon btn-primary d-md-none"><em class="icon ni ni-activity-round"></em></a>
                                                                              <a href="#" data-target="addProduct{{$customer->id}}" class="toggle btn  d-none d-md-inline-flex"><em class="icon ni ni-activity-round"></em><span>Grade the Customer</span></a>
                                                                           </li>
                                                                        </ul>
                                                                     </div>
                                                                  </div>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- .nk-block -->
                                @foreach($customers as $customer)
                                <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct{{$customer->id}}" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title"> Grade the Customer</h5>
                                            <div class="nk-block-des">
                                                <p>Add information to edit grade.</p>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                        <form  method="post" action="{{route('staff_customers.update',$customer->id)}}">
                                            @csrf
                                            @method('put')
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="product-title">Grades</label>
                                                    <div class="nk-tb-col nk-tb-col-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="com-email">
                                                            <label class="custom-control-label" for="com-email"><strong>A+</strong></label>
                                                        </div>
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="com-email">
                                                            <label class="custom-control-label" for="com-email"><strong>A</strong></label>
                                                        </div>
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="com-email">
                                                            <label class="custom-control-label" for="com-email"><strong>B+</strong></label>
                                                        </div>
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="com-email">
                                                            <label class="custom-control-label" for="com-email"><strong>C</strong></label>
                                                        </div>
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="com-email">
                                                            <label class="custom-control-label" for="com-email"><strong>D</strong></label>
                                                        </div>
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="com-email">
                                                            <label class="custom-control-label" for="com-email"><strong>F</strong></label>
                                                        </div>  

                                                    </div>

                                                    <!-- <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="product-title">
                                                    </div> -->
                                                </div>
                                            </div>

                                            <div class="col-12 ">
                                                    <li><button type="submit" class="btn btn-primary d-none d-md-inline-flex float-right" ><span>Submit</span></button></li>
                                            </div>
                                        </div>
                                    </form>
                                    </div><!-- .nk-block -->
                                </div>
                                @endforeach

                            </div>
@endsection


