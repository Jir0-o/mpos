<?php
$user_id=session()->get('LoggedUser');
$user_data=\App\Models\BackofficeLogin::join('backoffice_role','backoffice_role.role_id','=','backoffice_login.role_id')->where('login_id',$user_id)->get();
foreach($user_data as $user){
    $role_name=$user->role_name;
    $user_image=$user->user_image;
    $full_name=$user->full_name;
}
?>
     <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center mb-5 mt-3">
          <a class="sidebar-brand brand-logo" href="<?php echo e(route('backoffice.home')); ?>"><img style="height:100px; width:100px;" src="<?php echo e(asset('backend/images/yos_logo.jpg')); ?>" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="<?php echo e(asset('backend/images/yos_logo.jpg')); ?>" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="<?php echo e(route('backoffice.home')); ?>" class="nav-link">
              <div class="nav-profile-image">
              <img 
                    src="<?php echo e(asset('backend/images/profile_picture/'.$user_image)); ?>" 
                />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2"><?php echo e($full_name); ?></span>
                <span class="font-weight-normal"><?php echo e($role_name); ?></span>
              </div>
              <!--<span class="badge badge-danger text-white ml-3 rounded">3</span>-->
            </a>
          </li>
          <?php if($role_name=='Administrator' || $role_name=='Super Administrator'): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('backoffice.home')); ?>">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-backoffice" aria-expanded="false" aria-controls="ui-backoffice">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Users</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-backoffice">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-backoffice-user')); ?>">All Backoffice User</a>
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-consumer')); ?>">All Consumer</a>
                </li>
              </ul>
            </div>
          </li>
          
          
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-product" aria-expanded="false" aria-controls="ui-product">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Product & Purchase</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-product">
              <ul class="nav flex-column sub-menu">
                 <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-attributes')); ?>">All Attributes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-products')); ?>">All Product</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-purchase')); ?>">All Purchase</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-product-cat')); ?>">All Categories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-subCat1')); ?>">All Sub Category One</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-subCat2')); ?>">All Sub Category Two</a>
                </li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-delivary" aria-expanded="false" aria-controls="ui-delivary">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Delivery</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-delivary">
              <ul class="nav flex-column sub-menu">
                 <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-cart-delivary')); ?>">Delivery Requests</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.completed-delivary')); ?>">Completed Deliveries</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-agency')); ?>">Delivery Agency</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-agent')); ?>">Delivery Agent</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-charge')); ?>">Delivery Charge Definition</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-return" aria-expanded="false" aria-controls="ui-return">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Return</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-return">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.create-return')); ?>">Create Return</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-return')); ?>">All Returned Requests</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.completed-return')); ?>">Completed Return</a>
                </li>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-wallet" aria-expanded="false" aria-controls="ui-wallet">
              <i class="mdi fa fa-wallet menu-icon"></i>
              <span class="menu-title">Wallet</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-wallet">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-withdraw-request')); ?>">Withdraw Requests</a>
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-suppliers')); ?>">Completed Withdraw</a>
                </li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-colors" aria-expanded="false" aria-controls="ui-colors">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Definitions</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-colors">
              <ul class="nav flex-column sub-menu">
                 <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-attributes')); ?>">All Attributes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-colors')); ?>">All Colors</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-size')); ?>">All Size</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-unit')); ?>">All Unit</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-brands')); ?>">All Brands</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-suppliers')); ?>">Suppliers</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-web" aria-expanded="false" aria-controls="ui-delivary">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Web Actions</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-web">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-new-arraival')); ?>">New Arraivals</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-on-sale')); ?>">On Sale</a>
                </li>
              </ul>
            </div>
          </li>
          
          <?php endif; ?>
          <?php if($role_name=='Office Staff'): ?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-delivary" aria-expanded="false" aria-controls="ui-delivary">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Delivery</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-delivary">
              <ul class="nav flex-column sub-menu">
                 <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-cart-delivary')); ?>">Delivery Requests</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.completed-delivary')); ?>">Completed Deliveries</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-return" aria-expanded="false" aria-controls="ui-return">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Return</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-return">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.create-return')); ?>">Create Return</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-return')); ?>">All Returned Requests</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.completed-return')); ?>">Completed Return</a>
                </li>
                </li>
              </ul>
            </div>
          </li>
          <?php endif; ?>
          <?php if($role_name=='Warehouse Incharge'): ?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-delivary" aria-expanded="false" aria-controls="ui-delivary">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Delivery</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-delivary">
              <ul class="nav flex-column sub-menu">
                 <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-cart-delivary')); ?>">Delivery Requests</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.completed-delivary')); ?>">Completed Deliveries</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-return" aria-expanded="false" aria-controls="ui-return">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Return</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-return">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.create-return')); ?>">Create Return</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-return')); ?>">All Returned Requests</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.completed-return')); ?>">Completed Return</a>
                </li>
                </li>
              </ul>
            </div>
          </li>
          <?php endif; ?>
          <?php if($role_name=='Warehouse Staff'): ?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-delivary" aria-expanded="false" aria-controls="ui-delivary">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Delivery</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-delivary">
              <ul class="nav flex-column sub-menu">
                 <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-cart-delivary')); ?>">Delivery Requests</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.completed-delivary')); ?>">Completed Deliveries</a>
                </li>
              </ul>
            </div>
          </li>
          <?php endif; ?>
          <?php if($role_name=='Delivery Agency'): ?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-delivary" aria-expanded="false" aria-controls="ui-delivary">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Delivery</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-delivary">
              <ul class="nav flex-column sub-menu">
                 <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-cart-delivary')); ?>">Delivery Requests</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.completed-delivary')); ?>">Completed Deliveries</a>
                </li>
              </ul>
            </div>
          </li>
          <?php endif; ?>
          <?php if($role_name=='Delivery Agent'): ?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-delivary" aria-expanded="false" aria-controls="ui-delivary">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Delivery</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-delivary">
              <ul class="nav flex-column sub-menu">
                 <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-cart-delivary')); ?>">Delivery Requests</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo e(route('backoffice.completed-delivary')); ?>">Completed Deliveries</a>
                </li>
              </ul>
            </div>
          </li>
          <?php endif; ?>
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                <div class="border-none">
                  <p class="text-black">Notification</p>
                </div>
                <ul class="mt-4 pl-0">
                  <li>Sign Out</li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </nav>
 <?php /**PATH /home/onlioxoq/public_html/backofficel/resources/views/dashboard/pertials/sideNav.blade.php ENDPATH**/ ?>