<?php
include_once ("helper/Redirect.php");
include_once("helper/MysqlDatabase.php");
include_once("helper/Render.php");
include_once("Router.php");

include_once("model/LoginModel.php");

include_once("controller/InfoneteController.php");
include_once("controller/LoginController.php");

include_once('third-party/mustache/src/Mustache/Autoloader.php');


class Configuration{

    private $database;
    private $view;

    public function __construct(){
        $this->database = new MysqlDatabase();
        $this->view = new Render("view/", "view/partial/");
    }

    private function getInfoneteController(){
        return new InfoneteController($this->view);
    }

    public function getLoginController(){
        return new LoginController($this->view, $this->getLoginModel());
    }

    public function getRegistroController(){
        return new RegistroController($this->view, $this->getRegistroModel());
    }

    private function getLoginModel(){
        return new LoginModel($this->database);
    }

    private function getRegistroModel(){
        return new RegistroModel($this->database);
    }

    public function getRouter(){
        //Se llama a si mismo para referenciarse
        return new Router($this, "infonete", "list");
    }

}