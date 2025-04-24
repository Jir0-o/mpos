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
              <h3 class="page-title">All Consumers</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Consumer</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> All Consumers </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!--<div class="card-description btn btn-info"><a class="text-light" href="<?php echo e(route('backoffice.register')); ?>">Add Backoffice User</a></div>-->
                    <h4 class="card-title text-center">Consumer Table</h4>
                    <div>
                      <table id="example" class="table table-striped table-bordered">
                
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>SA Level</th>
                            <th>View Details</th>
                            <th>View Childs</th>
                            <th>Completed Orders</th>
                            <th>Running Orders</th>
                          </tr>
                        
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $allConsumerData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td><?php echo e($user->consumer_name); ?></td>
                                <?php if($user->level_id == 1): ?>
                                <td>User</td>
                                <?php elseif($user->level_id == 2): ?>
                                <td>Marchentizer</td>
                                <?php elseif($user->level_id == 3): ?>
                                <td>Shop Owner</td>
                                <?php elseif($user->level_id == 4): ?>
                                <td>Profit Partner</td>
                                <?php else: ?>
                                <td>Null</td>
                                <?php endif; ?>
                                <td>
                                    <a class="btn btn-outline-dark" href="<?php echo e(route('backoffice.view-consumer',Crypt::encryptString($user->consumer_id))); ?>">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    
                                </td>
                                <td>
                                    <a class="btn btn-outline-dark" href="<?php echo e(route('backoffice.consumer-childs',Crypt::encryptString($user->consumer_id))); ?>">
                                        <i class="fa-solid fa-code-branch"></i>
                                    </a>
                                    
                                </td>
                                
                                <td>
                                    <a class="btn btn-outline-dark" href="<?php echo e(route('backoffice.consumer-completed-delivery',Crypt::encryptString($user->consumer_id))); ?>">
                                         <i class="fa-solid fa-list-check"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-outline-dark" href="<?php echo e(route('backoffice.consumer-running-orders',Crypt::encryptString($user->consumer_id))); ?>">
                                         <i class="fa-brands fa-first-order"></i>
                                    </a>
                                </td>

                              </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>SA Level</th>
                                <th>View Details</th>
                                <th>View Childs</th>
                                <th>Completed Orders</th>
                                <th>Running Orders</th>
                              </tr>
                        </tfoot>
                        
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
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/onlioxoq/public_html/backofficel/resources/views/dashboard/consumer/allConsumer.blade.php ENDPATH**/ ?>