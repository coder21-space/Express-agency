$("#contact_submit_loader").hide();
$("#connect").on("submit", function (e) {

    e.preventDefault();

    var name = $("#name").val();

    var email = $("#email").val();
    var phone = $("#phone").val();

    


    var error = false;



    if (name.length == 0) {
        error = true;
        $("#name_error").html("name should not be blank");
        $('#name_error').css("color", "red");
       
    }
    else{
        $("#name_error").html("");

    }

    if (email.length == 0) {
        error = true;
        $("#email_error").html("email should not be blank");
        $('#email_error').css("color", "red");

    }
    else{
        $("#email_error").html("");

    }
    
    if (phone.length == 0) {
        error = true;
        $("#phone_error").html("phone should not be blank");
        $('#phone_error').css("color", "red");

    }
    else{
        $("#phone_error").html("");

    }

    $.ajax({
        type: "POST",
        url: "validation.php",
        data: $(this).serialize() + "&submit=true",
        cache: false,
        success: function (response) {
            $("#btn").show();
            $("#contact_submit_loader").hide();
            response = JSON.parse(response);
            if (response.success === true) {
                swal({
                    icon: "success",
                    title: "success",
                    text: response.message
                });
                $('#contact')[0].reset();
            } else {
                for (const error in response.data) {
                    $('#' + error + '_error').text(response.data[error]);
                }
            }
        },
        error: function (error) {
            swal({
                icon: "error",
                title: "something went wrong",
                text: response.message
            });
            $("#btn").show();
            $("#contact_submit_loader").hide();
        },
    });
});

