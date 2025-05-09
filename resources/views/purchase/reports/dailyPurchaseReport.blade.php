@extends('layouts.layout')

@section('content')
<div class="container-scroller">
    @include('dashboard.pertials.sideNav')
    <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
            </div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme">
                <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
                <div class="tiles light"></div>
                <div class="tiles dark"></div>
            </div>
        </div>
        @include('dashboard.pertials.topNav')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">Daily Purchase</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Reports</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Daily Purchase </li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center">Daily Purchase</h4>
                                <div style="overflow-x:scroll;">
                                    <table id="example" class="table table-bordered">

                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Pur No</th>
                                                <th>Items & Qty</th>
                                                <th>Pur Date & Time</th>
                                                <th>Total</th>
                                                <th>Discount</th>
                                                <th>Vat</th>
                                                <th>Payable</th>
                                                <th>Paid</th>
                                                <th>Due</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i=1; @endphp
                                            @foreach ($PurchaseInfo as $user)
                                            <tr>
                                                <td style="width: 10px;">{{ $i++ }}</td>
                                                <td style="width: 60px;">{{ $user->purchase_id }}</td>
                                                <td style="width: 250px;">
                                                    @php
                                                    $cart_item_data = \App\Models\PurchaseDetail::join('products', 'products.product_id', '=', 'purchase_details.product_id')
                                                    ->where('purchase_details.purchase_id', $user->purchase_id)
                                                    ->select('purchase_details.quantity', 'products.product_name')
                                                    ->get();
                                                    @endphp
                                                    @foreach ($cart_item_data as $itemdata)
                                                    <div class="row pr-3 pt-2">
                                                        <div class="col-12">
                                                            {{ $itemdata->product_name }}
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            {{ $itemdata->quantity }}
                                                        </div>
                                                        <div class="col-12 mt-2 text-right">
                                                            {{ $itemdata->purchase_price }}
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                </td>
                                                <td style="width: 60px;">{{ $user->pur_date }}</td>
                                                <td style="width: 60px;" class="text-right">{{ $user->total_item_price	 }}</td>
                                                <td style="width: 60px;" class="text-right">{{ $user->discount }}</td>
                                                <td style="width: 60px;" class="text-right">{{ $user->total_vat }}</td>
                                                <td style="width: 60px;" class="text-right">{{ $user->total_payable }}</td>
                                                @php
                                                $pay = \App\Models\SupplierPayment::where('purchase_id', $user->purchase_id)
                                                ->first();
                                                @endphp
                                                <td style="width: 60px;" class="text-right">{{ $pay->paid_amount }}</td>
                                                <td style="width: 60px;" class="text-right">{{ $pay->revised_due }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        @endsection