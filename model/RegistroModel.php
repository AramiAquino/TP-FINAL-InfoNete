<?php

class RegistroModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function alta($mail, $password, $ubicacion){
        $roleGeneral = 'lector';
        $sql = "INSERT INTO usuarios (mail, password,ubicacion, role) VALUES('$mail', '$password', '$ubicacion', '$roleGeneral')";

        return $this->database->execute($sql);

    }
}