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

<?php $header_heading = 'customer list';
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

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body" id="contact_error">

                            <h5 class="mt-0">customer information</h5>

                            <p class="sub-header"></p>
                            <a href="add_customer.php"><button type="button" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus-circle me-1"></i> Add new customer</button></a>
                            <div class="table-responsive">
                                <table class="table table-centered mb-0" id="inline-editable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>phone</th>
                                            <th>created_at</th>
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

    <!-- Footer Start -->

    <!--================INCLUDE FOOTER PHP=================-->
    <?php include_once 'assets/components/footer.php' ?>
    <!--================END INCLUDE FOOTER PHP=================-->
</div>



<!-- Modal -->
<div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title" id="myCenterModalLabel">Add
                    customer</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <form id="insert-form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                        <span class="text-danger" id="name_error"></span>

                    </div>

                    <button type="submit" class="btn btn-light waves-effect waves-light" id="submit">Save</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title" id="myCenterModalLabel">Add
                    customer</h4>
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

                    <button type="submit" class="btn btn-light waves-effect waves-light" id="update">update</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Danger Alert Modal -->
<div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content modal-filled bg-danger">
            <div class="modal-body">
                <div class="text-center">
                    <i class="dripicons-wrong h1 text-white"></i>
                    <input type="hidden" id="contact_delete">
                    <h4 class="mt-2 text-white">This action is dangerous</h4>

                    <p class="mt-3 text-white"> Delete Message
                        Locate the conversation that has the message you want to delete then tap on it. Touch and hold
                        the message you want to delete</p>

                    <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary my-2" data-bs-dismiss="modal" id="delete">Delete</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
</div>

<script src="https://kit.fontawesome.com/76d2de9cd5.js" crossorigin="anonymous"></script>
<!-- Vendor -->

<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/ajax/common.js"></script>
<script src="assets/ajax/customer.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>



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