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
                    <div class="col-md-12" style="margin-top: 45px; ">
                        <div class="card">
                            <div class="card-title">
                                <h4 class="p-3 text-center">Edit Product</h4>
                                <hr
                            </div>
                            <div class="card-body">
                                    
                              <form action="<?php echo e(route('backoffice.update-product')); ?>" method="post" enctype="multipart/form-data">
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
                                <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <div class="row">
                                     <div class="col-12 col-md-8 col-lg-8">
                                         <input type="hidden" name="id" value="<?php echo e($Product->product_id); ?>">
                                          <div class="form-group">
                                              <label for="product_name">Product Name</label>
                                              <input type="text" class="form-control my-2" name="product_name" placeholder="Enter Product Name" value="<?php echo e($Product->product_name); ?>">
                                              <span class="text-danger"><?php $__errorArgs = ['product_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                          </div>
                                          <div class="form-group">
                                              <label for="unit_type">Select Unit Type</label>
                                              <select class="form-control my-2" name="unit_type">
                                                  <option selected="true" disabled="disabled">----------Select---------</option>
                                                  <?php $__currentLoopData = $UnitDefinition; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <option value="<?php echo e($values->unit_id); ?>" <?php echo e($Product->unit_type == $values->unit_id ? 'selected' : ''); ?>><?php echo e($values->unit_name); ?></option>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              </select>
                                              <span class="text-danger"><?php $__errorArgs = ['unit_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                          </div>
                                          <div class="form-group">
                                              <label for="sc_two_id">Select Sub Category 2</label>
                                              <select class="form-control my-2" name="sc_two_id">
                                                  <option selected="true" disabled="disabled">----------Select---------</option>
                                                  <?php $__currentLoopData = $subCategoryTwo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <option value="<?php echo e($values->sc_two_id); ?>" <?php echo e($Product->sc_two_id == $values->sc_two_id ? 'selected' : ''); ?>><?php echo e($values->sc_two_name); ?></option>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              </select>
                                              <span class="text-danger"><?php $__errorArgs = ['sc_two_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                          </div>
                                          <div class="form-group">
                                              <label for="product_in_stock">Product In Stock</label>
                                              <input 
                                                  type="number" 
                                                  class="form-control my-2" 
                                                  name="product_in_stock" 
                                                  placeholder="Enter Product In Stock" 
                                                  value="<?php echo e($Product->product_in_stock); ?>"
                                              >
                                              <span class="text-danger"><?php $__errorArgs = ['product_in_stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                          </div>

                                          <div class="form-group">
                                            <label for="images" class="form-label mt-4">Upload Product Images:</label>
                                            <input 
                                                type="file" 
                                                name="images[]"
                                                accept="image/*"
                                                class="form-control" 
                                                multiple
                                            >
                                            <span class="text-danger"><?php $__errorArgs = ['images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                          </div>
        
                                          <div class="form-group">
                                              <label for="product_description">Short Description</label>
                                              <textarea 
                                                  class="form-control" 
                                                  name="product_description" 
                                                  placeholder="Enter Short Description"
                                              ><?php echo e($Product->product_description); ?></textarea> 
                                              <span class="text-danger"><?php $__errorArgs = ['product_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                          </div>
                                          <div class="form-group">
                                              <label for="product_details">Product Details</label>
                                              <textarea 
                                                  class="form-control" 
                                                  id="ck_editor" 
                                                  name="product_details"
                                              ><?php echo $Product->product_details; ?></textarea> 
                                              <span class="text-danger"><?php $__errorArgs = ['product_details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                          </div>
                                          <div class="form-group">
                                              <label for="status">Select Status</label>
                                              <select class="form-control my-2" name="status" value="<?php echo e($Product->status); ?>">
                                                  <option selected="true" disabled="disabled">-----------Select----------</option>
                                                  <?php if($Product->is_active==1): ?>
                                                  <option value="1" selected="selected">Active</option>
                                                  <option value="0">Not Active</option>
                                                  <?php else: ?>
                                                  <option value="1">Active</option>
                                                  <option value="0" selected="selected">Not Active</option>
                                                  <?php endif; ?>
                                              </select>
                                              <span class="text-danger"><?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                          </div>
                                     </div>
                                     <div class="col-12 col-md-4 col-lg-4">
                                         <div class="form-group">
                                              <label for="attribute_id" class="h2">Select Attributes (If Any) </label>
                                              <select class="form-control" name="attribute_id[]" id="select_attribute_id" multiple>
                                                  <?php $__currentLoopData = $AttributeDefinition; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <option class="form-control p-3" value="<?php echo e($Attribute->attribute_id); ?>" <?php echo e($Attribute->attribute_id == $Product->attribute_id ? 'selected' : ''); ?>><?php echo e($Attribute->attribute_name); ?></option>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              </select>
                                              <span class="text-danger"><?php $__errorArgs = ['attribute_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                          </div>
                                     </div>
                                 </div>
                                  
                                  
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-warning mt-2">Update</button>
                                      <a class="btn btn-primary mt-2 float-right" class="text-light" href="<?php echo e(route('backoffice.all-products')); ?>">Back</a>
                                  </div>
                                  
                                  <br>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/onlioxoq/public_html/backofficel/resources/views/dashboard/product/editProduct.blade.php ENDPATH**/ ?>