<?php
    session_start();
    echo "Cookie:  ".$_COOKIE["keyId"]."<br>";
    echo "Session: ".$_SESSION["keyId"];
?>