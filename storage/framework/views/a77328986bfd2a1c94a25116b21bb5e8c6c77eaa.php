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
              <h3 class="page-title">All Unit</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Definition</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> All Unit </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="card-description btn btn-info"><a class="text-light" href="<?php echo e(route('backoffice.add-unit')); ?>">Add New unit</a></div>
                    <h4 class="card-title text-center">Size List</h4>
                    <div class="table-responsive">
                      <table id="example" class="table table-striped table-bordered" width="100%">
                
                        <thead>
                          <tr>
                            <th>Unit Name</th>
                            <th>Unit Symbol</th>
                            <th>Is Fractional</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $Unit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td><?php echo e($values->unit_name); ?></td>
                                <td><?php echo e($values->unit_symbol); ?></td>
                                
                                <?php if($values->is_fractional==1): ?>
                                <td>Fractional</td>
                                <?php else: ?>
                                <td>Not Fractional</td>
                                <?php endif; ?>
                                
                                <?php if($values->is_active==1): ?>
                                <td>Active</td>
                                <?php else: ?>
                                <td>Not Active</td>
                                <?php endif; ?>
                                
                                <td><a class="btn btn-warning" class="text-light" href="<?php echo e(route('backoffice.edit-unit',Crypt::encryptString($values->unit_id))); ?>">Edit</a></td>

                              </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Unit Name</th>
                            <th>Unit Symbol</th>
                            <th>Is Fractional</th>
                            <th>Status</th>
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
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/onlioxoq/public_html/backofficel/resources/views/dashboard/unit/allUnit.blade.php ENDPATH**/ ?>