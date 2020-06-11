<?php
        $con = mysqli_connect("localhost","root","","formtest")     
        or die(mysqli_error($con));

        ///////////////     SAVING FORM DATA TO THE DATABASE. ///////////////////////

        $email = mysqli_real_escape_string($con,$_GET['email']);       
        $fname = mysqli_real_escape_string($con,$_GET['fname']);       
        $lname = mysqli_real_escape_string($con,$_GET['lname']);       
    
        $userRegistrationQuery = "insert into users(email,first_name,last_name) values ('$email',
                    '$fname','$lname')";      
    
        $userDetailsSubmit = mysqli_query($con,$userRegistrationQuery)      
        or die(mysqli_error($con)); 
        echo"user register succesfully";

        ///////////////     DISPLAY DATA TO THE DATABASE. ///////////////////////

        $select_query = "select * from users";        
        $select_query_result = mysqli_query($con,$select_query)       
        or die(mysqli_error($con));
    
        $total_rows_fetch = mysqli_num_rows($select_query_result);    
?>
