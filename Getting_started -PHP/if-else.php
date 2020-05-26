<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>array test</title>
    </head>
    <body>
   <?php 
$marks = 50;
if($marks <= 33){
echo "student is passed with Grade C" ;
}
 else if ($marks >33 && $marks <=75){
echo "student is passed with  Grade B";
 }
 elseif($marks >=85) {
    echo "student is passed with Grade A";
 }
 else {
     echo "student is Failed";
 }
   ?>
    </body>
    </html>