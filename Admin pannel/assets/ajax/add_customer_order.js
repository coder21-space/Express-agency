/** @format */
// $("#contact_submit_loader").hide();
$("#staff_form").on("submit", function (e) {
  e.preventDefault();

  //   var customer_id = $("#customer_id").val();
  //   var source_add = $("#source_add").val();
  //   var destination_add = $("#destination_add").val();
  //   var start_date = $("#start_date").val();
  //   var end_data = $("#end_data").val();
  //   var vehical_type_id = $("#vehical_type_id").val();
  //   var pay_id = $("#pay_id").val();
  //   var error = false;

  //   if (isEmpty(customer_id)) {
  //     error = true;
  //     $("#customer_id").text("customer id should not be blank!");
  //   } else {
  //     $("#customer_id").text("");
  //   }
  //   if (isEmpty(source_add)) {
  //     error = true;
  //     $("#source_add").text("source add number should not be blank!");
  //   } else {
  //     $("#source_add").text("");
  //   }
  //   if (isEmpty(destination_add)) {
  //     error = true;
  //     $("#destination_add").text("destination add should not be blank!");
  //   } else {
  //     $("#destination_add").text("");
  //   }

  //   if (isEmpty(start_date)) {
  //     error = true;
  //     $("#start_date").text("start date should not be blank!");
  //   } else {
  //     $("#start_date").text("");
  //   }

  //   if (isEmpty(end_data)) {
  //     error = true;
  //     $("#end_data").text("end data should not be blank!");
  //   } else {
  //     $("#end_data").text("");
  //   }
  //   if (isEmpty(vehical_type_id)) {
  //     error = true;
  //     $("#vehical_type_id_error").text("vehical type id should not be blank!");
  //   } else {
  //     $("#vehical_type_id_error").text("");
  //   }
  //   if (isEmpty(pay_id)) {
  //     error = true;
  //     $("#pay_id_error").text("pay id should not be blank!");
  //   } else {
  //     $("#pay_id_error").text("");
  //   }

  //   if (error) {
  //     return false;
  //   }

  // $("#btn").hide();
  // $("#contact_submit_loader").show();
  $.ajax({
    type: "POST",
    url: "php/customer_order.php",
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
