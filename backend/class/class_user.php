<?php

class UserReg {
    private $primerNombre;
    private $segundoNombre;
    private $primerApellido;
    private $segundoApellido;
    private $email;
    private $password;

    public function UserReg ($primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $email, $password) {
        $this->primerNombre = $primerNombre;
        $this->segundoNombre = $segundoNombre;
        $this->primerApellido = $primerApellido;
        $this->segundoApellido = $segundoApellido;
        $this->email = $email;
        $this->password = $password;
    }

    public function getPrimerNombre() {
        return $this->primerNombre;
    }
    public function setPrimerNombre($primerNombre) {
        $this->primerNombre = $primerNombre;
    }

    public function getSegundoNombre() {
        return $this->segundoNombre;
    }
    public function setSegundoNombre($segundoNombre) {
        $this->segundoNombre = $segundoNombre;
    }

    public function getPrimerApellido() {
        return $this->primerApellido;
    }
    public function setPrimerApellido($primerApellido) {
        $this->primerApellido = $primerApellido;
    }    
    
    public function getSegundoApellido() {
        return $this->segundoApellido;
    }
    public function setSegundoApellido($segundoApellido) {
        $this->segundoApellido = $segundoApellido;
    }    

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }    

    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }    

    public function createrUsuario() {

    }

    public function obtenerUsuario() {

    }

    public function obtenerUsuarios() {
        
    }

    public function eliminarUsuario() {
        
    }

    public function actualizarUsuario() {
        
    }

    public static function verificarUsuario($email_id, $password_id) {
        $contenidoUsuarios = file_get_contents("../data/users.json");
        $usuarios = json_decode($contenidoUsuarios, true);
        for ($i = 0; $i < sizeof($usuarios); $i++) {
            if($usuarios[$i]["email"] == $email_id && $usuarios[$i]["password"] == $password_id) {
                return $usuarios[$i];
            }
        }
        return null;
    }
}

?>