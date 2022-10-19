<?php

class RegistroModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function alta($mail, $password, $ubicacion){
        //DEFINIMOS EL ROL PARA CUALQUIER USUARIO NUEVO
        $roleGeneral = 'lector';
        //CREAMOS UN HASH PARA QUE LA CONTRASEÑA SEA SEGURA
        //$hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (mail, password,ubicacion, role) VALUES('$mail', '$password', '$ubicacion', '$roleGeneral')";

        return $this->database->execute($sql);

    }
}