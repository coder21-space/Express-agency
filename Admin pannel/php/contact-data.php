<?php

use LDAP\Result;

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
        switch ($submit) {
            case 'contact-list':
                $query = "select id,name,email,subject from contact";
                $query_execute = mysqli_query($conn, $query);

                if (mysqli_num_rows($query_execute) > 0) {
                    $data = array();
                    while ($result = mysqli_fetch_array($query_execute, MYSQLI_ASSOC)) {
                        $data[] = $result;
                    }
                    echo json_encode(array("success" => true, "data" => $data));
                    die;
                } else {
                    echo json_encode(array("success" => false, "data" => "data not found"));
                    die;
                }

                break;
            case 'contact-delete':
                $id = $_POST['id'];
                $query = "DELETE FROM contact where id='$id'";
                $query_execute = mysqli_query($conn, $query);
                if ($query_execute) {
                    echo json_encode(array("success" => true, "message" => "Record Deleted successfully"));
                } else {
                    echo json_encode(array("success" => false, "message" => "Some error Occured"));
                }
                break;
            case 'contact-message':
                // $id = sql_prevent($conn, xss_prevent($_POST['id']));
                $id = $_POST['id'];
                $query = "SELECT message FROM contact where id='$id' ORDER BY created_at DESC";
                $query_execute = mysqli_query($conn, $query);
                if (mysqli_num_rows($query_execute) > 0) {
                    $message = array();
                    while ($result = mysqli_fetch_array($query_execute, MYSQLI_ASSOC)) {
                        $message[] = $result;
                    }
                    echo json_encode(array("success" => true, "data" => $message));
                } else {
                    $message[] = "No information found!";
                    echo json_encode(array("success" => false, "message" => $message));
                }
                break;
            case 'previous-contact':
                $user_email = $_POST['email'];
                $query = "SELECT id, name, email, subject, created_at FROM contact  WHERE email = '" . $user_email . "' ORDER BY created_at DESC";
                $query_execute2 = mysqli_query($conn, $query);

                if (mysqli_num_rows($query_execute2) > 0) {
                    $data2 = array();
                    while ($result2 = mysqli_fetch_array($query_execute2, MYSQLI_ASSOC)) {
                        $data2[] = $result2;
                    }
                    echo json_encode(array("success" => true, "data" => $data2, 'data-no' => mysqli_num_rows($query_execute2)));
                } else {
                    echo json_encode(array("success" => true, "data" => "NO data found!"));
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
