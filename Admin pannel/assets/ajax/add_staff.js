$("#loader").hide();
$("#connect").on("submit", function (e) {
  e.preventDefault();

  var username = $("#username").val();
  var email = $("#email").val();
  var password = $("#password").val();
  var name = $("#name").val();
  var error = false;

  if (isEmpty(username)) {
    error = true;
    $("#user_error").text("Username should not be blank!");
  } else {
    $("#user_error").text("");
  }
  if (isEmpty(email)) {
    error = true;
    $("#email_error").text("Email should not be blank!");
  } else {
    $("#email_error").text("");
  }
  if (isEmpty(password)) {
    error = true;
    $("#password_error").text("Password should not be blank!");
  } else {
    $("#password_error").text("");
  }
  if (isEmpty(name)) {
    error = true;
    $("#name_error").text("Name should not be blank!");
  } else {
    $("#name_error").text("");
  }

  $("#submit").hide();
  $("#loader").show();

  $.ajax({
    type: "POST",
    url: "php/staff_register.php",
    data: $(this).serialize() + "&submit=true",
    cache: false,
    success: function (response) {
      $("#submit").show();
      $("#loader").hide();
      response = JSON.parse(response);
      if (response.success === true) {
        swal({
          icon: "success",
          title: "success",
          text: response.message,
        });
        $("#contact")[0].reset();
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
      $("#submit").show();
      $("#loader").hide();
    },
  });
});
