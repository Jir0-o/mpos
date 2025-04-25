<?php
    $user_id = session()->get('LoggedUser');
    $user_data = \App\Models\BackofficeLogin::join('backoffice_role', 'backoffice_role.role_id', '=', 'backoffice_login.role_id')
        ->where('login_id', $user_id)
        ->first();
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center mb-5 mt-3">
        <a class="sidebar-brand brand-logo" href="<?php echo e(route('backoffice.home')); ?>"><img style="height:100px; width:100px;"
                src="<?php echo e(asset('backend/thechef.jpg')); ?>" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="<?php echo e(route('backoffice.home')); ?>"><img
                src="<?php echo e(asset('backend/thechef.jpg')); ?>" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="<?php echo e(route('backoffice.home')); ?>" class="nav-link">
                <div class="nav-profile-image">
                    <img src="<?php echo e(asset('backend/images/profile_picture/' . $user_data->user_image)); ?>" />
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column pr-3">
                    <span class="font-weight-medium mb-2"><?php echo e($user_data->full_name); ?></span>
                    <span class="font-weight-normal"><?php echo e($user_data->role_name); ?></span>
                </div>
                <!--<span class="badge badge-danger text-white ml-3 rounded">3</span>-->
            </a>
        </li>
        <?php if($user_data->role_id == 1 || $user_data->role_id == 2): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('backoffice.sales-form')); ?>">
                    <i class="mdi mdi-cart-arrow-down menu-icon"></i>
                    <span class="menu-title">Invoice</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-sales" aria-expanded="false"
                    aria-controls="ui-sales">
                    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                    <span class="menu-title">Reports</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-sales">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo e(route('backoffice.suspended_orders')); ?>">
                                Ordered Items
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo e(route('backoffice.daily_sales_report')); ?>">
                                Daily Sales Report
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all_sales_report')); ?>">
                                All Sales report
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-consumer')); ?>">
                                Customers
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-product" aria-expanded="false"
                    aria-controls="ui-product">
                    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                    <span class="menu-title">Category & Items</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-product">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-products')); ?>">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-subCat1')); ?>">Sub
                                Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark"
                                href="<?php echo e(route('backoffice.all-product-cat')); ?>">Categories</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-backoffice" aria-expanded="false"
                    aria-controls="ui-backoffice">
                    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                    <span class="menu-title">Users</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-backoffice">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-backoffice-user')); ?>">System
                                Users</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-colors" aria-expanded="false"
                    aria-controls="ui-colors">
                    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                    <span class="menu-title">Definitions</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-colors">
                    <ul class="nav flex-column sub-menu">
                        
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo e(route('backoffice.all-unit')); ?>">All Unit</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ri" aria-expanded="false" aria-controls="ri">
                    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                    <span class="menu-title">Restaurant Information</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ri">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo e(route('backoffice.about-restaurant')); ?>">About The
                                Chef</a>
                        </li>
                    </ul>
                </div>
            </li>
        <?php endif; ?>
        <?php if($user_data->role_id == 3): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('backoffice.sales-form')); ?>">
                    <i class="mdi mdi-cart-arrow-down menu-icon"></i>
                    <span class="menu-title">Invoice</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-sales" aria-expanded="false"
                    aria-controls="ui-sales">
                    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                    <span class="menu-title">Reports</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-sales">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo e(route('backoffice.suspended_orders')); ?>">
                                Ordered Items
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo e(route('backoffice.daily_sales_report')); ?>">
                                Daily Sales Report
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        <?php endif; ?>
        <?php if($user_data->role_id == 4): ?>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-sales" aria-expanded="false"
                    aria-controls="ui-sales">
                    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                    <span class="menu-title">Reports</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-sales">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo e(route('backoffice.suspended_orders')); ?>">
                                Ordered Items
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        <?php endif; ?>
        <li class="nav-item sidebar-actions">
            <div class="nav-link">
                <div class="mt-4">
                    <ul class="mt-4 pl-0">
                        <a href="<?php echo e(route('backoffice.logout')); ?>">Sign Out</a>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center mb-5 mt-3">
        <a class="sidebar-brand brand-logo" href="<?php echo e(route('backoffice.home')); ?>"><img
                style="height:100px; width:100px;" src="<?php echo e(asset('backend/images/yos_logo.png')); ?>"
                alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="<?php echo e(route('backoffice.home')); ?>"><img
                src="<?php echo e(asset('backend/images/yos_logo.png')); ?>" alt="logo" /></a>
    </div>
</nav>
<?php /**PATH /home/nescggna/public_html/thechef/resources/views/dashboard/pertials/sideNav.blade.php ENDPATH**/ ?>