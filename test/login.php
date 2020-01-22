<?php 
session_start();
if(isset($_POST["user"])){
	
	include("connect.php");

    $user = $_POST["user"];
    $pass = $_POST["pass"];

    $sql="SELECT * FROM member WHERE email='".$user."' and password='".$pass."'";
    $result = $conn->query($sql);

	if ($result->num_rows > 0) {
    	while($row = $result->fetch_assoc()) {
			$_SESSION["email"] = $row["email"];
            $_SESSION["password"] = $row["password"];
			
			if($_SESSION["email"]==$user && $_SESSION["password"]==$pass){ 
                header("location:home-form.php");
            } else {
				header("location:login-form.php");
			}
		}
	} else {
		header("location:login-form.php");
    }
}                 
?>