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
             <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Running Orders</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Orders</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Running Orders </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">Running Order List</h4>
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
                    <div class="table-responsive">
                      <table id="example" class="table table-striped table-bordered" width="100%">
                
                        <thead>
                          <tr>
                            <th>Order Details</th>
                            <th>Cart Status</th>
                          </tr>
                        
                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $Cartinformation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                  <form action="#" method="post">
                                      <?php echo csrf_field(); ?>
                                      
                                        <input type="hidden" value="<?php echo e($info->cart_id); ?>" name="cart_id" />
                                        
                                        
                                        <td>
                                            <a href="<?php echo e(route('backoffice.orderDetails',$info->cart_id)); ?>" class="btn btn-primary">view Order Details</a>
                                        </td>
                                      
                                        <td>
                                            <?php if($info->delivery_status_id<=2): ?>
                                                
                                                    <?php $__currentLoopData = $DeliveryStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($Status->delivery_status_id == $info->delivery_status_id): ?>
                                                        <div class="text-danger"><?php echo e($Status->delivery_status); ?></div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                                
                                            <?php elseif($info->delivery_status_id==3): ?> 
                                                
                                                    <?php $__currentLoopData = $DeliveryStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($Status->delivery_status_id == $info->delivery_status_id): ?>
                                                        <div class="text-danger"><?php echo e($Status->delivery_status); ?></div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                                
                                            <?php elseif($info->delivery_status_id==4): ?> 
                                                
                                                    <?php $__currentLoopData = $DeliveryStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($Status->delivery_status_id == $info->delivery_status_id): ?>
                                                        <div class="text-danger"><?php echo e($Status->delivery_status); ?></div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                            <?php elseif($info->delivery_status_id==5): ?> 
                                                
                                                    <?php $__currentLoopData = $DeliveryStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($Status->delivery_status_id == $info->delivery_status_id): ?>
                                                        <div class="text-danger"><?php echo e($Status->delivery_status); ?></div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                            <?php elseif($info->delivery_status_id==6): ?> 
                                                
                                                    <?php $__currentLoopData = $DeliveryStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($Status->delivery_status_id == $info->delivery_status_id): ?>
                                                        <div class="text-danger"><?php echo e($Status->delivery_status); ?></div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                            <?php elseif($info->delivery_status_id==7): ?> 
                                                
                                                    <?php $__currentLoopData = $DeliveryStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($Status->delivery_status_id == $info->delivery_status_id): ?>
                                                        <div class="text-danger"><?php echo e($Status->delivery_status); ?></div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                            <?php endif; ?>
                                        </td>
                                     
                                  </form>
                                
                              </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        
                      </table>
                    </div>
                    <div class="row float-right">
                          <div class="p-5 col-md-12">
                                <a href="<?php echo e(URL::previous()); ?>" class="btn btn-primary"> Back </a>
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
   </div>
</div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nescggna/public_html/thechef/resources/views/dashboard/consumer/runningOrders.blade.php ENDPATH**/ ?>