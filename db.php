<?php
$DBHost = "localhost";
$DBLogin = 'root';
$DBPassword = '';
$DBName = "qrcode_test";
$conn = mysqli_connect($DBHost, $DBLogin, $DBPassword);
$select_db = mysqli_select_db($conn, $DBName);
if(!$select_db) echo("Error connect to db");
?>