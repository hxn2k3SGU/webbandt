<!DOCTYPE html>
<html>

<head>
    <title>Đăng ký Email</title>
</head>

<body>
    <h2>Đăng ký Email</h2>
    <form name="form-dky" action="xuly.php" method="get" onsubmit="checkdky();">
        <div class="email">
            <label for="email">Email:</label>
            <div>
                <input type="email" id="email" name="email" required>
            </div>
        </div>
        <div class="mssv">
            <label for="mssv">Mã số sinh viên: </label>
            <div>
                <input type="text" name="mssv" id="mssv">    
            </div>
        </div>
        <div class="sdt">
            <label for="sdt">Số điện thoại:</label>
            <div>
                <input type="number" name="sdt" id="sdt">
            </div>
        </div>
        <div class="btn">
            <input type="submit" id="dangky" value="Đăng ký">
        </div>
    </form>

    <script>
        function validateEmail(email) {
            var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (pattern.test(email)) {

                return true;
            } else {
                return false;
           }
        }
        function validateMSSV(mssv){
            var pattern = /^\d{8}$/;
            if (pattern.test(mssv)){
                return 
            }
        }

        function checkdky(){
            var email = document.getElementById('email').value;
            if(!validateEmail(email)){
                alert("Email không hợp lệ!");
                event.preventDefault();
            }
        }
    </script>
</body>

</html>





