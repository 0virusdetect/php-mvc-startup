<?php
require_once '../config/database.php';
require_once '../app/controllers/UserController.php';

$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$parts = explode('/', $uri);
$firstPart = $parts[1]; 
$desiredLink = '/' . $firstPart;
$route1 = str_replace($desiredLink, '', $uri);

if($route1 == ''){
$route1=  $uri;
}

$userController = new UserController();
switch ($route1) {
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
