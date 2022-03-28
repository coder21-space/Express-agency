<?php

include 'connection.php';
    
    function xss_prevent($value){
       return strip_tags(htmlspecialchars($value));
    }

    function sql_prevent($conn,$value){

        return mysqli_real_escape_string($conn,$value);
    }
