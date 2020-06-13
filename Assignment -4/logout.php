<?php
	require 'includes/common.php';
	// destroy the session if present
	if(!isset($_SESSION["email"])){
		header("location: index.php");
	}else{
		session_unset();
		session_destroy();
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
	?>
    <div class="container text-center" style="margin-top: 13%;">
        <h3 class="display-5">
		You have successfully logged out. Click <a href="index.php">here</a> to go back to index page.
         </h3>
    </>
    <?php
      include 'includes/footer.php';
    ?>
</body>
</html>