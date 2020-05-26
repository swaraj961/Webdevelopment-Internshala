<?php
       function sum ($para1 , $para2){
           $addition = $para1+$para2;
           return $addition;
       }
            
        ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>funcation test</title>
    </head>
    <body>
      <?php
      $var1 =10;
      $var2 =20;
     $result = sum($var1,$var2);
      echo "The sum of two number is " . $result
?>
    </body>
    </html>