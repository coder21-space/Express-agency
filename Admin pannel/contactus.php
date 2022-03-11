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

<?php $header_heading = 'Dashboard';
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

                            <h4 class="mt-0 header-title">CONTACT LISTS</h4>
                            <p class="text-muted font-14 mb-3">

                            </p>

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                                <div id="loader" class="spinner-grow text-info" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                <thead>
                                    <tr>

                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                        <th>SUBJECT</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>

                                <tbody id="contact-list">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- content -->
    <?php include_once 'assets/components/modals.php' ?>
    <!-- Footer Start -->
    <!--================INCLUDE FOOTER PHP=================-->
    <?php include_once 'assets/components/footer.php' ?>
    <!--================END INCLUDE FOOTER PHP=================-->
</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
</div>

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

<script>
    // $('#loader').show();
    // $('#datatable-buttons').hide();

    $(document).ready(function() {
        // $('#loader').hide();
        // $('#datatable-buttons').show();

        // getdata();
        $('#delete').click(function(e) {
            e.preventDefault();

            var id = $('#contact_delete').val();


            $.ajax({
                url: "php/contact-data.php",
                type: "POST",
                dataType: "json",
                data: {
                    submit: 'contact-delete',
                    id: id
                },
                success: function(response) {
                    $('#danger-alert-modal').modal('hide');
                    if (response.success) {
                        swal({
                            icon: "success",
                            title: "success",
                            text: response.message
                        });
                        getdata();
                    } else {
                        swal({
                            icon: "error",
                            title: "error",
                            text: response.message
                        });
                    }
                }
            });
        });
        $(document).on('click', '.delete', function() {
            var id = $(this).attr('data-id');
            // alert(id);
            $('#contact_delete').val(id);
            $("#danger-alert-modal").modal('show');
        });
        $('#datatable-buttons tbody').on('click', '.select', function() {

            var id = $(this).attr('data-id');


            $.ajax({
                url: "php/contact-data.php",
                type: "POST",
                dataType: "json",
                data: {
                    submit: 'contact-message',
                    id: id
                },
                success: function(response) {
                    if (response.success) {
                        $("#contact-message").text(response.data[0].message);
                    }
                }
            });
        });


        getdata();

        function getdata() {
            output = "";
            output_error = "";
            $.ajax({
                url: "PHP/contact-data.php",
                type: "POST",
                dataType: "json",
                data: {
                    submit: "contact-list"
                },
                success: function(response) {
                    // console.log(response);

                    if (response.success) {
                        response.data.forEach((contact, index) => {
                            output += `
            <tr>

                <td>${index+1}</td>
                <td><a href="contactdetails.php?contact=${contact.id}">${contact.name}</td>
                <td>${contact.email}</td>
                <td>${contact.subject}</td>
                <td>
                <button type="button"
                data-bs-toggle="modal" data-bs-target="#staticBackdrop"class="btn btn-outline-success select" 
                data-id="${contact.id}"><i class="fa-solid fa-envelope"></i></button><button  type="button"data-bs-toggle="modal" data-bs-target="#con-close-modal"class="btn btn-outline-primary mx-2 "><i class="fa-solid fa-reply"></i></button><button type="button" data-bs-toggle="modal" data-bs-target="#danger-alert-modal" data-id="${contact.id}" class="btn delete btn-outline-danger "><i class="fa-solid fa-trash-can"></i></button> </td> </tr>`;
                        });

                        $("#contact-list").html(output);
                    } else {

                        // output_error += `
                        //                         <div class="card">
                        //     <div class="card-body p-4">
                        //         <div class="text-center">
                        //             <h1 class="text-error">OOPS!</h1>
                        //             <h3 class="mt-3 mb-2">Page not Found</h3>
                        //             <p class="text-muted mb-3">NO INFORMATION FOUND</p>
                        //             <a href="dashboard.php" class="btn btn-danger waves-effect waves-light"><i class="fas fa-home me-1"></i> Back to Home</a>
                        //         </div>
                        //     </div> 
                        //     </div>`;

                    }
                    // $("#contact_error").html(output_error);
                },
                error: function(error) {},
            });
        }
    });
</script>
<script src="assets/ajax/sweetalert.js"></script>

</body>

</html>