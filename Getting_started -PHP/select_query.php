<?php
// connecting database cmd
$con = mysqli_connect('localhost', 'root', '', 'ecommerce',) or die(mysqli_error($con));
// select query 
$select_query = ' select id , name , email_id FROM users';
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_errno($con));
//to fetch no of rows 
$fetch_rows = mysqli_num_rows($select_query_result);
echo 'no of rows in users are = ' . $fetch_rows ;

//To display the data from data base with array
// $row = mysqli_fetch_array($select_query_result);
// echo $row[0] . "<br>";
// echo $row[1]  . "<br>";
// echo $row[2]  . "<br>";
// echo $row[3]  . "<br>";

// user1
$row = mysqli_fetch_array($select_query_result);
echo $row['id'] . "<br>";
echo $row['name']  . "<br>";
echo $row['email_id']  . "<br>";

// user2
$row = mysqli_fetch_array($select_query_result);
echo $row['id'] . "<br>";
echo $row['name']  . "<br>";
echo $row['email_id']  . "<br>";
// user3

$row = mysqli_fetch_array($select_query_result);
echo $row['id'] . "<br>";
echo $row['name']  . "<br>";
echo $row['email_id']  . "<br>";
// user4

$row = mysqli_fetch_array($select_query_result);
echo $row['id'] . "<br>";
echo $row['name']  . "<br>";
echo $row['email_id']  . "<br>";

?>      