<?php
require_once '../app/models/DatabaseHandler.php';
require '../vendor/autoload.php';
class UserController {
private $userModel;

public function __construct() {
$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
$dbHandler = new DatabaseHandler($dsn, DB_USER, DB_PASSWORD);
require_once '../app/models/UserModel.php';
$this->userModel = new UserModel($dbHandler);
}

public function index() {        
// Pass data to the view
require_once '../app/views/user/index/index.php';
}

public function display() {
require_once '../app/views/user/display/index.php';
}

}
