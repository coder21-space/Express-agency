﻿
    <!--================INCLUDE HEAD START PHP=================-->
       <?php  include_once'assets/components/head_start.php' ?>
    <!--================END INCLUDE HEAD END PHP=================-->

        <link rel="shortcut icon" href="assets/images/favicon.ico">
       
        <!-- third party css -->
        <link href="assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css">
        <link href="assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css">
        <link href="assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css">
        <link href="assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css">
        <!-- third party css end -->

	    
    <!--================INCLUDE HEAD START PHP=================-->
    <?php  include_once'assets/components/head_end.php' ?>
    <!--================END INCLUDE HEAD END PHP=================-->	
            
    <!--================INCLUDE HEAD START PHP=================-->
     
    <?php  $header_heading ='Datatable';
     include_once'assets/components/header.php';
    ?>
    <!--================END INCLUDE HEAD END PHP=================-->

    <!--================INCLUDE HEAD START PHP=================-->
    <?php  include_once'assets/components/sidebar.php'?>
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
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">DATA TABLE</h4>
                                        <p class="text-muted font-14 mb-3">
                                            The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                                        </p>
    
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th><button type="button" class="btn btn-outline-success"><i class="fa-solid fa-envelope  "></i></button><button  type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-outline-primary mx-2 "><i class="fa-solid fa-reply"></i></button><button type="button" data-bs-toggle="modal" data-bs-target="#danger-alert-modal" class="btn btn-outline-danger "><i class="fa-solid fa-trash-can"></i></button></th>
                                                
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                           
                                            <tr>
                                                <td>Kaushal</td>
                                                <td>Software engineer</td>
                                                <td>Delhi</td>
                                                <td>18</td>
                                                <td>2022/04/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Ronak</td>
                                                <td>Software engineer</td>
                                                <td>Tokyo</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Lokesh</td>
                                                <td>Software engineer</td>
                                                <td>Ukrain</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kaushal</td>
                                                <td>Software engineer</td>
                                                <td>Delhi</td>
                                                <td>18</td>
                                                <td>2022/04/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Ronak</td>
                                                <td>Software engineer</td>
                                                <td>Tokyo</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Lokesh</td>
                                                <td>Software engineer</td>
                                                <td>Ukrain</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kaushal</td>
                                                <td>Software engineer</td>
                                                <td>Delhi</td>
                                                <td>18</td>
                                                <td>2022/04/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Ronak</td>
                                                <td>Software engineer</td>
                                                <td>Tokyo</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Lokesh</td>
                                                <td>Software engineer</td>
                                                <td>Ukrain</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kaushal</td>
                                                <td>Software engineer</td>
                                                <td>Delhi</td>
                                                <td>18</td>
                                                <td>2022/04/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Ronak</td>
                                                <td>Software engineer</td>
                                                <td>Tokyo</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Lokesh</td>
                                                <td>Software engineer</td>
                                                <td>Ukrain</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kaushal</td>
                                                <td>Software engineer</td>
                                                <td>Delhi</td>
                                                <td>18</td>
                                                <td>2022/04/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Ronak</td>
                                                <td>Software engineer</td>
                                                <td>Tokyo</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Lokesh</td>
                                                <td>Software engineer</td>
                                                <td>Ukrain</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kaushal</td>
                                                <td>Software engineer</td>
                                                <td>Delhi</td>
                                                <td>18</td>
                                                <td>2022/04/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Ronak</td>
                                                <td>Software engineer</td>
                                                <td>Tokyo</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Lokesh</td>
                                                <td>Software engineer</td>
                                                <td>Ukrain</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kaushal</td>
                                                <td>Software engineer</td>
                                                <td>Delhi</td>
                                                <td>18</td>
                                                <td>2022/04/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Ronak</td>
                                                <td>Software engineer</td>
                                                <td>Tokyo</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Lokesh</td>
                                                <td>Software engineer</td>
                                                <td>Ukrain</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kaushal</td>
                                                <td>Software engineer</td>
                                                <td>Delhi</td>
                                                <td>18</td>
                                                <td>2022/04/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Ronak</td>
                                                <td>Software engineer</td>
                                                <td>Tokyo</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Lokesh</td>
                                                <td>Software engineer</td>
                                                <td>Ukrain</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kaushal</td>
                                                <td>Software engineer</td>
                                                <td>Delhi</td>
                                                <td>18</td>
                                                <td>2022/04/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Ronak</td>
                                                <td>Software engineer</td>
                                                <td>Tokyo</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Lokesh</td>
                                                <td>Software engineer</td>
                                                <td>Ukrain</td>
                                                <td>18</td>
                                                <td>2022/07/25</td>
                                                <td></td>
                                            </tr>
                                           

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <!-- end row -->


                <!-- Footer Start -->
           <!--================INCLUDE FOOTER PHP=================-->
           <?php include_once'assets/components/footer.php'?>  
         <!--================END INCLUDE FOOTER PHP=================--> 

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
           

                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                        tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Understood</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->



                            
                                        <!-- Danger Alert Modal -->
                                        <div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content modal-filled bg-danger">
                                                    <div class="modal-body">
                                                        <div class="text-center">
                                                            <i class="dripicons-wrong h1 text-white"></i>
                                                            <h4 class="mt-2 text-white">Oh snap!</h4>
                                                            <p class="mt-3 text-white">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                            <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
        
        <script src="https://kit.fontawesome.com/76d2de9cd5.js" crossorigin="anonymous"></script>

        <!-- Vendor -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
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
   
    <!--================INCLUDE HEAD START PHP=================-->
    <?php  include_once'assets/components/script_end.php' ?>
    <!--================END INCLUDE HEAD END PHP=================--