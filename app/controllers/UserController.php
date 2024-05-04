<?php
class UserController {
private $userModel;

public function __construct() {
require_once '../app/models/UserModel.php';
require_once '../public/index.php';
$this->userModel = new UserModel();
}

public function index() {        
// Pass data to the view
require_once '../app/views/user/index/index.php';
}

public function display() {
require_once '../app/views/user/display/index.php';
}

}
