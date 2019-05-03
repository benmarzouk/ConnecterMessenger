<?php
session_start();
include "dbConnect.php";
include 'ChromePhp.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];


$sql="select * from signup where user_name=' ". $uname. " ' and password=' ". $pass. " '";

ChromePhp::log($sql);
if (mysqli_query($conn, $sql)) {
	$_SESSION["name"] = $uname;
	$_SESSION["pass"] = $pass;
 header("Location:home.php");
} else {
header("Location:error.php");
}



?>
