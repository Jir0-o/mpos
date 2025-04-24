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
                    <h3 class="page-title">Stock</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Stock</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Stock Report </li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-description btn btn-info"><a class="text-light" href="{{ route('backoffice.stock-transfer')}}">Stock Transfer</a></div>
                                <div class="card-description float-right">
                                    <div class="input-group mb-3">
                                    <select aria-label="Default" aria-describedby="inputGroup-sizing-default" class="form-control" name="category_id" id="category_id">
                                        <option selected disabled>-------Select-------</option>
                                        @foreach($product_cat as $cat)
                                            <option value="{{$cat->category_id}}">{{$cat->category_name}}</option>
                                        @endforeach
                                    </select>
                                     <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-light" id="inputGroup-sizing-default">Category</span>
                                    </div>
                                    </div>
                                </div>
                                <h4 class="card-title text-center">Stock Report</h4>
                                @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                                @endif
                                @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                                @endif
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered">

                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Location</th> 
                                                <th>Purchase </th>
                                                <th>Sold </th>
                                                <th>Stock </th> 
                                            </tr>

                                        </thead>
                                        <tbody id="stock_table">
                                            @foreach($stock_report as $values)
                                            <tr>
                                                <td>{{$values->product_name }}</td>
                                                <td>{{$values->store_name }}</td>                                               
                                                <td>{{$values->total_purchased_quantity ===null ? 0 : $values->total_purchased_quantity }}</td>
                                                <td>{{$values->total_sold_quantity === null ? 0 : $values->total_sold_quantity }}</td>
                                                <td>{{$values->final_quantity}}</td>                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Location</th>  
                                                <th>Purchase </th>
                                                <th>Sold </th>
                                                <th>Stock </th> 
                                            </tr>

                                        </tfoot>

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
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>

<script type="text/javascript">
    $(document).ready(function() {

        $(document).on('change', '#category_id', function(e) {
            e.preventDefault();
            var category_id = $(this).val();

            // from store 
            $.ajax({
                url: "cat-wise-stock/" + category_id,
                type: "GET",
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                dataType: "json",
                success: function(data) {
                    $("#stock_table").empty();
                    var stockhtml= "";
                    $.each(data, function(key, value) {
                        stockhtml+='<tr>'
                                stockhtml+='<td>'+value.product_name+'</td>'
                                stockhtml+='<td>'+value.store_name+'</td>'                                               
                                stockhtml+='<td>'+value.total_purchased_quantity+'</td>'
                                stockhtml+='<td>'+value.total_sold_quantity+'</td>'
                                stockhtml+='<td>'+value.final_quantity+'</td>'                                                
                            stockhtml+='</tr>'
                    });
                    $("#stock_table").append(stockhtml);
                }
            });
        });

    });
</script>


        @endsection