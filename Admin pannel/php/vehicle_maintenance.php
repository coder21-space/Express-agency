<?php
require 'function.php';

if ($_SERVER['SERVER_NAME'] == constant("SERVER_NAME")) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["save"])) {
            $iv = openssl_random_pseudo_bytes(16);

            $vehicle_id = $_POST["vehicle_id"];
            $amount = $_POST["amount"];
            $description = $_POST["description"];


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

            if (empty($vehicle_id)) {
                $error['vehicle_id'] = "vehicle id should not be empty";
            }
            if (empty($amount)) {
                $error['amount'] = "amount  should not be empty";
            }
            if (empty($description)) {
                $error['description'] = "description should not be empty";
            }

            if (sizeof($error) > 0) {
                echo json_encode(array("success" => false, "data" => $error));
                die;
            }

            // prevent sql and xss


            $vehicle_id = sql_prevent($conn, xss_prevent($_POST['vehicle_id']));
            $amount = sql_prevent($conn, xss_prevent($_POST['amount']));
            $description = sql_prevent($conn, xss_prevent($_POST['description']));



            //encryption of password

            // run sql




            $sql2 = "INSERT INTO `vehicle_maintenance` (`vehicle_id`, `amount`, `description`) VALUES ('$vehicle_id','$amount','$description')";

            if ($conn->query($sql2) == TRUE) {

                echo json_encode(array("success" => true, "message" => "add customer details successful "));
            } else {
                echo json_encode(array("success" => false, "message" => "Fill details correctly"));
            }
        }
    }
} else {
    echo json_encode(array("success" => false, "message" => "Method 3 not found"));
}
