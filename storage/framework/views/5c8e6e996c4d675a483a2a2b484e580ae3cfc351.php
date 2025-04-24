

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
              <h3 class="page-title">Wallet</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Wallte</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> All Withdraw Requests </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">Withdraw List</h4>
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
                      <table id="example" class="table table-striped table-bordered">
                
                        <thead>
                          <tr>
                            <th>Consumer Name</th>
                            <th>Mobile No</th>
                            <th>Taka</th>
                            <th>Date</th>
                            <th>Level Id</th>
                            <th>Referral Id</th>
                            <th>Action</th>
                          </tr>
                        
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $CommissionWithdraw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td><?php echo e($item->consumer_name); ?></td>
                                <td><?php echo e($item->mobile_no); ?></td>
                                <td><?php echo e($item->taka); ?></td>
                                <td><?php echo e($item->date); ?></td>
                                <td><?php echo e($item->level_id); ?></td>
                                <td><?php echo e($item->referral_id); ?></td>
                                  <?php if($item->is_verified == 0): ?>
                                  <td><a href="<?php echo e(route('backoffice.verify',Crypt::encryptString($item->commission_withdraw_id))); ?>" class="btn btn-warning">Verify</a></td>
                                  <?php elseif($item->is_verified == 1): ?>
                                  <td><a href="<?php echo e(route('backoffice.payment-given',Crypt::encryptString($item->commission_withdraw_id))); ?>" class="btn btn-warning">Payment Given</a></td>
                                  <?php else: ?>
                                    <td class="alert alert-success">Payment Conpleted</td>
                                  <?php endif; ?>
                                  
                              </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Consumer Name</th>
                            <th>Mobile No</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Level Id</th>
                            <th>Referral Id</th>
                            <th>Action</th>
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
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/onlioxoq/public_html/backofficel/resources/views/dashboard/wallet/allWithdraw.blade.php ENDPATH**/ ?>