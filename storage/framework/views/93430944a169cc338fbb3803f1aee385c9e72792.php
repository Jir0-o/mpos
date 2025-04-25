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
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 45px; ">
                            <div class="card">
                                <div class="card-title">
                                    <h4 class="p-3 text-center">Add Item</h4>
                                    <hr>
                                </div>
                                <div class="card-body">

                                    <form action="<?php echo e(route('backoffice.create-product')); ?>" method="post"
                                        enctype="multipart/form-data">
                                        <?php if(Session::get('success')): ?>
                                            <div class="alert alert-success">
                                                <?php echo e(Session::get('success')); ?>

                                            </div>
                                        <?php endif; ?>

                                        <?php echo csrf_field(); ?>
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="product_name">Item Name</label>
                                                            <input type="text" class="form-control my-2"
                                                                name="product_name" placeholder="Enter Product Name"
                                                                value="<?php echo e(old('product_name')); ?>" required="required">
                                                            <span class="text-danger">
                                                                <?php $__errorArgs = ['product_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <?php echo e($message); ?>

                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="unit_type">Select Unit Type</label>
                                                            <select class="form-control my-2" name="unit_type"
                                                                required="required">
                                                                <option selected="true" disabled="disabled">
                                                                    ----------Select---------</option>
                                                                <?php $__currentLoopData = $UnitDefinition; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($values->unit_id); ?>">
                                                                        <?php echo e($values->unit_name); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <span class="text-danger">
                                                                <?php $__errorArgs = ['unit_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <?php echo e($message); ?>

                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="sc_one_id">Select Sub Category</label>
                                                            <select class="form-control my-2" name="sc_one_id"
                                                                required="required">
                                                                <option selected="true" disabled="disabled">
                                                                    ----------Select---------
                                                                </option>
                                                                <?php $__currentLoopData = $subCategoryOne; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($sc1->sc_one_id); ?>">
                                                                        <?php echo e($sc1->sc_one_name); ?>

                                                                    </option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <span class="text-danger">
                                                                <?php $__errorArgs = ['sc_one_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <?php echo e($message); ?>

                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="images" class="form-label">Upload Product
                                                                Images:</label>
                                                            <input type="file" name="images[]" accept="image/*"
                                                                class="form-control" multiple>
                                                            <span class="text-danger">
                                                                <?php $__errorArgs = ['images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <?php echo e($message); ?>

                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="cost_price">Cost Price</label>
                                                            <input type="number" class="form-control my-2"
                                                                name="cost_price" placeholder="Enter Cost Price"
                                                                value="<?php echo e(old('cost_price')); ?>" required="required">
                                                            <span class="text-danger">
                                                                <?php $__errorArgs = ['cost_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <?php echo e($message); ?>

                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="sales_price">Retail Price</label>
                                                            <input type="number" class="form-control my-2"
                                                                name="sales_price" placeholder="Enter Sales Price"
                                                                value="<?php echo e(old('sales_price')); ?>" required="required">
                                                            <span class="text-danger">
                                                                <?php $__errorArgs = ['sales_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <?php echo e($message); ?>

                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="bulk_price">Whole Sale Price</label>
                                                            <input type="number" class="form-control my-2"
                                                                name="bulk_price" placeholder="Enter Cost Price"
                                                                value="<?php echo e(old('bulk_price')); ?>"required="required">
                                                            <span class="text-danger">
                                                                <?php $__errorArgs = ['bulk_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <?php echo e($message); ?>

                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="final_quantity">Product Quantity</label>
                                                            <input type="number" class="form-control my-2"
                                                                name="final_quantity" placeholder="Enter Quantity"
                                                                value="<?php echo e(old('final_quantity')); ?>"required="required">
                                                            <span class="text-danger">
                                                                <?php $__errorArgs = ['final_quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <?php echo e($message); ?>

                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="vat">Vat (tk)</label>
                                                            <input type="text" class="form-control my-2"
                                                                name="vat" placeholder="Enter Vat Amount"
                                                                value="<?php echo e(old('vat')); ?>" required="required">
                                                            <span class="text-danger">
                                                                <?php $__errorArgs = ['vat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <?php echo e($message); ?>

                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="status">Select Status</label>
                                                            <select class="form-control my-2" name="status"
                                                                required="required">
                                                                <option selected="true" disabled="disabled">
                                                                    -----------Select----------</option>
                                                                <option value="1">Active</option>
                                                                <option value="0">Not Active</option>
                                                            </select>
                                                            <span class="text-danger">
                                                                <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <?php echo e($message); ?>

                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row pt-5">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit"
                                                                class="btn btn-primary mt-2">Submit</button>
                                                            <a class="btn btn-primary mt-2 float-right" class="text-light"
                                                                href="<?php echo e(route('backoffice.all-products')); ?>">Back</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <br>
                                </form>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nescggna/public_html/kaynat/resources/views/dashboard/product/product.blade.php ENDPATH**/ ?>