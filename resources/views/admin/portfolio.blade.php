<x-app-layout>
    <div class="nk-content-body">
       <div class="nk-block-head nk-block-head-sm">
          <div class="nk-block-between">
             <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Customer Porfolios</h3>
             </div>
             <ul class="nk-block-tools g-3 float-right">
                <li class="nk-block-tools-opt ">
                   <a href="#" data-target="addProduct" class="toggle btn btn-icon btn-primary d-md-none "><em class="icon ni ni-plus "></em></a>
                   <a href="#" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex "><em class="icon ni ni-plus "></em><span>Add Porfolio</span></a>
                </li>
             </ul>
          </div>
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
             @php Session::forget('success'); @endphp
          </div>
          @endif
       </div>
       <!-- .nk-block-head -->
       @if(session()->has('success'))
       <div class="alert alert-success">
          {{ session()->get('success') }}
       </div>
       @endif
       <div class="card card-preview">
          <div class="card-inner">
             <div class="table-responsive">
                <table class="datatable-init table"  data-auto-responsive="false">
                   <thead>
                      <tr>
                         <th>Full Name</th>
                         <th>Product Name</th>

                         <th>Type</th>
                         <th>Purchase Date</th>

                         <th>Action</th>
                      </tr>
                   </thead>
                   <tbody>
                      @foreach($portfolios as $portfolio)
                      <tr>
                         <td>{{$portfolio->full_name}}</td>
                         <td>{{$portfolio->product_name}}</td>
                         <td>{{$portfolio->type}}</td>

                         <td>{{ \Carbon\Carbon::parse($portfolio->purchase_date)->format('m/d/Y')}}</td>
                         <td>
                            <div class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">

                                    <li>
                                        <div class="drodown mr-n1">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="link-list-opt no-bdr">
                                                    <li style=" text-align:center">
                                                        <button type="button"  data-target="addProduct{{ $portfolio->id }}" class="toggle btn btn-info btn-sm ">View</button></a>
                                                    </li>
                                                    <li style=" text-align:center">
                                                        <form action="{{route('portfolios.destroy',$portfolio->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="">
                                                            <button type="submit" class="btn btn-danger btn-sm text-center ml-5">Delete</button></a>
                                                            </a>
                                                         </form>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <span style="display:inline;">


                        </span>
                        </td>
                      </tr>
                      @endforeach
                   </tbody>
                </table>
             </div>
          </div>
       </div>
    </div>
    <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
       <div class="nk-block-head">
          <div class="nk-block-head-content">
             <h5 class="nk-block-title">Customer Portfolio</h5>
             <div class="nk-block-des">
                <p>Add  Customer Portfolio.</p>
             </div>
          </div>
       </div>
       <!-- .nk-block-head -->
       <div class="nk-block">
          <form action="{{ route('portfolios.store') }}" method="post">
             @csrf
             <div class="col-lg-12">
                <div class="form-group">
                   <label class="form-label" for="fv-topics">Customer </label>
                      <select class="form-control form-select"  name="full_name" data-placeholder="Select Customer" required>
                        @foreach ($users as $user)
                        <option value="{{ $user->first_name."  ".$user->last_name }}">{{ $user->first_name."  ".$user->last_name }}</option>
                        @endforeach
                      </select>
                </div>
             </div>
             <div class="row g-5 pt-5">
                <div class="col-lg-12">
                   <div class="form-group">
                      <label class="form-label" for="full-name-1">Product Name</label>
                      <div class="form-control-wrap">
                         <input type="text" class="form-control" name="product_name" placeholder="Product  Name" required>
                      </div>
                   </div>
                </div>
                <div class="col-lg-12">
                   <div class="form-group">
                      <label class="form-label" for="full-name-1">SKU</label>
                      <div class="form-control-wrap">
                         <input type="number" class="form-control" name="sku" placeholder="SKU" required>
                      </div>
                   </div>
                </div>
                <div class="col-lg-12">
                   <div class="form-group">
                      <label class="form-label" for="fv-topics">Purchase From</label>
                      <div class="form-control-wrap">
                         <input type="text" class="form-control" name="purchase_from" id="email-address-1" placeholder="Purchase_from" required>
                      </div>
                   </div>
                </div>
                <div class="col-lg-12">
                   <div class="form-group">
                      <label class="form-label" for="fv-topics">Purchase Price</label>
                      <div class="form-control-wrap">
                         <input type="number" class="form-control" name="purchase_price" id="email-address-1" placeholder="Purchase_price" required>
                      </div>
                   </div>
                </div>
                <div class="col-lg-12">
                   <div class="form-group">
                      <label class="form-label" for="fv-topics">Quantity</label>
                      <div class="form-control-wrap">
                         <input type="number" class="form-control" name="quantity" id="email-address-1" placeholder="Quantity" required>
                      </div>
                   </div>
                </div>
                <div class="col-lg-12">
                   <div class="form-group">
                      <label class="form-label" for="fv-topics">Purchase Date</label>
                      <div class="form-control-wrap">
                         <input type="date" class="form-control" name="purchase_date" id="email-address-1" placeholder="Purchase date" required>
                      </div>
                   </div>
                </div>
                <div class="col-lg-12">
                   <div class="form-group">
                      <label class="form-label" for="fv-topics">Type Of Product </label>
                      <div class="form-control-wrap ">
                         <select class="form-control form-select"  name="type" data-placeholder="Select Employees" required>
                            <option value="Bullion">Bullion</option>
                            <option value="Semi-Rare">Semi-Rare</option>
                            <option value="Graded">Graded</option>
                            <option value="Rare">Rare</option>
                            <option value="Collector">Collector</option>
                            <option value="Other">Other</option>
                         </select>
                      </div>
                   </div>
                </div>
                <div  class="col-lg-12 text-center" >
                   <div class="form-group " >
                      <button type="submit" style="background-color: #394048; color: white; " class="btn btn-xl  float-center mt-3 ">Submit Portfolio</button>
                   </div>
                </div>
             </div>
          </form>
       </div>
       <!-- .nk-block -->
    </div>
    @foreach($portfolios as $portfolio)
    <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct{{ $portfolio->id }}" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
        <div class="nk-block-head">
           <div class="nk-block-head-content">
              <h5 class="nk-block-title">Customer Portfolio Details</h5>
              <div class="nk-block-des">
                 <p>Details About Porfolio</p>
              </div>
           </div>
        </div>
        <!-- .nk-block-head -->
        <div class="nk-block">
            <div class="row g-5 pt-5">
                <div class="col-lg-12">
                    <strong>Purchase From</strong>
                    <small class="ml-4">{{$portfolio->purchase_from}}</small>
                </div>
                <div class="col-lg-6">
                    <strong>SKU</strong>
                    <small class="ml-4">{{$portfolio->sku}}</small>
                </div>

                <div class="col-lg-6">

                    <strong>Type</strong>
                    <small class="ml-4">{{$portfolio->type}}</small>
                </div>
                <div class="col-lg-6">
                    <strong>Quantity</strong>
                    <small class="ml-4">{{$portfolio->quantity}}</small>
                </div>
                <div class="col-lg-12">
                    <strong>Purchase Date</label>
                    <small class="ml-4">{{$portfolio->purchase_date}}</small>
                </div>

            </div>




        </div>
        <!-- .nk-block -->
     </div>
     @endforeach
 </x-app-layout>
