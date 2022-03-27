<?php

include 'php/function.php';

if (!isset($_GET['customer'])) {
    header('location:customer_list.php');
} else {
    // check contact is from database
    $id = $_GET['customer'];
    $check_id = "SELECT id FROM customer WHERE id = $id";
    $query = mysqli_query($conn, $check_id);
    $result = mysqli_num_rows($query);

    // after get single contact run Sql query
    if ($result > 0) {

        $sql = "SELECT * FROM customer WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $message = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $message = $row;
        }
    } else {
        header('location:customer_list.php');
    }
}
?>

<!--================INCLUDE HEAD START PHP=================-->
<?php include_once 'assets/components/head_start.php' ?>
<!--================END INCLUDE HEAD END PHP=================-->

<link rel="shortcut icon" href="assets/images/favicon.ico">

<!--================INCLUDE HEAD START PHP=================-->
<?php include_once 'assets/components/head_end.php' ?>
<!--================END INCLUDE HEAD END PHP=================-->

<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-end mb-0">

        <li class="d-none d-lg-block">
            <form class="app-search">
                <div class="app-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." id="top-search">
                        <button class="btn input-group-text" type="submit">
                            <i class="fe-search"></i>
                        </button>
                    </div>
                    <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                    </div>
                </div>
            </form>
        </li>

        <li class="dropdown d-inline-block d-lg-none">
            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="fe-search noti-icon"></i>
            </a>
            <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                <form class="p-3">
                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                </form>
            </div>
        </li>

        <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ms-1">
                    <?php
                    echo $_SESSION['user']['user_name']
                    ?>
                    <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0"></h6>
                    <a href="php/logout.php" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>
                </div><!-- item-->
            </div>
        </li>
    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="index.html" class="logo logo-light text-center">
            <span class="logo-sm">
                <img src="assets/images/E-removebg-preview.png" alt="" height="100">
            </span>
            <span class="logo-lg">
                <img src="assets/images/E-removebg-preview.png" alt="" height="100">
            </span>
        </a>
        <a href="index.html" class="logo logo-dark text-center">
            <span class="logo-sm">
                <img src="assets/images/E-removebg-preview.png" alt="" height="30">
            </span>
            <span class="logo-lg">
                <img src="assets/images/E-removebg-preview.png" alt="" height="60">
            </span>
        </a>
    </div>


    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
        <li>
            <button class="button-menu-mobile disable-btn waves-effect">
                <i class="fe-menu"></i>
            </button>
        </li>

        <li>
            <h4 class="page-title-main"> customer single information </h4>
        </li>
    </ul>
    <div class="clearfix"></div>

</div>
<!-- end Topbar -->

<!--================INCLUDE HEAD START PHP=================-->
<?php include_once 'assets/components/sidebar.php' ?>
<!--================END INCLUDE HEAD END PHP=================-->

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <div class="col-md-4">
                                <div class="mt-3 mt-md-0">
                                    customer single page
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div>
                </div><!-- end card -->
            </div><!-- end col-->
        </div><!-- end row -->


        <!-- start row -->
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="text-center card-body">
                        <div>
                            <img src="assets/images/users/staff.png" class="rounded-circle avatar-xl img-thumbnail mb-2" alt="profile-image">

                            <div class="text-start">
                                <p class="text-muted font-13"><strong> Name :</strong><?php echo $message['name'] ?></p>
                                <p class="text-muted font-13"><strong>Address :</strong><?php echo $message['address'] ?></p>

                                <p class="text-muted font-13"><strong>City :</strong> <?php echo $message['city'] ?></p>

                                <p class="text-muted font-13"><strong>Pincode :</strong> <?php echo $message['pincode'] ?></p>

                                <p class="text-muted 
                                font-13"><strong>State :</strong> <?php echo $message['state'] ?></p>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- start row -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class=" card-body">
                                <ul class="nav nav-tabs nav-bordered">
                                    <li class="nav-item">
                                        <a href="#home-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            basic details
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#messages-b1" id="previous-tab" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            other details
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane" id="home-b1">
                                        <p class="text-muted font-13"><strong> Name :</strong><?php echo $message['name'] ?></p>
                                        <p class="text-muted font-13"><strong>Mobile :</strong><?php echo $message['phone'] ?></p>

                                        <p class="text-muted font-13"><strong>Email :</strong> <?php echo $message['email'] ?></p>

                                        <p class="text-muted font-13"><strong>Address :</strong> <?php echo $message['address'] ?></p>
                                    </div>

                                    <div class="tab-pane" id="messages-b1">
                                        no data

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================INCLUDE FOOTER PHP=================-->
            <?php include_once 'assets/components/footer.php' ?>
            <!--================END INCLUDE FOOTER PHP=================-->
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

<!--================INCLUDE HEAD START PHP=================-->
<?php include_once 'assets/components/modals.php' ?>
<!--================END INCLUDE HEAD END PHP=================-->

<script src="https://kit.fontawesome.com/76d2de9cd5.js" crossorigin="anonymous"></script>

<!-- Vendor -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>

<script src="assets/ajax/contact-data.js"></script>

<!-- Table Editable plugin-->
<script src="assets/libs/jquery-tabledit/jquery.tabledit.min.js"></script>

<!-- Table editable init-->
<script src="assets/js/pages/tabledit.init.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

<!--================INCLUDE HEAD START PHP=================-->
<?php include_once 'assets/components/script_end.php' ?>
<!--================END INCLUDE HEAD END PHP=================-->