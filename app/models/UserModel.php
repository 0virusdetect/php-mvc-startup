<?php
require_once 'DatabaseHandler.php';
require_once 'StatementHandler.php';

class UserModel {
private $db;

public function __construct(DatabaseHandler $db) {
$this->db = $db;
}

public function __destruct() {
$this->db = null;
}
}
