$(document).ready(function () {
  output = "";
  $.ajax({
    url: "PHP/contact-data.php",
    type: "POST",
    dataType: "json",
    data: { submit: "contact-list" },
    success: function (response) {
      console.log(response);
      if (response.success) {
        response.data.forEach((contact, index) => {
          output += `
            <tr>
                <td>${index + 1}</td>
                <td>${contact.name}</td>
                <td>${contact.email}</td>
                <td>${contact.message}</td>
                <td>
                <button type="button" 
                data-bs-toggle="modal" data-bs-target="#staticBackdrop"class="btn btn-outline-success"><i class="fa-solid fa-envelope"></i></button><button  type="button"data-bs-toggle="modal" data-bs-target="#con-close-modal"class="btn btn-outline-primary mx-2 "><i class="fa-solid fa-reply"></i></button><button type="button" data-bs-toggle="modal" data-bs-target="#danger-alert-modal" class="btn btn-outline-danger "><i class="fa-solid fa-trash-can"></i></button> </td> </tr>`;
        });

        $("#contact-list").html(output);
      } else {
        // show server error message
      }
    },
    error: function (error) {},
  });
});
