<?php

require'function.php';

if ($_SERVER['SERVER_NAME'] == constant("HOST_NAME")) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["submit"])) {       
            
  $iv = openssl_random_pseudo_bytes(16);
  $new_iv=bin2hex($iv);

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $error = array();
        
     // validate data
     if (empty($name)) array_push($error, "Name is required");
    else if(preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=|!:,.;]*[-a-z0-9+&@#\/%=|]/i",$name))$error['name']="Name should be valid";

    if (empty($email)) array_push($error, "Email is required");
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $error['email']="Email should  be valid";
   
    if (empty($password)) array_push($error, "password is required");
    else if(!preg_match("/^(\+\d{1,3}[- ]?)?\d{10}$/",$password))$error['password']="Please enter password ";

    if (sizeof($error) > 0) {
        echo json_encode(array("success" => false, "data" => $error));
        die;
    }
             // prevent sql and xss

            // run sql
             
            // from function.php
    $name = sql_prevent($conn,xss_prevent($_POST['name']));
    $email = sql_prevent($conn,xss_prevent($_POST['email']));
    $phone = sql_prevent($conn,xss_prevent($_POST['password']));

    //check user email if it exists or not
    $user_search = "select * from db_login where email='$email'";
    $query = mysqli_query($conn, $user_search);
    $user_count = mysqli_num_rows($query);

    if ($user_count > 0) {
        echo json_encode(array("success" => false, "data" => array("email" => "E-mail already exists")));
        die;
    }
    $hash = encryption($password,$iv);

            // run sql
    $sql = "INSERT INTO `db_login` ( `username`, `email`, `password`, `type`, `iv`) VALUES ('$name', '$email', '$hash', '2', '$new_iv')";
   
    if($conn->query($sql)==TRUE){
        echo json_encode(array("success" => true, "message" => "Hello $name you are successfully registerd and you can login now."));

    }else {
        echo json_encode(array("success" => true, "message" => "sorry! an error occured"));
  }

        }else {
         echo json_encode(array("success" => false, "message" => "Method not found"));
   }
}else {
    echo json_encode(array("success" => false, "message" => "Method not found"));
}
  }
  

?>