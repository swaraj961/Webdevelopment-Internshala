<?php 

$con = mysqli_connect("localhost","root","","loginform") or die($con);
// data insertion throught form working now
    
$name = $_POST['name'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$user_resgister_query = "INSERT  into users VALUES ('$name','$email','$phoneno')" ;


$user_register_submit = mysqli_query($con,$user_resgister_query) ;
echo"user register succesfully"


?>