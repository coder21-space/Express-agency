function get_contact_hrtml(data) {
  var output = "";
  data.forEach((contact, index) => {
    output += `
    <tr>
    <td>${index + 1}</td>
    <td><a href="contact_single.php?contact=${contact.id}">${contact.name}</td>
    <td>${contact.email}</td>
    <td>${contact.subject}</td> 
     <td>${contact.created_at}</td>               
        <td>
        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="${contact.id}"class="btn btn-outline-success select"><i class="fa-solid fa-envelope"></i></button>
        <button type="button" data-bs-toggle="modal" data-bs-target="#con-close-modal"class="btn btn-outline-primary mx-1"><i class="fa-solid fa-reply"></i></button>
        <button type="button" data-bs-toggle="modal" data-bs-target="#danger-alert-modal" data-id="${contact.id}"class="btn delete btn-outline-danger"><i class="fa-solid fa-trash-can"></i></button>
         </td></tr>`;
  });
  return output;
}

previous();
function previous() {
  $("#previous-tab").click(function (e) {
    output = "";
    output_error = "";
    $.ajax({
      url: "PHP/contact.php",
      type: "POST",
      dataType: "json",
      data: { submit: "previous-contact", email: contact_email },
      success: function (response) {
        if (response.success) {
          $("#contact").html(get_contact_hrtml(response.data));
        } else {
          output_error += `
                                  <div class="card">
              <div class="card-body p-4">
                  <div class="text-center">
                      <h1 class="text-error">OOPS!</h1>
                      <h3 class="mt-3 mb-2">Page not Found</h3>
                      <p class="text-muted mb-3">NO INFORMATION FOUND</p>
                      <a href="dashboard.php" class="btn btn-danger waves-effect waves-light"><i class="fas fa-home me-1"></i> Back to Home</a>
                  </div>
              </div>
              </div>`;
        }
        $("#contact_error").html(output_error);
      },
      error: function (error) {},
    });
  });
}

getdata();
function getdata() {
  output = "";
  output_error = "";
  $.ajax({
    url: "PHP/contact.php",
    type: "POST",
    dataType: "json",
    data: {
      submit: "contact-list",
    },
    success: function (response) {

      if (response.success === true) {
        $("#contact-list").html(get_contact_hrtml(response.data));
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
      // $("#list_error").html(output_error);
    },
    error: function (error) {},
  });
}

//contact us and single page delete modals
$("#confirm").click(function (e) {
  e.preventDefault();
  var id = $("#contact_delete").val();
  var page = "contactus";

  $.ajax({
    url: "php/contact.php",
    type: "POST",
    dataType: "json",
    data: {
      submit: "contact-delete",
      id: id,
    },
    success: function (response) {
      $("#danger-alert-modal").modal("hide");
      if (response.success) {
        swal({
          icon: "success",
          title: "success",
          text: response.message,
        });

        if (page == "contactus") {
          getdata();
        } else {
          previous();
        }
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
$(document).on("click", ".delete", function () {
  var id = $(this).attr("data-id");
  $("#contact_delete").val(id);
  $("#danger-alert-modal").modal("show");
});

//single page message modals
$("#responsive-datatable tbody").on("click", ".select", function () {
  var id = $(this).attr("data-id");

  $.ajax({
    url: "php/contact.php",
    type: "POST",
    dataType: "json",
    data: {
      submit: "contact-message",
      id: id,
    },
    success: function (response) {
      if (response.success) {
        $("#contact-message").text(response.data[0].message);
      }
    },
  });
});

//contact us page message modals
$("#responsive-datatable tbody").on("click", ".select", function () {
  var id = $(this).attr("data-id");

  $.ajax({
    url: "php/contact.php",
    type: "POST",
    dataType: "json",
    data: {
      submit: "contact-message",
      id: id,
    },
    success: function (response) {
      if (response.success) {
        $("#contact-message").text(response.data[0].message);
      }
    },
  });
});
