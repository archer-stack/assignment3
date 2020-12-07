<?php
class RequestHandler {

private $routes;

function __construct() {
$this->routes = array();
}

public function route(string $action, string $command):void {
$action = trim($action, "/");
if ($action == null) {

$action = "default";
}
$this->routes[$action] = array("command" => $command);
}

public function dispatch(string $action):void {
$action = trim($action, "/");
if ($action == "417000507-public") {
$action = "default";
}
$command = $this->routes[$action]["command"];
$commandClass = new $command();
$commandClass->execute(new CommandContext());
}
}
?>