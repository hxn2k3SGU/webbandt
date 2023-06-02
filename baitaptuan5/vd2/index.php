<!DOCTYPE html>
<html>
<head>
	<title>Tính hiệu hai số</title>
</head>
<body>
	<h2>Các phép tính cơ bản của hai số</h2>
	<form method="post">
		<label for="a">Nhập số a:</label>
		<input type="number" id="a" name="a" value="<?php if(isset($_POST['a'])) echo $_POST['a']; ?>"><br><br>
		<label for="b">Nhập số b:</label>
		<input type="number" id="b" name="b" value="<?php if(isset($_POST['b'])) echo $_POST['b'] ?>"><br><br>
        <input type="text" value="<?php if(isset($_POST['a']) && isset($_POST['b'])) echo ($_POST['a'] - $_POST['b']); ?>">
		<input type="submit" name="" value="Trừ"><br>
</body>
</html>

