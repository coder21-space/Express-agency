<?php

require'function.php';

if ($_SERVER['SERVER_NAME'] == constant("HOST_NAME")) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["submit"])) {
      
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $error = array();

     // validate data
     if (empty($name)) array_push($error, "Name is required");
    else if(preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=|!:,.;]*[-a-z0-9+&@#\/%=|]/i",$name))$error['name']="Name should be valid";

    if (empty($email)) array_push($error, "Email is required");
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $error['email']="Email should  be valid";
   
    if (empty($phone)) array_push($error, "Phone is required");
    else if(!preg_match("/^(\+\d{1,3}[- ]?)?\d{10}$/",$phone))$error['phone']="Please enter valied phone number";

    if (empty($message)) array_push($error, "Message is required");
    else if(preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=|!:,.;]*[-a-z0-9+&@#\/%=|]/i",$name))$error['message']="Message should be valid";

    if (sizeof($error) > 0) {
        echo json_encode(array("success" => false, "data" => $error));
        die;
    }
             // prevent sql and xss

            // run sql
             
            // from function.php
    $name = sql_prevent($conn,xss_prevent($_POST['name']));
    $email = sql_prevent($conn,xss_prevent($_POST['email']));
    $phone = sql_prevent($conn,xss_prevent($_POST['phone']));
    $message = sql_prevent($conn,xss_prevent($_POST['message']));

    $sql = "INSERT INTO contact(name,email,phone,message)VALUES('$name','$email','$phone','$message')";
   
    if($conn->query($sql)==TRUE){
        echo json_encode(array("success" => true, "message" => "Hello $name your message is recieved our team will get back to you."));

        }else {
         echo json_encode(array("success" => false, "message" => "Method not found"));
   }
  }
 }
}
?>