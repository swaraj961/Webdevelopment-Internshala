<?php
      include 'includes/common.php';
      if (!isset($_SESSION['email'])){   
        header('location: index.php'); 
      }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Settings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="css/setting.css" rel="stylesheet" type="text/css"> 
</head>
<body>
      <?php
      include 'includes/header.php';
      ?>
      <div class="container" id="form">
        <h1 class="display-5" style="margin: 15px auto 15px 0;">Change Password</h1>
        <form action="settings_script.php" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Old Password" name="old_pass">
              </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="New Password" name="new_pass">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Re-type Password" name="retype_new_pass">
            </div>
            <button type="submit" class="btn btn-primary">Change</button>
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