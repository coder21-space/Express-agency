$("#loader").hide();
$("#login").on("submit", function (e) {

    e.preventDefault();

    var url = 'index2.php'
   
    var email = $("#email").val();
    var password = $("#password").val();
 
    var error = false;

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
        url: "php/login.php",
        data: $(this).serialize() + "&submit=true",
        cache: false,
        success: function (response) {
            $("#submit").show();
            $("#loader").hide();
            response = JSON.parse(response);
            if (response.success === true) {
                
          $(location).prop('href',url);
              
         $('#php/login.php')[0].reset();
            } else {
                for (const error in response.data) {
                    $('#' + error + '_error').text(response.data[error]);
                }
            }
        },
        error: function (error) {
           
            $("#submit").show();
            $("#loader").hide();
        },
    });
});

