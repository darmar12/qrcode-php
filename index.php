<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>PHP QRcode generator</title>
</head>
<body>
    <div class="wrapper">
        <div class="qrcode">
            <h1 class="qrcode__title">QRcode generator</h1>
            <form action="qrcode.php" method="post" class="qrcode__form">
                <input type="text" name="qrcode" id="qrcode" placeholder="Enter QR Text" class="qrcode__input" required>
                <input type="submit" value="QR Generate" class="qrcode__btn">
            </form>
        </div>
    </div>
</body>
</html>