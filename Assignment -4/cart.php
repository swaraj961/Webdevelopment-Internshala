<?php
  require "includes/common.php";
  if(!isset($_SESSION["email"])){
    header("location: login.php");
}
?> 

<!DOCTYPE html>
<html>
<head>
    <title>Carts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="css/carts.css" rel="stylesheet" type="text/css"> 
</head>
<body>
      <?php
            require 'includes/header.php';
            // get the products purchased by the user
            $user_id = $_SESSION["id"];
            $query = "SELECT p.id, p.name, p.price FROM items p INNER JOIN users_items up ON up.item_id = p.id WHERE up.user_id = '$user_id' AND up.status = 'Added to cart'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            if(mysqli_num_rows($result) == 0){
                echo '<h4 class="container panel-margin">Add products to cart first. Goto <a href="products.php">Products</a> page.</h4>';
            }else{
                $total = 0;
        ?>

      <table class="table table-sm table-borderless" id="table">
        <thead>
          <tr>
            <th scope="col">Item Number</th>
            <th scope="col">Item Name</th>
            <th scope="col">Price</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php $total += $row["price"]; echo $row["price"] ?></td>
                    <td><a href="cart-remove.php?id=<?php echo $row["id"]; ?>">Remove</a></td>
                </tr>
                <?php
                    }
          ?>
          <tr class="table-info">
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td>Total: <i class="fa fa-rupee"></i> <?php echo $total; ?></td>
            <td><a class="btn btn-primary" href="success.php">Confirm Order</a></td>
          </tr>
        </tbody>
      </table>  
      <?php
            }
      include 'includes/footer.php';
      ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>