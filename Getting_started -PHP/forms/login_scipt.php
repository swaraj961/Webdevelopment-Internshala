<?php

require 'commmon.php'; 
// it have the connection files to the database 

$email= $_POST['email'];
$regex_email= "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";

if (!preg_match($regex_email,$email)){
    // echo"Invaild Email id";
    header('location:index.php?email_error=Invalid email ID');
}

$password = $_POST['password'];
if(!strlen($password>=6)){
header('location:index.php? passsword_error=Password must be greater than 6 - characters');
    // echo"Password must be greater than 6 - characters";

}

$email = mysqli_real_escape_string($con,$email);
$password = mysqli_escape_string($con, $password);
// incase requirement is not fulfilled by user then he needs to fill the data again 





?>
