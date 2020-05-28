<?php 
$con = mysqli_connect("localhost","root","","ecommerce") or die($con);
$name = $_POST['name'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$user_resgister_query = "INSERT into users (name ,email_id, phoneno) VALUES ('$name','$email','$phoneno')";
die($user_resgister_query);

$user_register_submit = mysqli_query($con,$user_resgister_query) or die($user_resgister_query);
echo"user register succesfully"


?>