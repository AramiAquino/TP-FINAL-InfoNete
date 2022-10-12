<?php

class LoginController{
    private $render;

    public function __construct($render){
        $this->render = $render;
    }

    public function execute(){
        echo $this->render->render("view/login.php");
    }

    public function procesarFormulario(){
        $data["username"] = $_POST["username"];
        $data["password"]  = $_POST["password"];
        echo $this->render->render( "view/login.php", $data);
    }
}