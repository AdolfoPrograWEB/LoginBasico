<?php
    setcookie("keyId","",1,"/");
    session_start();
    session_destroy();
    header("location: ../../login.html");
?>