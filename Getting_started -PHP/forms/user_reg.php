<?php
        $con = mysqli_connect("localhost","root","","formtest")     
        or die(mysqli_error($con));


        session_start();
        
        ///////////////     SAVING FORM DATA TO THE DATABASE. ///////////////////////

        // $email = mysqli_real_escape_string($con,$_GET['email']);       
        // $fname = mysqli_real_escape_string($con,$_GET['fname']);       
        // $lname = mysqli_real_escape_string($con,$_GET['lname']);       

        $fname = mysqli_real_escape_string($con,$_GET['fname']);
        $user_id = $_SESSION['id'];

        $user_update_query = " UPDATE users SET first_name = '$fname' WEHRE id = '$user_id' ";
        $update_result_name = mysqli_query($con ,$user_update_query)or die(mysqli_error($con));
        echo "Name is Updated";
    
        // $userRegistrationQuery = "insert into users(email,first_name,last_name) values ('$email',
        //             '$fname','$lname')";      
    
        $userDetailsSubmit = mysqli_query($con,$userRegistrationQuery)      
        or die(mysqli_error($con)); 
        echo"user register succesfully";

?>
