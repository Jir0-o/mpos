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
        
        <?php $__currentLoopData = $allConsumerInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="main-panel">
             <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"><?php echo e($user->consumer_name); ?></h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Consumer</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> <?php echo e($user->consumer_name); ?> </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!--<div class="card-description btn btn-info"><a class="text-light" href="<?php echo e(route('backoffice.register')); ?>">Add Backoffice User</a></div>-->
                    <h4 class="card-title text-center">Transaction Details of <?php echo e($user->consumer_name); ?> </h4>
                    <div>
                      <table id="example" class="table table-striped table-bordered">
                
                        <thead>
                          <tr>
                            <th>total_accumulated_points</th>
                            <th>total_accumulated_taka_for_points</th>
                            <!--<th>total_accumulated_taka</th>-->
                            <!--<th>total_claimed_points</th>-->
                            <!--<th>total_claimed_taka_for_points</th>-->
                            <!--<th>total_claimed_taka</th>-->
                            <!--<th>total_claimable_points</th>-->
                            <!--<th>total_claimable_taka_for_points</th>-->
                            <!--<th>total_claimable_taka</th>-->
                            <!--<th>total_claimable_balance</th>-->
                          </tr>
                        
                        </thead>
                        <tbody>
                            
                              <tr>
                                <td><?php echo e($user->total_accumulated_points); ?></td>
                                <td><?php echo e($user->total_accumulated_taka_for_points); ?></td>
                              </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/onlioxoq/public_html/backofficel/resources/views/dashboard/backoffice/viewConsumer.blade.php ENDPATH**/ ?>