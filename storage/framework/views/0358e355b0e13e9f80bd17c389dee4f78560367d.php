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
                                <h4 class="p-3 text-center">Add Delivery Charge</h4>
                                <hr
                            </div>
                            <div class="card-body">
                                    
                              <form action="<?php echo e(route('backoffice.update-charge')); ?>" method="post">
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
                                
                                <?php $__currentLoopData = $DeliveryCharge; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Charge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                  <input name="id" value="<?php echo e($Charge->delivery_charge_id); ?>" type="hidden">
                                  <div class="form-group">
                                      <label for="deliver_charge_name">Delivery Charge Name</label>
                                      <input type="text" class="form-control my-2" name="deliver_charge_name" placeholder="Enter Delivary Charge Name" value="<?php echo e($Charge->deliver_charge_name); ?>">
                                      <span class="text-danger"><?php $__errorArgs = ['deliver_charge_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                  </div>
                                 <div class="form-group">
                                      <label for="agency_id">Agency Name</label>
                                      <select class="form-control my-2" name="agency_id">
                                          <option selected="true" disabled="disabled">-----------Select----------</option>
                                          <?php $__currentLoopData = $DeliveryAgency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Agency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($Agency->delivery_agency_id); ?>" <?php echo e($Charge->agency_id == $Agency->delivery_agency_id ? 'selected' : ''); ?>><?php echo e($Agency->delivery_agency_name); ?></option>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                                      <span class="text-danger"><?php $__errorArgs = ['agency_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                  </div>
                                  <div class="form-group">
                                      <label for="package_description">Package Description</label>
                                      <textarea  type="text" class="form-control my-2" name="package_description" 
                                                  placeholder="Enter Package Description" rows="4" cols="50"><?php echo e($Charge->package_description); ?></textarea>
                                      <span class="text-danger"><?php $__errorArgs = ['package_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="source">Source</label>
                                      <input type="text" class="form-control my-2" name="source" placeholder="Enter Source" value="<?php echo e($Charge->source); ?>">
                                      <span class="text-danger"><?php $__errorArgs = ['source'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="expected_delivery_days">Expected Delivery Days</label>
                                      <input type="text" class="form-control my-2" name="expected_delivery_days" placeholder="Enter Expected Delivery Days" value="<?php echo e($Charge->expected_delivery_days); ?>">
                                      <span class="text-danger"><?php $__errorArgs = ['expected_delivery_days'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="delivery_charge">Delivery Charge</label>
                                      <input type="text" class="form-control my-2" name="delivery_charge" placeholder="Enter Delivery Charge " value="<?php echo e($Charge->delivery_charge); ?>">
                                      <span class="text-danger"><?php $__errorArgs = ['delivery_charge'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="destination">Description</label>
                                      <textarea  type="text" class="form-control my-2" name="destination" 
                                                  placeholder="Enter Description"  rows="4" cols="50"><?php echo e($Charge->destination); ?></textarea>
                                      <span class="text-danger"><?php $__errorArgs = ['destination'];
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
                                          <?php if($Charge->is_active==1): ?>
                                          <option value="1" selected="selected">Active</option>
                                          <option value="0">Not Active</option>
                                          <?php else: ?>
                                          <option value="1">Active</option>
                                          <option value="0" selected="selected">Not Active</option>
                                          <?php endif; ?>
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
                                      <button type="submit" class="btn btn-warning mt-2">Update</button>
                                      <a class="btn btn-primary mt-2 float-right" class="text-light" href="<?php echo e(route('backoffice.all-charge')); ?>">Back</a>
                                  </div>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/onlioxoq/public_html/backofficel/resources/views/dashboard/charge/editCharge.blade.php ENDPATH**/ ?>