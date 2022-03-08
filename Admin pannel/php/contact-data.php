<?php

include 'connection.php';

if ($_SERVER['SERVER_NAME'] == constant("SERVER_NAME")) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $query = "select id,name,email,subject from contact";
        $query_execute = mysqli_query($conn, $query);
        if (mysqli_num_rows($query_execute) > 0) {


            $data = array();
            while ($result = mysqli_fetch_array($query_execute)) {
                $data[] = $result;
            }
            echo json_encode($data);
        }
    } else {
        echo json_encode(array("success" => false, "message" => "Method not found"));
    }
}
