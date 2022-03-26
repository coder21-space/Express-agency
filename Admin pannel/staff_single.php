<?php

// if (!isset($_GET['staff'])) {
//     header('location : staff.php');
// } else {
//     $id = $_GET['staff'];
//     $check_id = "select id from staff where id = $id";
//     $query = mysqli_query($conn, $check_id);
//     $result = mysqli_num_rows($query);

//     if ($result > 0) {
//         $sql = "select * from staff where id = $id";
//         $result = mysqli_query($conn, $sql);
//         $message = array();
//         while ($row = mysqli_fetch_assoc($result)) {
//             $message = $row;
//         }
//     } else {
//         header('location : staff.php');
//     }
// }



?>



<?php
include_once 'assets/components/header.php';

if (!isset($_GET['staff'])) {

    header('location:staff_list.php');
} else {
    // check contact is from database
    $id = $_GET['staff'];
    $check_id = "SELECT id FROM staff WHERE id = $id";
    $query = mysqli_query($conn, $check_id);
    $result = mysqli_num_rows($query);


    // after get single contact run Sql query
    if ($result > 0) {

        $sql = "SELECT * FROM staff WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $message = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $message = $row;
        }
    } else {
        header('location:staff_list.php');
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

<!--================INCLUDE HEAD START PHP=================-->

<?php $header_heading = 'Contact order single-list';

?>




<!--================END INCLUDE HEAD END PHP=================-->

<!--================INCLUDE HEAD START PHP=================-->
<?php include_once 'assets/components/sidebar.php' ?>
<!--================END INCLUDE HEAD END PHP=================-->


<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">
        <!-- end row -->

        <!-- end row -->
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="text-center card-body">
                        <div>
                            <img src="assets/images/users/teamwork.png" class="rounded-circle avatar-xl img-thumbnail mb-2" alt="profile-image">
                            <!-- 
                            <p class="text-muted font-13 mb-3">
                                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                            </p> -->

                            <div class="text-start">
                                <p class="text-muted font-13"><strong>Full Name :</strong><?php echo $message['name'] ?></p>
                                <p class="text-muted font-13"><strong>Mobile :</strong><?php echo $message['phone'] ?></p>

                                <p class="text-muted font-13"><strong>Email :</strong> <?php echo $message['email'] ?></p>

                                <p class="text-muted font-13"><strong>Location :</strong> <?php echo $message['address'] ?></p>
                            </div>

                        </div>
                    </div>
                </div>



                <!--================INCLUDE FOOTER PHP=================-->
                <?php include_once 'assets/components/footer.php' ?>
                <!--================END INCLUDE FOOTER PHP=================-->


            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <?php include_once 'assets/components/modals.php' ?>

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
        <!--================END INCLUDE HEAD END PHP=================--