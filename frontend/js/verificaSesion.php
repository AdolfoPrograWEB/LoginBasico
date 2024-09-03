<?php
    function verificaSesion() {
        session_start();
        if(!isset($_SESSION["keyId"])) 
            header("location: ../../error401.html");
        if(!isset($_COOKIE["keyId"])) 
            header("location: ../../error401.html");    
        if($_COOKIE["keyId"] != $_SESSION["keyId"])
            header("location: ../../error401.html");

    }
?>