<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../coban/style/style.css">
</head>
<body>
    <div id="main">
        <div id="header">
            <?php require('header.php'); ?>
        </div>
        <?php require('menu.php'); ?>
        <div id="mid">
            <div id="left-menu">
                <a href='index.php?vitri=tc'><div>Trang chủ</div></a>
                <a href='index.php?vitri=gt'><div>Giới thiệu</div></a>
                <a href='index.php?vitri=ttdt'><div>Thông tin đào tạo</div></a>
                <a href='index.php?vitri=ttts'><div>Thông tin tuyển sinh</div></a>
            </div>
        </div>
        <div id="content">
            <?php 
            include('content.php');
            ?>
        </div>
        <div id="footer">footer</div>
    </div>
    <script>
        var name_arr = {"HP" , "ASUS" , "LENOVO" , "DELL"}
        for (var i = 0 ; i < name_arr.lengt)
    </script> 

</body>
</html>