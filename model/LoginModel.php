<?php

class LoginModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }
/*
    public function getUsers($username, $password){
        $sql = "SELECT * FROM usuarios where username = " . $username . " and password = " . $password;
        return $this->database->query($sql);
    }*/

    public function alta($username, $password){
        $sql = "SELECT * FROM usuarios where username = " . $username . " and password = " . $password;
        return $this->database->query($sql);
    }
}