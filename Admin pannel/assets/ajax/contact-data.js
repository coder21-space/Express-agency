// $("#loader").show();
// $("#inline-editable").hide();
$(document).ready(function () {
  $("#previous-tab").click(function (e) {
    // $("#loader").hide();
    // $("#inline-editable").show();

    // $("#delete").click(function (e) {
    //   e.preventDefault();

    //   var id = $("#contact_delete").val();

    //   $.ajax({
    //     url: "php/contact-data.php",
    //     type: "POST",
    //     dataType: "json",
    //     data: {
    //       submit: "contact-delete",
    //       id: id,
    //     },
    //     success: function (response) {
    //       $("#danger-alert-modal").modal("hide");
    //       if (response.success) {
    //         swal({
    //           icon: "success",
    //           title: "success",
    //           text: response.message,
    //         });
    //         getdata();
    //       } else {
    //         swal({
    //           icon: "error",
    //           title: "error",
    //           text: response.message,
    //         });
    //       }
    //     },
    //   });
    // });
    // $(document).on("click", ".delete", function () {
    //   var id = $(this).attr("data-id");
    //   // alert(id);
    //   $("#contact_delete").val(id);
    //   $("#danger-alert-modal").modal("show");
    // });

    // $("#datatable-buttons tbody").on("click", ".select", function () {
    //   var id = $(this).attr("data-id");

    //   $.ajax({
    //     url: "php/contact-data.php",
    //     type: "POST",
    //     dataType: "json",
    //     data: {
    //       submit: "contact-message",
    //       id: id,
    //     },
    //     success: function (response) {
    //       if (response.success) {
    //         $("#contact-message").text(response.data[0].message);
    //       }
    //     },
    //   });
    // });
    // ajax calll
    output = "";
    // output_error = "";

    $.ajax({
      url: "PHP/contact-data.php",
      type: "POST",
      dataType: "json",
      data: { submit: "previous-contact", email: contact_email },
      success: function (response) {
        // console.log(response);
        if (response.success) {
          response.data.forEach((contact, index) => {
            output += `
            <tr>
                <td>${contact.id}</td>
                <td>${contact.name}</td>
                <td>${contact.email}</td>
                <td>${contact.subject}</td>
                <td>${contact.created_at}</td>             
                <td>
                <button type="button"
                data-bs-toggle="modal" data-bs-target="#staticBackdrop"class="btn btn-outline-success select" 
                data-id="${contact.id}"><i class="fa-solid fa-envelope"></i></button><button  type="button"data-bs-toggle="modal" data-bs-target="#con-close-modal"class="btn btn-outline-primary mx-2 "><i class="fa-solid fa-reply"></i></button><button type="button" data-bs-toggle="modal" data-bs-target="#danger-alert-modal" data-id="${contact.id}" class="btn delete btn-outline-danger "><i class="fa-solid fa-trash-can"></i></button> </td>
                </tr>`;
          });

          $("#contact").html(output);
        } else {
          // output_error += `
          //                                 <div class="card">
          //             <div class="card-body p-4">
          //                 <div class="text-center">
          //                     <h1 class="text-error">404</h1>
          //                     <h3 class="mt-3 mb-2">Page not Found</h3>
          //                     <p class="text-muted mb-3">It's looking like you may have taken a wrong turn. Don't worry... it happens to
          //                             the best of us. You might want to check your internet connection. Here's a little tip that might
          //                             help you get back on track.</p>
          //                     <a href="index.html" class="btn btn-danger waves-effect waves-light"><i class="fas fa-home me-1"></i> Back to Home</a>
          //                 </div>
          //             </div>
          //             </div>`;
          // $("#contact_error").html(output_error);
        }
      },
      error: function (error) {},
    });
  });
});

// $(document).on("click", ".delete", function () {
//   var id = $(this).attr("data-id");
//   console.log(id);
//   $("#contact_delete").val(id);
//   $("#exampleModal").modal("show");
// });
