<?php
require 'function.php';

if ($_SERVER['SERVER_NAME'] == constant("SERVER_NAME")) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["save"])) {
            $iv = openssl_random_pseudo_bytes(16);
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $name = $_POST["name"];
            $e_mail = $_POST["e_mail"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
            $city = $_POST["city"];
            $pincode = $_POST["pincode"];
            $state = $_POST["state"];
            $salary = $_POST["salary"];
            $staff_type_id = $_POST["staff_type_id"];

            // echo ($username);
            // echo ($email);
            // echo ($password);
            // echo ($name);
            // echo ($e_mail);
            // echo ($phone);
            // echo ($address);
            // echo ($city);
            // echo ($pincode);
            // echo ($state);
            // echo ($salary);
            $error = array();
            $new_iv = bin2hex($iv);

            // validate data
            if (empty($username)) {
                $error['username'] = "username should not be empty";
            } else if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=|!:,.;]*[-a-z0-9+&@#\/%=|]/i", $username)) {
                $error['username'] = "username should be valid";
            }

            if (empty($email)) {
                $error['email'] = "email should not be empty";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error['email'] = "email should  be valid";
            }
            if (empty($e_mail)) {
                $error['e_mail'] = "email should not be empty";
            } else if (!filter_var($e_mail, FILTER_VALIDATE_EMAIL)) {
                $error['e_mail'] = "email should  be valid";
            }

            if (empty($password)) {
                $error['password'] = "password should not be empty";
            }

            if (sizeof($error) > 0) {
                echo json_encode(array("success" => false, "data" => $error));
                die;
            }

            // prevent sql and xss

            $username = sql_prevent($conn, xss_prevent($_POST['username']));
            $e_mail = sql_prevent($conn, xss_prevent($_POST['email']));
            $password = sql_prevent($conn, xss_prevent($_POST['password']));
            $name = sql_prevent($conn, xss_prevent($_POST['name']));
            $e_mail = sql_prevent($conn, xss_prevent($_POST['e_mail']));
            $phone = sql_prevent($conn, xss_prevent($_POST['phone']));
            $address = sql_prevent($conn, xss_prevent($_POST['address']));
            $city = sql_prevent($conn, xss_prevent($_POST['city']));
            $pincode = sql_prevent($conn, xss_prevent($_POST['pincode']));
            $state = sql_prevent($conn, xss_prevent($_POST['state']));
            $salary = sql_prevent($conn, xss_prevent($_POST['salary']));


            //encryption of password
            $hash = encryption($password, $iv);
            // run sql
            $sql = "INSERT INTO db_login(username, email, password,iv)VALUES('$username','$email','$hash','$new_iv')";
            if ($conn->query($sql) == TRUE) {
                $result2 = mysqli_query($conn, "SELECT * FROM db_login WHERE email = '$email'");
                if ($result2->num_rows > 0) {
                    $row = mysqli_fetch_assoc($result2);
                    $user_id = $row['id'];



                    $sql2 = "INSERT INTO `staff` (`user_id`,`name`, `email`, `phone`, `address`, `city`, `pincode`, `state`, `salary`,`staff_type_id`) VALUES ('$user_id','$name','$e_mail','$phone','$address','$city','$pincode','$state','$salary','$staff_type_id')";

                    if ($conn->query($sql2) == TRUE) {

                        echo json_encode(array("success" => true, "message" => "add staff successful "));
                    } else {
                        echo json_encode(array("success" => false, "message" => "Fill details correctly"));
                    }
                }
            }
        } else {
            echo json_encode(array("success" => false, "message" => "Method 3 not found"));
        }
    } else {
        echo json_encode(array("success" => false, "message" => "Method 2 not found"));
    }
} else {
    echo json_encode(array("success" => false, "message" => "Method 1 not found"));
}
