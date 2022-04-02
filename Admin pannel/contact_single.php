<!-- SINAGL PAGE DATA SHOW -->
<?php

include 'php/function.php';

if (!isset($_GET['contact'])) {
    header('location:contact_list.php');
} else {
    // check contact is from database
    $id = $_GET['contact'];
    $check_id = "SELECT id FROM contact WHERE id = $id";
    $query = mysqli_query($conn, $check_id);
    $result = mysqli_num_rows($query);

    // after get single contact run Sql query
    if ($result > 0) {

        $sql = "SELECT * FROM contact WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $message = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $message = $row;
        }
    } else {
        header('location:contact_list.php');
    }
}
?>
<!--END SINAGL PAGE DATA SHOW -->

<!--====================== START HTML =========================-->
<?php include_once 'assets/components/head_start.php' ?>
<!--================== END HTML META TAG ======================-->

<!-- third party css -->
<link href="assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<!-- third party css end -->

<!--====================== START BODY_END =========================-->
<?php include_once 'assets/components/head_end.php' ?>
<!--====================== END BODY_END ===========================-->

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
                <img src="assets/images/users/staff.png" alt="user-image" class="rounded-circle">
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
            <h4 class="page-title-main">Contact single</h4>
        </li>
    </ul>
    <div class="clearfix"></div>

</div>
<!-- end Topbar -->

<!--====================== START SIDEBAR ===========================-->
<?php include_once 'assets/components/sidebar.php' ?>
<!--======================= END SIDEBAR ============================-->

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
                                    Contact single page
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
                                <p class="text-muted font-13"><strong> Name : </strong><?php echo $message['name'] ?></p>
                                <p class="text-muted font-13"><strong> Email : </strong><?php echo $message['email'] ?></p>

                                <p class="text-muted font-13"><strong> Message : </strong> <?php echo $message['message'] ?></p>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#con-close-modal" class="btn btn-outline-primary mx-2 "><i class="fa-solid fa-reply"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Content-->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive" id="list_error">
                        <h4 class="mt-0 header-title">Previous contact list</h4>
                        <p class="text-muted font-14 mb-3">
                        </p>

                        <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody id="contact-list">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Content-->
    </div>
</div>
<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

<!--=================== START FOOTER ===============================-->
<?php include_once 'assets/components/footer.php' ?>
<!--===================== END FOOTER ===============================-->




<!--================INCLUDE HEAD START PHP=================-->
<?php include_once 'assets/components/modals.php' ?>
<!--================END INCLUDE HEAD END PHP=================-->

<!--======================== START MODALS ==========================-->
<?php include_once 'assets/components/modals.php' ?>
<!--======================== END MODALS ============================-->

<!-- fontawesome  -->
<script src="https://kit.fontawesome.com/76d2de9cd5.js" crossorigin="anonymous"></script>

<!--======================= START MAIN SCRIPT ==========================-->
<?php include_once 'assets/components/script_start.php' ?>
<!--====================== END  MAIN SCRIPT ============================-->

<!-- Vendor -->
<script>
    var contact_email = "<?php echo $message['email'] ?>";
</script>
<script src="assets/ajax/contact.js"></script>


<!-- third party js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<!-- third party js ends -->

<!-- Table editable init-->
<script src="assets/js/pages/tabledit.init.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

<!-- sweet alert -->
<script src="assets/ajax/sweetalert.js"></script>

<!--======================== START CLOSING HTML ==========================-->
<?php include_once 'assets/components/script_end.php' ?>
<!--======================== END CLOSING HTML ============================-->