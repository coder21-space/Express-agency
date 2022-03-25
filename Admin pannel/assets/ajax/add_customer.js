/** @format */
// $("#contact_submit_loader").hide();
$("#staff_form").on("submit", function (e) {
  e.preventDefault();

  var name = $("#name").val();
  var e_mail = $("#e_mail").val();
  var phone = $("#phone").val();
  var address = $("#address").val();
  var city = $("#city").val();
  var pincode = $("#pincode").val();
  var state = $("#state").val();
  var error = false;

  if (isEmpty(name)) {
    error = true;
    $("#name_error").text("Name should not be blank!");
  } else {
    $("#name_error").text("");
  }
  if (isEmpty(phone)) {
    error = true;
    $("#phone_error").text("Phone number should not be blank!");
  } else {
    $("#phone_error").text("");
  }
  if (isEmpty(e_mail)) {
    error = true;
    $("#e_mail_error").text("Email should not be blank!");
  } else {
    $("#e-mail_error").text("");
  }

  if (isEmpty(address)) {
    error = true;
    $("#address_error").text("password should not be blank!");
  } else {
    $("#address_error").text("");
  }

  if (isEmpty(city)) {
    error = true;
    $("#city_error").text("city should not be blank!");
  } else {
    $("#city_error").text("");
  }
  if (isEmpty(pincode)) {
    error = true;
    $("#pincode_error").text("pincode should not be blank!");
  } else {
    $("#pincode_error").text("");
  }
  if (isEmpty(state)) {
    error = true;
    $("#state_error").text("This field should not be blank!");
  } else {
    $("#state_error").text("");
  }

  if (error) {
    return false;
  }

  // $("#btn").hide();
  // $("#contact_submit_loader").show();
  $.ajax({
    type: "POST",
    url: "php/customer.php",
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
