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
                                <h4 class="p-3 text-center">Edit Purchase</h4>
                                <hr>
                            </div>
                            <div class="card-body">
                               <?php $__currentLoopData = $Purchase; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchases): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>      
                              <form action="<?php echo e(route('backoffice.update-purchase')); ?>" method="post">
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
                                
                                <input type="hidden" name="purchase_id" value="<?php echo e($purchases->purchase_id); ?>"/>
                                <input type="hidden" name="purchase_details_id" value="<?php echo e($purchases->purchase_details_id); ?>"/>
                                <input type="hidden" name="stock_id" value="<?php echo e($purchases->stock_id); ?>"/>
                                <div class="row">
                                    <div class="col-12 col-md-8 col-lg-8">
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                      <label for="product_id">Product Name</label>
                                                      <select class="form-control my-2" name="product_id" id="purchase_edit_product_id" required>
                                                          <?php $__currentLoopData = $Product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                               <?php if($purchases->product_id == $values->product_id): ?>
                                                               <option class="text-dark" value="<?php echo e($values->product_id); ?>" selected><?php echo e($values->product_name); ?></option>
                                                               <?php endif; ?>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                      </select>
                                                      <span class="text-danger"><?php $__errorArgs = ['product_id'];
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
                                                      <label for="supplier_id">Select Supplier</label>
                                                      <select class="form-control my-2" name="supplier_id">
                                                          <option selected="true" disabled="disabled">----------Select---------</option>
                                                          <?php $__currentLoopData = $Supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                           <option value="<?php echo e($values->supplier_id); ?>" <?php echo e($purchases->supplier_id == $values->supplier_id ? 'selected' : ''); ?>><?php echo e($values->supplier_name); ?></option>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                      </select>
                                                      <span class="text-danger"><?php $__errorArgs = ['supplier_id'];
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
                                                      <label for="brand_id">Select Brand</label>
                                                      <select class="form-control my-2" name="brand_id">
                                                          <option selected="true" disabled="disabled">----------Select---------</option>
                                                          <?php $__currentLoopData = $Brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                           <option value="<?php echo e($values->brand_id); ?>" <?php echo e($purchases->brand_id == $values->brand_id ? 'selected' : ''); ?>><?php echo e($values->brand_name); ?></option>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                      </select>
                                                      <span class="text-danger"><?php $__errorArgs = ['brand_id'];
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
                                                      <label for="unit_id">Select Unit Type</label>
                                                      <select class="form-control my-2" name="unit_id">
                                                          <option selected="true" disabled="disabled">----------Select---------</option>
                                                          <?php $__currentLoopData = $UnitDefinition; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                           <option value="<?php echo e($values->unit_id); ?>" <?php echo e($purchases->unit_id == $values->unit_id ? 'selected' : ''); ?>><?php echo e($values->unit_name); ?></option>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                      </select>
                                                      <span class="text-danger"><?php $__errorArgs = ['unit_id'];
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
                                                      <label for="purchase_price">Purchase Price</label>
                                                      <input required type="number" class="form-control my-2" name="purchase_price" placeholder="Enter Purchase Price" value="<?php echo e($purchases->purchase_price); ?>">
                                                      <span class="text-danger"><?php $__errorArgs = ['purchase_price'];
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
                                                      <label for="sales_price">Sales Price</label>
                                                      <input required type="number" class="form-control my-2" name="sales_price" placeholder="Enter Sales Price" value="<?php echo e($purchases->sales_price); ?>">
                                                      <span class="text-danger"><?php $__errorArgs = ['sales_price'];
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
                                                      <label for="quantity">Quantity</label>
                                                      <input required type="number" class="form-control my-2" name="quantity" placeholder="Enter Quantity" value="<?php echo e($purchases->quantity); ?>">
                                                      <span class="text-danger"><?php $__errorArgs = ['quantity'];
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
                                                      <label for="supply_no">Supply No</label>
                                                      <input required type="text" class="form-control" name="supply_no" placeholder="Enter Supply No" value="<?php echo e($purchases->supply_no); ?>"/>
                                                      <span class="text-danger"><?php $__errorArgs = ['supply_no'];
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
                                                      <label for="courier_cost">Courier Cost</label>
                                                      <input required type="number" class="form-control" id="courier_cost" name="courier_cost" placeholder="Enter Courier Cost" value="<?php echo e($purchases->courier_cost); ?>"/>
                                                      <span class="text-danger"><?php $__errorArgs = ['courier_cost'];
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
                                                      <label for="transport_cost">Transport Cost</label>
                                                       <input required type="number" class="form-control" id="transport_cost" name="transport_cost" value="<?php echo e($purchases->transport_cost); ?>" placeholder="Enter Transport Cost"/>
                                                      <span class="text-danger"><?php $__errorArgs = ['transport_cost'];
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
                                                      <label for="bonus_point">Bonus Point</label>
                                                      <input required type="number" class="form-control" id="bonus_point" name="bonus_point" value="<?php echo e($purchases->bonus_point); ?>" placeholder="Enter Bonus Point"/>
                                                      <span class="text-danger"><?php $__errorArgs = ['bonus_point'];
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
                                                      <label for="discount">Discount</label>
                                                       <input required type="number" class="form-control" id="discount" name="discount" value="<?php echo e($purchases->discount); ?>" placeholder="Enter Discount"/>
                                                      <span class="text-danger"><?php $__errorArgs = ['discount'];
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
                                            <div class="col-12">
                                                 <div id="edit_textarea-ajax-inputs">
                                                </div>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-12">
                                                <div id="edit_checkbox-ajax-inputs">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <div class="h4 text-center">Attribute Section</div>
                                        <div id="edit_purchase_set_attr_input">
                                            
                                        </div>
                                        
                                    </div>
                                </div>
 
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-warning mt-2">Update</button>
                                      <a class="btn btn-primary mt-2 float-right" class="text-light" href="<?php echo e(route('backoffice.all-purchase')); ?>">Back</a>
                                  </div>
                                  
                                  <br>
                              </form> 
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
             var price = $('#discount').val();
             window.k=1; 
             
             window.Remove = function(kVal){
                $(document).on('click', '#Remove'+kVal, function () {
                    
                    $(this).parents('tr').remove();
                }); 
             }
             window.passAttribute = function(id){
                 
                 $.ajax({
                      url: 'get-ajax-attribute/'+id,
                      type: "GET",
                      data : {"_token":"<?php echo e(csrf_token()); ?>"},
                      dataType: "json",
                      success:function(response)
                      { 
                          $.each(response, function(l, r){
                              window.name = r.attribute_name;
                          });
                      }
                     
                 });
                 k=k+1;
                 $(document).on('click', '#'+id, function () {
                  
                         newhtml="<tr>"
                                newhtml+="<td>"
                                    newhtml+="<label></label>"
                                newhtml+="</td>"
                                newhtml+="<td>"
                                    newhtml+="<input class='form-control' type='text' placeholder='Name' name='"+id+"[]'>"
                                newhtml+="</td>"
                                newhtml+="<td>"
                                    newhtml+="<div class='btn btn-danger' onclick='Remove("+k+")' id='Remove"+k+"'>"
                                      newhtml+="<i class='fa-solid fa-minus'></i>"
                                    newhtml+="</div>"
                                newhtml+="</td>"
                            newhtml+="</tr>"
                          name="";
                          $(this).closest('tbody').append(newhtml);
                          
                          newhtml.empty();
                          
                 });
                 name="";
                 
            }
            
                
            var product_id = $('#purchase_edit_product_id').val();
            console.log(product_id);
            
            $.ajax({
              url: '<?php echo e(asset("backoffice/get-ajax-product")); ?>'+'/'+product_id,
              type: "GET",
              data : {"_token":"<?php echo e(csrf_token()); ?>"},
              dataType: "json",
              success:function(data)
              {     
                    console.log(data);
                    $('#edit_purchase_set_attr_input').empty();
                    $('#edit_checkbox-ajax-inputs').empty();
                    $('#edit_textarea-ajax-inputs').empty();
                    
                    $.each(data, function(col, productData){
                         var attributeList=productData.attribute_id.split(",");
                         
                         if(attributeList!=null){
                                 $.each(attributeList, function(key, attr){
                                    
                                    $.ajax({
                                          url: '<?php echo e(asset("backoffice/edit-purchase-ajax-attribute")); ?>'+'/'+attr+'/'+product_id,
                                          type: "GET",
                                          data : {"_token":"<?php echo e(csrf_token()); ?>"},
                                          dataType: "json",
                                          success:function(response)
                                          { 
                                                $.each(response, function(ke, val){
                                                    
                                                    
                                                    
                                                    if(val.attribute_type_name == 'checkbox'){
                                                        
                                                        var json={
                                                            "attribute_id":val.attribute_id,
                                                            "attribute_name":val.attribute_name
                                                        }
                                                        
                                                        var checkboxhtml="<table class='table'>"
                                                              checkboxhtml+="<tbody>"
                                                                   checkboxhtml+="<tr>"
                                                                    checkboxhtml+="<td>"
                                                                        checkboxhtml+="<label for='"+val.attribute_name+"'>"+val.attribute_name+"</label>"
                                                                        checkboxhtml+="<input type='hidden' id='"+val.attribute_name+"' value='"+val.attribute_id+"'/>"
                                                                    checkboxhtml+="</td>"
                                                                    checkboxhtml+="<td>"
                                                                        checkboxhtml+="<input required class='form-control' type='text' id='"+val.attribute_id+"_name' value='"+val.attribute_value+"' name='"+val.attribute_id+"[]' placeholder='"+val.attribute_name+" Name'>"
                                                                    checkboxhtml+="</td>"
                                                                    checkboxhtml+="<td>"
                                                                        checkboxhtml+="<a class='btn btn-primary text-light' onclick='passAttribute("+val.attribute_id+")' id='"+val.attribute_id+"'>"
                                                                           checkboxhtml+="<i class='fa-solid fa-plus'></i>"
                                                                        checkboxhtml+="</a>"
                                                                    checkboxhtml+="</td>"
                                                                checkboxhtml+="</tr>"
                                                               checkboxhtml+="</tbody>"
                                                            checkboxhtml+="</table>"
                                                            
                                                        $('#edit_checkbox-ajax-inputs').append(checkboxhtml);
                                                    }else if(val.attribute_type_name == 'textarea'){
                                                            var textareahtml="<div class='form-group'> <label>"+val.attribute_name+"</label>"
                                                            textareahtml+="<textarea required  name='"+val.attribute_id+"' value='"+val.attribute_value+"' class='form-control' type='"+val.attribute_type_name+"' rows='4'></textarea>"
                                                            textareahtml+="</div>"
                                                            $('#edit_textarea-ajax-inputs').append(textareahtml);
                                                    }
                                                    else{
                                                        var html="<div class='form-group'> <label class='py-2' for='"+val.attribute_name+"'>"+val.attribute_name+"</label>"
                                                        html+="<input required type='"+val.attribute_type_name+"' value='"+val.attribute_value+"' name='"+val.attribute_id+"' class='form-control'/>"
                                                        html+="</div>"
                                                        
                                                        $('#edit_purchase_set_attr_input').append(html);
                                                    }
                                                    
                                                    console.log(val.attribute_type_name);
                                                });
                                          }
                                    });
                                });
                         }
                         
                    });
                  
                    
                    
                 }
            });
       
            
        });
    </script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/onlioxoq/public_html/backofficel/resources/views/dashboard/purchase/editPurchase.blade.php ENDPATH**/ ?>