$("#previous-tab").click(function (e) {
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

// $(document).on("click", ".delete", function () {
//   var id = $(this).attr("data-id");
//   console.log(id);
//   $("#contact_delete").val(id);
//   $("#exampleModal").modal("show");
// });
