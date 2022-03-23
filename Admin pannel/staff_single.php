<!--================INCLUDE HEAD START PHP=================-->
<?php include_once 'assets/components/head_start.php' ?>
<!--================END INCLUDE HEAD END PHP=================-->

<link rel="shortcut icon" href="assets/images/favicon.ico">



<!--================INCLUDE HEAD START PHP=================-->
<?php include_once 'assets/components/head_end.php' ?>
<!--================END INCLUDE HEAD END PHP=================-->

<!--================INCLUDE HEAD START PHP=================-->

<?php $header_heading = 'Contact order single-list';
include_once 'assets/components/header.php'; ?>



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

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">single customer order</h4>
                       <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">



                                        <div class="table-responsive">
                                            <table class="table table-centered mb-0" id="inline-editable">

                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Customer_id</th>
                                                        <th>Source_add</th>
                                                        <th>destination_add</th>
                                                        <th>st_date</th>
                                                        <th>end_date</th>
                                                        <th>vehical_id</th>
                                                        <th>pay_id</th>
                                                        <th>staus</th>
                                                        <th>created_at</th>

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
                    </div>
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->

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