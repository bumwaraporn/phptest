<?php
include("connect.php");
$user = $_POST["user"];
$sql = "DELETE FROM member WHERE email='".$user."'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>