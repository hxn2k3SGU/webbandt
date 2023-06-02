<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>String được đặt trong dấu ngoặc đơn hoặc ngoặc kép</h1>
    <h2>Ví dụ: </br></h2>
    <?php
        $x = "xin chao cac ban";
        // $y = "Các bạn tuôi loll";
        echo $x;
        echo "</br>";
        // echo $y ;
        echo "</br>";
        // in ra độ dài của chuỗi x
        echo strlen($x);
        echo "</br>";
        echo str_word_count($x); // hàm đến từ nhưng mà đếm tiếng anh thôi nha cha
        echo "</br>";
        echo strrev($x); //  hàm đảo ngược chuỗi của php
        echo "</br>";
        echo strpos($x , "chao"); // in ra 4 tại vì nó chuỗi "chao ở vị trí thứ 4"
        echo "</br>";
        $pos = strpos($x , "xin");
        // == là ép kiểu rồi so sánh
        // === là so sánh thẳng luôn k ép kiểu
        if($pos === false){ 
            echo "không tồn tại hello trong chuỗi";
        }else{
            echo "chuỗi được tìm thấy ở $pos";
        }
        echo "</br>";
        echo str_replace("world" , "hieu" , "hello world");
        // xuất ra hello hieu
        // hàm str_replace("từ bị thay thế" , "từ thay thế" , "chuỗi ban đầu");

    ?>
</body>
</html>