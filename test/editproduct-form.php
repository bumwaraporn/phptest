<?php session_start();
if (!$_SESSION["email"]){
	header("location:login-form.php"); 
}else { 

include("connect.php");
$id = $_POST["id"];
	
$sql = "SELECT * FROM stock WHERE id='".$id."'";
$result = $conn->query($sql);
?>

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
    
	<h1>แก้ไขสินค้า</h1>
	<?php 
	if ($result->num_rows > 0) {
    	while($row = $result->fetch_assoc()) {
	?>
	<form action="editproduct.php" method="post">
		รหัสสินค้า : <input type="text" name="id" value="<?php echo $row["id"]; ?>" readonly> <br>
		ชื่อสินค้า : <input type="text" name="name" value="<?php echo $row["name"]; ?>"> <br>
		จำนวน : <input type="text" name="amount" value="<?php echo $row["amount"]; ?>"> <br>
		<input type="submit" value="ยืนยัน">
	</form>
	<?php }
	} else {
    	echo "0 results";
	} ?>
</body>
</html>
<?php $conn->close(); } ?>