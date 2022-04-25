<?php

include 'function.php';

if (!user_check($conn)) {
    echo json_encode(array("success" => false, "message" => "User not logged in"));
    die;
}

if ($_SERVER['SERVER_NAME'] == constant("SERVER_NAME")) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!isset($_POST['submit'])) {
            echo json_encode(array("success" => false, "message" => "Method not found"));
            die;
        }
        $submit = $_POST['submit'];
        $submit = sql_prevent($conn, xss_prevent($_POST['submit']));
        switch ($submit) {
            case 'vehicle_maintenance_list':
                $query = "select id,amount,description,created_at from vehicle_maintenance";
                $query_execute = mysqli_query($conn, $query);

                if (mysqli_num_rows($query_execute) > 0) {
                    $data = array();
                    while ($result = mysqli_fetch_array($query_execute, MYSQLI_ASSOC)) {
                        $data[] = $result;
                    }
                    echo json_encode(array("success" => true, "data" => $data));
                } else {
                    echo json_encode(array("success" => false, "data" => "NO data found!"));
                }

                break;

            case 'delete':
                $id = sql_prevent($conn, xss_prevent($_POST['id']));

                //check id exist or not
                // encrypt id
                $hash_id = password_hash($id, PASSWORD_DEFAULT);
                $id_decrypt = password_verify($id, PASSWORD_DEFAULT);

                $check_id = "select id from vehicle_maintenance where id= $id";


                if ($check_id) {
                    $query = "DELETE FROM vehicle_maintenance where id='$id'";
                    $query_execute = mysqli_query($conn, $query);
                    if ($query_execute) {
                        echo json_encode(array("success" => true, "message" => "Record Deleted successfully 👍🏻"));
                    } else {
                        echo json_encode(array("success" => false, "message" => "Some error Occured"));
                    }
                }

                break;

            case 'update':
                $id = sql_prevent($conn, xss_prevent($_POST['id']));
                $amount = sql_prevent($conn, xss_prevent($_POST['amount']));
                $vehical_no = sql_prevent($conn, xss_prevent($_POST['vehical_no']));

                $hash_id = password_hash($id, PASSWORD_DEFAULT);
                $id_decrypt = password_verify($id, PASSWORD_DEFAULT);

                $query = "UPDATE `vehicle_maintenance` SET `amount` = '$amount',`description` = '$description' WHERE `vehicle_maintenance`.`id` = $id ";
                $check_id = "select id from vehicle_maintenance where id=$id";

                if ($check_id) {

                    $query_execute = mysqli_query($conn, $query);
                    if ($query_execute) {
                        echo json_encode(array("success" => true, "message" => " Updated successfully👍🏻 "));
                        die;
                    } else {
                        echo json_encode(array("success" => false, "message" => "Some error Occured"));
                        die;
                    }
                }
                break;
            default:
                echo json_encode(array("success" => false, "message" => "Method not found"));
                die;
                break;
        }
    } else {
        echo json_encode(array("success" => false, "message" => "Method not found"));
    }
}
