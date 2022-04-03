<!--====================== START HTML =========================-->
<?php include_once 'assets/components/head_start.php' ?>
<!--================== END HTML META TAG ======================-->

<!-- third party css -->
<link href="assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<!-- third party css end -->

<!-- toastify  -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">


<!--====================== START BODY_END =========================-->
<?php include_once 'assets/components/head_end.php' ?>
<!--====================== END BODY_END ===========================-->

<!--====================== START HEADER ===========================-->
<?php $header_heading = 'Staff';
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
                        <div class="card-body" id="contact_error">

                            <h4 class="mt-0 header-title">Staff information</h4>
                            <p class="text-muted font-14 mb-3">

                            </p>
                            <a href="add_staff.php"><button type="button" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus-circle me-1"></i> Add data</button></a>
                            <div class="table-responsive">
                                <table class="table table-centered mb-0" id="inline-editable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Created_at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="contact">
                                    </tbody>
                                </table>
                            </div> <!-- end .table-responsive-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container -->
    </div> <!-- content -->
    <!-- content -->
</div>

<!--==============================================================-->
<!-- End Page content -->
<!-- ============================================================== -->

<!--=================== START FOOTER ===============================-->
<?php include_once 'assets/components/footer.php' ?>
<!--===================== END FOOTER ===============================-->

<!--update staff list Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title" id="myCenterModalLabel">Update staff list</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form id="insert-form">
                    <div class="mb-3">
                        <input type="hidden" id="id">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                        <span class="text-danger" id="name_error"></span>

                    </div>
                    <div class="mb-3">
                        <input type="hidden" id="id">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="name">
                        <span class="text-danger" id="email_error"></span>

                    </div>
                    <div class="mb-3">
                        <input type="hidden" id="id">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                        <span class="text-danger" id="phone_error"></span>
                    </div>


                    <button type="submit" class="btn btn-light waves-effect waves-light" id="update">update</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--======================== START MODALS ==========================-->
<?php include_once 'assets/components/modals.php' ?>
<!--======================== END MODALS ============================-->

<!-- fontawesome  -->
<script src="https://kit.fontawesome.com/76d2de9cd5.js" crossorigin="anonymous"></script>

<!-- toastify -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


<!--======================= START MAIN SCRIPT ==========================-->
<?php include_once 'assets/components/script_start.php' ?>
<!--====================== END  MAIN SCRIPT ============================-->

<!-- Vendor -->
<script src="assets/ajax/common.js"></script>
<script src="assets/ajax/staff.js"></script>

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