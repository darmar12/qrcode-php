<?php 
// require_once 'db.php';
require_once 'phpqrcode/qrlib.php';

if(isset($_POST["qrcode"])) {
    $qrText = $_POST["qrcode"];
    $qrPath = 'images/'.time().'.png';
    $qrImageName = time().'.png';
    $query = mysqli_query($connection,"INSERT INTO qrcodes SET qrtext='$qrText', qrimage='$qrImageName'");
    QRcode::png($qrText, $qrPath, "H", 10, 10);
    echo "<img src='.$qrPath.' alt='QRcode image'>";
}
