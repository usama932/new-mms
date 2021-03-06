<?php
use App\Models\Role;
?>
<x-app-layout>
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Staff</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">


                                        <li class="nk-block-tools-opt">
                                            <a href="#" data-target="addProduct" class="toggle btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a href="#" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add User</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="card card-preview">
                    <div class="card-inner">
                        <div class="table-responsive">
                        <table class="datatable-init table"  data-auto-responsive="false">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    {{-- <th>Status</th> --}}
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($staff as $staffs)
                                <tr>
                                    <td>{{$staffs->id}}</td>
                                    <td>{{$staffs->first_name}}</td>
                                    <td>{{$staffs->last_name}}</td>
                                    <td>{{$staffs->contact}}</td>
                                    <td>{{$staffs->email}}</td>
                                    {{-- <td>
                                        {{$staffs->status}}
                                    </td> --}}
                                    <td>
                                        @php
                                            $user = Role::where('id',$staffs->role->role_id)->value('name');
                                        @endphp
                                        @php
                                           echo $user;
                                        @endphp
                                    </td>

                                    <td>
                                        @if($staffs->id != Auth::user()->id)
                                        <form action="{{route('staffs.destroy',$staffs->id)}}" method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                        </form>
                                        @endif
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                                    </div>
                    </div>
                </div>
                <!-- .nk-block -->
                <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">New User</h5>
                            <div class="nk-block-des">
                                <p>Add information to add New User.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
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
                    <form method="post" action="{{route('staffs.store')}}">
                        @csrf

                        <div class="row g-3">

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="product-title">First Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="product-title" placeholder="First Name" name="first_name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="product-title">Last Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="product-title" placeholder="Last Name" name="last_name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="product-title">Phone Number</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="product-title" placeholder="(111) 222-3333" name="contact" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="product-title">Contact Email</label>
                                    <div class="form-control-wrap">
                                        <input type="email" class="form-control" id="product-title" placeholder="abc@gmail.com" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="fv-topics">Role</label>
                                    <div class="form-control-wrap ">
                                        <select class="form-control form-select" id="fv-topics" name="role_id" required>
                                            <option label="empty" value=""></option>
                                            <option value="admin">Admin</option>
                                            <option value="staff">Staff</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="product-title">Password</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="product-title" placeholder="124$$qwr" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary"><span>Save</span></button>
                            </div>
                        </form>
                        </div>
                    </form>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
