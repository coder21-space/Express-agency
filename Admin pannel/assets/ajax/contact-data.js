$("#previous-tab").click(function (e) {
  // ajax calll
  output = "";
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
        // show server error message
      }
    },
    error: function (error) {},
  });
});
