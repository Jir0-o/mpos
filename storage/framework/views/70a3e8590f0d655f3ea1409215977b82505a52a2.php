
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
            <div class="card-title">
                <h4 class="p-3 text-center">Edit Bank</h4>
                <hr>
            </div>
            <div class="card-body">

              <form action="<?php echo e(route('update-bank',$getdatas->bank_id)); ?>" method="post" enctype="multipart/form-data">

                <?php if(session()->has('updatefail')): ?>

                <div class="alert alert-danger"><?php echo e(session()->get('updatefail')); ?></div>

                <?php endif; ?>

                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Bank Name:</label>
                        <div class="col-sm-9">
                          <input required type="text" class="form-control" name="bank_name" placeholder="Enter Bank Name" value="<?php echo e($getdatas->bank_name); ?>">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Select Status</label>
                        <div class="col-sm-9">
                          <select  class="form-control" name="is_active" required>
                            <option value=""  selected="true" disabled="disabled">-----------Select----------</option>
                            <option <?php if($getdatas->is_active==1): ?> selected <?php endif; ?> value="1">Active</option>
                            <option <?php if($getdatas->is_active==0): ?> selected <?php endif; ?> value="0">Not Active</option>
                        </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <a class="btn btn-primary mt-2" class="text-light" href="<?php echo e(route('bank_list')); ?>">Back</a>
                      <button type="submit" class="btn btn-warning mt-2 float-right">Update</button>
                  </div>

                  <br>
              </form>
            </div>

        </div>






        <!--Bank Section End---->
    </div>

</div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ussbd\POSSIE\resources\views/bank/editBank.blade.php ENDPATH**/ ?>