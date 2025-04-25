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
                    <h4 class="card-title text-center">Orders List</h4>
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
                            
                            <th> Agency </th>
                            <th> Agent</th>
                            <th>Details</th>
                            <th>Cart Status</th>
                          </tr>
                        
                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $Cartinformation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                  <form action="<?php echo e(route('backoffice.accept-cart',$info->cart_id)); ?>" method="post">
                                      <?php echo csrf_field(); ?>
                                      
                                        <input type="hidden" value="<?php echo e($info->cart_id); ?>" name="cart_id" />
                                        
                                        <td>
                                            <?php if($info->delivery_status_id == 4): ?>
                                                <?php if($role_name=='Office Staff' || $role_name=='Administrator' || $role_name=='Super Administrator'): ?>
                                                <select class="form-control border border-dark" id="delivery_agency_id" name="delivery_agency_id" required="required">
                                                    <option value="">-- Select Agency --</option>
                                                    <?php $__currentLoopData = $DeliveryAgency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Agency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($Agency->delivery_agency_id); ?>"><?php echo e($Agency->delivery_agency_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                           
                                            <?php if($info->delivery_status_id >= 5): ?>
                                            
                                                <?php $__currentLoopData = $CartDelivery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $delivery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                                     <?php if($info->cart_id == $delivery->cart_id): ?>
                                                        <?php $__currentLoopData = $DeliveryAgency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Agency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($Agency->delivery_agency_id == $delivery->delivery_agency_id): ?>
                                                             <div><?php echo e($Agency->delivery_agency_name); ?></div>
                                                            <?php endif; ?>
                                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                     <?php endif; ?>
                                                     
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                            <?php elseif($info->delivery_status_id == 4): ?>
                                                 <div></div>
                                            <?php else: ?>
                                                 <div>Agency Is Not Selected Yet</div> 
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($info->delivery_status_id == 4): ?>
                                                 <?php if($role_name=='Office Staff' || $role_name=='Administrator' || $role_name=='Super Administrator'): ?>
                                                <select class="form-control border border-dark" id="delivery_agent_id" name="delivery_agent_id">
                                                    <option value="">-- Select Agent --</option>
                                                    <?php $__currentLoopData = $DeliveryAgent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($Agent->delivery_agent_id); ?>"><?php echo e($Agent->delivery_agent_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php if($info->delivery_status_id >= 5): ?>
                                             
                                                <?php $__currentLoopData = $CartDelivery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $delivery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                                     <?php if($info->cart_id == $delivery->cart_id): ?>
                                                        <?php $__currentLoopData = $DeliveryAgent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($Agent->delivery_agency_id == $delivery->delivery_agency_id): ?>
                                                             <div><?php echo e($Agent->delivery_agent_name); ?></div>
                                                            <?php endif; ?>
                                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                     <?php endif; ?>
                                                     
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             
                                            <?php elseif($info->delivery_status_id == 4): ?>
                                            <div></div>
                                            <?php else: ?>
                                              <div>Agent Is Not Selected Yet</div> 
                                            <?php endif; ?>
                                        </td>
                                        
                                        <td>
                                            <a href="<?php echo e(route('backoffice.orderDetails',$info->cart_id)); ?>" class="btn btn-primary">view Order Details</a>
                                        </td>
                                      
                                         <td>
                                            <?php if($info->delivery_status_id<=2): ?>
                                            
                                               <?php if($role_name=='Office Staff' || $role_name=='Administrator' || $role_name=='Super Administrator'): ?>
                                                
                                                   <button type="submit" class="btn btn-primary">Accept</button>
                                                <?php else: ?>
                                                
                                                    <?php $__currentLoopData = $DeliveryStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($Status->delivery_status_id == $info->delivery_status_id): ?>
                                                        <div class="text-danger"><?php echo e($Status->delivery_status); ?></div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                               <?php endif; ?>
                                                
                                            <?php elseif($info->delivery_status_id==3): ?> 
                                                
                                                <?php if($role_name=='Warehouse Incharge'): ?>
                                                    <button type="submit" class="btn btn-primary">Accept</button>
                                                <?php else: ?>
                                                
                                                    <?php $__currentLoopData = $DeliveryStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($Status->delivery_status_id == $info->delivery_status_id): ?>
                                                        <div class="text-danger"><?php echo e($Status->delivery_status); ?></div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                                <?php endif; ?>
                                                
                                            <?php elseif($info->delivery_status_id==4): ?> 
                                                <?php if($role_name=='Office Staff' || $role_name=='Administrator' || $role_name=='Super Administrator'): ?>
                                                
                                                     <button type="submit" class="btn btn-primary">Accept</button>
                                                <?php else: ?>
                                                
                                                    <?php $__currentLoopData = $DeliveryStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($Status->delivery_status_id == $info->delivery_status_id): ?>
                                                        <div class="text-danger"><?php echo e($Status->delivery_status); ?></div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                                <?php endif; ?>
                                            <?php elseif($info->delivery_status_id==5): ?> 
                                                <?php if($role_name=='Delivery Agency'): ?>
                                                
                                                    <button type="submit" class="btn btn-primary">Parcel Handover to Agent</button>
                                                <?php else: ?>
                                                
                                                    <?php $__currentLoopData = $DeliveryStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($Status->delivery_status_id == $info->delivery_status_id): ?>
                                                        <div class="text-danger"><?php echo e($Status->delivery_status); ?></div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                                <?php endif; ?>
                                            <?php elseif($info->delivery_status_id==6): ?> 
                                                <?php if($role_name=='Delivery Agent'): ?>
                                                
                                                    <button type="submit" class="btn btn-primary">Payment Collected</button>
                                                <?php else: ?>
                                                
                                                    <?php $__currentLoopData = $DeliveryStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($Status->delivery_status_id == $info->delivery_status_id): ?>
                                                        <div class="text-danger"><?php echo e($Status->delivery_status); ?></div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                                <?php endif; ?>  
                                            <?php elseif($info->delivery_status_id==7): ?> 
                                            
                                                <?php if($role_name=='Office Staff' || $role_name=='Administrator' || $role_name=='Super Administrator'): ?>
                                                
                                                    <button type="submit" class="btn btn-primary">Payment Collected Form Agency</button>
                                                <?php else: ?>
                                                
                                                    <?php $__currentLoopData = $DeliveryStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($Status->delivery_status_id == $info->delivery_status_id): ?>
                                                        <div class="text-danger"><?php echo e($Status->delivery_status); ?></div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                                <?php endif; ?>
                                            <?php elseif($info->delivery_status_id==8): ?>
                                            
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

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body">
        <table class="table table-striped">
                       <thead>
                          <tr>
                            <th>Cart Id</th>
                            <th>product Name </th>
                          </tr>
                        </thead>
                        <tbody id="details">
                              <tr>
                                  
                              </tr>
                        </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nescggna/public_html/thechef/resources/views/dashboard/delivery/cartDelivery.blade.php ENDPATH**/ ?>