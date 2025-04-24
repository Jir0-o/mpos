<?php
    $banner = \App\Models\BannerInformation::first();
?>
<html>

<head>
    <title>Invoice</title>
    <style>
        @media  print {

            @page  {
                size: portrait;
                /* auto is the initial value */
                margin: 0;
                /* this affects the margin in the printer settings */
            }

            html {
                background-color: #FFFFFF;
                margin: 0;
                /* this affects the margin on the html before sending to printer */
            }

            body {
                margin: 0 10mm;
                /* margin you want for the content */
            }
        }

        .wrapper {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            grid-auto-rows: minmax(100px, auto);
        }

        .one {
            grid-row-start: 1;
            grid-row-end: 1;
            grid-column-start: 2;
            grid-column-end: 4;
        }

        .two {
            grid-row-start: 1;
            grid-row-end: 1;
            grid-column-start: 1;
            grid-column-end: 2;
        }

        .dotted {
            border: none;
            border-top: 1px dotted #000000;
            height: 1px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div id="print" xmlns:margin-top="http://www.w3.org/1999/xhtml">
        
        <div style="text-align: center;">
            <img height="100px" src="<?php echo e(asset('backend/thechef.jpg')); ?>" alt="Restaurant Image">
        </div>
        <table style="margin-top: 10px;">
            <tr>
                <td>
                    Address
                </td>
                <td>
                    <?php echo e($banner->banner_address); ?>

                </td>
            </tr>
            <tr>
                <td>
                    Phone
                </td>
                <td>
                    <?php echo e($banner->banner_mobile); ?>

                </td>
            </tr>
        </table>
        <hr>
        <table style="margin-top: 10px;">
            <tr>
                <td>
                    Order No :
                </td>
                <td>
                    IN#0000<?php echo e($CartInformtion->cart_id); ?>

                </td>
            </tr>
            <tr>
                <td>
                    Date :
                </td>
                <td>
                    <?php echo e($CartInformtion->cart_date); ?>

                </td>
            </tr>
            <tr>
                <td>
                    Table :
                </td>
                <td>
                    <?php echo e($CartInformtion->table_no); ?>

                </td>
            </tr>
        </table>
        <hr>
        <?php $i = 1; ?>
        <table style="margin-top: 10px;">
            <tr>
                <th style="padding-right:10px;">
                    SL
                </th>
                <th style="padding-left:10px; padding-right:10px;">
                    Item
                </th>
                <th style="padding-left:10px; padding-right:10px;">
                    Qty
                </th>
                <th style="padding-left:10px; padding-right:10px;">
                    Amount
                </th>
            </tr>
            <?php $__currentLoopData = $CartInformtionForPrint; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td style="padding-right:10px;">
                        <?php echo e($i++); ?>

                    </td>
                    <td style="padding-left:10px; padding-right:10px;">
                        <?php echo e($item->product_name); ?>

                    </td>
                    <td style="padding-left:10px; padding-right:10px;text-align:right">
                        <?php echo e($item->quantity); ?> X <?php echo e($item->sales_price); ?>

                    </td>
                    <td style="padding-left:10px; padding-right:10px;text-align:right">
                        <?php echo e($item->sales_price*$item->quantity); ?>

                    </td>
                </tr>
                <!--tr>
                    <td style="padding-right:10px;">

                    </td>
                    <td style="padding-left:10px; padding-right:10px;">

                    </td>
                    <td style="padding-left:10px; padding-right:10px;">
                        Vat
                    </td>
                    <td style="padding-left:10px; padding-right:10px;">
                        <?php echo e($item->vat); ?>

                    </td>
                </tr-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!--tr>
                <td style="padding-right:10px;">

                </td>
                <td style="padding-left:10px; padding-right:10px;">

                </td>
                <td style="padding-left:10px; padding-right:10px;">
                    Subtotal
                </td>
                <td style="padding-left:10px; padding-right:10px;">
                    <?php echo e($item->total_cart_amount); ?>

                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>

                </td>
                <td style="padding-left:10px; padding-right:10px;">
                    Vat Total
                </td>
                <td style="padding-left:10px; padding-right:10px;">
                    <?php echo e($item->vat_amount); ?>

                </td>
            </tr-->
            <tr>
                <td style="padding-right:10px;">

                </td>
                <td style="padding-left:10px; padding-right:10px;">

                </td>
                <td style="padding-left:10px; padding-right:10px;">
                    Grand Total
                </td>
                <td style="padding-left:10px; padding-right:10px;text-align:right">
                    <?php echo e($item->total_cart_amount + $item->vat_amount); ?>

                </td>
            </tr>
            <tr>
                <td style="padding-right:10px;">

                </td>
                <td style="padding-left:10px; padding-right:10px;">

                </td>
                <td style="padding-left:10px; padding-right:10px;">
                    Discount
                </td>
                <td style="padding-left:10px; padding-right:10px;text-align:right">
                    <?php echo e($item->total_discount); ?>

                </td>
            </tr>
            <tr>
                <td style="padding-right:10px;">

                </td>
                <td style="padding-left:10px; padding-right:10px;">

                </td>
                <td style="padding-left:10px; padding-right:10px;">
                    Payble
                </td>
                <td style="padding-left:10px; padding-right:10px;text-align:right">
                    <?php echo e($item->total_payable_amount); ?>

                </td>
            </tr>

        </table>

        <div class="dotted">

        </div>
        <div style="text-align: center;">We are happy to serve you</div>
        <hr>
        <div style="text-align: center;">Powered by Unicorn Software and Solutions Ltd.</div>
    </div>


    <script>
        window.print();
    </script>
</body>

</html>
<?php /**PATH /home/nescggna/public_html/rpos/resources/views/sales/print/printInvoice.blade.php ENDPATH**/ ?>