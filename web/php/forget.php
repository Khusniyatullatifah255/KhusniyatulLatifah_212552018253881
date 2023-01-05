<?php
include "db.php";
session_start();

if (isset($_POST['email'])){
    $email = $_POST['email'];
    if(!empty($email)){
        $sql = "SELECT * FROM users WHERE email ='$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($result);
        if($row == 1){
            echo "Valid Input";
        }
        else{
            echo "Email Invalid!.";
        }
    }
    else {
    echo "All Fields Are Required!";
    }
}   
?>