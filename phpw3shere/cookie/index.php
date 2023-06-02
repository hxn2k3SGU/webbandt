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
    // Thiết lập cookie với tên là "username" và giá trị là "John Doe"
    // thời gian sống là 3600 giây và / là tên miền Khi mà tên miền là
    // "/" thì COOKIE hoạt động trên cả một trang 
    // "/path" là địa chỉ mà COOKIE có thể hoạt động
    // setcookie("username", "John Doe", time() + 3600, "/");

    // // Lấy giá trị của cookie
    // if (isset($_COOKIE["username"])) {
    //     echo "Welcome back, " . $_COOKIE["username"];
    // } else {
    //     echo "Cookie not set!";
    // }
        // hàm time là lấy thời gian hiện tại kể từ lúc set cookie + thêm cho số giây 
        // thì ra thời gian mà COOKIE biến mất
        // setcookie("username", "hieu nguyen",time() + 6999 , "/");

        // if(isset($_COOKIE['username'])){
        //     echo "Chào mừng bạn đến với bình nguyên vô tận : " . $_COOKIE['username'];
        // }else{
        //     echo "Chưa có COOKIE";
        // }
        

        // $cookie_name = "username";
        // $cookie_value = "hieu nguyen";

        // // cách delete cookie thì cho ngày hết hạn ở quá khứ 
        // setcookie($cookie_name , $cookie_value , time() - 7000);


        // hàm isset là để kiếm tra biến đã khai báo trước đó có rỗng hay không
        // if(!isset($_COOKIE[$cookie_name])){
        //     echo "COOKIE named: " .$cookie_name. " is not set";
        // }else{
        //     echo "COOKIE named: " .$cookie_name. " is set";
        //     echo " Value : ".$_COOKIE[$cookie_name];
        // }
        

        // kiểm tra COOKIE có được bật hay không thì dùng hàm đếm nếu có thì bật và ngược lại
        setcookie("username" , "hieu nguyen code ngu vch" , time() - 7000 , "/");

        if(count($_COOKIE) > 0){
            echo "COOKIE đang bật";
        }else{
            echo "COOKIE đang tắt";
        }



    ?>



    



</body>

</html>