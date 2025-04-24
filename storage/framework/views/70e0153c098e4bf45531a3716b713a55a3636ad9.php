

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
            <div class="container" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-12 card">
                            <?php $__currentLoopData = $CartItemReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $return): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 pb-2 h3"><b>Return Details</b></div>
                                    <?php if(Session::get('success')): ?>
                                     <div class="alert alert-success">
                                         <?php echo e(Session::get('success')); ?>

                                     </div>
                                    <?php endif; ?>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6 col-md-3"></div>
                                    <div class="col-6 col-md-3"><?php echo e($return->consumer_name); ?></div>
                                    <div class="col-6 col-md-3"><b>Authorized By</b></div>
                                        <?php if($return->authorized_by): ?>
                                        
                                            <?php $__currentLoopData = $backofficeLogin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $login): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($login->login_id==$return->authorized_by): ?>
                                                  <div class="col-6 col-md-3"><?php echo e($login->full_name); ?> (<?php echo e($login->role_name); ?>) </div>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       
                                        <?php else: ?>
                                            <?php $__currentLoopData = $backofficeLogin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $login): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($login->role_name == 'Administrator' || $login->role_name == 'Super Administrator'): ?>
                                                <div class="col-6 col-md-3">
                                                    <select class="form-control mb-2 border border-primary" id="authorize_status_def">
                                                        <option disabled selected>-----Select One-----</option>
                                                        <option value="2">Return to Warehouse</option>
                                                        <option value="3">Rejected</option>
                                                    </select>
                                                    <div id="authorize_button"></div>
                                                </div>
                                                <?php else: ?>
                                               <div class="col-6 col-md-3"> Not Authorized </div>
                                               <?php endif; ?>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 col-md-3">Mobile No</div>
                                    <div class="col-6 col-md-3"><?php echo e($return->mobile_no); ?></div>
                                    <div class="col-6 col-md-3"><b>Authorization Date</b></div>
                                    <div class="col-6 col-md-3">
                                        <?php if($return->authorize_date): ?>
                                            <?php echo e($return->authorize_date); ?>

                                         <?php else: ?>
                                            Not Authorized
                                         <?php endif; ?>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 col-md-3">Cart No</div>
                                    <div class="col-6 col-md-3"><?php echo e($return->cart_id); ?></div>
                                    <div class="col-6 col-md-3"><b>Return Status</b></div>
                                    <div class="col-6 col-md-3">
                                        <?php if($return->return_status>1): ?>
                                           <?php if($return->return_status==2): ?>
                                                Returning To WareHouse
                                           <?php elseif($return->return_status==3): ?>
                                                Rejected
                                           <?php elseif($return->return_status==4): ?>
                                                Returned To Warehouse
                                           <?php endif; ?>
                                         <?php else: ?>
                                            Not Authorized
                                         <?php endif; ?>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 col-md-3">Cart Items</div>
                                    <div class="col-6 col-md-3">
                                        <?php $__currentLoopData = $CartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $__currentLoopData = $Items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <p><?php echo e($value->product_name); ?></p>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        
                                    </div>
                                    <?php if($return->return_status==2 ): ?>
                                         <?php $__currentLoopData = $backofficeLogin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $login): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($login->role_name=='Warehouse Incharge'): ?>
                                                <div class="col-6 col-md-3"><b>Recieve Product</b></div>
                                                <div class="col-6 col-md-3"><a href="<?php echo e(route('backoffice.recived-to-warehouse',Crypt::encryptString($return->cart_item_return_id))); ?>" class="btn btn-warning">Product Received</a></div>
                                            <?php endif; ?>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 col-md-3">Total Amount</div>
                                    <div class="col-6 col-md-3">Tk. <?php echo e($return->total_amount); ?></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 col-md-3">Non RefundAble(vat)</div>
                                    <div class="col-6 col-md-3">Tk. <?php echo e($return->non_refundable_vat); ?></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 col-md-3"> Refund Amount</div>
                                    <div class="col-6 col-md-3 text-danger">Tk. <?php echo e($return->refund_amount); ?></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 col-md-3"> Return Date</div>
                                    <div class="col-6 col-md-3"><?php echo e($return->return_date); ?></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 col-md-3">Reason of Return</div>
                                    <div class="col-6 col-md-3"><?php echo e($return->reason_of_return); ?></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 col-md-3">Received By</div>
                                    <?php $__currentLoopData = $backofficeLogin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $login): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($login->login_id==$return->received_by_id): ?>
                                          <div class="col-6 col-md-3"><?php echo e($login->full_name); ?> (<?php echo e($login->role_name); ?>) </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </div>
                                
                                <div class="row mt-5">
                                    <div class="col-12 text-right">
                                        <a href="<?php echo e(URL::previous()); ?>" class="btn btn-warning">Back</a>
                                    </div>
                                </div>
                            </div>
                          
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            
            $('#authorize_status_def').on('change', function() {
                var authorize_status="";
                    authorize_status=$(this).val();
                
                $('#authorize_button').empty();
                
                if(authorize_status==2){
                    var html=`<a href="<?php echo e(route('backoffice.return-authorization',[Crypt::encryptString($return->cart_item_return_id),4])); ?>" class="btn btn-primary">`
                        html+= ` Authorize Return`
                        html+=`</a>`
                        
                      $('#authorize_button').append(html);
                }else if(authorize_status==3){
                    var html=`<a href="<?php echo e(route('backoffice.return-authorization',[Crypt::encryptString($return->cart_item_return_id),3])); ?>" class="btn btn-primary">`
                        html+= ` Authorize Return`
                        html+=`</a>`
                        
                      $('#authorize_button').append(html);
                    
                }else{
                    $('#authorize_button').empty();
                }
                
               
            });
        });
    </script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ussbd\POSSIE\resources\views/dashboard/return/viewReturn.blade.php ENDPATH**/ ?>