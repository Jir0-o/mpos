<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php
        $banner_Information = \App\Models\BannerInformation::first();
    ?>
    <title><?php echo e($banner_Information->banner_name); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendors/css/vendor.bundle.base.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendors/font-awesome/css/font-awesome.min.css')); ?>" />
    <link rel="shortcut icon" href="<?php echo e($banner_Information->banner_logo); ?>" type="image/x-icon">

    <!--CSS files for data table-->
    <link type="text/css" rel="stylesheet"
        href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
    <link type="text/css" rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css" rel="stylesheet" crossorigin="anonymous">


    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/style.css')); ?>" />
</head>

<body>
    <div>
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <?php echo $__env->make('dashboard.pertials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="<?php echo e(asset('backend/assets/vendors/js/vendor.bundle.base.js')); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo e(asset('backend/assets/vendors/chart.js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/vendors/flot/jquery.flot.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/vendors/flot/jquery.flot.resize.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/vendors/flot/jquery.flot.categories.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/vendors/flot/jquery.flot.fillbetween.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/vendors/flot/jquery.flot.stack.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/vendors/flot/jquery.flot.pie.js')); ?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo e(asset('backend/assets/js/off-canvas.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/js/hoverable-collapse.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/js/misc.js')); ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo e(asset('backend/assets/js/dashboard.js')); ?>"></script>
    <!-- End custom js for this page -->

    <!--js files for data table-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    <script src="https://www.jqueryscript.net/demo/jQuery-Plugin-To-Print-Any-Part-Of-Your-Page-Print/jQuery.print.js"></script>
    <script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        //DataTable
        $(document).ready(function() {
            $('#example tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder="Search" />');
            });
            $('#example').DataTable(
                {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                    initComplete: function () {
                    // Apply the search
                    this.api()
                        .columns()
                        .every(function () {
                            var that = this;
                            $('input', this.footer()).on('keyup change clear', function () {
                                if (that.search() !== this.value) {
                                    that.search(this.value).draw();
                                }
                            });
                        });
                },
                }
            );
        });
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\mpos\resources\views/layouts/layout.blade.php ENDPATH**/ ?>