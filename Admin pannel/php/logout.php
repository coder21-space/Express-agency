<?php

include 'function.php';
if(!user_check($conn)){
   echo 'you are logged out';
}
session_destroy();
header('location:./index.php');

?>