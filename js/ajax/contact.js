$("#loader").hide();
$("#connect").on("submit", function (e) {

    e.preventDefault();

    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var message = $("#message").val();
    var error = false;

    if (isEmpty(name)){
        error = true;
        $("#name_error").text("*name should not be blank");       
    }
    else{
        $("#name_error").text("");
    }

    if (isEmpty(email)){
        error = true;
        $("#email_error").text("*email should not be blank");
    }
    else{
        $("#email_error").text("");
    }
    
    if (isEmpty(phone)){
        error = true;
        $("#phone_error").text("*phone should not be blank");
    }
    else{
        $("#phone_error").text("");
    }
    
    if (isEmpty(message)){
        error = true;
        $("#message_error").text("*message should not be blank");       
    }
    else{
        $("#message_error").text("");
    }
    if(error){
        return false;
    }
    
    $("#submit").hide();
    $("#loader").show();

    $.ajax({
        type: "POST",
        url: "php/contact.php",
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
            $("#submit").show();
            $("#loader").hide();
        },
    });
});

