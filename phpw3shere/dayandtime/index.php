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
        echo "Hôm nay là ngày : ". date("d/m/y") . "</br>";
        echo "Hôm nay là ngày : ".date("d.m.y"). "</br>";
        echo "Hôm nay là ngày : ".date("d-m-y"). "</br>";
        echo "Hôm nay là thứ : ".date("l") . "</br>";
        // hàm này set thời gian theo khu vực
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        echo "Hiện tại là: " .date("h:i:s"). "</br>";
    ?>
</body>
</html>