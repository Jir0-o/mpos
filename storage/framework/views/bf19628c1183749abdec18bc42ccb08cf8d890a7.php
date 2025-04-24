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

                    <h3 class="page-title">All Purchase</h3>

                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="#">Reports</a></li>

                            <li class="breadcrumb-item active" aria-current="page"> All Purchase </li>

                        </ol>

                    </nav>

                </div>

                <div class="row">

                    <div class="col-lg-12 grid-margin stretch-card">

                        <div class="card">

                            <div>

                                <div class="card-description w-25 float-right">

                                    <div class="input-group mb-3">

                                        <select aria-label="Default" aria-describedby="inputGroup-sizing-default" class="form-control" name="category_id" id="category_id">

                                            <option selected disabled>-------Select-------</option>

                                            <?php $__currentLoopData = $Supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <option value="<?php echo e($sup->supplier_id); ?>"><?php echo e($sup->supplier_name); ?></option>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>

                                        <div class="input-group-prepend">

                                            <span class="input-group-text bg-primary text-light" id="inputGroup-sizing-default">Supplier</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="card-body">

                                <h4 class="card-title text-center">All Purchase</h4>

                                <div style="overflow-x:scroll;">

                                    <table id="example" class="table table-bordered">



                                        <thead>

                                            <tr>

                                                <th>SL</th>

                                                <th>Pur No</th>

                                                <th>Items & Qty</th>

                                                <th>Pur Date & Time</th>

                                                <th>Total</th>

                                                <th>Discount</th>

                                                <th>Vat</th>

                                                <th>Payable</th>

                                                <th>Paid</th>

                                                <th>Due</th>

                                                <th>Actions</th>

                                                

                                            </tr>

                                        </thead>

                                        <tbody id="pur_table">

                                            <?php $i=1; ?>

                                            <?php $__currentLoopData = $PurchaseInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <tr>

                                                <td style="width: 10px;"><?php echo e($i++); ?></td>

                                                <td style="width: 60px;"><?php echo e($user->purchase_id); ?></td>

                                                <td style="width: 250px;">

                                                    <?php

                                                    $cart_item_data = \App\Models\PurchaseDetail::join('products', 'products.product_id', '=', 'purchase_details.product_id')

                                                    ->where('purchase_details.purchase_id', $user->purchase_id)

                                                    ->select('purchase_details.quantity', 'products.product_name')

                                                    ->get();

                                                    ?>

                                                    <?php $__currentLoopData = $cart_item_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <div class="row pr-3 pt-2">

                                                        <div class="col-12">

                                                            <?php echo e($itemdata->product_name); ?>


                                                        </div>

                                                        <div class="col-12 mt-2">

                                                            <?php echo e($itemdata->quantity); ?>


                                                        </div>

                                                        <div class="col-12 mt-2 text-right">

                                                            <?php echo e($itemdata->purchase_price); ?>


                                                        </div>

                                                    </div>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </td>

                                                <td style="width: 60px;"><?php echo e($user->pur_date); ?></td>

                                                <td style="width: 60px;" class="text-right"><?php echo e($user->total_item_price); ?></td>

                                                <td style="width: 60px;" class="text-right"><?php echo e($user->discount); ?></td>

                                                <td style="width: 60px;" class="text-right"><?php echo e($user->total_vat); ?></td>

                                                <td style="width: 60px;" class="text-right"><?php echo e($user->total_payable); ?></td>

                                                <?php

                                                $pay = \App\Models\SupplierPayment::where('purchase_id', $user->purchase_id)

                                                ->first();

                                                ?>

                                                <td style="width: 60px;" class="text-right"><?php echo e($pay->paid_amount); ?></td>

                                                <td style="width: 60px;" class="text-right"><?php echo e($pay->revised_due); ?></td>

                                                <td>

                                                    <?php if($user->imei == null): ?>

                                                        <a class="btn" class="text-light"

                                                            href="<?php echo e(route('backoffice.create-barcode', Crypt::encryptString($user->purchase_details_id))); ?>"><i class="fa fa-barcode"></i></a>

                                                    <?php else: ?>

                                                    <a target="_blank" class="brn" href="<?php echo e(route('backoffice.print-barcode', Crypt::encryptString($user->purchase_details_id))); ?>"><img style="margin-left:10px;" src="<?php echo e(asset('backend/printer.webp')); ?>" alt="print"></a>

                                                    <?php endif; ?>

                                                </td>

                                            </tr>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tbody>

                                        <tfoot>

                                            <tr>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

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

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">

        </script>



        <script type="text/javascript">

            $(document).ready(function() {



                $(document).on('change', '#category_id', function(e) {

                    e.preventDefault();

                    var category_id = $(this).val();

                    // from store 

                    $.ajax({

                        url: "sup-purchase-report/" + category_id,

                        type: "GET",

                        data: {

                            "_token": "<?php echo e(csrf_token()); ?>"

                        },

                        dataType: "json",

                        success: function(data) {

                            $("#pur_table").empty();

                            var stockhtml = "";

                            $.each(data, function(key, value) {

                                stockhtml += '<tr>'

                                stockhtml += '<td>' + (key + 1) + '</td>'

                                stockhtml += '<td>' + value.purchase_id + '</td>'

                                stockhtml += '<td id="test-' + value.purchase_id + '">'



                                $.ajax({

                                    url: "pur-name-quantity/" + value.purchase_id,

                                    type: "GET",

                                    data: {

                                        "_token": "<?php echo e(csrf_token()); ?>"

                                    },

                                    dataType: "json",

                                    success: function(pro) {

                                        proHtml = ""

                                        $.each(pro, function(k, val) {

                                            proHtml += '<div class="row pr-3 pt-2"><div class="col-12 col-lg-6 col-md-6 text-truncate mb-1">' + val.product_name + '</div><br><div class="col-12 col-lg-6 col-md-6">' + val.quantity + '</div></div>'

                                        });



                                        $("#" + "test-" + value.purchase_id).append(proHtml)

                                    }

                                });



                                stockhtml += '</td>'

                                stockhtml += '<td>' + value.pur_date + '</td>'

                                stockhtml += '<td class="text-right">' + value.total_item_price + '</td>'

                                stockhtml += '<td class="text-right">' + value.discount + '</td>'

                                stockhtml += '<td class="text-right">' + value.total_payable + '</td>'

                                stockhtml += '<td class="text-right">' + value.total_vat + '</td>'

                                stockhtml += '<td class="text-right">' + value.paid_amount + '</td>'

                                stockhtml += '<td class="text-right">' + value.due_amount + '</td>'

                                stockhtml += '</tr>'

                            });

                            $("#pur_table").append(stockhtml);

                        }

                    });

                });



            });

        </script>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nescggna/public_html/mpos/resources/views/purchase/reports/allPurchaseReport.blade.php ENDPATH**/ ?>