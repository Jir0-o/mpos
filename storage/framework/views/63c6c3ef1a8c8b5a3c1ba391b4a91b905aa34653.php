
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
        <!--store Section Start---->


        <div class="card">
            <div class="card-body">
                <div class="card-description"><a class="text-light btn btn-info" href="<?php echo e(route('add-store')); ?>">Add New Store</a></div>

                    <?php if(session()->has('success')): ?>

                    <div class="alert alert-success"><?php echo e(session()->get('success')); ?></div>

                    <?php endif; ?>

                    <?php if(session()->has('update')): ?>

                    <div class="alert alert-success"><?php echo e(session()->get('update')); ?></div>

                    <?php endif; ?>
                    <?php if(session()->has('updatefail')): ?>

                    <div class="alert alert-danger"><?php echo e(session()->get('updatefail')); ?></div>

                    <?php endif; ?>


              </p>
              <div class="table-responsive">
                <table id="example" class="table table-striped display">
                  <thead>
                    <tr >
                      <th>S.N</th>
                      <th>Store Name</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                       <?php $__currentLoopData = $all_Store_datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_Store_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($loop->index+1); ?></td>
                      <td><?php echo e($all_Store_data->store_name); ?></td>
                        <?php if($all_Store_data->is_active==1): ?>

                      <td>Active</td>

                      <?php else: ?>
                      <td>No Active</td>
                      <?php endif; ?>
                      <td><a class="btn btn-warning" class="text-light" href="<?php echo e(route('edit-store',$all_Store_data->store_id)); ?>">Edit</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>



        <!--store Section End---->
            </div>

          </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ussbd\POSSIE\resources\views/store/allStore.blade.php ENDPATH**/ ?>