<?php
define("LOCAL_ENVIORNMENT",true);
if(constant("LOCAL_ENVIORNMENT")===true){
define("HOST_NAME","localhost");
define ("SERVER_NAME","localhost");
define ("DB_USER" ,"root");
define ("DB_PASSWORD" , "");
define ("DB_NAME" , "login");
}
else{
define("HOST_NAME","nukepin.in");
define ("SERVER_NAME","nukepin.in");
define ("DB_USER" ,"nukepin_paradise_hotels");
define ("DB_PASSWORD" , "nukepin_paradise@hotels");
define ("DB_NAME" , "nukepin_paradise");

}
define ("KEY","7654309876234567");
define ("CIPHER","AES-128-CTR");
define ("OPTIONS",0);
?>