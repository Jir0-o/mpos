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
                                <h4 class="p-3 text-center">Create New Return</h4>
                                <hr
                            </div>
                            <div class="card-body">
                                    
                              <form action="<?php echo e(route('backoffice.store-return')); ?>" method="post">
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
                                      <label for="consumer_id">Select Consumer</label>
                                      <select class="form-control" id="select_consumer_id" name="consumer_id">
                                         
                                          <option>------Select------</option>
                                           <?php $__currentLoopData = $ConsumerLogin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($data->consumer_id); ?>"><?php echo e($data->mobile_no); ?></option>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </select>
                                      <span class="text-danger"><?php $__errorArgs = ['consumer_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                  </div>
                                  <div class="form-group">
                                      <label for="cart_id">Select Cart</label>
                                      <select class="form-control" id="select_cart_id" name="cart_id"></select>
                                      <span class="text-danger"><?php $__errorArgs = ['cart_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="cart_item_id">Select Cart Item</label>
                                      <select class="form-control" name="cart_item_id[]" id="select_item_id" multiple>
                                          
                                      </select>
                                      <span class="text-danger"><?php $__errorArgs = ['cart_item_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="cart_item_id">Reason of Return</label>
                                      <textarea class="form-control" rows="3" name="reason_of_return"></textarea>
                                      <span class="text-danger"><?php $__errorArgs = ['reason_of_return'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                  </div>
                                  <div class="form-group">
                                      <label for="cart_item_id">Total Amount</label>
                                      <input type="number" id="get_total_amount" class="form-control" name="total_amount"/>
                                      <span class="text-danger"><?php $__errorArgs = ['total_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                  </div>
                                  <div class="form-group">
                                      <label for="cart_item_id">No RefundAble(Vat)</label>
                                      <input type="number" id="get_non_refundAble" class="form-control" name="non_refundAble"/>
                                      <span class="text-danger"><?php $__errorArgs = ['non_refundAble'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                  </div>
                                  <div class="form-group">
                                      <label for="cart_item_id">Returnable Amount</label>
                                      <input type="number" id="get_refundAble_amount" class="form-control" name="refundAble_amount"/>
                                      <span class="text-danger"><?php $__errorArgs = ['refundAble_amount'];
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
                                      <a class="btn btn-primary mt-2 float-right" class="text-light" href="<?php echo e(route('backoffice.all-return')); ?>">Back</a>
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
            $('#select_consumer_id').on('change', function() {
               var consumer_id = $(this).val();
               
               if(consumer_id) {
                   $.ajax({
                       url: 'get-return-cart/'+consumer_id,
                       type: "GET",
                       data : {"_token":"<?php echo e(csrf_token()); ?>"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#select_cart_id').empty();
                            $('#select_cart_id').append('<option hidden>Choose Cart</option>'); 
                            $.each(data, function(key, value){
                                $('select[name="cart_id"]').append('<option value="'+ value.cart_id +'">' + value.cart_id+ '</option>');
                            });
                        }else{
                            $('#select_cart_id').empty();
                        }
                     }
                   });
               }else{
                 $('#select_cart_id').empty();
               }
            });
            
            $('#select_cart_id').on('change', function() {
               
               var cart_id = $(this).val();
             
               if(cart_id) {
                   $.ajax({
                       url: 'get-return-item/'+cart_id,
                       type: "GET",
                       data : {"_token":"<?php echo e(csrf_token()); ?>"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                             
                            $('#select_item_id').empty();
                            $.each(data, function(key, item){
                                
                                var checkbox = '<option value="'+item.cart_item_id+'">'+item.product_name+'</option>'
                                
                                $('#select_item_id').append(checkbox);
                               
                                
                            });
                        }else{
                            $('#select_item_id').empty();
                        }
                     }
                   });
               }else{
                  $('#select_item_id').empty();
               }
            });
            
            $('#select_item_id').on('change', function() {
               
               var cart_id="";
               cart_id=$('#select_cart_id').val();
               var item_id =[];
               item_id=$(this).val();
               
               if(cart_id) {
                   $.ajax({
                       url: 'get-return-item/'+cart_id,
                       type: "GET",
                       data : {"_token":"<?php echo e(csrf_token()); ?>"},
                       dataType: "json",
                       success:function(data)
                       {
                        var total_amount;
                        var non_refundAble;
                        var refundAble_amount
                        
                         if(data){
                            var selected_item_id=[];
                             total_amount=0;
                             non_refundAble=0;
                             refundAble_amount=0;
                            $.each(data, function(key, item){
                                
                                $.each(item_id, function(key, item_data){
                                    if(item_data==item.cart_item_id){
                                        
                                        selected_item_id.push(item_data);
                                        total_amount=Math.floor(total_amount+item.total_price);
                                        non_refundAble=Math.floor(non_refundAble+item.vat);
                                        refundAble_amount=Math.floor(refundAble_amount+item.total_price);
                                        
                                    }
                                });
                                
                            });
                        }
                         $("#get_total_amount").val(total_amount);
                         $("#get_non_refundAble").val(non_refundAble);
                         $("#get_refundAble_amount").val(refundAble_amount);
                     }
                   });
               }
               
            });
            
        });
    </script>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/onlioxoq/public_html/backofficel/resources/views/dashboard/return/createReturn.blade.php ENDPATH**/ ?>