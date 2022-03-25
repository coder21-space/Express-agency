/** @format */
// $("#contact_submit_loader").hide();
$("#staff_form").on("submit", function (e) {
  e.preventDefault();

  //   var name = $("#name").val();
  //   var vehical_no = $("#vehical_no").val();
  //   var trip_type = $("#trip_type").val();
  //   var load_capacity = $("#load_capacity").val();

  //   var error = false;

  //   if (isEmpty(name)) {
  //     error = true;
  //     $("#name_error").text("name should not be blank!");
  //   } else {
  //     $("#name_error").text("");
  //   }
  //   if (isEmpty(vehical_no)) {
  //     error = true;
  //     $("#vehical_no_error").text("vehical number should not be blank!");
  //   } else {
  //     $("#vehical_no_error").text("");
  //   }
  //   if (isEmpty(trip_type)) {
  //     error = true;
  //     $("#trip_type_error").text("trip type should not be blank!");
  //   } else {
  //     $("#trip_type_error").text("");
  //   }

  //   if (isEmpty(load_capacity)) {
  //     error = true;
  //     $("#load_capacity_error").text("load capacity should not be blank!");
  //   } else {
  //     $("#load_capacity_error").text("");
  //   }

  //   if (error) {
  //     return false;
  //   }

  // $("#btn").hide();
  // $("#contact_submit_loader").show();
  $.ajax({
    type: "POST",
    url: "php/vehicle_data.php",
    data: $(this).serialize() + "&save=true",
    cache: false,
    success: function (response) {
      // $("#btn").show();
      // $("#contact_submit_loader").hide();
      console.log(response);
      response = JSON.parse(response);

      if (response.success === true) {
        Toastify({
          text: response.message,

          duration: 3000,
        }).showToast();
        $("#staff_form")[0].reset();
      } else {
        for (const error in response.data) {
          $("#" + error + "_error").text(response.data[error]);
        }
      }
    },
    error: function (error) {
      swal({
        icon: "error",
        title: "something went wrong",
        text: response.message,
      });
      // $("#btn").show();
      // $("#contact_submit_loader").hide();
    },
  });
});
