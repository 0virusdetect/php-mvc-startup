<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$host = $_SERVER['HTTP_HOST'];
if (strpos($host, 'localhost:') !== false) {
$public='';
} else {
$public='public/';
}

require_once '../config/routes.php';
?>
