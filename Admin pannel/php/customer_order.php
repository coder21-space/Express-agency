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
            $transaction_id = $_POST["transaction_id"];
            $account_no = $_POST["account_no"];
            $mode_of_pay = $_POST["mode_of_pay"];
            $bank_name = $_POST["bank_name"];
            $amount = $_POST["amount"];


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


            // run sql
            $sql2 = "INSERT INTO `payment` (`transaction_id`, `account_no`, `mode_of_pay`, `bank_name`, `amount`) VALUES ('$transaction_id','$account_no','$mode_of_pay','$bank_name','$amount')";

            if ($conn->query($sql2) == TRUE) {
                $result2 = mysqli_query($conn, "SELECT * FROM payment WHERE transaction_id = '$transaction_id'");
                if ($result2->num_rows > 0) {
                    $row = mysqli_fetch_assoc($result2);
                    $pay_id = $row['id'];
                }


                $sql = "INSERT INTO `orders` (`customer_id`, `source_add`, `destination_add`, `start_date`, `end_data`, `vehical_type_id`,`pay_id`) VALUES ('$customer_id','$source_add','$destination_add','$start_date','$end_data','$vehical_type_id','$pay_id')";
            }

            if ($conn->query($sql) == TRUE) {

                echo json_encode(array("success" => true, "message" => " customer order details successful "));
            } else {
                echo json_encode(array("success" => false, "message" => "Fill details correctly"));
            }
        }
    }
} else {
    echo json_encode(array("success" => false, "message" => "Method 3 not found"));
}
