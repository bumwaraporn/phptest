<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<style>
		body, input{
			text-align: center;
			margin-bottom: 1%;
		}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}
	</style>
<body>
    <header>ขายbook</header>
	<h1>เข้าสู่ระบบ</h1>
	<form action="login.php" method="post">
		Email : <input type="text" name="user"> <br>
		Password : <input type="password" name="pass"> <br>
		<input type="submit" value="เข้าสู่ระบบ">
	</form>
	<a href="register-form.php" target="_blank">สมัครสมาชิก</a>
</body>
</html>