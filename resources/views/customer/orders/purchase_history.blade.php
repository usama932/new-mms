@extends('layouts.customer')
@php
    use App\Models\User;
@endphp
@section('content')
<div class="container-fluid">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">

                    <div class="col-12 ml-3 ">

                        <div class="nk-block-between g-3">
                            <h4><span>Purchase History</span></h4>
                             <!-- <div class="nk-block-head-content"> -->
                                <!-- <p ><b>Purchase History</b></p> -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="more-options">
                                        <ul class="nk-block-tools g-3">
                                            {{-- <li>
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-search"></em>
                                                    </div>
                                                    <input type="text" class="form-control" id="default-04" placeholder="Search ">
                                                </div>
                                            </li> --}}

                                            {{-- <li>
                                                    <div class="form-control-wrap d-flex ">
                                                        <span class="mr-1">Order</span>
                                                        <div class="form-control-select">
                                                            <select class="form-control " >
                                                                <option value="">SQ-00000</option>
                                                                <option value="1">SQ-00000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                            </li> --}}
                                            {{-- <li>
                                                    <div class="form-control-wrap d-flex ">
                                                        <span class="mr-1" >From</span>
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control date-picker">
                                                            </div>

                                                        </div>
                                                    </div>
                                            </li> --}}
                                            {{-- <li>
                                                    <div class="form-control-wrap  d-flex">
                                                        <span class="mr-1">To</span>
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control date-picker">
                                                            </div>

                                                        </div>
                                                    </div>
                                            </li> --}}
                                        </ul>
                                    </div>

                                </div>

                            </div>
                    </div>

                        <!-- <div class="nk-block-head-content">
                            <a href="html/ecommerce/customers.html" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            <a href="html/ecommerce/customers.html" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                        </div> -->

                    </div>

              <!-- .nk-block-between -->
            </div><!-- .nk-block-head -->
            <!-- .nk-block -->
            <div class="card card-preview">
                <div class="card-inner">
                    <table class="datatable-init table">
                        <thead>
                            <tr>
                                <th>Order No</th>
                                <th>Order Date</th>
                                <th>Order By</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ \Carbon\Carbon::parse($order->created_at)->format('m/d/Y')}}</td>
                            <td>
                            @php

                                $user = User::where('id',$order->user_id)->value('name');
                                echo $user;
                            @endphp
                            </td>
                            <td>{{ $order->total }}</td>
                            <td>{{ $order->status  }}</td>
                            <td>
                                @if($order->status != "Completed" && $order->status != "Delivered" )
                             <a href="{{ route('order.delete',$order->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
                             @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
