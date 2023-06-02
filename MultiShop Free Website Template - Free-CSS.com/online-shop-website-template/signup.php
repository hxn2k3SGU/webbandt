<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/cssnew/signup.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" href="img/iconweb.png">
    <title>Document</title>
</head>
<body>
    <a href="index.php" class="floating-button">Trở về trang chủ</a>
    <div class="container">
        <h1>Đăng ký</h1>
        <form action="" id="reg-form">
            <div class="form-control">
                <input type="text" placeholder="Username" id="username">
                <small></small>
                <span></span>
            </div>
            <div class="form-control">
                <input type="email" placeholder="Email" id="email">
                <small></small>
                <span></span>
            </div>
            <div class="form-control">
                <input type="text" placeholder="Password" id="password">
                <small></small>
                <span></span>
            </div>
            <div class="form-control">
                <input type="text" placeholder="Confirm password" id="re-password">
                <small></small>
                <span></span>
            </div>
            <div class="form-control btn">
                 <button type="submit" class="btn-submit">Sign-up</button> 
            </div>
            <div id="login-link">
                Bạn đã có tài khoản ! <a href="login.php">Login</a>
            </div>
        </form>
    </div>
    <script src="js/signup.js"></script>
</body>
</html>