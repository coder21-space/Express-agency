
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
     
    <?php  $header_heading ='Contact us';
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
                                        <h4 class="mt-0 header-title">Contact lists</h4>
                                        <p class="text-muted font-14 mb-3">
                                        express & Logistics Email lists are segmented into a number of fields and offer a variety of selects including:
                                        </p>
    
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                                            <thead>
                                            <tr>
                                                <th>S.no</th>
                                                <th>Name </th>
                                                <th>E-mail</th>
                                                <th>Phone</th>
                                                <th>Subject</th>
                                                <th><button type="button" 
                                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                class="btn btn-outline-success"><i class="fa-solid fa-envelope  "></i></button><button  type="button"  class="btn btn-outline-primary mx-2 "><i class="fa-solid fa-pen-to-square"></i></button><button type="button" data-bs-toggle="modal" data-bs-target="#danger-alert-modal" class="btn btn-outline-danger "><i class="fa-solid fa-trash-can"></i></button></th>
                                                
                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                           
                                            <tr>
                                                <td>1</td>
                                                <td><a href="contactdetails.php">kaushal</a></td>
                                                <td>kaushal@gmail.com</td>
                                                <td>7011432718</td>
                                                <td>hi</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>ronak</td>
                                                <td>ronak2002@gmail.com</td>
                                                <td>3456789212</td>
                                                <td>vimal</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>lokesh</td>
                                                <td>LK@gmail.com</td>
                                                <td>7011439034</td>
                                                <td>i am lokesh</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                               
                                                <td>4</td>
                                                <td>rahul</td>
                                                <td>rk123@gmail.com</td>
                                                <td>7023459843</td>
                                                <td>good ui</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Kaushal</td>
                                                <td>kaushal@gmail.com</td>
                                                <td>7011432718</td>
                                                <td>hi</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>ronak</td>
                                                <td>ronak2002@gmail.com</td>
                                                <td>3456789212</td>
                                                <td>vimal</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>lokesh</td>
                                                <td>LK@gmail.com</td>
                                                <td>7011439034</td>
                                                <td>i am lokesh</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                               
                                                <td>8</td>
                                                <td>rahul</td>
                                                <td>rk123@gmail.com</td>
                                                <td>7023459843</td>
                                                <td>hello</td>
                                                <td></td>
                                            </tr>
                                           

                                            <tr>
                                                <td>9</td>
                                                <td>Kaushal</td>
                                                <td>kaushal@gmail.com</td>
                                                <td>7011432718</td>
                                                <td>hi</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>ronak</td>
                                                <td>ronak2002@gmail.com</td>
                                                <td>3456789212</td>
                                                <td>vimal</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>lokesh</td>
                                                <td>LK@gmail.com</td>
                                                <td>7011439034</td>
                                                <td>i am lokesh</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                               
                                                <td>12</td>
                                                <td>rahul</td>
                                                <td>rk123@gmail.com</td>
                                                <td>7023459843</td>
                                                <td>hello</td>
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
                                                        <h5 class="modal-title" id="staticBackdropLabel">MESSAGE</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    Responsible for setting environment, packaging, and deploying code on Staging, Pre-production, and Live, along with System, Regression, and UAT Testing, Support for LIVE P1-P2 bugs in the existing system, with SLA of 4 hours.
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
                                                            <h4 class="mt-2 text-white">This action is dangerous</h4>
                                                            <p class="mt-3 text-white"> Delete Message
Locate the conversation that has the message you want to delete then tap on it. Touch and hold the message you want to delete</p>
                                                            <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">DELETE</button>
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

         <!-- Table Editable plugin-->
         <script src="assets/libs/jquery-tabledit/jquery.tabledit.min.js"></script>



        <!-- Datatables init -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
   
    <!--================INCLUDE HEAD START PHP=================-->
    <?php  include_once'assets/components/script_end.php' ?>
    <!--================END INCLUDE HEAD END PHP=================--