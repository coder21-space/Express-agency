    <!--================INCLUDE HEAD START PHP=================-->
    <?php  include_once'assets/components/head_start.php' ?>
    <!--================END INCLUDE HEAD END PHP=================-->
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- App css -->

		<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

		<!-- icons -->
		<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="text-center">
                            <a href="index.html">
                                <img src="assets/images/E-removebg-preview.png" alt="" height="100" class="mx-auto">
                            </a>
                            <p class="text-muted mt-2 mb-4">Register your details</p>
                        </div>
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0">Register</h4>
                                </div>

                                <form action="#" id="register">

                                    <div class="mb-3">
                                        <label for="fullname" class="form-label"> Name</label>
                                        <input class="form-control" type="text" id="name" placeholder="Enter your name"  name="name"><span class="text-danger" id="name_error"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" type="email" id="email"  placeholder="Enter your email" name="email">
                                        <span class="text-danger" id="email_error"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input class="form-control" type="password" id="password" placeholder="Enter your password" name="password">
                                        <span class="text-danger" id="password_error"></span>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                            <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="mb-3 text-center d-grid">
                                        <button class="btn btn-primary" type="submit" name="submit"> Sign Up </button>
                                        <div id="loader"  class="spinner-grow text-danger "  role="status">
                                            <span class="visually-hidden "  >Loading...</span>
                                          </div>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Already have account?  <a href="pages-login.html" class="text-dark ms-1"><b>Sign In</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/ajax/common.js"></script>
        <script src="assets/ajax/sweetalert.js"></script>
        <script src="assets/ajax/register.js"></script>


        
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
 
    <!--================INCLUDE HEAD START PHP=================-->
    <?php  include_once'assets/components/script_end.php' ?>
    <!--================END INCLUDE HEAD END PHP=================-->
    
   