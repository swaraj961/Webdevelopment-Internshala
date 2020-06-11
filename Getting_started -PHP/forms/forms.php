
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo "Registration" ?> </title>
</head>
<body>
<?php 
include 'header.php'

?>
<?php 

include 'common.php';
?>




    <form action="user_reg.php" method="GET">
        Email : <input type="text" placeholder="email" name="email" pattern=" [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
        First Name : <input type="text" placeholder="first name" name="fname">
        Last Name : <input type="text" placeholder="last name" name="lname">
        <button>submit</button>
    </form>
</body>
</html>