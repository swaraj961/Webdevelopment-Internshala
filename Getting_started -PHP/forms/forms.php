

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php html bootstrap  </title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js "></script>

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <style>
    .bg{
        background-color: red;
    }

    .top-mar{
        margin-top: 30px;
    }
    </style>
</head>
<body>  

    </div>

    <div class="container top-mar ">
        <div class="row top_margin">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">User Registration</div>
                    <div class="panel-body">
                        <form method="POST" action="user_reg.php">
                           
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" >
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                           
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phoneno" name="phoneno">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
            
</html> 

