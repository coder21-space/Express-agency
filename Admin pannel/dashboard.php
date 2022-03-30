<!--================INCLUDE HEAD START PHP=================-->
<?php include_once 'assets/components/head_start.php' ?>
<!--================END INCLUDE HEAD END PHP=================-->
<!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico">


<!--================INCLUDE HEAD START PHP=================-->
<?php include_once 'assets/components/head_end.php' ?>
<!--================END INCLUDE HEAD END PHP=================-->




<!--================INCLUDE HEAD START PHP=================-->

<?php $header_heading = 'Dashboard';
include_once 'assets/components/header.php';
?>
<!--================END INCLUDE HEAD END PHP=================-->

<!--================INCLUDE HEAD START PHP=================-->
<?php include_once 'assets/components/sidebar.php' ?>
<!--================END INCLUDE HEAD END PHP=================-->


<!-- ================================================== -->
<!-- End Page content -->
<!-- ================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">


                            <h4 class="header-title mt-0 mb-4">Total Revenue</h4>

                            <div class="widget-chart-1">
                                <div class="widget-chart-box-1 float-start" dir="ltr">
                                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#f05050 " data-bgColor="#F9B9B9" value="58" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                </div>

                                <div class="widget-detail-1 text-end">
                                    <h2 class="fw-normal pt-2 mb-1"> 256 </h2>
                                    <p class="text-muted mb-1">Revenue today</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">


                            <h4 class="header-title mt-0 mb-3">Sales Analytics</h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-end">
                                    <span class="badge bg-success rounded-pill float-start mt-3">32% <i class="mdi mdi-trending-up"></i> </span>
                                    <h2 class="fw-normal mb-1"> 8451 </h2>
                                    <p class="text-muted mb-3">Revenue today</p>
                                </div>
                                <div class="progress progress-bar-alt-success progress-sm">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                        <span class="visually-hidden">77% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">


                            <h4 class="header-title mt-0 mb-4">Statistics</h4>

                            <div class="widget-chart-1">
                                <div class="widget-chart-box-1 float-start" dir="ltr">
                                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#ffbd4a" data-bgColor="#FFE6BA" value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                </div>
                                <div class="widget-detail-1 text-end">
                                    <h2 class="fw-normal pt-2 mb-1"> 4569 </h2>
                                    <p class="text-muted mb-1">Revenue today</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">


                            <h4 class="header-title mt-0 mb-3">Daily Sales</h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-end">
                                    <span class="badge bg-pink rounded-pill float-start mt-3">32% <i class="mdi mdi-trending-up"></i> </span>
                                    <h2 class="fw-normal mb-1"> 158 </h2>
                                    <p class="text-muted mb-3">Revenue today</p>
                                </div>
                                <div class="progress progress-bar-alt-pink progress-sm">
                                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                        <span class="visually-hidden">77% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- end col -->

            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">


                            <h4 class="header-title mt-0">Daily Sales</h4>

                            <div class="widget-chart text-center">
                                <div id="morris-donut-example" dir="ltr" style="height: 245px;" class="morris-chart"></div>
                                <ul class="list-inline chart-detail-list mb-0">
                                    <li class="list-inline-item">
                                        <h5 style="color: #ff8acc;"><i class="fa fa-circle me-1"></i>Series A</h5>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 style="color: #5b69bc;"><i class="fa fa-circle me-1"></i>Series B</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title mt-0">Statistics</h4>
                            <div id="morris-bar-example" dir="ltr" style="height: 280px;" class="morris-chart"></div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title mt-0">Total Revenue</h4>
                            <div id="morris-line-example" dir="ltr" style="height: 280px;" class="morris-chart"></div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->



            <!-- Footer Start -->
            <!--================INCLUDE FOOTER PHP=================-->
            <?php include_once 'assets/components/footer.php' ?>
            <!--================END INCLUDE FOOTER PHP=================-->

            <!-- ================================================== -->
            <!-- End Page content -->
            <!-- ================================================== -->

            <!-- Vendor -->
            <script src="assets/libs/jquery/jquery.min.js"></script>
            <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/libs/simplebar/simplebar.min.js"></script>
            <script src="assets/libs/node-waves/waves.min.js"></script>
            <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
            <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
            <script src="assets/libs/feather-icons/feather.min.js"></script>

            <!-- knob plugin -->
            <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

            <!--Morris Chart-->
            <script src="assets/libs/morris.js06/morris.min.js"></script>
            <script src="assets/libs/raphael/raphael.min.js"></script>

            <!-- Dashboar init js-->
            <script src="assets/js/pages/dashboard.init.js"></script>

            <!-- App js-->
            <script src="assets/js/app.min.js"></script>

            <!--================INCLUDE HEAD START PHP=================-->
            <?php include_once 'assets/components/script_end.php' ?>
            <!--================END INCLUDE HEAD END PHP=================--