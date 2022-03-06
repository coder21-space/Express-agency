$("#loader").hide();
$("#register").on("submit", function (e) {

    e.preventDefault();
   

    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();
 
    var error = false;

    if (isEmpty(name)){
        error = true;
        $("#name_error").text("*Name should not be blank");       
    }
    else{
        $("#name_error").text("");
    }

    if (isEmpty(email)){
        error = true;
        $("#email_error").text("*Email should not be blank");
    }
    else{
        $("#email_error").text("");
    }
    
    if (isEmpty(password)){
        error = true;
        $("#password_error").text("*password should not be blank");
    }
    else{
        $("#password_error").text("");
    }
    
   
    if(error){
        return false;
    }
    
    $("#submit").hide();
    $("#loader").show();

    $.ajax({
        type: "POST",
        url: "php/register.php",
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
               
                $('#php/register.php')[0].reset();
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

