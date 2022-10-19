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

            if($result['mail'] == $username && $password == $result['password']){//$this->getPasswordValido($password, $result['password'])){
                Redirect::redirect('/');
            }else{
                Redirect::redirect('login/alta');
            }
        }
    }

    /*
        public function getPasswordValido($hash, $valid){
            //PASSWORD_VERIFY ES UNA FUNCION QUE COMPARA CONTRASEÑAS CON HASH
            return password_verify($hash, $valid);
        }*/
}