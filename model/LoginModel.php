<?php

class LoginModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function alta($username, $password){
        $sql = "SELECT * FROM usuarios where username = '$username' and password = '$password'";
        $result = $this->database->query($sql);
        if($result['username'] == $username && $result['password'] = $password){
            Redirect::redirect('infonete');
        }else{
            Redirect::redirect('registroForm');
        }
    }
}