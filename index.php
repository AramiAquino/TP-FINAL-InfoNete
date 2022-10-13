<?php

include_once("helper/Configuration.php");
$configuration = new Configuration();
$router = $configuration->getRouter();

$router->redirect($_GET['controller'], $_GET['method']);