<?php
require 'function.php';

if ($_SERVER['SERVER_NAME'] == constant("SERVER_NAME")) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["save"])) {
            $iv = openssl_random_pseudo_bytes(16);
            $name = $_POST["name"];
            $vehical_no = $_POST["vehical_no"];
            $trip_type = $_POST["trip_type"];
            $load_capacity = $_POST["load_capacity"];
            $vehicle_type_id = $_POST["vehicle_type_id"];

            // echo ($name);
            // echo ($vehical_no);
            // echo ($trip_type);
            // echo ($load_capacity);
            // echo ($vehicle_type_id);
            $error = array();


            // validate data
            if (empty($name)) {
                $error['name'] = "name should not be empty";
            } else if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=|!:,.;]*[-a-z0-9+&@#\/%=|]/i", $name)) {
                $error['name'] = "name should be valid";
            }

            if (empty($trip_type)) {
                $error['trip_type'] = "trip type  should not be empty";
            }
            if (empty($load_capacity)) {
                $error['load_capacity'] = "load capacity  should not be empty";
            }
            if (empty($vehical_no)) {
                $error['vehical_no'] = "vehical no should not be empty";
            }
            if (empty($vehicle_type_id)) {
                $error['vehicle_type_id'] = "vehicle type_id should not be empty";
            }

            if (sizeof($error) > 0) {
                echo json_encode(array("success" => false, "data" => $error));
                die;
            }

            // prevent sql and xss
            $name = sql_prevent($conn, xss_prevent($_POST['name']));
            $trip_type = sql_prevent($conn, xss_prevent($_POST['trip_type']));
            $load_capacity = sql_prevent($conn, xss_prevent($_POST['load_capacity']));
            $vehical_no = sql_prevent($conn, xss_prevent($_POST['vehical_no']));


            // run sql

            $sql2 = "INSERT INTO `vehicle` (`name`, `trip_type`, `load_capacity`, `vehical_no`,`vehicle_type_id`) VALUES ('$name','$trip_type','$load_capacity','$vehical_no','$vehicle_type_id')";

            if ($conn->query($sql2) == TRUE) {

                echo json_encode(array("success" => true, "message" => "add vehical information successful "));
            } else {
                echo json_encode(array("success" => false, "message" => "Fill details correctly"));
            }
        }
    }
} else {
    echo json_encode(array("success" => false, "message" => "Method 3 not found"));
}
