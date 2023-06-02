<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // bắt đầu một phiên làm việc
    session_start();
    // thay đổi một biến trong phiên
    $_SESSION['fvacolor'] = 'black';
    print_r($_SESSION);
    echo "</br>";
    ?>
    <?php
    // cách gỡ hét biến của phiên
    session_unset();
    print_r($_SESSION);
    echo "</br>";
    // hủy phiên
    session_destroy();
    echo "All session variables are now removed, and the session is destroyed."
    ?>
</body>

</html>