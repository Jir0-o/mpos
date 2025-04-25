
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
            <div class="content-wrapper pb-0">
        <!--Bank Section Start---->


        <div class="card">
            <div class="card-body">
                <div class="card-description"><a class="text-light btn btn-info" href="<?php echo e(route('expense')); ?>">Add Expense</a></div>

                    <?php if(session()->has('success')): ?>

                    <div class="alert alert-success"><?php echo e(session()->get('success')); ?></div>

                    <?php endif; ?>

                    <?php if(session()->has('update')): ?>

                    <div class="alert alert-success"><?php echo e(session()->get('update')); ?></div>

                    <?php endif; ?>
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
                    <?php $__currentLoopData = $expense; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->index+1); ?></td>
                        <td><?php echo e($data->expense_id); ?></td>
                        <td><?php echo e($data->expense_name); ?></td>
                        <td><?php echo e($data->expense_category_name); ?></td>
                        <td><?php echo e($data->date); ?></td>
                        <td><?php echo e($data->amount); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ussbd\POSSIE\resources\views/expense/allExpenses.blade.php ENDPATH**/ ?>