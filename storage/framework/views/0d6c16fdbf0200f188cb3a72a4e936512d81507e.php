<?php
use Carbon\Carbon;
$user_id = session()->get('LoggedUser');
$user_data = \App\Models\BackofficeLogin::join('backoffice_role', 'backoffice_role.role_id', '=', 'backoffice_login.role_id')
->where('login_id', $user_id)
->first();
?>



<?php $__env->startSection('content'); ?>
<?php
$all_cart_info = \App\Models\CartInformtion::join('backoffice_login as usr', 'usr.login_id', '=', 'cart_informtion.created_by')
->join('backoffice_login as wtr', 'wtr.login_id', '=', 'cart_informtion.waiter_id')
->select('cart_informtion.*', 'usr.full_name as created_by_name', 'wtr.full_name as waiter_name')
->get();
?>

<div class="container-scroller">
    <?php echo $__env->make('dashboard.pertials.sideNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
        <?php echo $__env->make('dashboard.pertials.topNav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-panel">
            <div class="content-wrapper pb-0">
                <div class="page-header flex-wrap">
                    <h3 class="mb-0"> Hi, welcome back!</h3>
                </div>
                <?php
                $all_sell = \App\Models\CartInformtion::join('consumer_login', 'consumer_login.login_id', '=', 'cart_informtion.consumer_id')
                ->where('cart_informtion.cart_date', 'like', '%' . Carbon::today()->format('Y-m-d') . '%')
                ->select('cart_informtion.*', 'consumer_login.mobile_no')
                ->get();

                $all_expense = \App\Models\ExpenseDetail::where('expense_details.date', 'like', '%' . Carbon::today()->format('Y-m-d') . '%')
                ->select('expense_details.*',)
                ->get();
                ?>

                <?php if($user_data->role_id == 1 || $user_data->role_id == 2): ?>
                <div class="row mt-5">
                    <div class="col-xl-3 col-md-3 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                        <div class="card bg-warning">
                            <div class="card-body px-3 py-4">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="color-card">
                                        <p class="mb-0 color-card-head">Today Sales</p>
                                        <h2 class="text-white">Tk.
                                        <br> <?php echo e($all_sell->sum('final_total_amount')); ?><span class="h5">.00</span>
                                        </h2>
                                    </div>
                                    <i class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
                                </div>

                                <!-- <div class="d-flex justify-content-between align-items-start">
                                    <div class="color-card">
                                        
                                        <h4 class="text-white"> Count <br>
                                            <?php echo e($all_sell->count('final_total_amount')); ?> Orders
                                        </h4>
                                    </div>
                                </div> -->
                                <hr>
                                <a class="btn text-light float-right" href="<?php echo e(route('backoffice.all_sales_report')); ?>">
                                    view report
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                        <div class="card bg-primary">
                            <div class="card-body px-3 py-4">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="color-card">
                                        <p class="mb-0 color-card-head">Orders</p>
                                        <h2 class="text-white"> <?php echo e($all_sell->count('final_total_amount')); ?>

                                        </h2>
                                    </div>
                                    <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
                                </div>
                                <h6 class="text-white">Today</h6>
                                <hr>
                                <a class="btn text-light float-right" href="<?php echo e(route('backoffice.all_sales_report')); ?>">
                                    view report
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                        <div class="card bg-danger">
                            <div class="card-body px-3 py-4">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="color-card">
                                        <p class="mb-0 color-card-head">Net Profit</p>
                                        <h2 class="text-white">Tk. <?php echo e($all_sell->sum('net_profit')); ?><span class="h5">.00</span>
                                        </h2>
                                    </div>
                                    <i class="card-icon-indicator mdi mdi-cube-outline bg-inverse-icon-danger"></i>
                                </div>
                                <h6 class="text-white">Today</h6>
                                <hr>
                                <a class="btn text-light float-right" href="<?php echo e(route('backoffice.all_sales_report')); ?>">
                                    view report
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                        <div class="card bg-info">
                            <div class="card-body px-3 py-4">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="color-card">
                                        <p class="mb-0 color-card-head">Expense</p>
                                        <h2 class="text-white">Tk. 
                                            <br><?php echo e($all_expense->sum('amount')); ?><span class="h5">.00</span>
                                        </h2>
                                    </div>
                                    <i class="card-icon-indicator mdi mdi-margin bg-inverse-icon-danger"></i>
                                </div>
                                <h6 class="text-white">Today</h6>
                                <hr>
                                <a class="btn text-light float-right" href="<?php echo e(route('backoffice.all_sales_report')); ?>">
                                    view report
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ussbd\POSSIE\resources\views/dashboard/backoffice/home.blade.php ENDPATH**/ ?>