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
              <h3 class="page-title">Return</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Return</a></li>
                  <li class="breadcrumb-item active" aria-current="page">All Return </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">Return List</h4>
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
                            
                            <th> Consumer Name </th>
                            <th> Consumer Mobile No </th>
                            <th> Return Date </th>
                            <th> Authorize Date </th>
                            <th> Return Status </th>
                            <th> View Details </th>
                          </tr>
                        
                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $CartItemReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                      
                                      <td><?php echo e($info->consumer_name); ?></td>
                                      <td><?php echo e($info->mobile_no); ?></td>
                                      <td><?php echo e($info->return_date); ?></td>
                                      <td>
                                          <?php if($info->authorize_date): ?>
                                            <?php echo e($info->authorize_date); ?>

                                         <?php else: ?>
                                            Not Authorized
                                         <?php endif; ?>
                                      </td>
                                      <td>
                                         <?php if($info->return_status>1): ?>
                                           <?php if($info->return_status==2): ?>
                                                Returning To WareHouse
                                           <?php elseif($info->return_status==3): ?>
                                                Rejected
                                           <?php elseif($info->return_status==4): ?>
                                                Returned To Warehouse
                                           <?php endif; ?>
                                         <?php else: ?>
                                            Not Authorized
                                         <?php endif; ?>
                                      </td>
                                      <td>
                                          <a href="<?php echo e(route('backoffice.view-return',Crypt::encryptString($info->cart_item_return_id))); ?>" class="btn btn-primary">View</a>
                                      </td>
                                        
                                
                              </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        
                      </table>
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
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nescggna/public_html/thechef/resources/views/dashboard/return/allReturn.blade.php ENDPATH**/ ?>