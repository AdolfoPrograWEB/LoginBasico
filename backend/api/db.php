<?php
    header("Content-Type: application/json");
    
    session_start();
        if(!isset($_SESSION["keyId"])) {
            echo '{"mensaje":"Acceso no autorizado"}';
            exit;
        }
        if(!isset($_COOKIE["keyId"]))  {
            echo '{"mensaje":"Acceso no autorizado"}';
            exit;
        }    
        if($_COOKIE["keyId"] != $_SESSION["keyId"]) {
            echo '{"mensaje":"Acceso no autorizado"}';
            exit;
        }
        
    include_once("..class/class_user.php");    
    $_POST = json_decode(file_get_contents('php://input'), true);
    switch($_SERVER['REQUEST_METHOD']) {
        case 'POST': 
            break;
        case 'GET':
            if(isset($_GET['id'])) {
                // obtiene un usuario
            } else {
                // obtiene todos los usuarios
            }
            break;
        case 'PUT':
            break;
        CASE 'DELETE':
        break;
    }
?>