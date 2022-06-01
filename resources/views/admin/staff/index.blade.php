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
                        <table class="datatable-init table">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>Full Name</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($staff as $staffs)
                                <tr>
                                    <td>{{$staffs->id}}</td>
                                    <td>{{$staffs->name}}</td>
                                    <td>{{$staffs->contact}}</td>
                                    <td>{{$staffs->address}}</td>
                                    <td>{{$staffs->email}}</td>
                                    <td>
                                        {{$staffs->status}}
                                    </td>
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
                    <form method="post" action="{{route('staffs.store')}}">
                        @csrf

                        <div class="row g-3">

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="product-title">Full Name</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="product-title" placeholder="loremipsum" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="product-title">Contact</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="product-title" name="contact" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="product-title">Email</label>
                                    <div class="form-control-wrap">
                                        <input type="email" class="form-control" id="product-title" placeholder="lorem@gmail.com" name="email">
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
                                <div class="form-group">
                                    <label class="form-label" for="product-title">Address</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="product-title" placeholder="151 W.42nd Street New York" name="address">
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
