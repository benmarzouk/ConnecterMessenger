<?php
session_start();
include "dbConnect.php";
?>
<!DOCTYPE html >
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet"type="text/css"href="home.css">
</head>
<body><img  src="https://www.1waycom.com/wp-content/uploads/2018/01/cropped-1way140x70.png" class="custom-logo" alt="Centre d'appels – 1waycom" itemprop="logo" >
<div id="main" class="home-main">
    <h1 style="width: 100%;background-color: #a7beb6;color: teal;font-size: 20px"><span class="home-title"><?php  echo $_SESSION['name']?>-online</span></h1>
    <div class="output">
        <?php $sql = "SELECT * FROM posts";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            //output data of each row
            while($row = $result->fetch_assoc()){
                echo "".$row["name"].":".$row["msg"].":".$row["date"]. "<br>";
                echo  "<br>";
            }
        } 
        $conn->close();
        ?>
    </div>
<form method="post"action="send.php" class="send-main">
    <textarea name="msg" placeholder="Type to send message...." class="form-control"></textarea><br>
    <input type="submit" value="Send">
</form>
 <br>
    <form action="logout.php">
        <input style="width: 100%;background-color: #a7beb6;color:teal;font-size: 20px;" type="submit" value="Logout">
    </form>
</div>
</body>
</html>