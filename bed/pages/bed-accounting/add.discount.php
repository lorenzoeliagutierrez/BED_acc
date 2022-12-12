<?php
require '../../includes/conn.php';
session_start();
ob_start();


require '../../includes/bed-session.php';
?>

<!DOCTYPE html>
<html lang="en">

<!-- Head and links -->

<head>
    <title>Add Discount | SFAC Bacoor</title>
    <?php include '../../includes/bed-head.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link disabled text-light">Add Discount</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link disabled text-light">Basic Education</a>
                </li>
            </ul>
            <?php include '../../includes/bed-navbar.php'; ?>

            <!-- sidebar menu -->
            <?php include '../../includes/bed-sidebar.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper pt-4">

                <section class="content">
                    <div class="container-fluid pl-5 pr-5 pb-3">
                        <div class="row justify-content-center mb-4">
                            <div class="col-md-8">
                                <div class="card card-purple shadow-lg">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Discount
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->

                                    <!-- form start -->

                                    <form action="userData/ctrl.addDiscount.php" method="POST">
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="input-group col-md-10 mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Discount Description</span>
                                                    </div>
                                                    <input type="text" class="form-control" name="discount_desc" id="discount_desc" placeholder="Discount Description">

                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="input-group col-md-4 mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text text-sm"><b>
                                                                Academic Year</b></span>
                                                    </div>
                                                    <select class="form-control custom-select select2 select2-purple"
                                                        data-dropdown-css-class="select2-purple"
                                                        data-placeholder="Select Year" name="ay">
                                                        <option selected disabled></option>
                                                        <?php
                                                        $query = mysqli_query($conn, "SELECT * FROM tbl_acadyears");
                                                            while($row = mysqli_fetch_array($query)) {
                                                                echo '<option value="'.$row['ay_id'].'">'.$row['academic_year'].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="input-group col-md-6 mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Discount</span>
                                                    </div>
                                                    <input type="text" class="form-control" name="discount" id="discount" placeholder="Discount Value">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <input type="checkbox" name="percent" value="1" aria-label="Checkbox for following text input">
                                                            <span class="text-sm" style="margin-left: 5px;"><b>  percent</b></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="form-group col-md-10 mb-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="1" name="discount_status">
                                                        <label class="form-check-label">Reflect only in form</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" name="submit" class="btn bg-purple"><i
                                                    class="fas fa-calendar-check m-1"> </i> Add Discount</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </section>
                <!-- Main content -->


            </div><!-- /.container-fluid -->

            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Footer and script -->
    <?php include '../../includes/bed-footer.php'; ?>




</body>

</html>