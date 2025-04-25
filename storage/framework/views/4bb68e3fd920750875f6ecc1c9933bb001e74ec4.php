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
                                <h4 class="p-3 text-center">Add Product</h4>
                                <hr
                            </div>
                            <div class="card-body">
                                    
                              <form action="<?php echo e(route('backoffice.create-product')); ?>" method="post" enctype="multipart/form-data">
                                <?php if(Session::get('success')): ?>
                                     <div class="alert alert-success">
                                         <?php echo e(Session::get('success')); ?>

                                     </div>
                                <?php endif; ?>
                                
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-6">
                                                      <div class="form-group">
                                                          <label for="product_name">Product Name</label>
                                                          <input type="text" class="form-control my-2" name="product_name" placeholder="Enter Product Name" value="<?php echo e(old('product_name')); ?>" required="required">
                                                          <span class="text-danger"><?php $__errorArgs = ['product_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                                      </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                          <label for="unit_type">Select Unit Type</label>
                                                          <select class="form-control my-2" name="unit_type" required="required">
                                                              <option selected="true" disabled="disabled">----------Select---------</option>
                                                              <?php $__currentLoopData = $UnitDefinition; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                               <option value="<?php echo e($values->unit_id); ?>"><?php echo e($values->unit_name); ?></option>
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
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-6">
                                                      <div class="form-group">
                                                          <label for="sc_two_id">Select Sub Category 2</label>
                                                          <select class="form-control my-2" name="sc_two_id" required="required">
                                                              <option selected="true" disabled="disabled">----------Select---------</option>
                                                              <?php $__currentLoopData = $subCategoryTwo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                               <option value="<?php echo e($values->sc_two_id); ?>"><?php echo e($values->sc_two_name); ?></option>
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
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <label for="images" class="form-label">Upload Product Images:</label>
                                                        <input 
                                                            type="file" 
                                                            name="images[]"
                                                            accept="image/*"
                                                            class="form-control" 
                                                            multiple
                                                            required="required"
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
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-6">
                                                     <div class="form-group">
                                                          <label for="product_description">Short Description</label>
                                                          <textarea class="form-control" name="product_description" placeholder="Enter Short Description" required="required"></textarea> 
                                                          <span class="text-danger"><?php $__errorArgs = ['product_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                                      </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-6">
                                                      <div class="form-group">
                                                          <label for="product_in_stock">Product In Stock</label>
                                                          <input required="required" type="number" class="form-control my-2" name="product_in_stock" placeholder="Enter Product In Stock" value="<?php echo e(old('product_in_stock')); ?>">
                                                          <span class="text-danger"><?php $__errorArgs = ['product_in_stock'];
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
                                            <div class="row mt-3">
                                                <div class="col-12 col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                      <label for="product_details">Product Details</label>
                                                      <textarea class="form-control" id="ck_editor" name="product_details" ></textarea> 
                                                      <span class="text-danger"><?php $__errorArgs = ['product_details'];
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
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                          <label for="status">Select Status</label>
                                                          <select class="form-control my-2" name="status" required="required">
                                                              <option selected="true" disabled="disabled">-----------Select----------</option>
                                                              <option value="1">Active</option>
                                                              <option value="0">Not Active</option>
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
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                      <label for="attribute_id" class="h2">Select Attributes (If Any) </label>
                                                      <select class="form-control" name="attribute_id[]" id="select_attribute_id" multiple>
                                                          <?php $__currentLoopData = $AttributeDefinition; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                          <option class="form-control p-3" value="<?php echo e($Attribute->attribute_id); ?>"><?php echo e($Attribute->attribute_name); ?></option>
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
                                                      <!--<div class="form-group">-->
                                                      <!--    <label id="set_color_label"></label>-->
                                                      <!--    <div id="set_color_form">-->
                                                             
                                                      <!--    </div>-->
                                                      <!--</div>-->
                            
                                                      <!--<div class="form-group">-->
                                                      <!--    <label id="set_size_label"></label>-->
                                                      <!--    <div id="set_size_form">-->
                                                              
                                                      <!--    </div>-->
                                                      <!--</div>-->
                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-primary mt-2">Submit</button>
                                      <a class="btn btn-primary mt-2 float-right" class="text-light" href="<?php echo e(route('backoffice.all-products')); ?>">Back</a>
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
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
        $(document).ready(function() {
            $('#select_attribute_id').on('change', function() {
               var attribute_id = $(this).val();
               
               $('#set_color_label').empty();
               $('#set_color_form').empty();
               $('#set_size_form').empty();
               $('#set_size_label').empty();
               
              if(attribute_id) {
                  
                 $.each(attribute_id, function(key, value){
                     
                     if(value==1){
                      $('#set_color_form').empty();
                      $.ajax({
                      url: 'get-color',
                      type: "GET",
                      data : {"_token":"<?php echo e(csrf_token()); ?>"},
                      dataType: "json",
                      success:function(data)
                      {
                            $('#set_color_label').append("Select Available colors");
                            $.each(data, function(col, color){
                                
                                 var color_html='<input class="mt-2" name="color_id[]" type="checkbox" value="'+color.color_id+'" />'
                                     color_html+='<span class="pl-1 pr-3">'+color.color_name+'</span>'
                                    
                                   
                            
                                $('#set_color_form').append(color_html);
                            });
                          
                            
                            
                         }
                      });
    
                    }
                    
                    if(value==2){
                      $('#set_size_form').empty();
                      $.ajax({
                      url: 'get-size',
                      type: "GET",
                      data : {"_token":"<?php echo e(csrf_token()); ?>"},
                      dataType: "json",
                      success:function(data)
                      {
                            $('#set_size_label').append("Select Available Sizes");
                            $.each(data, function(col, size){
                                
                               var size_html='<input class="mt-2" name="size_id[]" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="'+size.size_id+'" />'
                                   size_html+='<span class="pl-1 pr-3">'+size.size_name+'</span>'

                            
                                $('#set_size_form').append(size_html);
                            });
                            
                         }
                      });
    
                    }
                  
                });
                  
              }
            });
            
        });
    </script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/onlioxoq/public_html/backofficel/resources/views/dashboard/product/product.blade.php ENDPATH**/ ?>