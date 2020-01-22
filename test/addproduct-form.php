<?php session_start();
if (!$_SESSION["email"]){
	header("location:form-login.php"); 
}else { ?>

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
    <header>ขายbook</header><br><br>
    
	<h1>เพิ่มสินค้า</h1>
	<form action="addproduct.php" method="post">
		ชื่อสินค้า : <input type="text" name="name"> <br>
		จำนวน : <input type="text" name="amount"> <br>
		<input type="submit" value="ยืนยัน">
	</form>
</body>
</html>
<?php } ?>