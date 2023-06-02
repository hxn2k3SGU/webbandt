// script.js
document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Ngăn chặn gửi form mặc định

    // Thực hiện kiểm tra dữ liệu bằng JavaScript
    var fullname = document.getElementsByName('fullname')[0].value;
    var email = document.getElementsByName('email')[0].value;
    var age = document.getElementsByName('age')[0].value;

    // Kiểm tra dữ liệu hợp lệ
    if (fullname.trim() === '') {
        alert('Họ tên không được để trống');
    }

    if (email.trim() === '') {
        alert('Email không được để trống');
    }

    if (age.trim() === '') {
        alert('Tuổi không được để trống');
        return
    }

    // Nếu dữ liệu hợp lệ, chuyển hướng form sang trang xử lý PHP
    this.action = 'xuly.php';
    this.submit();
});
