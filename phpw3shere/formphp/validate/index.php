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
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // tạo ra mảng error rỗng để lưu lỗi
        // hàm trim là để chuẩn hóa dữ liệu khi mà nó     
        $error = [];
        // validate fullname
        if (empty(trim($_POST['fullname']))) {
            $error['fullname']['required'] = 'Họ tên không được rỗng';
        } else {
            if (strlen(trim($_POST['fullname'])) < 5) {
                $error['fullname']['min']  = 'Họ tên lớn hơn 5 ký tự';
            }
        }
        // validate email 
        if (empty(trim($_POST['email']))) {
            $error['email']['required'] = 'Email không được rỗng';
        } else {
            if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
                $error['email']['invalid'] = 'Email không hợp lệ';
            }
        }
        // validate age
        if (empty(trim($_POST['age']))) {
            $error['age']['required'] = 'Tuổi không được rỗng';
        } else {
            $age = intval($_POST['age']);
            if ($age < 1) {
                $error['age']['invalid'] = 'Tuổi không hợp lệ';
            }
        }
    }
    if (!empty($error)) {
        echo "Validate không thành công";
    } else {
        echo "Validate thành công ";
    }
    ?>
    <form action="" method="POST">
        <p>
            Họ và tên: </br>
            <input type="text" name="fullname" id="" placeholder="Họ và tên" value="<?php echo (!empty($_POST['fullname'])) ? $_POST['fullname'] : '' ?>" ></br>
            <?php
            // Cú pháp toán tử ba ngôi
            // (condition) ? value_if_true : value_if_false
            echo (!empty($error['fullname']['required'])) ? '<span style="color: red;">' . $error['fullname']['required'] . '</span>' : (!empty($error['fullname']['min']) ? '<span style="color: red;">' . $error['fullname']['min'] . '</span>' : '');
            ?>
        </p>
        <p>
            Email: </br>
            <input type="text" name="email" id="" placeholder="Email" value="<?php echo (!empty($_POST['email'])) ? $_POST['email'] : '' ?>" ></br>
            <?php
            echo (!empty($error['email']['required'])) ? '<span style="color: red;">' . $error['email']['required'] . '</span>' : ((!empty($error['email']['invalid'])) ? '<span style="color: red;">' . $error['email']['invalid'] . '</span>' : '');
            ?>
        </p>
        <p>
            Tuổi: </br>
            <input type="text" name="age" id="" placeholder="Nhập tuổi" value="<?php echo (!empty($_POST['age'])) ? $_POST['age'] : '' ?>" ></br>
            <?php
            echo (!empty($error['age']['required'])) ? '<span style="color: red;">' . $error['age']['required'] . '</span>' : ((!empty($error['age']['invalid'])) ? '<span style="color: red;">' . $error['age']['invalid'] . '</span>' : '');
            ?>
        </p>
        <p>
            <input type="submit" value="Xác nhận">
        </p>
    </form>
</body>
</html>