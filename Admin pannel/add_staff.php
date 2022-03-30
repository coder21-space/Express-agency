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
<link href="assets/css/wizard.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

<!-- third party css end -->
<!--================INCLUDE HEAD START PHP=================-->
<?php include_once 'assets/components/head_end.php' ?>
<!--================END INCLUDE HEAD END PHP=================-->

<!--================INCLUDE HEAD START PHP=================-->

<?php $header_heading = 'staff type';
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
            <div class="row no-gutters">

                <div class="col-lg-12 col-md-12">
                    <div class="form-wizard">
                        <form role="form" id="staff_form">
                            <div class="form-wizard-header">
                                <p>Fill all form field to go next step</p>
                                <ul class="list-unstyled form-wizard-steps clearfix">
                                    <li class="active"><span>1</span></li>
                                    <li><span>2</span></li>

                                    <li><span>3</span></li>
                                </ul>
                            </div>
                            <fieldset class="wizard-fieldset show">
                                <h5>Fill User Registration</h5>

                                <div class="form-group">
                                    <input type="text" class="form-control wizard-required" name="username" id="username">
                                    <label for="fname" class="wizard-form-text-label">user Name*</label>
                                    <div class="wizard-form-error" id="user_error"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control wizard-required" name="email" id="email">
                                    <label for="lname" class="wizard-form-text-label">Email*</label>
                                    <div class="wizard-form-error" id="email_error"></div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control wizard-required" name="password" id="password">
                                    <label for="zcode" class="wizard-form-text-label">Password*</label>
                                    <div class="wizard-form-error" id="password_error"></div>
                                    <div class="form-group clearfix">
                                        <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                    </div>
                            </fieldset>
                            <fieldset class="wizard-fieldset">
                                <h5>Fill Staff Information</h5>
                                <div class="form-group">
                                    <input type="text" class="form-control wizard-required" name="name" id="name">
                                    <label for="email" class="wizard-form-text-label">Name</label>
                                    <div class="wizard-form-error" id="name_error"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control wizard-required" name="e_mail" id="e_mail">
                                    <label for="username" class="wizard-form-text-label">E-mail</label>
                                    <div class="wizard-form-error" id="e_mail_error"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control wizard-required" name="phone" id="phone">
                                    <label for="pwd" class="wizard-form-text-label">Phone Number</label>
                                    <div class="wizard-form-error" id="phone_error"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control wizard-required" name="address" id="address">
                                    <label for="username" class="wizard-form-text-label">Address</label>
                                    <div class="wizard-form-error" id="address_error"></div>
                                </div>

                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                </div>
                            </fieldset>

                            <fieldset class="wizard-fieldset">
                                <h5>Fill Staff Information</h5>
                                <div class="form-group">
                                    <input type="text" class="form-control wizard-required" name="city" id="city">
                                    <label for="username" class="wizard-form-text-label">City</label>
                                    <div class="wizard-form-error" id="city_error"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control wizard-required" name="pincode" id="pincode">
                                    <label for="email" class="wizard-form-text-label">Pincode</label>
                                    <div class="wizard-form-error" id="pincode_error"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control wizard-required" name="state" id="state">
                                    <label for="username" class="wizard-form-text-label">State</label>
                                    <div class="wizard-form-error" id="state_error"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control wizard-required" name="salary" id="salary">
                                    <label for="pwd" class="wizard-form-text-label">Salary</label>
                                    <div class="wizard-form-error" id="salary_error"></div>
                                </div>
                                <div class="form-group">

                                    <select name="staff_type_id" id="staff_type_id" class="form-select select " aria-label="Default select example">
                                        <option value="select staff type">select staff type</option>


                                        <?php
                                        include 'connection.php';
                                        $query = "select * from staff_type";
                                        $query_execute = mysqli_query($conn, $query);

                                        if (mysqli_num_rows($query_execute) > 0) {

                                            while ($result = mysqli_fetch_array($query_execute)) {

                                        ?>
                                                <!-- <option value="" selected></option> -->
                                                <option value="<?php echo $result['id'] ?>"><?php echo $result['name'] ?></option>

                                        <?php

                                            }
                                        }
                                        ?>



                                    </select>

                                    <div class="wizard-form-error" id="salary_error"></div>
                                </div>
                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                    <button type="submit" style="margin-left: 0px; border: none; " name="save"><a class="form-wizard-submit float-right">Submit</a></button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

        </div> <!-- container -->

    </div> <!-- content -->

    <!--================INCLUDE FOOTER PHP=================-->
    <?php include_once 'assets/components/footer.php' ?>
    <!--================END INCLUDE FOOTER PHP=================-->
</div>


<script src="https://kit.fontawesome.com/76d2de9cd5.js" crossorigin="anonymous"></script>
<!-- Vendor -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/ajax/common.js"></script>
<script src="assets/ajax/add_staff.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<!-- <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script> -->
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/js/pages/wizard.js"></script>


<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>

<!-- third party js ends -->

<!-- App js -->
<script src="assets/js/app.min.js"></script>



<!--================INCLUDE FOOTER PHP=================-->
<?php include_once 'assets/components/script_end.php' ?>
<!--================END INCLUDE FOOTER PHP=================-->