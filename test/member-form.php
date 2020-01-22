<?php session_start();
if (!$_SESSION["email"]){
	header("location:login-form.php"); 
}else { 

include("connect.php");
$sql = "SELECT * FROM member";
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
			margin-bottom: 3%;
		}
		table, td, th{
			border: 1px solid black;
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

	<h2>รายชื่อสมาชิก</h2>
	<table align="center">
		<tr>
			<th>ชื่อสมาชิก</th>
			<th>รหัสผ่าน</th>
			<th>ลบสมาชิก</th>
		</tr>
		<?php 
		if ($result->num_rows > 0) {
    		while($row = $result->fetch_assoc()) {
		?>
		<tr>
    		<td><?php echo $row["email"]; ?></td>
			<td><?php echo $row["password"]; ?></td>
			<td>
				<form action="delmember.php" method="post" target="_blank">
					<button type="submit" value="<?php echo $row["email"]; ?>" name="user">ลบสมาชิก</button>
				</form>
			</td>
  		</tr>
		<?php }
			} else {
    			echo "0 results";
		} ?>
	</table>
</body>
</html>
<?php $conn->close(); } ?>