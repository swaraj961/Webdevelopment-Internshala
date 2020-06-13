<?php
    require 'includes/common.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="css/login.css" rel="stylesheet" type="text/css"> 
</head>
<body>
      <?php
      include 'includes/header.php';
      ?>
      <div class="container" id="box">
        <div class="card">
            <div class="card-header bg-primary text-white">
              LOGIN
            </div>
            <div class="card-body">
                <p class="text-warning">Login to make a purchase</p>
                <form action="login_submit.php" method="POST">
                    <div class="form-group">
                      <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="E-mail" name="email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                  </form>
            </div>
            <div class="card-footer">
                Don't have a account? <a href="signup.php">Register</a>
              </div>
          </div>
      </div>
      <?php
      include 'includes/footer.php';
      ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>