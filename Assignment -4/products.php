<?php
    require 'includes/common.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="css/products.css" rel="stylesheet" type="text/css"> 
</head>
<body>
      <?php
      include 'includes/header.php';
      include 'includes/check-if-added.php';
      ?>
      <div class="container">
          <div class="jumbotron" style="margin: 25px auto;">
              <h1 class="display-4">Welcome to our Lifestyle Store!</h1>
              <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>
          </div>
      </div>

      <div class="container">
        <div class="row text-center">
          <div class="col-md-3 col-sm-6">
            <figure class="figure">
                <img src="5.jpg" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">
                    <h3>Cannon EOS</h3>
                    <p>Price: Rs. 36000.00</p>
                    <?php if(!isset($_SESSION["email"])){ ?>
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php }
					} ?>
                </figcaption>
            </figure>
          </div>
          <div class="col-md-3 col-sm-6">
            <figure class="figure">
                <img src="2.jpg" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">
                    <h3>Nikon D780</h3>
                    <p>Price: Rs. 46000.00</p>
                    <?php if(!isset($_SESSION["email"])){ ?>
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(2)){ ?>
									<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php }
					} ?>
                </figcaption>
            </figure>
          </div>
          <div class="col-md-3 col-sm-6">
            <figure class="figure">
                <img src="3.jpg" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">
                    <h3>Cannon Rebel</h3>
                    <p>Price: Rs. 32000.00</p>
                    <?php if(!isset($_SESSION["email"])){ ?>
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(3)){ ?>
									<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php }
					} ?>
                </figcaption>
            </figure>
          </div>
          <div class="col-md-3 col-sm-6">
            <figure class="figure">
                <img src="4.jpg" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">
                    <h3>Nikon Flash</h3>
                    <p>Price: Rs. 41000.00</p>
                    <?php if(!isset($_SESSION["email"])){ ?>
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(4)){ ?>
									<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php }
					} ?>
                </figcaption>
            </figure>
          </div>
      </div>

      <div class="row text-center">
        <div class="col-md-3 col-sm-6">
          <figure class="figure">
              <img src="6.jpg" class="figure-img img-fluid rounded" alt="...">
              <figcaption class="figure-caption">
                  <h3>Lee</h3>
                  <p>Price: Rs. 3800.00</p>
                  <?php if(!isset($_SESSION["email"])){ ?>
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(5)){ ?>
									<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php }
					} ?>
              </figcaption>
          </figure>
        </div>
        <div class="col-md-3 col-sm-6">
          <figure class="figure">
              <img src="8.jpg" class="figure-img img-fluid rounded" alt="...">
              <figcaption class="figure-caption">
                  <h3>Cantabil</h3>
                  <p>Price: Rs. 2200.00</p>
                  <?php if(!isset($_SESSION["email"])){ ?>
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(6)){ ?>
									<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php }
					} ?>
              </figcaption>
          </figure>
        </div>
        <div class="col-md-3 col-sm-6">
          <figure class="figure">
              <img src="13.jpg" class="figure-img img-fluid rounded" alt="...">
              <figcaption class="figure-caption">
                  <h3>Aleba</h3>
                  <p>Price: Rs. 4400.00</p>
                  <?php if(!isset($_SESSION["email"])){ ?>
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(7)){ ?>
									<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php }
					} ?>
              </figcaption>
          </figure>
        </div>
        <div class="col-md-3 col-sm-6">
          <figure class="figure">
              <img src="14.jpg" class="figure-img img-fluid rounded" alt="...">
              <figcaption class="figure-caption">
                  <h3>Raymond</h3>
                  <p>Price: Rs. 3500.00</p>
                  <?php if(!isset($_SESSION["email"])){ ?>
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(8)){ ?>
									<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php }
					} ?>
              </figcaption>
          </figure>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-md-3 col-sm-6">
          <figure class="figure">
              <img src="12.jpg" class="figure-img img-fluid rounded" alt="...">
              <figcaption class="figure-caption">
                  <h3>Fastrack</h3>
                  <p>Price: Rs. 4000.00</p>
                  <?php if(!isset($_SESSION["email"])){ ?>
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(9)){ ?>
									<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php }
					} ?>
              </figcaption>
          </figure>
        </div>
        <div class="col-md-3 col-sm-6">
          <figure class="figure">
              <img src="9.jpg" class="figure-img img-fluid rounded" alt="...">
              <figcaption class="figure-caption">
                  <h3>Sonata</h3>
                  <p>Price: Rs. 3100.00</p>
                  <?php if(!isset($_SESSION["email"])){ ?>
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(10)){ ?>
									<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php }
					} ?>
              </figcaption>
          </figure>
        </div>
        <div class="col-md-3 col-sm-6">
          <figure class="figure">
              <img src="10.jpg" class="figure-img img-fluid rounded" alt="...">
              <figcaption class="figure-caption">
                  <h3>Roger</h3>
                  <p>Price: Rs. 3700.00</p>
                  <?php if(!isset($_SESSION["email"])){ ?>
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(11)){ ?>
									<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php }
					} ?>
              </figcaption>
          </figure>
        </div>
        <div class="col-md-3 col-sm-6">
          <figure class="figure">
              <img src="11.jpg" class="figure-img img-fluid rounded" alt="...">
              <figcaption class="figure-caption">
                  <h3>Titan</h3>
                  <p>Price: Rs. 4600.00</p>
                  <?php if(!isset($_SESSION["email"])){ ?>
							<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(12)){ ?>
									<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php }
					} ?>
              </figcaption>
          </figure>
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