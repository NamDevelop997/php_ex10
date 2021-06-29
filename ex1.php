<?php
// kiểm tra và lấy dữ liệu form đăng nhập
if (isset($_POST['submit'])) {
    $infoUser = [
        'userName' => "admin",
        "passWord" => "admin123",
    ];
    $err = [];
    if (empty($_POST['userName'])) {
        $err[] = "userName không được để trống!";
    } else {
        $userName = $_POST['userName'];
    }
    if (empty($_POST['passWord'])) {
        $err[] = "Passwords không được để trống!";
    } else {
        $passWord = $_POST['passWord'];
    }
    if (empty($err)) {
        if ($userName == $infoUser['userName'] and $passWord == $infoUser['passWord']) {
            echo "Login thành công!";
        } else {
            $err[] = "UserName hoặc passWord không chính xác!";
        }
    }


    echo "UserName: " . $userName . "<br>";
    echo "passWord: " . $passWord;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX1- Lấy thông tin đăng nhập và mật khẩu</title>
</head>

<body>

    <form action="" method="POST">
        <label for="userName">userName</label><br>
        <input type="text" id="userName" name="userName" placeholder="userName"><br><br>

        <label for="passWord">passWord</label><br>
        <input type="passWord" id="passWord" name="passWord" placeholder="passWord"><br><br>

        <input type="submit" name="submit" value="submit">


    </form>
</body>

</html>