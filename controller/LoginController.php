<?php

class LoginController{
    private $renderer;
    private $model;

    public function __construct($render, $model){
        $this->renderer = $render;
        $this->model = $model;
    }
    public function list(){
        echo "nada";
        /* $data['login'] = $this->model->getLogin();

         $this->renderer->render('loginForm.mustache', $data);*/
    }

    public function alta(){
        echo $this->renderer->render("loginForm.mustache");
    }

    public function procesarAlta(){
        $username = $_POST["username"];
        $password  = $_POST["password"];

        $this->model->alta($username, $password);

        //LLEVA A LA HOME
       // Redirect::redirect('/');
    }
}