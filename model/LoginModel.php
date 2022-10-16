<?php

class LoginModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function alta($username, $password){
        $sql = "SELECT * FROM usuarios";

        while($result = $this->database->query($sql)){
            //PASSWORD_VERIFY ES UNA FUNCION QUE COMPARA CONTRASEÑAS CON HASH
            if($result['mail'] == $username && password_verify($password, $result['password'])){
                Redirect::redirect('infonete');
            }else{
                Redirect::redirect('loginForm');
            }
        }
    }
}