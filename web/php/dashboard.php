<?php

session_start();
include_once 'db.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../css/Style.css">
</head>
<header id="header">
        <a href="" class="Cover"><h1>Dashboard</h1></a>
        <nav>
            <ul class="navigation">
                <li><a href="login.php"><button class="logout_btn">Log Out</button></a></li>
            </ul>
        </nav>
</header>
<body>
    <div class="container-1">
        <div class="rows">
            <h2> Welcome....! <?php if(isset($_SESSION['email'])){ $email = $_SESSION['email'];echo "$email"; }?></h2>
        </div>
    </div>
    
</body>
<footer>
    <div class="container">
        <div class="row">
            <div class="isi">
                <h3>About Us</h3>
                <p>Ini adalah sebuah website tugas dan uas Sistem Aplikasi Web</p>
            </div>
            <div class="isi">
                <h3>Create By</h3>
                <li>Khusniyatul Latifah</li>
                <li>212552018253881</li>
            </div>
        </div>
    </div>
</footer>
</html>