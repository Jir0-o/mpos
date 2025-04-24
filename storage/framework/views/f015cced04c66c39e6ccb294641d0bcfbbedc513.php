

<?php $__env->startSection('content'); ?>

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
                                <div class="card-description btn btn-info"><a class="text-light" href="<?php echo e(route('backoffice.stock-transfer')); ?>">Stock Transfer</a></div>
                                <h4 class="card-title text-center">Stock Report</h4>
                                <?php if(Session::get('success')): ?>
                                <div class="alert alert-success">
                                    <?php echo e(Session::get('success')); ?>

                                </div>
                                <?php endif; ?>
                                <?php if(Session::get('fail')): ?>
                                <div class="alert alert-danger">
                                    <?php echo e(Session::get('fail')); ?>

                                </div>
                                <?php endif; ?>
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered">

                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Store Name</th>
                                                <th>Unit </th>  
                                                <th>Stock </th>
                                                 
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $store_stock_report; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($values->product_name); ?></td>
                                                <td><?php echo e($values->store_name); ?></td>
                                                <td><?php echo e($values->unit_symbol); ?></td>
                                                <td><?php echo e($values->final_quantity === null ? 0 : $values->final_quantity); ?></td>
                                              

                                                <!-- <td><a class="btn btn-warning" class="text-light" href="<?php echo e(route('backoffice.edit-supplier',Crypt::encryptString($values->supplier_id))); ?>">Edit</a></td> -->

                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                                <th>Product Name</th>
                                                <th>Store Name</th>
                                                <th>Unit </th>  
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



        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ussbd\POSSIE\resources\views/dashboard/stock/storeStockReport.blade.php ENDPATH**/ ?>