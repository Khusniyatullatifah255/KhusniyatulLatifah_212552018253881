<?php
session_start();
include_once 'db.php';

if (isset($_POST['email']) && isset($_POST['pass'])){
    $email = $_POST['email'];
    $password = $_POST['pass'];
    if(!empty($email) && !empty($password)){
        $sql = "SELECT * FROM users WHERE email ='{$email}' AND password = '{md5($password)}'";
        $result = mysqli_query($conn, $sql);
        if($result){
            if (isset($_POST['remember'])){
                setcookie('email', $email, time()+60*60*7);
                setcookie('pass', $password, time()+60*60*7);
            }
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $password;
            echo "Valid Input";
        }
        else{
            echo "Email or Password Invalid!.";
        }
    }
    else {
        echo "All Fields Are Required!";
    }
}
?>