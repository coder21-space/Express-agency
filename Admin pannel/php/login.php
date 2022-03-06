<?php

include 'function.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = array();

    if (empty($email)) {
        $error['email'] = "email should not be empty";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['email'] = "email should  be valid";
    }
    
    if (empty($password)) {
        $error['password'] = "password should not be empty";
    }
    if (sizeof($error) > 0) {
        echo json_encode(array("success" => false, "data" => $error));
        die;
    }

    $email = sql_prevent($conn, xss_prevent($_POST['email']));
    $password = sql_prevent($conn, xss_prevent($_POST['password']));

    $user_search = "select * from db_login where email='$email'";
    $query = mysqli_query($conn,$user_search);
    $user_count = mysqli_num_rows($query);
   
    if($user_count===1){
        $user = mysqli_fetch_assoc($query);
        $db_pass = $user['password'];
        $password_decode = decryption($db_pass,hex2bin($user['iv']));
       
        if($password_decode==$password){
            
         
            $iv = openssl_random_pseudo_bytes(16);
                    $id = encryption($user['id'],$iv);
                    $_SESSION['user']['check_user'] = $id;
                    $_SESSION['user']['check_iv'] = bin2hex($iv);
                    $_SESSION['user']['user_name'] = $user['username'];
                    echo json_encode(array("success" => true, "message" => "Login successful"));
            die;
        }else{
            echo json_encode(array("success" => false, "data" => array("password"=>"Invalid password")));
            die;
        }
    }else{
        echo json_encode(array("success" => false, "data" => array("email"=>"Invalid email")));
        die;
    }
}


?>