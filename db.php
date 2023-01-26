<?php
$DBHost = "localhost";
$DBLogin = 'root';
$DBPassword = 'root';
$DBName = "qrcode_test";
$conn = mysqli_connect($DBHost, $DBLogin, $DBPassword, $DBName) or die("Connection failed: " . mysqli_connect_error());
$select_db = mysqli_select_db($conn, $DBName);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>