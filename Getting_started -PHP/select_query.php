<?php
// connecting database cmd
$con = mysqli_connect('localhost', 'root', '', 'ecommerce',) or die(mysqli_error($con));
// select query 
$select_query = ' select id , name , email_id FROM users';
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_errno($con));
//to fetch no of rows 
$fetch_rows = mysqli_num_rows($select_query_result);
echo 'no of rows in users are = ' . $fetch_rows ;
?>