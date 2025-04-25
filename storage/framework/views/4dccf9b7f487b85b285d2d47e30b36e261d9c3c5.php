
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
                <div class="card-description"><a class="text-light btn btn-info" href="<?php echo e(route('add-bank')); ?>">Add New Bank</a></div>

                    <?php if(session()->has('success')): ?>

                    <div class="alert alert-success"><?php echo e(session()->get('success')); ?></div>

                    <?php endif; ?>

                    <?php if(session()->has('update')): ?>

                    <div class="alert alert-success"><?php echo e(session()->get('update')); ?></div>

                    <?php endif; ?>
              </p>
              <div class="table-responsive">
                <table id="myTable" class="table table-striped display">
                  <thead>
                    <tr >
                      <th>S.N</th>
                      <th>Bank Name</th>
                      <th>Current Balance</th>
                      <th>Deposit | Withdraw | Transactions</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $all_bank_datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_bank_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($loop->index+1); ?></td>
                      <td><?php echo e($all_bank_data->bank_name); ?></td>
                      <td><?php echo e($all_bank_data->balance); ?></td>
                      <td>
                        <div class="row h1">
                          <div class="col-md-10">
                            <span><a class="text-dark" href=""><i class="fa-solid fa-money-bill"></i></a></span>
                            <span><a class="text-danger pl-4" href=""><i class="fa-solid fa-money-bills"></i></a></span>
                            <span><a class="text-primary pl-4" href=""><i class="fa-solid fa-money-bill-transfer"></i></a></span>
                          </div>                                                
                        </div>
                      </td>
                      <td>
                        <a class="btn btn-warning" class="text-light" href="/edit-bank/<?php echo e($all_bank_data->bank_id); ?>">
                          <i class="fa fa-edit"></i>
                        </a>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>



        <!--Bank Section End---->
            </div>

        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ussbd\POSSIE\resources\views/bank/bankList.blade.php ENDPATH**/ ?>