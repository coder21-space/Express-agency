$(document).ready(function () {

  getdata();
  function getdata() {
    $.ajax({
      url: "php/vehicle_maintenance_fetch.php",
      type: "POST",
      dataType: "json",
      data: { submit: "vehicle_maintenance_list" },
      success: function (response) {
     
        output = "";
        output_error = "";
        if (response.success) {
          var output = get_contactlist_html(response.data);
          $("#contact").html(output);
        } else {
          // output_error += `
          // // <div class="card">
          // // <div class="card-body p-4">
          // //     <div class="text-center">
          // //         <h1 class="text-error">OOPS!</h1>
          // //         <h3 class="mt-3 mb-2">Page not Found</h3>
          // //         <p class="text-muted mb-3">NO INFORMATION FOUND</p>
          // //         <a href="dashboard.php" class="btn btn-danger waves-effect waves-light"><i class="fas fa-home me-1"></i> Back to Home</a>
          // //     </div>
          // // </div>
          // // </div>`;
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
            <td>${contact.vehical_no}</td>
            <td>${contact.created_at}</td>
            
          
          
            <td>
                <div class="d-flex">
                <a href="vehicle_maintenance_single.php?vehicle_maintenance_single=${
                  contact.id
                }"><button type="button"class="btn btn-outline-primary  mx-2 "><i class="fa-solid fa-location-crosshairs"></i></button></a>   
                <button type="button" data-bs-toggle="modal" data-bs-target="#danger-alert-modal" data-id=${
                  contact.id
                }  class="btn delete btn-outline-danger "><i class="fa-solid fa-trash-can"></i></button>
                <button type="button" class=" update mx-2 btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-id=${
                  contact.id
                } data-amount=${
        contact.amount
      } data-description=${
        contact.description
      } data-bs-target="#updateModal"><i class="fa-solid fa-pen-to-square"></i></button>
                  
                </div>
             
            </td>
        </tr>
        `;
    });

    return previous;
  }

  $("#previous-data").on("click", function () {
    previous_error = "";

    $.ajax({
      url: "vehicle_maintenance_fetch.php",
      type: "POST",
      dataType: "json",
      data: { submit: "email", email: email },
      success: function (response) {

        if (!response.success) {
          var contact_list = get_contactlist_html(response.data);
          $("#previous-contact").html(contact_list);
        } else {
          // previous_error += `
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

// add data modals
$("#staff_form").on("submit", function (e) {
  e.preventDefault();
    // var amount = $("#amount").val();
    // var description = $("#description").val();
    // var error = false;

    // if (isEmpty(amount)) {
    //   error = true;
    //   $("#amount_error").text("**Amount should not be empty");
    // } else {
    //   $("#amount_error").text("");
    // }
    // if (isEmpty(description)) {
    //   error = true;
    //   $("#description_error").text("**Description should not be empty");
    // } else {
    //   $("#description_error").text("");
    // }
    // if (error) {
    //   return false;
    // }

    $.ajax({
      type: "POST",
      url: "php/vehicle_maintenance.php",
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

  // update
  $('#update').on("click",function (e) {
    e.preventDefault();
    var id = $("#id").val();
    var amount = $("#amount").val();
    var description= $("#description").val();
    var error = false;
  
    if (isEmpty(amount)) {
        error = true;
        $('#amount_error').text("Amount should not be blank!");
    } else {
        $('#amount_error').text("");
    }
    if (isEmpty(description)) {
        error = true;
        $('#description_error').text("Description number should not be blank!");
    } else {
        $('#description_error').text("");
    }
  
    if (error) {
        return false;
    }
  
    $.ajax({
        url: "php/vehicle_maintenance_fetch.php",
        type: "POST",
        dataType: "json",
        data: { submit: 'update', id: id, amount:amount, vehical_no:vehical_no},
        success: function (response) {

          $('#updateModal').modal('hide');
          if (response.success === true) {
              Toastify({
                  text: response.message,
                  className: "success",
                  style: {
                      background: "#0f9175",
                  },
                  close: true,
                  gravity: top,
                  duration: 3000,
                  oldestFirst: true
              }).showToast();    
                  getdata();  
          } else {
              Toastify({
                  text: response.message,
                  className: "info",
                  style: {
                      background: "#ff4e21",
                  }
              }).showToast();
          }
      },  
        error: function (error) {
          swal({
              icon: "error",
              title: "something went wrong",
              text: response.message
          });
      },        
    });
  });
  
  $(document).on('click', '.update', function () {
  
  var id = $(this).attr('data-id');
  var amount = $(this).attr('data-amount');
  var description= $(this).attr('data-description');
  
  $("#updateModal").modal('show');
  var id = $('#id').val(id);

  var amount = $('#amount').val(amount);
  var description = $('#description').val(description);
  });
  
  // delete
  $("#contact").on("click", ".delete", function () {
    var id = $(this).attr("data-id");

    $("#confirm").on("click", function () {
      $.ajax({
        url: "php/vehicle_maintenance_fetch.php",
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
