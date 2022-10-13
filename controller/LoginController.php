<?php

class LoginController{
    private $render;
    private $view;
    private $model;
/*
    public function __construct($render){
        $this->render = $render;
    }*/

    public function __construct($render, $model){
        $this->render = $render;
        $this->model = $model;
    }

    public function alta(){
        echo $this->render->render("login.mustache");
    }

    public function procesarAlta(){
        $username = $_POST["username"];
        $password  = $_POST["password"];

        $this->model->alta($username, $password);

        Redirect::redirect('/');
    }
    public function list(){
        echo "nada";
    }
}