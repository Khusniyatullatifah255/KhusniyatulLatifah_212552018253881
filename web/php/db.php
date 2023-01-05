<?php

$conn = mysqli_connect('localhost','root','','usersform');
if(mysqli_connect_errno()){
    echo "Connection Denied!". mysqli_connect_error();
}
?>