<!--================INCLUDE HEAD START PHP=================-->
<?php include_once 'assets/components/head_start.php' ?>
<!--================END INCLUDE HEAD END PHP=================-->

<link rel="shortcut icon" href="assets/images/favicon.ico">



<!--================INCLUDE HEAD START PHP=================-->
<?php include_once 'assets/components/head_end.php' ?>
<!--================END INCLUDE HEAD END PHP=================-->

<!--================INCLUDE HEAD START PHP=================-->

<?php $header_heading = 'Contact details';
include_once 'assets/components/header.php';



if (!isset($_GET['contact'])) {
    header('location : contactus.php');
} else {
    $id = $_GET['contact'];
    $check_id = "select id from contact where id = $id";
    $query = mysqli_query($conn, $check_id);
    $result = mysqli_num_rows($query);

    if ($result > 0) {
        $sql = "select * from contact where id = $id";
        $result = mysqli_query($conn, $sql);
        $message = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $message = $row;
        }
    } else {
        header('location : contactus.php');
    }
}

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
        <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">single contact list</h4>

                        <ul class="nav nav-tabs nav-bordered">
                            <li class="nav-item">
                                <a href="#home-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    Message
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#messages-b1" id="previous-tab" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    previous contact
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <h5><i class="fa-solid fa-user"></i> <?php echo $message['name'] ?> </h5>
                            <p><a href="mailto:someone@example.com"><?php echo $message['email'] ?></a></p>
                            <hr>
                            <div class="tab-pane" id="home-b1">
                                <?php echo $message['message'] ?> <button type="button" data-bs-toggle="modal" data-bs-target="#con-close-modal" class="btn btn-outline-primary mx-2 "><i class="fa-solid fa-reply"></i></button>
                            </div>
                            <div class="tab-pane show active" id="profile-b1">
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                                    rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis
                                    pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean
                                    vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                                    eleifend ac, enim.</p>
                                <p class="mb-0">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean
                                    commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                    parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                    pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                            </div>
                            <div class="tab-pane" id="messages-b1">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">


                                                <div class="table-responsive">
                                                    <table class="table table-centered mb-0" id="inline-editable">

                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>SUBJECT</th>
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

    <!-- sample modal content -->
    <!-- //bootstrap modals -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>


    <!-- sample modal content -->

    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Reply</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="">
                                    <label for="field-7" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="">
                                    <label for="field-7" class="form-label">Message</label>
                                    <textarea class="form-control" id="field-7" placeholder="Write something about yourself"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-info waves-effect waves-light">Send message</button>
                    </div>
                </div>
            </div>
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
        <script>
            var contact_email = "<?php echo $message['email'] ?>";
        </script>
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