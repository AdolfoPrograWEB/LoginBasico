<?php
    //Inicializa una sesion
    //session_start();
    
    header("Content-Type: application/json");
    //include_once("../class/class_user.php");
    $_POST = json_decode(file_get_contents('php://input'), true);
    switch($_SERVER['REQUEST_METHOD']) {        
        case 'POST': 
            /*$usuario = UserReg::verificarUsuario($_POST['emailId'],$_POST['passwordId']);
            if($usuario)
            {
                $keyid = uniqid("WEB",true);
                $_SESSION["keyId"] = $keyid;
                setcookie("keyId",$keyid,time()+60*5,"/");
                //echo '{"codigoResultado":1,"mensaje":"Usuario autenticado","keyId":"123"}';
                $resultado = array("codigoResultado"=>1,
                                    "mensaje"=>"Usuario autenticado",
                                    //"keyId"=>123);
                                    "keyId"=>$keyid);
                echo json_encode($resultado);
            }
            else
            {
                setcookie("keyId","",1,"/");
                echo '{"codigoResultado":0,"mensaje":"Usuario/password incorrectos"}';
            }*/
            //echo json_encode($_POST);
            echo '{"codigoResultado":"Mensaje de regreso del curso WEB"}';
            break;
    }
?>