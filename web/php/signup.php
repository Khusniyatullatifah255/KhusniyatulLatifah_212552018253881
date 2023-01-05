<?php

session_start();
include_once 'db.php';

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['pass']) && isset($_POST['cpass'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = md5($_POST['pass']);
    $cpassword = md5($_POST['cpass']);
    
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($password) && !empty($cpassword)){
        // check email valid 
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn,"SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email ~ Already Exists";
            }
            else{
                if($password == $cpassword){
                    $sql2 = "INSERT INTO users (fname, lname, email, phone, password) VALUES('$fname', '$lname', '$email', '$phone', '$password')";
                    $result = mysqli_query($conn, $sql2);
                    echo "Success";
                }
                else{
                    echo "Confirm Password Don't Match";
                }
            }
        }
        else{
            echo "$email ~ This is not a Valid Email";
        }
    }
    else {
        echo "All Input Fields are Required!";
    }
}
?>