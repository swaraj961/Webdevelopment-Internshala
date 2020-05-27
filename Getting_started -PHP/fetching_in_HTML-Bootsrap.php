<?php
// connecting database cmd
$con = mysqli_connect('localhost', 'root', '', 'ecommerce',) or die(mysqli_error($con));
// select query 
$select_query = ' select id , name , email_id FROM users';
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_errno($con));
// used row to 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php html bootstrap test </title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js "></script>

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <style>
    .bg{
        background-color: red;
    }
    </style>
</head>
<body>


    <div class="container ">
        <?php while($row = mysqli_fetch_array($select_query_result)){?>
            <div class="row">
    <div class="col-lg-12"><h4>users</h4></div>
    </div>
<div class="row">
<div class="col-xs-2">ID</div>
<div class="col-xs-10"><?php echo $row['id'] . "<br>";?></div>

</div>


<div class="row">
<div class="col-xs-2">Name</div>
<div class="col-xs-10"> <?php echo $row['name']  . "<br>";?> </div>
</div>


<div class="row">
<div class="col-xs-2">Email-ID</div>
<div class="col-xs-10"> <?php echo  $row['email_id']  . "<br>";?> </div>
</div>
      

        <?php } ?>
<hr>

    </div>
</body>
</html>