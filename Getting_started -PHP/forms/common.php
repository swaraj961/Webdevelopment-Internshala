<?php 
  $con = mysqli_connect("localhost","root","","formtest")     
  or die(mysqli_error($con));


  session_start();
  if(isset($_SESSION['id'])){
    echo"hello". $_SESSION['email'];
} else {
    echo "hello guest";
}
  

?>