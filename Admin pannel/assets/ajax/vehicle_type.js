$("#loader").show();
$("#inline-editable").hide();

$(document).ready(function () {
  $("#loader").hide();
  $("#inline-editable").show();

  getdata();
  function getdata() {
    $.ajax({
      url: "php/vehicle_type.php",
      type: "POST",
      dataType: "json",
      data: { submit: "vehicle_type" },
      success: function (response) {
        console.log(response);
        output = "";
        output_error = "";
        if (response.success) {
          var output = get_contactlist_html(response.data);
          $("#contact").html(output);
        } else {
          //           output_error += `
          // <div class="card">
          // <div class="card-body p-4">
          //     <div class="text-center">
          //         <h1 class="text-error">OOPS!</h1>
          //         <h3 class="mt-3 mb-2">Page not Found</h3>
          //         <p class="text-muted mb-3">NO INFORMATION FOUND</p>
          //         <a href="dashboard.php" class="btn btn-danger waves-effect waves-light"><i class="fas fa-home me-1"></i> Back to Home</a>
          //     </div>
          // </div>
          // </div>`;
        }
        // $("#contact_error").html(output_error);
      },
      error: function (error) {},
    });
  }

  function get_contactlist_html(contacts) {
    previous = "";
    contacts.forEach((contact, index) => {
      previous += `
      <tr>
          <td>${index + 1}</td>
          <td>${contact.name}</td>
          <td>${contact.created_at}</td>

          <td>
              <div class="d-flex">
              
              <button type="button" data-bs-toggle="modal" data-bs-target="#danger-alert-modal" data-id=${
                contact.id
              }  class="btn delete btn-outline-danger "><i class="fa-solid fa-trash-can"></i></button>
              <button type="button" class=" update mx-2 btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-id=${
                contact.id
              } data-name=${
        contact.name
      } data-bs-target="#updateModal"><i class="fa-solid fa-pen-to-square"></i></button>

              </div>

          </td>
      </tr>
      `;
    });

    return previous;
  }

  $("#previous-data").on("click", function () {
    $("#loader").hide();
    $("#datatable").show();

    previous_error = "";

    $.ajax({
      url: "vehicle_type.php",
      type: "POST",
      dataType: "json",
      data: { submit: "email", email: email },
      success: function (response) {
        console.log(response);
        if (!response.success) {
          var contact_list = get_contactlist_html(response.data);
          $("#previous-contact").html(contact_list);
        } else {
          //           previous_error += `
          // <div class="card">
          // <div class="card-body p-4">
          //     <div class="text-center">
          //         <h1 class="text-error">OOPS!</h1>
          //         <h3 class="mt-3 mb-2">Page not Found</h3>
          //         <p class="text-muted mb-3">NO INFORMATION FOUND</p>
          //         <a href="dashboard.php" class="btn btn-danger waves-effect waves-light"><i class="fas fa-home me-1"></i> Back to Home</a>
          //     </div>
          // </div>
          // </div>`;
        }
        // $("#previous_error").html(previous_error);
      },
      error: function (error) {
        error = "some error occured";
      },
    });
  });

  $("#insert-form").on("submit", function (e) {
    e.preventDefault();
    var name = $("#name").val();

    var error = false;

    if (isEmpty(name)) {
      error = true;
      $("#name_error").text("**Name should not be empty");
    } else {
      $("#name_error").text("");
    }

    if (error) {
      return false;
    }

    $.ajax({
      type: "POST",
      url: "php/add_vehicle_data.php",
      data: $(this).serialize() + "&submit=true",
      cache: false,
      success: function (response) {
        response = JSON.parse(response);
        $("#custom-modal").modal("hide");
        if (response.success === true) {
          swal({
            icon: "success",
            title: "success",
            text: response.message,
          });
          $("#insert-form")[0].reset();

          getdata();
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
  update;

  $("#update-btn").click(function (e) {
    e.preventDefault();
    var id = $("#id").val();
    var name = $("#name").val();
    console.log(name);
    var error = false;

    if (isEmpty(name)) {
      error = true;
      $("#name_error").text("name should not be blank!");
    } else {
      $("#name_error").text("");
    }

    if (error) {
      return false;
    }

    $.ajax({
      url: "php/vehicle_type.php",
      type: "POST",
      dataType: "json",
      data: { submit: "update", id: id, name: name },
      success: function (response) {
        $("#updateModal").modal("hide");
        if (response.success === true) {
          Toastify({
            text: response.message,
            className: "success",
            style: {
              background: "#78f76d",
            },
            close: true,
            gravity: top,
            duration: 3000,
            oldestFirst: true,
          }).showToast();
          getdata();
        } else {
          Toastify({
            text: response.message,
            className: "info",
            style: {
              background: "#ff4e21",
            },
          }).showToast();
        }
      },

      error: function (error) {
        swal({
          icon: "error",
          title: "something went wrong",
          text: response.message,
        });
        $("#submit-contact").show();
        $("#loader").hide();
      },
    });
  });

  $(document).on("click", ".update", function () {
    var id = $(this).attr("data-id");

    var name = $(this).attr("data-name");

    $("#updateModal").modal("show");
    var id = $("#id").val(id);
    alert(id);
    var name = $("#name").val(name);
  });

  // delete

  $("#contact").on("click", ".delete", function () {
    var id = $(this).attr("data-id");
    $("#confirm").on("click", function () {
      $.ajax({
        url: "php/vehicle_type.php",
        type: "POST",
        dataType: "json",
        data: { submit: "delete", id: id },
        success: function (response) {
          $("#danger-alert-modal").modal("hide");
          if (response.success) {
            swal({
              icon: "success",
              title: "success",
              text: response.message,
            });
            getdata();
          } else {
            swal({
              icon: "error",
              title: "error",
              text: response.message,
            });
          }
        },
      });
    });
  });
});
