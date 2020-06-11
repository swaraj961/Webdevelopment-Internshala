<?php 

session_start();
if(isset($_SESSION['id'])){
    echo"hello". $_SESSION['email'];
} else {
    echo "hello guest";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo "Registration" ?> </title>
</head>
<body>
    <form action="showdata.php" method="GET">
        Email : <input type="text" placeholder="email" name="email">
        First Name : <input type="text" placeholder="first name" name="fname">
        Last Name : <input type="text" placeholder="last name" name="lname">
        <button>submit</button>
    </form>
</body>
</html>