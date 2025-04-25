

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
                        <h3 class="page-title">All Purchase</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Product</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> All Purchase </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-description btn btn-info"><a class="text-light"
                                            href="<?php echo e(route('backoffice.purchase')); ?>">Purchase Product</a></div>
                                    <h4 class="card-title text-center">Purchase List</h4>
                                    <div style="overflow-x:scroll;">
                                        <table id="example" class="table table-striped table-bordered">

                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Supplier Id</th>
                                                    <th>Purchase Price</th>
                                                    <th>WC Price</th>
                                                    <th>Sales Price</th>
                                                    <th>Quantity</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $PurchaseDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td>
                                                            <div class="row" style="width: 200px;">
                                                                <div class="col-12 text-truncate">
                                                                    <?php echo e($values->product_name); ?>

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <?php $__currentLoopData = $Supplyer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($sup->supplier_id == $values->supplier_id): ?>
                                                                <td><?php echo e($sup->supplier_name); ?></td>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <td><?php echo e($values->cost_price); ?></td>
                                                        <td><?php echo e($values->bulk_price); ?></td>
                                                        <td><?php echo e($values->sales_price); ?></td>
                                                        <td><?php echo e($values->quantity); ?></td>
                                                        <td><a class="btn" class="text-light"
                                                                href="<?php echo e(route('backoffice.edit-purchase', Crypt::encryptString($values->purchase_id))); ?>"><i
                                                                    class="fa fa-edit"></i></a>
                                                            <a class="btn" class="text-light"
                                                                href="<?php echo e(route('backoffice.view-purchase', Crypt::encryptString($values->product_id))); ?>"><i
                                                                    class="fa fa-eye"></i></a>
                                                        </td>

                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Supplier Id</th>
                                                    <th>Purchase Price</th>
                                                    <th>WC Price</th>
                                                    <th>Sales Price</th>
                                                    <th>Quantity</th>
                                                    <th class="text-center">Actions</th>
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

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ussbd\POSSIE\resources\views/dashboard/purchase/allPurchase.blade.php ENDPATH**/ ?>