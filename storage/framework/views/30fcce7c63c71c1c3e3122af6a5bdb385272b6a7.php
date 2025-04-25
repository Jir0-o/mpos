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
        <!---Start Edit--->

        <div class="main-panel">
          <div class="content-wrapper pb-0">

            <div class="content">
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                  <h1 class="card-title tabs-style mb-5">Supplie Payment(for due)</h1>

                                  <form class="forms-sample">

                                    <div class="row ">
                                        <div class="col-12 d-flex">
                                            <div class="col-md-2 mt-1 mb-4">
                                                <label for="exampleInputName1">Supplier:</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="form-select form-control" aria-label="Default select example">
                                                    <option selected>XYZ</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                  </select>

                                            </div>
                                        </div>

                                        <div class="col-12 d-flex">
                                            <div class="col-md-2 mt-1 mb-4">
                                                <label for="exampleInputName1">Invoice:</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="form-select form-control" aria-label="Default select example">
                                                    <option selected>XYZ</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                  </select>

                                            </div>
                                        </div>
                                        <div class="col-12 d-flex">
                                            <div class="col-md-2 mt-1 mb-4">
                                                <label for="exampleInputName1">Payable:</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="exampleInputPassword4" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex">
                                            <div class="col-md-2 mt-1 mb-4">
                                                <label for="exampleInputName1">Paid:</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="exampleInputPassword4" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex notes">
                                            <div class="col-md-2 mt-1 mb-4">
                                                <label for="exampleInputName1">Due:</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="exampleInputPassword4" placeholder="">
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <label for="exampleInputName1">Notes</label>
                                                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex">
                                            <div class="col-md-2 mt-1 mb-4">
                                                <label for="exampleInputName1">Payment Method:</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="form-select form-control" aria-label="Default select example">
                                                    <option selected>XYZ</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex">
                                            <div class="col-md-2 mt-1 mb-4">
                                                <label for="exampleInputName1">Bank:</label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-select form-control" aria-label="Default select example">
                                                    <option selected>XYZ</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                  </select>
                                            </div>
                                            <div class="col-md-2 mt-1">
                                                <label for="exampleInputEmail3">Cheque no:</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="exampleInputPassword4" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2 float-end"> Save </button>

                                  </form>
                                </div>
                              </div>
                        </div>
                    </div>
                  </div>
            </div>

          </div>

        </div>

        <!---End Edit--->

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ussbd\POSSIE\resources\views/purchase/paymentField.blade.php ENDPATH**/ ?>