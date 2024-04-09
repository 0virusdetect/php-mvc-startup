<?php
require_once '../config/database.php';
require_once '../app/controllers/UserController.php';

$request_uri = $_SERVER['REQUEST_URI'];
$route1 = parse_url($request_uri, PHP_URL_PATH);
$base_uri = '/mvc_startup';
$route = str_replace($base_uri, '', $route1);


$userController = new UserController();

switch ($route) {
case '/':
$userController->index();
break;

case '/display':
$userController->display();
break;

default:
// Handle 404 Not Found
http_response_code(404);
echo '404 Not Found';
break;
}
?>
