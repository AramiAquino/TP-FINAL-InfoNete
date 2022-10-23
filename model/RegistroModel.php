<?php

class RegistroModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function alta($name, $mail, $password, $residencia){

        //CREAMOS UN HASH PARA QUE LA CONTRASEÑA SEA SEGURA
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $rol = $this->getRole();

        $sqlPassword = "INSERT INTO passwords (clave, verificado,vencimiento) VALUES('$hash', '', '')";
        $this->database->execute($sqlPassword);

        $sqlTraerPassword = "SELECT id FROM passwords WHERE clave = '$hash'";
        $resultados = $this->database->query($sqlTraerPassword);

        $pass = $resultados[0]['id'];

        $sql = "INSERT INTO usuarios (mail, password,ubicacion, role, estado) VALUES('$mail', '$pass', '$residencia', '$rol', 0)";

        return $this->database->execute($sql);

    }

    private function getRole(){
        //DEFINIMOS EL ROL PARA CUALQUIER USUARIO NUEVO
        return 'lector';
    }

}