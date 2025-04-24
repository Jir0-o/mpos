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
            <div class="content-wrapper pb-0">
        <!--Bank Section Start---->


        <div class="card">
            <div class="card-body">
                <div class="card-description"><a class="text-light btn btn-info" href="{{ route('backoffice.expense')}}">Add Expense</a></div>

                    @if (session()->has('success'))

                    <div class="alert alert-success">{{session()->get('success')}}</div>

                    @endif

                    @if (session()->has('update'))

                    <div class="alert alert-success">{{session()->get('update')}}</div>

                    @endif
              </p>
              <div class="table-responsive">
                <table id="example" class="table table-striped display">
                  <thead>
                    <tr>
                      <th>S.N</th>
                      <th>Voucher No</th>
                      <th>Expense Name</th>
                      <th>Expense Category</th>
                      <th>Date</th>
                      <th>Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ( $expense as $data )
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{ $data->expense_id}}</td>
                        <td>{{ $data->expense_name}}</td>
                        <td>{{ $data->expense_category_name}}</td>
                        <td>{{ $data->date}}</td>
                        <td>{{ $data->amount}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                      <th>S.N</th>
                      <th>Voucher No</th>
                      <th>Expense Name</th>
                      <th>Expense Category</th>
                      <th>Date</th>
                      <th>Amount</th>
                    </tr>
                </tfoot>

                </table>
              </div>
            </div>
          </div>



        <!--Bank Section End---->
            </div>

        </div>

@endsection
