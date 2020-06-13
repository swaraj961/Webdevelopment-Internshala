<nav class="navbar navbar-inverse navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">LifeStyle Store</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">

            <?php
            if(isset($_SESSION['email'])){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Carts<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="setting.php">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <?php
            } else {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Sign Up<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <?php
            }
            ?>
          </ul>
        </div>
</nav>
