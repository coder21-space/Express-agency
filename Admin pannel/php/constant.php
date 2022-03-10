<?php
define("LOCAL_ENVIORNMENT", true);
if (constant("LOCAL_ENVIORNMENT") === true) {
    define("HOST_NAME", "localhost");
    define("SERVER_NAME", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "express_agency");
} else {
    define("HOST_NAME", "nukepin.in");
    define("SERVER_NAME", "nukepin.in");
    define("DB_USER", "nukepin_express_agency");
    define("DB_PASSWORD", "nukepin_expressagency@gmail.com");
    define("DB_NAME", "nukepin_express");
}
define("KEY", "7654309876234567");
define("CIPHER", "AES-128-CTR");
define("OPTIONS", 0);
?>