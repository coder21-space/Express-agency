<?php

include 'php/functions.php';

if (!user_check($conn)) {

    header('location:index.php');
}

?>

<?php

if (!isset($_GET['contact'])) {

    header('location:staff_list.php');
} else {

    $contact_id = $_GET['contact'];
    $check_id = "SELECT id from staff where id='$contact_id'";
    $query = mysqli_query($conn, $check_id);

    $result = mysqli_num_rows($query);

    if ($result > 0) {

        $sql = "SELECT * from staff where id='$contact_id'";
        // $sql = "SELECT vehicle.id,vehicle_type.name,vehicle.vehicle_name,vehicle.vehicle_no,vehicle.trip_type,vehicle.load_capacity from vehicle JOIN vehicle_type where  id='$contact_id' ";


        // $sql = "select  vehicle.id, vehicle_type.name,vehicle.vehicle_name, vehicle.vehicle_no,vehicle.trip_type,vehicle.load_capacity,vehicle.created_at from vehicle JOIN vehicle_type where vehicle_type.id =vehicle.vehicle_type  ";

        $result = mysqli_query($conn, $sql);

        $message = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $message = $row;
        }



        $sql = "SELECT * from staff_type where staff_type_id='$contact_id'";

        $result = mysqli_query($conn, $sql);


        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data = $row;
        }


        // $sql = "SELECT * from vehicle_maintenance where vehicle_id='$contact_id'";


        // $result = mysqli_query($conn, $sql);

        // $retreive = array();
        // while ($row = mysqli_fetch_assoc($result)) {
        //     $retreive = $row;

        //}


    } else {

        header('location:staff_list.php');
    }
}

?>











<?php include_once 'component/head-start.php'; ?>

<title>Vehicle_single | milky fresh - Admin & Dashboard Template</title>

<?php include_once 'component/head-end.php'; ?>

<?php include_once 'component/sidebar.php'; ?>
<?php include_once 'component/navbar.php'; ?>









<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Staff details</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                <li class="breadcrumb-item active">dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> your reply to customer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end preview-->






        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm order-2 order-sm-1">
                                <div class="d-flex align-items-start mt-3 mt-sm-0">
                                    <div class="flex-shrink-0 my-4">
                                        <div class="avatar-xl me-3">
                                            <img src="assets/images/user3.svg" alt="" class="img-fluid rounded-circle d-block" height="100" width="100">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 mr-2 my-1">
                                        <div>
                                            <h1 class="font-size-16 mb-1 mt-5"><?php echo $message['name'] ?></h1>
                                            <h3 class="text-muted font-size-13"><a href="tel:123-456-7890" target="blank">Phone no : <?php echo $message['phone'] ?></a></h3>
                                            <h3 class="text-muted font-size-13"><a href="mailto:someone@example.com" target="blank">Email : <?php echo $message['email'] ?></a></h3>
                                            <h3 class="text-muted font-size-13">Date and time: <?php echo $message['created_at'] ?></h3>


                                            <!-- <div class="d-flex flex-wrap align-items-start gap-2 gap-lg-3 text-muted font-size-13">
                                                                <div><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Development</div>
                                                                <div><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>phyllisgatlin@minia.com</div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-auto order-1 order-sm-2">
                            <div class="d-flex align-items-start justify-content-end gap-2">
                                <div>
                                    <button type="button" class="btn btn-soft-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="me-1"></i> Reply </button>
                                </div>
                                <div>
                                    <div class="dropdown">
                                        <button class="btn btn-link font-size-16 shadow-none text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <!-- <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                            </ul> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="nav nav-tabs-custom card-header-tabs border-top mt-4" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link px-3 active" data-bs-toggle="tab" href="#overview" role="tab">staff-details</a>
                        </li>
                        <!-- <li class="nav-item">
                                                <a class="nav-link px-3" data-bs-toggle="tab" href="#about" role="tab" id="previous-data">Maintenance-details</a>
                                            </li> -->
                        <!-- <li class="nav-item">
                                                <a class="nav-link px-3" data-bs-toggle="tab" href="#post" role="tab">Post</a>
                                            </li> -->
                    </ul>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

            <div class="tab-content">
                <div class="tab-pane active" id="overview" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0 text-primary">Vehicle</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="pb-3">
                                    <div class="row">
                                        <div class="col-xl-2">
                                            <div>
                                                <h5 class="font-size-15"> Staff-type:&nbsp<?php   ?></h5>
                                            </div>
                                            <br>
                                            <br>




                                            <div>

                                                <h5 class="font-size-15">
                                                    <p class="text-primary font-size-18"> Address: </p><?php echo $message['address'] ?>
                                                </h5>
                                            </div>

                                            <div>
                                                <h5 class="font-size-15">
                                                    <p class="text-primary font-size-18"> City: </p>
                                                    <?php echo $message['city'] ?>
                                                </h5>
                                            </div>
                                            <div>
                                                <h5 class="font-size-15">
                                                    <p class="text-primary
                                                                    font-size-18"> Pincode: </P>
                                                    <?php echo $message['pincode'] ?>
                                                </h5>
                                            </div>
                                            <div>
                                                <h5 class="font-size-15">
                                                    <p class="text-primary 
                                                                    font-size-18"> State: </P>
                                                    <?php echo $message['state'] ?>
                                                </h5>
                                            </div>

                                        </div>
                                        <div class="col-xl">
                                            <div class="text-muted">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="py-3">
                                    <div class="row">
                                        <div class="col-xl-2">
                                            <div>
                                                <!-- <h5 class="font-size-15">Experience :</h5> -->
                                            </div>
                                        </div>
                                        <div class="col-xl">
                                            <div class="text-muted">

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="card">
                        <!-- <div class="card-header">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <h5 class="card-title mb-0">Post</h5>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <a href="#post">View All</a>
                                                    </div>
                                                </div>
                                            </div> -->

                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end tab pane -->

                <div class="tab-pane" id="about" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Previous contact list</h5>
                        </div>

                        <!-- id="previous_error" -->

                        <div class="card-body">
                            <!-- <div class="text-center">
                                    <div class="spinner-border" role="status" id="loader">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    </div> -->
                            <table id="contact-list" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <!-- <th>s.no</th> -->
                                        <th>ID</th>
                                        <th>vehicle</th>
                                        <th>amount</th>
                                        <th>description</th>
                                        <th>created_at</th>
                                        <th>Actions</th>


                                    </tr>
                                </thead>


                                <tbody id="previous-contact">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- end preview-->
            </div><!-- end card body -->
            <!-- end card body -->

            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end tab pane -->

    <!-- end post -->



</div>
<!-- end card -->
</div>
<!-- end tab pane -->
</div>
<!-- end tab content -->
</div>
<!-- end col -->




</div>
<!-- end col -->
</div>
<!-- end row -->

</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> your reply to customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>
</div><!-- end preview-->
</div><!-- end card body -->
</div><!-- end card -->
</div><!-- end col -->


<!-- Second modal dialog -->
<div class="modal fade" id="secondmodal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel2">Delete this message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal_delete">
                <input id="contact_delete" type="hidden">
                <p>Do you really want to delete this message ?</p>
            </div>
            <div class="modal-footer">
                <!-- Toogle to first dialog, `data-bs-dismiss` attribute can be omitted - clicking on link will close dialog anyway -->
                <button type="button" class="btn btn-primary delete-button" id="confirm">yes</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">no</button>
            </div>
        </div>
    </div>
</div>

<!-- First modal dialog -->
<div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="message">.</p>
            </div>
            <div class="modal-footer">
                <!-- Toogle to second dialog -->
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">close</button>
            </div>
        </div>
    </div>
</div>






<?php include 'component/footer.php'; ?>

<?php include 'component/script-start.php'; ?>

<script>
    var vehicle_id = "<?php echo $retreive['vehicle_id']; ?>";
</script>
<!-- <script src="assets/js/contact-fetch.js"></script> -->
<script src="assets/js/vehicle_maintenance.js"></script>
<script src="assets/js/sweetalert.js"></script>

<?php include 'component/script-end.php'; ?>