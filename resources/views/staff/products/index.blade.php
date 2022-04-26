@extends('layouts.staff')
@section('content')
<div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Products</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">
                                                                    <em class="icon ni ni-search"></em>
                                                                </div>
                                                                <input type="text" class="form-control" id="default-04" placeholder="Search">
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt">
                                                            <a href="#" data-target="addProduct" class="toggle btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                            <a href="#" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Product</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                @if(session()->has('success'))
                                <div class="alert alert-success">
                                   {{ session()->get('success') }}
                                </div>
                                @endif
                                <div class="card card-preview">
                                    <div class="card-inner">
                                        <table class="datatable-init table">
                                            <thead>
                                               <tr>
                                                <th>Image</th>
                                                  <th>Title</th>
                                                  <th>Product_#</th>
                                                  <th>Description</th>
                                                  <th>Price</th>
                                                  <th>Category</th>
                                                  <th>Status</th>
                                                  <th>Added_By</th>
                                                  <th>Action</th>
                                               </tr>
                                            </thead>
                                            <tbody>
                                               @foreach($product as $products)
                                               <tr>
                                                <td><img src="{{$products->images->image}}"  style="width:70px; height:70px;" ></td>
                                                  <td>{{$products->title}}</td>tyle=
                                                  <td>{{$products->product_id}}</td>
                                                  <td>{{$products->description}}</td>
                                                  <td>{{$products->price}}</td>
                                                  <td>{{$products->availability}}</td>
                                                  <td>{{$products->status}}</td>
                                                  <td>{{$products->user->name}}</td>
                                                  <td>
                                                     <form action="{{ route('products.destroy',$products->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                                     </form>
                                                  </td>
                                               </tr>
                                               @endforeach
                                            </tbody>
                                         </table>
                                    </div>
                                </div><!-- .nk-block -->

                                <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title">New Product</h5>
                                            <div class="nk-block-des">
                                                <p>Add information and add new product.</p>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <button class="btn btn-primary" data-toggle="collapse" href="#collapseExample"><em class="icon ni ni-plus"></em><span>Add Manually</span></button>
                                                <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Upload CSV</a>
                                                <div class="collapse" id="collapseExample">
                                                    <div class="card card-body">
                                                        <form method='post' action="{{route('staff_products.store')}}">
                                                            @csrf
                                                            <label>Product Info:</label>
                                                            <input type="text" name="product_id"></input>
                                                            <button class="btn btn-primary "><span>Submit</span></button>
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                      <div class="card card-body">
                                                       <form method="post" action="{{route('staff_products.store')}}">
                                                        @csrf
                                                        <input type="file"
                                                         name="avatar"
                                                        >
                                                        <br>
                                                        <button style="margin-top:2px"class="btn btn-primary"><span>Submit</span></button>
                                                       </form>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button class="btn btn-primary  my-5  float-right"><span>Next</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .nk-block -->
                                </div>


                            </div>
@endsection
