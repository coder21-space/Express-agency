
    <!--================INCLUDE HEAD START PHP=================-->
    <?php  include_once'assets/components/head_start.php' ?>
    <!--================END INCLUDE HEAD END PHP=================-->

        <link rel="shortcut icon" href="assets/images/favicon.ico">
       
       
	    
    <!--================INCLUDE HEAD START PHP=================-->
    <?php  include_once'assets/components/head_end.php' ?>
    <!--================END INCLUDE HEAD END PHP=================-->	
            
    <!--================INCLUDE HEAD START PHP=================-->
     
    <?php  $header_heading ='Contact details';
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
                                        <div class="row justify-content-between">
                                            <div class="col-md-4">
                                                <div class="mt-3 mt-md-0">
                                                    <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#custom-modal"><i class="mdi mdi-plus-circle me-1"></i> Add contact</button>
                                                </div>
                                            </div><!-- end col-->
                                            <div class="col-md-8">
                                                <form class="d-flex flex-wrap align-items-center justify-content-sm-end">
                                                    <label for="status-select" class="me-2">Sort By</label>
                                                    <div class="me-sm-2">
                                                        <select class="form-select my-1 my-md-0" id="status-select">
                                                            <option selected="">All</option>
                                                            <option value="1">Name</option>
                                                            <option value="2">Phone</option>
                                                            <option value="3">Emails</option>
                                                           
                                                        </select>
                                                    </div>
                                                    <label for="inputPassword2" class="visually-hidden">Search</label>
                                                  
                                                </form>
                                            </div>
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row -->        
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="text-center card-body">
                                        <div class="dropdown float-end">
                                            
                                           
                                        </div>
                                        <div>
                                            <img src="assets/images/users/user-1.jpg" class="rounded-circle avatar-xl img-thumbnail mb-2" alt="profile-image">
    
                                            <p class="text-muted font-13 mb-3">
                                                Hi I'm kaushal sahni,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                            </p>
    
                                            <div class="text-start">
                                                <p class="text-muted font-13"><strong>Full Name :</strong> <span class="ms-2">Kaushal sahni</span></p>
    
                                                <p class="text-muted font-13"><strong>Email :</strong><span class="ms-2">kaushal2132002@gmail.com</span></p>
    
                                                <p class="text-muted font-13"><strong>Phone :</strong> <span class="ms-2">7011432718</span></p>
    
                                               
                                            </div>
    
                                            <button type="button" class="btn btn-primary rounded-pill waves-effect waves-light">Send Message</button>
                                        </div>
                                    </div>
                                </div>                          
                        <!-- end row -->   
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h5 class="mt-0">Previous contact</h5>
                                        <p class="sub-header">Expres & Logistics all contact lists of kaushal sahni </p>
                                        <div class="table-responsive">
                                            <table class="table table-centered mb-0" id="inline-editable">                               
                            
                                            <table class="table table-centered mb-0" id="btn-editable">
                                                <thead>
                                                    <tr>
                                                        <th>S.no</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>phone</th>
                                                        <th>subject</th>
                                                        <th>created_at</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                            
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>kaushal</td>
                                                        <td>kaushal@gmail.com</td>
                                                        <td>7011432718</td>
                                                        <td>hello</td>
                                                        <td>2011/04/25</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>kaushal</td>
                                                        <td>kaushal@gmail.com</td>
                                                        <td>7011432718</td>
                                                        <td>hello</td>
                                                        <td>2011/04/25</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>kaushal</td>
                                                        <td>kaushal@gmail.com</td>
                                                        <td>7011432718</td>
                                                        <td>hello</td>
                                                        <td>2011/04/25</td>
                                                        
                                                    </tr>
                                                    
                                                    
                                                      
                                                </tbody>
                                            </table>
                                        </div> <!-- end .table-responsive-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

          <!--================INCLUDE FOOTER PHP=================-->
             <?php include_once'assets/components/footer.php'?>  
         <!--================END INCLUDE FOOTER PHP=================--> 


            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Modal -->
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


        <!-- Vendor -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>

         <!-- Table Editable plugin-->
         <script src="assets/libs/jquery-tabledit/jquery.tabledit.min.js"></script>

        <!-- Table editable init-->
       <script src="assets/js/pages/tabledit.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

<!--================INCLUDE HEAD START PHP=================-->
<?php  include_once'assets/components/script_end.php' ?>
    <!--================END INCLUDE HEAD END PHP=================--