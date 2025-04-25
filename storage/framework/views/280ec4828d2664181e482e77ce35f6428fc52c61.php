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
                  <li class="breadcrumb-item active" aria-current="page"> Delivery Requests </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">Order Details</h4>
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
                    <div class="row">
                        <div class="col-md-4">
                            <?php $__currentLoopData = $Consumer_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            Consumer Details
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Name:
                                        </td>
                                        <td>
                                             <?php echo e($values->consumer_name); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Address:
                                        </td>
                                        <td>
                                             <?php echo e($values->address); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Mobile No:
                                        </td>
                                        <td>
                                             <?php echo e($values->mobile_no); ?>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="col-md-4">
                              <?php $__currentLoopData = $CartInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th colspan="2">
                                                Consumer Details
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Consumer Id:
                                            </td>
                                            <td>
                                                 <?php echo e($info->consumer_id); ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Order No:
                                            </td>
                                            <td>
                                                #<?php echo e(sprintf("%09d",$info->cart_id)); ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Order Date:
                                            </td>
                                            <td>
                                                 <?php echo e($info->cart_date); ?>

                                            </td>
                                        </tr>
    
                                    </tbody>
                                </table>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                      <div class="col-md-4">
                            <?php $__currentLoopData = $CartInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="2">
                                            Delivery Details
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                             <?php echo e($values->delivery_address); ?>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                             <th>Item Details</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td>
                                                Item Code
                                            </td>
                                            <td>
                                                Item Name
                                            </td>
                                            <td>
                                                Size
                                            </td>
                                            <td>
                                                Color
                                            </td>
                                            <td>
                                                Qty
                                            </td>
                                            <td>
                                                Unit Price
                                            </td>
                                            <td>
                                                Total Price
                                            </td>
                                        </tr>
                                        <?php $__currentLoopData = $CartItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <?php echo e($items->product_id); ?>

                                            </td>
                                            <td>
                                                <?php echo e($items->product_name); ?>

                                            </td>
                                            <td>
                                                <?php $__currentLoopData = $size_definition; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($size->size_id == $items->size_id): ?>
                                                     <?php echo e($size->size_name); ?>

                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </td>
                                            <td>
                                                <?php $__currentLoopData = $color_definition; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($color->color_id == $items->color_id): ?>
                                                     <?php echo e($color->color_name); ?>

                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </td>
                                            <td>
                                                <?php echo e($items->quantity); ?>

                                            </td>
                                            <td>
                                                <?php echo e($items->sales_price); ?>

                                            </td>
                                            <td>
                                                <?php echo e($items->total_price); ?>

                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $CartInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total Discount</td>
                                            <td>- <?php echo e($info->total_discount); ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-info">Subtotal</td>
                                            <td><?php echo e($info->total_cart_amount); ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total Vat</td>
                                            <td>+ <?php echo e($info->vat_amount); ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Total Delevery Charge</td>
                                            <td>+ <?php echo e($info->delivery_charge); ?></td>
                                        </tr>
                                         <tr class="bg-info text-light">
                                            <td>    
                                                <?php
                                                    $digit = new NumberFormatter("en", NumberFormatter::SPELLOUT);
                                                    echo $digit->format($info->total_payable_amount);
                                                ?>
                                            </td>
                                            <td>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Final Total</td>
                                            <td><?php echo e($info->total_payable_amount); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <div>
                                    <a href="<?php echo e(URL::previous()); ?>" class="float-right btn btn-warning mt-2">Back</a>
                                </div>
                                
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
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nescggna/public_html/thechef/resources/views/dashboard/delivery/orderDetails.blade.php ENDPATH**/ ?>