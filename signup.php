<?php
include "dbConnect.php";
include 'ChromePhp.php';

$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['password'];

$sql="insert into signup(user_name,email,password)
 values ('$uname','$email','$pass')";
 ChromePhp::log($sql);
if (mysqli_query($conn, $sql)) {
	header("Location:index.php");
} else {
 header("Location:error.php");
}

?>
