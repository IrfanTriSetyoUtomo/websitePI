<?php
$host = "mysql.idhostinger.com";
$user = "u939674455_root";
$password = "123456";
$database_name = "u939674455_web";
$pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>
