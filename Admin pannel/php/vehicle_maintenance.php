<?php
require 'function.php';

if ($_SERVER['SERVER_NAME'] == constant("SERVER_NAME")) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["save"])) {
            $iv = openssl_random_pseudo_bytes(16);
            $vehical_id = $_POST["vehical_id"];
            $amount = $_POST["amount"];
            $description = $_POST["description"];

            echo ($vehical_id);
            echo ($amount);
            echo ($description);
            $error = array();


            // validate data
            // if (empty($vehical_id)) {
            //     $error['vehical_id'] = "vehical id should not be empty";
            // }
            if (empty($amount)) {
                $error['amount'] = "Amount  should not be empty";
            }
            if (empty($description)) {
                $error['description'] = "Description  should not be empty";
            }


            if (sizeof($error) > 0) {
                echo json_encode(array("success" => false, "data" => $error));
                die;
            }

            // prevent sql and xss
            // $vehical_id  = sql_prevent($conn, xss_prevent($_POST['vehical_id ']));
            $amount = sql_prevent($conn, xss_prevent($_POST['amount']));
            $description = sql_prevent($conn, xss_prevent($_POST['description']));



            // run sql

            $sql2 = "INSERT INTO `vehicle_maintenance` (`vehical_id`, `amount`, `description`) VALUES ('$vehical_id','$amount','$description')";

            if ($conn->query($sql2) == TRUE) {

                echo json_encode(array("success" => true, "message" => "add data successfully👍🏻 "));
            } else {
                echo json_encode(array("success" => false, "message" => "Fill details correctly❌"));
            }
        }
    }
} else {
    echo json_encode(array("success" => false, "message" => "Method 3 not found"));
}
