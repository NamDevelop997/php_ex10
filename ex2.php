<?php
// hiển thị thông tin người dùng
$fullName = $_POST['hoVaTen'];
$userName = $_POST["tenDangNhap"];
$passWord = $_POST["matKhau"];
$email = $_POST["email"];
$phone = $_POST["sdt"];
$genders = $_POST["gioiTinh"];

echo "fullName: {$fullName} <br> userName: {$userName} <br> password: {$passWord} <br> email: {$email} <br> phone: {$phone} <br> genders: {$genders} "
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex2</title>
</head>

<body>
    <form action="" method="POST">
        <label for="hoVaTen">Họ và Tên</label><br>
        <input type="text" id="hoVaTen" name="hoVaTen" placeholder="Họ và Tên"><br><br>

        <label for="tenDangNhap">Tên đăng nhập</label><br>
        <input type="text" id="tenDangNhap" name="tenDangNhap" placeholder="Tên đăng nhập"><br><br>

        <label for="matKhau">Mật Khẩu</label><br>
        <input type="password" id="matKhau" name="matKhau" placeholder="Mật Khẩu"><br><br>

        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" placeholder="Email"><br><br>

        <label for="sdt">Số điện thoại</label><br>
        <input type="number" id="sdt" name="sdt" placeholder="Số điện thoại"><br><br>


        <input type="radio" id="nam" name="gioiTinh" value="male" checked="checked">
        <label for="nam">Nam</label><br>
        <input type="radio" id="nu" name="gioiTinh" value="feMale">
        <label for="nu">Nữ</label><br><br>

        <input type="submit" name="submit" value="submit">

    </form>
</body>

</html>