<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/cssnew/login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" href="img/iconweb.png">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <a href="index.php" class="floating-button">Trở về trang chủ</a>
        <h1>Đăng nhập</h1>
        <form action="" id="log-in-form">
            <div class="form-control">
                <input type="text" placeholder="Username" id="username">
                <small></small>
                <span></span>
            </div>
            <div class="form-control">
                <input type="password" placeholder="Password" id="password">
                <small></small>
                <span></span>
            </div>
            <div class="form-control">
                <button class="btn-submit" >Đăng nhập</button>
            </div>
            <div id="sign-up-link">
                Tạo tài khoản mới !<a href="signup.php">Đăng ký</a>
            </div>
            <div id="forgot-password">
                Quên mật khẩu ? <a href="#">Lấy lại mật khẩu</a>
            </div>
        </form>
    </div>
    <script src="js/login.js"></script>
</body>
</html>