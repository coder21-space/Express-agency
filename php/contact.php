<?php

require'function.php';

//server validation request validation
if(isset($_POST["submit"])){ 

      
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $error = array();


    if (empty($name))$error['name']="Name should not be empty";
    else if(preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=|!:,.;]*[-a-z0-9+&@#\/%=|]/i",$name))$error['name']="Name should be valid";


    if (empty($email)) $error['email']="Email should not be empty";
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $error['email']="Email should  be valid";

    
    if (empty($phone))$error['phone']=" Number should not be empty";
    else if(!preg_match("/^(\+\d{1,3}[- ]?)?\d{10}$/",$phone))$error['phone']="please enter valied phone number";

    if (sizeof($error) > 0) {
        echo json_encode(array("success" => false, "data" => $error));
        die;
    }


    $name = sql_prevent($conn,xss_prevent($_POST['name']));
    $email = sql_prevent($conn,xss_prevent($_POST['email']));
    $phone = sql_prevent($conn,xss_prevent($_POST['phone']));


    $sql = "INSERT INTO contact(name,email,phone,message)VALUES('$name','$email','$phone','$message')";



    
    if($conn->query($sql)==TRUE){
        echo json_encode(array("success" => true, "message" => " hello $name cheak now message."));

    } else {
        echo json_encode(array("success" => true, "message" => "Method not found"));
    }
} else {
    echo json_encode(array("success" => false, "message" => "Method not found"));
}

?>