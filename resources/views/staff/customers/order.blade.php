@extends('layouts.staff')
@section('content')
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
                                        <!-- <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white" data-toggle="dropdown">Status</a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>On Hold</span></a></li>
                                                        <li><a href="#"><span>Delevired</span></a></li>
                                                        <li><a href="#"><span>Rejected</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li> -->
                                        <!-- <li class="nk-block-tools-opt">
                                            <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a href="#" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Order</span></a>
                                        </li> -->
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
                              <th>Order#</th>
                                <th>Date</th>
                                <th>Product #</th>
                                <th>Description</th>
                                <th>Customer</th>
                                <th>Total</th>
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

                                    {{ date('d-m-Y', strtotime($order->created_at)) }}
                                </td>
                                <td>
                                    {{ $order->product->title }}
                                </td>
                                <td>
                                    {{ $order->description }}
                                </td>
                                <td>
                                    {{ $order->user->name }}
                                </td>
                                <td>
                                    {{ $order->total }}
                                </td>
                                <td>
                                    <div class="drodown mr-n1">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="link-list-opt no-bdr">
                                                <li style=" text-align:center">
                                                <form action="{{ route('staff_orders.destroy',$order->id) }}" method="POST">
                                                     @csrf
                                                    @method('DELETE')
                                                    <button type="submit"  style="border:none; background-color:transparent" class="mr-3"><em class="icon ni ni-trash" ></em><span>Remove Order</span></a></button>
                                                </form>
                                                </li>
                                                <li style=" text-align:center">
                                                    <form action="{{ route('staff_orders.update',$order->id) }}" method="POST">
                                                        @csrf
                                                        @method('put')
                                                        <input type="hidden" name="status" value="Completed">
                                                        <button type="submit" style="border:none; background-color:transparent" >
                                                        <em class="icon ni ni-truck"></em><span>Mark as Completed</span>
                                                        </button>
                                                    </form>
                                                    </li>
                                                    <li style=" text-align:center">
                                                        <form action="{{ route('staff_orders.update',$order->id) }}" method="POST">
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
                                </td>
                            </tr>
                            @endforeach
                          </tbody>
                       </table>
                    </div>
                 </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection
