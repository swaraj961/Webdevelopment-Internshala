<?php
    require 'includes/common.php';
    if (isset($_SESSION['email'])){   
      header('location: products.php'); 
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="css/signup.css" rel="stylesheet" type="text/css"> 
</head>
<body>
      <?php
      include 'includes/header.php';
      ?>
      
    <div class="container" id="form">
        <h1 class="display-5" style="margin: 15px auto 15px 0;">SIGN UP</h1>
        <form action="signup_script.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name" required>
              </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="E-mail" required>
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password" pattern=".{6,}" required>
            </div>
            <div class="form-group">
                <input type="number" name="contact" class="form-control" placeholder="Contact" required>
              </div>
              <div class="form-group">
                <input type="text" name="city" class="form-control" placeholder="City" required>
              </div>
              <div class="form-group">
                <input type="text" name="address" class="form-control" placeholder="Address" required>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <?php
      include 'includes/footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>