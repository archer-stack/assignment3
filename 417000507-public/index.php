<?php
    error_reporting(E_ALL); 
    ini_set('display_errors', 'on');
    require "../../417000507-private/autoloader.php";

    $frontController = new FrontController();

$frontController->getRequestHandler()->route("/", "IndexCommand");
$frontController->getRequestHandler()->route("/index.php", "IndexCommand");

$action = basename($_SERVER['REQUEST_URI']);
$frontController->getRequestHandler()->dispatch($action);

?>