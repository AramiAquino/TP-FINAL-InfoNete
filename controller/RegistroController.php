<?php

class RegistroController{
    private $renderer;
    private $model;

    public function __construct($render, $model){
        $this->renderer = $render;
        $this->model = $model;
    }
    public function list(){
        echo "nada";
    }

    public function alta(){
        echo $this->renderer->render("registroForm.mustache");
    }

    public function procesarAlta(){
        $mail = $_POST["username"];
        $password  = $_POST["password"];
        $ubicacion  = $_POST["ubicacion"];

        if($this->model->alta($mail, $password, $ubicacion)){
            //LLEVA A LA HOME
            Redirect::redirect('/');
        }else{
            Redirect::redirect('/alta');
        }


    }
}