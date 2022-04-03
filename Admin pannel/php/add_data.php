<?php
include 'function.php';

if ($_SERVER['SERVER_NAME'] == constant("HOST_NAME")) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST["submit"])) {

            $name = $_POST["name"];
            $error = array();

            // validate data
            if (empty($name)) {
                array_push($error, "**Name is required");
            }

            if (sizeof($error) > 0) {
                echo json_encode(array("success" => false, "data" => $error));
                die;
            }
            // prevent sql and xss
            $name = sql_prevent($conn, xss_prevent($_POST['name']));

            // run sql
            $sql = "INSERT INTO `staff_type` (`name`, `created_at`) VALUES ( '$name', current_timestamp());";

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
