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
              <h3 class="page-title">All Categories</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">All Categories</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> All Sub Category One </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="card-description btn btn-info"><a class="text-light" href="<?php echo e(route('backoffice.subCat1')); ?>">Add Sub Category One</a></div>
                    <h4 class="card-title text-center">Sub Category One Table</h4>
                    <div class="table-responsive">
                      <table id="example" class="table table-striped table-bordered">
                
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Sample Image</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $SubCategoryOne; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td><?php echo e($values->sc_one_name); ?></td>
                                <td><?php echo e($values->category_name); ?></td>
                                <td>
                                    <img height="100px" width="100px" src="<?php echo e(asset('backend/images/'.$values->sc_one_image)); ?>">
                                </td>
                                <?php if($values->is_active==1): ?>
                                <td>Active</td>
                                <?php else: ?>
                                <td>Not Active</td>
                                <?php endif; ?>
                                
                                <td><a class="btn btn-warning" class="text-light" href="<?php echo e(route('backoffice.edit-subCat1',Crypt::encryptString($values->sc_one_id))); ?>">Edit</a></td>

                              </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Sample Image</th>
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
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/onlioxoq/public_html/backofficel/resources/views/dashboard/product/allSubCat1.blade.php ENDPATH**/ ?>