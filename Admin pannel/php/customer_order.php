<?php
require 'function.php';

if ($_SERVER['SERVER_NAME'] == constant("SERVER_NAME")) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["save"])) {
            $iv = openssl_random_pseudo_bytes(16);

            $customer_id = $_POST["customer_id"];
            $source_add = $_POST["source_add"];
            $destination_add = $_POST["destination_add"];
            $start_date = $_POST["start_date"];
            $end_data = $_POST["end_data"];
            $vehical_type_id = $_POST["vehical_type_id"];
            // $status = $_POST["status"];
            $pay_id = $_POST["pay_id"];
            $error = array();

            // validate data
            if (empty($customer_id)) {
                $error['customer_id'] = "customer id should not be empty";
            }
            if (empty($source_add)) {
                $error['source_add'] = "source add should not be empty";
            }

            if (empty($destination_add)) {
                $error['destination_add'] = "destination add should not be empty";
            }

            if (empty($start_date)) {
                $error['start_date'] = "start date should not be empty";
            }

            if (empty($end_data)) {
                $error['end_data'] = "end_data should not be empty";
            }

            if (empty($vehical_type_id)) {
                $error['vehical_type_id'] = "vehical type id should not be empty";
            }

            // if (empty($status)) {
            //     $error['status'] = "status type id should not be empty";
            // }
            if (empty($pay_id)) {
                $error['pay_id'] = "pay id should not be empty";
            }

            if (sizeof($error) > 0) {
                echo json_encode(array("success" => false, "data" => $error));
                die;
            }

            // prevent sql and xss
            $customer_id = sql_prevent($conn, xss_prevent($_POST['customer_id']));
            $source_add = sql_prevent($conn, xss_prevent($_POST['source_add']));
            $destination_add = sql_prevent($conn, xss_prevent($_POST['destination_add']));
            $start_date = sql_prevent($conn, xss_prevent($_POST['start_date']));
            $end_data = sql_prevent($conn, xss_prevent($_POST['end_data']));
            $vehical_type_id = sql_prevent($conn, xss_prevent($_POST['vehical_type_id']));
            // $status = sql_prevent($conn, xss_prevent($_POST['status']));
            $pay_id = sql_prevent($conn, xss_prevent($_POST['pay_id']));

            // run sql


            $sql2 = "INSERT INTO `order` (`customer_id`, `source_add`, `destination_add`, `start_date`, `end_data`, `vehical_type_id`,`pay_id`) VALUES ('$customer_id','$source_add','$destination_add','$start_date','$end_data','$vehical_type_id','$pay_id')";

            if ($conn->query($sql2) == TRUE) {

                echo json_encode(array("success" => true, "message" => " customer order details successful "));
            } else {
                echo json_encode(array("success" => false, "message" => "Fill details correctly"));
            }
        }
    }
} else {
    echo json_encode(array("success" => false, "message" => "Method 3 not found"));
}
