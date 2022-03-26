<?php
include 'function.php';

if ($_SERVER['SERVER_NAME'] == constant("HOST_NAME")) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["submit"])) {

            $name = $_POST["name"];

            $error = array();

            // validate data
            if (empty($name)) {
                array_push($error, "Name is required");
            }
            // elseif (preg_match("/^[0-9]+$/", $name)) {
            //     array_push($error, "Name should be valid");
            // }

            if (sizeof($error) > 0) {
                echo json_encode(array("success" => false, "data" => $error));
                die;
            }

            // prevent sql and xss

            // run sql

            // from function.php
            $name = sql_prevent($conn, xss_prevent($_POST['name']));

            $sql = "INSERT INTO `vehicle_type` (`name`, `created_at`) VALUES ( '$name', current_timestamp());";

            if ($conn->query($sql) == true) {
                echo json_encode(array("success" => true, "message" => " $name add successfully ."));
            }
        } else {
            echo json_encode(array("success" => false, "message" => "Method not found"));
        }
    } else {
        echo json_encode(array("success" => false, "message" => "Method not found"));
    }
}
