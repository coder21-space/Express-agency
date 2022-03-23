<!--================INCLUDE HEAD START PHP=================-->
<?php include_once 'assets/components/head_start.php' ?>
<!--================END INCLUDE HEAD END PHP=================-->
<!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico" />

<!-- third party css -->
<link href="assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<!-- third party css end -->
<!--================INCLUDE HEAD START PHP=================-->
<?php include_once 'assets/components/head_end.php' ?>
<!--================END INCLUDE HEAD END PHP=================-->

<!--================INCLUDE HEAD START PHP=================-->

<?php $header_heading = 'staff list';
include_once 'assets/components/header.php';
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

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-light">
                            <h4 class="modal-title" id="myCenterModalLabel">Add Contact</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                                </div>
                                <div class="mb-3">
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" class="form-control" id="position" placeholder="Enter position">
                                </div>
                                <div class="mb-3">
                                    <label for="company" class="form-label">Company</label>
                                    <input type="text" class="form-control" id="company" placeholder="Enter company">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>

                                <button type="submit" class="btn btn-light waves-effect waves-light">Save</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

        </div> <!-- container -->

    </div> <!-- content -->

    <!-- content -->

    <!-- Footer Start -->
    <!--================INCLUDE FOOTER PHP=================-->
    <?php include_once 'assets/components/footer.php' ?>
    <!--================END INCLUDE FOOTER PHP=================-->
</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
</div>

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

<!-- third party js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="assets/js/pages/datatables.init.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

<script src="assets/ajax/sweetalert.js"></script>

<!--================INCLUDE FOOTER PHP=================-->
<?php include_once 'assets/components/script_end.php' ?>
<!--================END INCLUDE FOOTER PHP=================-->