<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Edit </title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo site_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href=" <?php echo site_url('assets/css/sb-admin-2.min.css') ?> " rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        echo $this->include('includes/sidebar.php')
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                echo $this->include('includes/topbar.php')
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <h1> Insert Product </h1>
                            <!-- Nested Row within Card Body -->
                            <div class="row" style="height: 600px;">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- === alert ===-->
                                            <?php if (session()->getFlashdata('msg')) : ?>
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    <?php echo session()->getFlashdata('msg'); ?>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                            <?php endif; ?>
                                            <!-- ====== -->

                                            <h5 class="card-title">Add Product Form</h5>

                                            <!-- No Labels Form -->
                                            <form class="row g-3" method="post" action="<?php echo site_url('/products/update/' . $product_id) ?>">
                                                <div class="col-md-12">
                                                    <input type="text" name="name" class="form-control" placeholder="Product Name" value="<?= $product ?>">
                                                </div> <br>

                                                <div class="col-md-6">
                                                    <select id="inputState" class="form-select" name="cat">
                                                        <option disabled selected>Category</option>
                                                        <option <?= ($category == "Car") ? "selected" : "" ?>>Car</option>
                                                        <option <?= ($category == "Bus") ? "selected" : "" ?>>Bus</option>
                                                        <option <?= ($category == "Truck") ? "selected" : "" ?>>Truck</option>
                                                    </select>
                                                </div> <br>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="Model" name="model" value="<?php echo $model ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="Price" name="price" value="<?php echo $price ?>">
                                                </div>

                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="SKU" name="sku" value="<?php echo $sku ?>">
                                                </div>

                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Edit</button>
                                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                                </div>
                                            </form><!-- End No Labels Form -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <?php
            echo $this->include('includes/footer');
            ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/chart-area-demo.js"></script>
    <script src="../assets/js/demo/chart-pie-demo.js"></script>


    <!-- Page level plugins -->
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo site_url('assets/js/demo/datatables-demo.js') ?> "></script>

</body>

</html>