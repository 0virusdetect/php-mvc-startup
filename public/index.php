<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = $_SERVER['HTTP_HOST'];
if (strpos($host, 'localhost:') !== false) {
$public='';
} else {
$public='public/';
}

require_once '../config/routes.php';

