<?php
$DBHost = "localhost";
$DBLogin = 'root';
$DBPassword = 'root';
$DBName = "qrcode_test";
$conn = mysqli_connect($DBHost, $DBLogin, $DBPassword);
$select_db = mysqli_select_db($conn, $DBName);
if(!$select_db) echo("Error connect to db");
?>