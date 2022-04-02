// update

$('#update').on("click",function (e) {
    e.preventDefault();
    var id = $("#id").val();
    var name = $("#name").val();
    // var email= $("#email").val();
    // var phone= $("#phone").val();
     console.log(id);
     
  
    var error = false;
  
    if (isEmpty(name)) {
        error = true;
        $('#name_err').text("name should not be blank!");
    } else {
        $('#name_err').text("");
    }
    // if (isEmpty(email)) {
    //     error = true;
    //     $('#email_err').text("description should not be blank!");
    // } else {
    //     $('#email_err').text("");
    // }
    // if (isEmpty(phone)) {
    //     error = true;
    //     $('#phone_err').text("description should not be blank!");
    // } else {
    //     $('#phone_err').text("");
    // }
  
    if (error) {
        return false;
    }
  
  
    $.ajax({
        url: "PHP/add_staff_data.php",
        type: "POST",
        dataType: "json",
        data: { submit: 'update', id: id, name:name},
        success: function (response) {
  
            $('#updateModal').modal('hide');
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
          // $("#submit-contact").show();
          // $("#loader").hide();
      },
  
        
    });
  });
  
  
  $(document).on('click', '.update', function () {
  
  var id = $(this).attr('data-id');
  
  var name = $(this).attr('data-name');
  
  // var email= $(this).attr('data-email');
  // var phone= $(this).attr('data-phone');
  
  $("#updateModal").modal('show');
  var id = $('#id').val(id);
  console.log(id);
  var name = $('#name').val(name);
  // var email = $('#email').val(email);
  // var phone = $('#phone').val(phone);
  
  
  });
  
  
  