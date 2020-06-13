<?php
    require 'includes/common.php';

      $email = mysqli_real_escape_string($con,$_POST['email']);
      $pass = mysqli_real_escape_string($con,$_POST['password']);
      $password = md5($pass);
      $select_query = "select * from users where email= '$email' and password= '$password' ";
      $select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
      $total_rows_fetch = mysqli_num_rows($select_query_result);
      if($total_rows_fetch==0){
        echo "User account does not exists.";
        
      }
      else{
          $row = mysqli_fetch_array($select_query_result);
          $_SESSION['email'] = 'email';
          $_SESSION['id'] = $row['id'];
          header('location: products.php'); 
      }
    
?>

