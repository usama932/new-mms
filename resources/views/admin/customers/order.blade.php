
@php

    use App\Models\Product;
    use App\Models\User;
@endphp
<x-app-layout>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Orders</h3>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>

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
                                  <th>Order#</th>
                                    <th>Date</th>
                                    <th>Product #</th>
                                    <th>Description</th>
                                    <th>Customer</th>
                                    <th>Total</th>
                                    <th>Pending</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                @foreach($orders as $order)

                                    <tr>
                                        <td>
                                            {{ $order->id }}
                                        </td>
                                        <td>

                                            {{ date('m-d-Y', strtotime($order->created_at)) }}
                                        </td>
                                        <td>
                                            {{ $order->product_id }}

                                        </td>
                                        <td>
                                            {{ $order->description }}
                                        </td>
                                        <td>
                                            @if(!empty($order->user_id))
                                            @php
                                            $first_name = User::where('id','$order->user_id')->value('first_name');
                                            $last_name = User::where('id','$order->user_id')->value('last_name');
                                            echo $first_name.' '.$last_name;


                                        @endphp
                                         @endif
                                        </td>
                                        <td>
                                            {{ $order->total }}
                                        </td>
                                        <td> <span class="dot bg-warning d-mb-none"></span>
                                            <span class="badge badge-sm badge-dot has-bg badge-warning d-none d-mb-inline-flex"> {{ $order->status }}</span>
                                    </td>
                                        <td>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">

                                                    <li>
                                                        <div class="drodown mr-n1">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li style=" text-align:center">
                                                                    <form action="{{ route('orders.destroy',$order->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"  style="border:none; background-color:transparent" class="mr-3"><em class="icon ni ni-trash" ></em><span>Remove Order</span></a></button>
                                                                    </form>
                                                                    </li>
                                                                    <li style=" text-align:center">
                                                                        <form action="{{ route('orders.update',$order->id) }}" method="POST">
                                                                            @csrf
                                                                            @method('put')
                                                                            <input type="hidden" name="status" value="Completed">
                                                                            <button type="submit" style="border:none; background-color:transparent" >
                                                                            <em class="icon ni ni-truck"></em><span>Mark as Completed</span>
                                                                            </button>
                                                                        </form>
                                                                        </li>
                                                                        <li style=" text-align:center">
                                                                            <form action="{{ route('orders.update',$order->id) }}" method="POST">
                                                                                @csrf
                                                                                @method('put')
                                                                                <input type="hidden" name="status" value="Delivered">
                                                                                <button type="submit" style="border:none; background-color:transparent" >
                                                                                <em class="icon ni ni-truck"></em><span>Mark as Delivered</span>
                                                                                </button>
                                                                            </form>
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
                        </div>
                     </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
