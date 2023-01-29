<?php 
require_once 'db.php';
require_once 'phpqrcode/qrlib.php';

$DIR_FOR_QRCODES = 'src/images/';

if (!file_exists($DIR_FOR_QRCODES)) {
    mkdir($DIR_FOR_QRCODES);
}

if(isset($_POST["qrcode"])) {
    $qrText = $_POST["qrcode"];
    $qrImageName = 'qrcode_'.md5($qrText).'.png';
    $qrPath = $DIR_FOR_QRCODES . $qrImageName;
    $query = mysqli_query($conn, "INSERT INTO qrcodes (qrtext, qrimage) VALUES ('$qrText', '$qrImageName')");
    QRcode::png($qrText, $qrPath);
    echo "<div style='display: flex; flex-direction: column; gap: 10px;'><img src='/".$qrPath."' alt='QRcode image' style='width: 200px'; heigth: 200px; object-fit: contains;>";
    echo "<a href='/'>Назад</a></div>";
}