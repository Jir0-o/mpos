<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>YOS ADMIN</title>
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendors/css/vendor.bundle.base.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendors/font-awesome/css/font-awesome.min.css')); ?>" />

    <!--CSS files for data table-->
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
    <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/style.css')); ?>" />

  </head>
  <body>
    <div>
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script> 
    
    <script>
        CKEDITOR.replace( 'ck_editor' );
    </script>
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
    </script>
       <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
       <script type='text/javascript'>
           $(document).ready(function(){
        
              // Department Change
              $('#delivery_agency_id').change(function(){
        
                 // Department id
                 var id = $(this).val();
                 // Empty the dropdown
                 $('#delivery_agent_id').find('option').not(':first').remove();
        
                 // AJAX request 
                 $.ajax({
                   url: 'getAgent/'+id,
                   type: 'get',
                   dataType: 'json',
                   success: function(response){
                     var len = 0;
                     if(response['data'] != null){
                        len = response['data'].length;
                     }
        
                     if(len > 0){
                        // Read data and create <option >
                        for(var i=0; i<len; i++){
        
                           var delivery_agent_id = response['data'][i].delivery_agent_id;
                           var delivery_agent_name = response['data'][i].delivery_agent_name;
        
                           var option = "<option value='"+delivery_agent_id+"'>"+delivery_agent_name+"</option>";
        
                           $("#delivery_agent_id").append(option); 
                        }
                     }
        
                   }
                 });
              });
           });
       </script>
       <script>
           $(function () {
                $('.genealogy-tree ul').hide();
                $('.genealogy-tree>ul').show();
                $('.genealogy-tree ul.active').show();
                $('.genealogy-tree li').on('click', function (e) {
                    var children = $(this).find('> ul');
                    if (children.is(":visible")) children.hide('fast').removeClass('active');
                    else children.show('fast').addClass('active');
                    e.stopPropagation();
                });
            });
       </script>
  </body>
</html><?php /**PATH /home/onlioxoq/public_html/backofficel/resources/views/layouts/layout.blade.php ENDPATH**/ ?>