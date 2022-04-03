<?php
require 'function.php';

if ($_SERVER['SERVER_NAME'] == constant("SERVER_NAME")) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["save"])) {
            $iv = openssl_random_pseudo_bytes(16);

            $name = $_POST["name"];
            $e_mail = $_POST["e_mail"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
            $city = $_POST["city"];
            $pincode = $_POST["pincode"];
            $state = $_POST["state"];
            $error = array();

            // validate data
            if (empty($name)) {
                $error['name'] = "Name should not be empty";
            }
            if (empty($e_mail)) {
                $error['e_mail'] = "Email should not be empty";
            } else if (!filter_var($e_mail, FILTER_VALIDATE_EMAIL)) {
                $error['e_mail'] = "Email should  be valid";
            }
            if (empty($phone)) {
                $error['phone'] = "Phone should not be empty";
            }
            if (empty($address)) {
                $error['address'] = "Address should not be empty";
            }
            if (empty($city)) {
                $error['city'] = "City should not be empty";
            }
            if (empty($pincode)) {
                $error['pincode'] = "Pincode should not be empty";
            }
            if (empty($state)) {
                $error['state'] = "State should not be empty";
            }


            if (sizeof($error) > 0) {
                echo json_encode(array("success" => false, "data" => $error));
                die;
            }

            // prevent sql and xss
            $name = sql_prevent($conn, xss_prevent($_POST['name']));
            $e_mail = sql_prevent($conn, xss_prevent($_POST['e_mail']));
            $phone = sql_prevent($conn, xss_prevent($_POST['phone']));
            $address = sql_prevent($conn, xss_prevent($_POST['address']));
            $city = sql_prevent($conn, xss_prevent($_POST['city']));
            $pincode = sql_prevent($conn, xss_prevent($_POST['pincode']));
            $state = sql_prevent($conn, xss_prevent($_POST['state']));



            // run sql
            $sql2 = "INSERT INTO `customer` (`name`, `email`, `phone`, `address`, `city`, `pincode`, `state`) VALUES ('$name','$e_mail','$phone','$address','$city','$pincode','$state')";

            if ($conn->query($sql2) == TRUE) {

                echo json_encode(array("success" => true, "message" => "Customer add successfully👍🏻"));
            } else {
                echo json_encode(array("success" => false, "message" => "Fill details correctly"));
            }
        }
    }
} else {
    echo json_encode(array("success" => false, "message" => "Method 3 not found"));
}
