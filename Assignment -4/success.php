<?php
      include 'includes/common.php';
      if (!isset($_SESSION['email'])){   
        header('location: index.php'); 
      }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <?php
            require 'includes/header.php';

            // check all items to confirmed
            $user_id = $_SESSION["id"];
            $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            
            while($row = mysqli_fetch_array($result)){
                $item_id = $row["item_id"];
                $query1 = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'";
                
                $result1 = mysqli_query($con, $query1) or die(mysqli_error($con));
            }
        ?>
    <div class="container text-center" style="margin-top: 13%;">
        <h3 class="display-5">
            Your order is confirmed. Thank you for shopping  with us.<br>​ 
            <a href="products.php">Click here</a>​ to purchase any other item.
         </h3>
    </div>
    <?php
      include 'includes/footer.php';
    ?>
</body>
</html>