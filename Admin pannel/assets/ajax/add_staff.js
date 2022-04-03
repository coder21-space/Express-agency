$("#staff_form").on("submit", function (e) {
  e.preventDefault();


  // var username = $("#username").val();
  // var email = $("#email").val();
  // var password = $("#password").val();
  // var name = $("#name").val();
  // var e_mail = $("#e_mail").val();
  // var phone = $("#phone").val();
  // var address = $("#address").val();
  // var city = $("#city").val();
  // var pincode = $("#pincode").val();
  // var state = $("#state").val();
  // var salary = $("#salary").val();
  // var error = false;

  // if (isEmpty(username)) {
  //   error = true;
  //   $("#username_error").text("**Username should not be blank!");
  // } else {
  //   $("#username_error").text("");
  // }
  // if (isEmpty(email)) {
  //   error = true;
  //   $("#email_error").text("**E-mail should not be blank!");
  // } else {
  //   $("#email_error").text("");
  // }
  // if (isEmpty(password)) {
  //   error = true;
  //   $("#password_error").text("**password should not be blank!");
  // } else {
  //   $("#password_error").text("");
  // }
  // if (isEmpty(name)) {
  //   error = true;
  //   $("#name_error").text("**Name should not be blank!");
  // } else {
  //   $("#name_error").text("");
  // }
  // if (isEmpty(phone)) {
  //   error = true;
  //   $("#phone_error").text("**Phone number should not be blank!");
  // } else {
  //   $("#phone_error").text("");
  // }
  // if (isEmpty(e_mail)) {
  //   error = true;
  //   $("#e_mail_error").text("**Email should not be blank!");
  // } else {
  //   $("#e-e_mail_error").text("");
  // }

  // if (isEmpty(address)) {
  //   error = true;
  //   $("#address_error").text("**password should not be blank!");
  // } else {
  //   $("#address_error").text("");
  // }

  // if (isEmpty(city)) {
  //   error = true;
  //   $("#city_error").text("**city should not be blank!");
  // } else {
  //   $("#city_error").text("");
  // }
  // if (isEmpty(pincode)) {
  //   error = true;
  //   $("#pincode_error").text("**pincode should not be blank!");
  // } else {
  //   $("#pincode_error").text("");
  // }
  // if (isEmpty(state)) {
  //   error = true;
  //   $("#state_error").text("**This field should not be blank!");
  // } else {
  //   $("#state_error").text("");
  // }
  // if (isEmpty(salary)) {
  //   error = true;
  //   $("#salary_error").html("**This field should not be blank!");
  // } else {
  //   $("#salary_error").html("");
  // }


  // if (error) {
  //   return false;
  // }

  $.ajax({
    type: "POST",
    url: "php/staff_register.php",
    data: $(this).serialize() + "&save=true",
    cache: false,
    success: function (response) {
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
    },
  });
});
