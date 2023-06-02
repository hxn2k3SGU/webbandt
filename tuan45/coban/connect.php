<?php
    $servername = "localhost"; // Tên server
    $username = "root"; // Tên đăng nhập vào MySQL
    $password = ""; // Mật khẩu đăng nhập vào MySQL
    $dbname = "quanlybandt"; // Tên cơ sở dữ liệu
    
    // Tạo kết nối đến MySQL
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }
    echo "Kết nối thành công";
?>