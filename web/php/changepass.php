<?php
session_start();
include "db.php";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = md5($_POST['npass']);
    $password1 = md5($_POST['cmpass']);
    if ($password and $password1 = true){
        $sql = "UPDATE users SET password ='$password' WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        echo "Valid Input";
    }
    else if ($password and $password1 = false){ 
        echo "Password must match!";
    }
    else{
    echo "All Fields Are Required!";
    }
} 

session_reset();