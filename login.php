<?php
session_start();
    if(isset($_SESSION["login"])){
       header("location: contoh/index.php");
       exit;
    }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Barang</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- <link href="template/img/favicon.png" rel="icon"> -->
</head>
<body>
    <form class="login" method= "post" action="cekLogin.php">
        <div class="avatar">
            <i class="fa fa-user"></i>
        </div>
        <h2>LOGIN</h2>
        <div class="box-login">
            <i class="fas fa-envelope"></i>
            <input type="text" name ="username" placeholder="Username">
        </div>
        <div class="box-login">
             <i class="fas fa-lock"></i>
            <input type="password" name = "password" placeholder="Password">
        </div>

        <button type= "submit" name = "login"  class="btn-login">Login</button>
        <div class="bottom">
            <a href="">Register</a>
            <a href="">Forgot Password</a>
        </div>
</form>
</body>
</html>