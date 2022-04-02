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

<!--====================== START HEADER ===========================-->
<?php $header_heading = 'Contact us';
include_once 'assets/components/header.php';
?>
<!--======================= END HEADER ============================-->

<!--====================== START SIDEBAR ===========================-->
<?php include_once 'assets/components/sidebar.php' ?>
<!--======================= END SIDEBAR ============================-->

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive" id="list_error">
                            <h4 class="mt-0 header-title">CONTACT LISTS</h4>
                            <p class="text-muted font-14 mb-3"></p>

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
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

<!--=================== START FOOTER ===============================-->
<?php include_once 'assets/components/footer.php' ?>
<!--===================== END FOOTER ===============================-->

<!--======================== START MODALS ==========================-->
<?php include_once 'assets/components/modals.php' ?>
<!--======================== END MODALS ============================-->

<!-- fontawesome  -->
<script src="https://kit.fontawesome.com/76d2de9cd5.js" crossorigin="anonymous"></script>

<!--======================== START MAIN SCRIPT ==========================-->
<?php include_once 'assets/components/script_start.php' ?>
<!--======================== END  MAIN SCRIPT ============================-->
<!-- Vendor -->
<script src="assets/ajax/common.js"></script>
<script src="assets/ajax/contact.js"></script>

<!-- third party js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="assets/js/pages/datatables.init.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

<script>
    $(document).ready(function() {});
</script>
<!-- sweet alert -->
<script src="assets/ajax/sweetalert.js"></script>


<!--======================== START CLOSING HTML ==========================-->
<?php include_once 'assets/components/script_end.php' ?>
<!--======================== END CLOSING HTML ============================-->