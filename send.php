<?php
session_start();
include 'dbConnect.php';
$msg=$_POST['msg'];
$name=$_SESSION['name'];

$sql="insert into posts(msg,name) value ('$msg','$name')";
$result=$conn->query($sql);

$name2='Wan Way Communication';
$sql3 = 'SELECT answer from answers where question="'.$msg.'" LIMIT 1';
$result3 = mysqli_query($conn, $sql3);

if (mysqli_num_rows($result3) > 0) {
    while($row3 = mysqli_fetch_assoc($result3)) {
        $msg2=$row3["answer"];
        $sql2="insert into posts(msg,name) value ('$msg2','$name2')";
        $result2=$conn->query($sql2);
    }
} else {
    $msg3="pas compris";
    $sql4="insert into posts(msg,name) value ('$msg3','$name2')";
    $result4=$conn->query($sql4);
}

header("Location:home.php");
?>