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
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-2" style="margin-top: 45px; ">
                        <div class="card">
                            <div class="card-title">
                                <h4 class="p-3 text-center">Add New Unit</h4>
                                <hr
                            </div>
                            <div class="card-body">
                                    
                              <form action="<?php echo e(route('backoffice.create-unit')); ?>" method="post">
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
            
                                <?php echo csrf_field(); ?>
                                  <div class="form-group">
                                      <label for="unit_name">Unit Name</label>
                                      <input type="text" class="form-control my-2" name="unit_name" placeholder="Enter Unit Name" value="<?php echo e(old('unit_name')); ?>">
                                      <span class="text-danger"><?php $__errorArgs = ['unit_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="unit_symbol">Unit Symbol</label>
                                      <input type="number" class="form-control my-2" name="unit_symbol" placeholder="Enter Unit Symbol" value="<?php echo e(old('unit_symbol')); ?>">
                                      <span class="text-danger"><?php $__errorArgs = ['unit_symbol'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="is_fractional">Is Fractional</label>
                                      <select class="form-control my-2" name="is_fractional">
                                          <option selected="true" disabled="disabled">-----------Select----------</option>
                                          <option value="1">Yes</option>
                                          <option value="0">No</option>
                                      </select>
                                      <span class="text-danger"><?php $__errorArgs = ['is_fractional'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="is_active">Select Status</label>
                                      <select class="form-control my-2" name="is_active">
                                          <option selected="true" disabled="disabled">-----------Select----------</option>
                                          <option value="1">Active</option>
                                          <option value="0">Not Active</option>
                                      </select>
                                      <span class="text-danger"><?php $__errorArgs = ['is_active'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                  </div>
                                  
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-primary mt-2">Submit</button>
                                      <a class="btn btn-primary mt-2 float-right" class="text-light" href="<?php echo e(route('backoffice.all-unit')); ?>">Back</a>
                                  </div>
                                  
                                  <br>
                              </form>     
                            </div>
                          
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
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/onlioxoq/public_html/backofficel/resources/views/dashboard/unit/addUnit.blade.php ENDPATH**/ ?>