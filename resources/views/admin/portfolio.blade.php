<x-app-layout>
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
           <div class="nk-block-between">
              <div class="nk-block-head-content">
                 <h3 class="nk-block-title page-title">Consultation Meetings</h3>
              </div>
           </div>
           <!-- .nk-block-between -->
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
                       <th>Quantity</th>
                       <th>Phone</th>
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
                       <td>{{$portfolio->quantity}}</td>
                       <td>{{$portfolio->contact}}</td>
                       <td>{{ \Carbon\Carbon::parse($portfolio->purchase_date)->format('m/d/Y')}}</td>
                       <td>


                                            <form action="{{route('portfolios.destroy',$portfolio->id)}}" method="POST">
                                                @csrf

                                                @method('DELETE')
                                                <a href="">
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button></a>
                                                </a>
                                            </form>


                       </td>
                    </tr>
                    @endforeach
                 </tbody>
              </table>
</div>
           </div>
        </div>

     </div>
</x-app-layout>
