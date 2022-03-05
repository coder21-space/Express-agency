<?php

include 'connection.php';


    function xss_prevent($value){
       return strip_tags(htmlspecialchars($value));
    }

    function sql_prevent($conn,$value){

       return mysqli_real_escape_string($conn,$value);
    }
    
    function encryption($enc,$iv){  
        
    return openssl_encrypt($enc,constant("CIPHER"),constant("KEY"),constant("OPTIONS"),$iv);
    }
    function decryption($value, $iv)
{
    return openssl_decrypt($value, constant("CIPHER"), constant("KEY"), constant("OPTIONS"), $iv);
}
?>
