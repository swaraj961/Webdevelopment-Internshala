
<?php 
include 'header.php';

?>
<?php 

include 'common.php';
?>





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
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <form method="GET" action="showdata.php">
                           
                            <div class="form-group">
                                <label for="UserEmail">User Email</label>
                                <input type="text" class="form-control" name="email" >
                            </div>
                          
                            <div class="form-group">
                                <label for="fname">First name</label>
                                <input type="text" class="form-control" id="fname" name="fname" >
                            </div>
                           
                            <div class="form-group">
                                <label for="lname">Lastname</label>
                                <input type="text" class="form-control" id="lname" name="lname">
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





<!-- 
    <form action="showdata.php" method="GET">
        Email : <input type="text" placeholder="email" name="email" pattern=" [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
   
        First Name : <input type="text" placeholder="first name" name="fname">
        Last Name : <input type="text" placeholder="last name" name="lname">
        <button>submit</button>
    </form> -->
</body>
</html>