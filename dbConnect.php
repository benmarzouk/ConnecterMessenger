<?php
$conn=mysqli_connect("localhost","root","123456","connectermessenger",'3306');
if(!$conn){
    die("connection failed".mysqli_connect_error());
}
?>