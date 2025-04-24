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
              <h3 class="page-title">Delivery</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Delivery</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Completed Delivery </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">Completed Order List</h4>
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
                            
                            <th>Agency </th>
                            <th>Agent</th>
                            <th>Details</th>
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
                                            <div><?php echo e($info->delivery_agency_name); ?></div>
                                        </td>
                                        
                                        <td>
                                            <div><?php echo e($info->delivery_agent_name); ?></div>
                                        </td>
                                        
                                        
                                        <td>
                                            <a href="<?php echo e(route('backoffice.orderDetails',$info->cart_id)); ?>" class="btn btn-primary">view Order Details</a>
                                        </td>
                                      
                                         <td>
                                             
                                            <div class="text-success"> Delivery Completted </div>
                                            
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
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/onlioxoq/public_html/backofficel/resources/views/dashboard/consumer/completedDelivary.blade.php ENDPATH**/ ?>