<?php
chdir(dirname(__DIR__));
require 'C:/laragon/www/Portfolio/controllers/IndexController.php';
require 'C:/laragon/www/Portfolio/controllers/RegisterController.php';
if (!isset($_GET['controller']))
{
    $controllerName = 'C:/laragon/www/Portfolio/controllers\\IndexController';
    $action         = 'indexAction';
}
else
{
    $controllerName     = 'C:/laragon/www/Portfolio/controllers\\' . ucfirst($_GET['controller']) . 'Controller';
    $action             = $_GET['action'] . 'Action';
}
$controller = new $controllerName();
$controller->$action();
?>