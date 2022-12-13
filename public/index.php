<?php
chdir(dirname(__DIR__));
require 'Portfolio/controllers/IndexController.php';
require 'Portfolio/controllers/RegisterController.php';
if (!isset($_GET['controller']))
{
    $controllerName = 'controllers\\IndexController';
    $action         = 'indexAction';
}
else
{
    $controllerName     = 'controllers\\' . ucfirst($_GET['controller']) . 'Controller';
    $action             = $_GET['action'] . 'Action';
}
$controller = new $controllerName();
$controller->$action();
?>