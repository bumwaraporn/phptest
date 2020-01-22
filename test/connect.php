  
<?php
$servername = "localhost";
$username = "mydata";
$password = "1234";
$dbname = "webtest";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$conn->set_charset("utf8");
?>