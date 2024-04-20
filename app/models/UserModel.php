<?php
class UserModel {
private $db;

public function __construct() {
$this->db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($this->db->connect_error) {
die("Connection failed: " . $this->db->connect_error);
}
}

public function __destruct() {
$this->db->close();
}
}
