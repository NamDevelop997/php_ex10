<?php

// Lấy thông tin từ thanh url bằng method $_GET
$product = $_GET['mod'];
$act = $_GET['act'];

echo $product . "<br>" . $act;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex3</title>
</head>

<body>
    <a href="?mod=product&act=main">Sản phẩm</a>
</body>

</html>