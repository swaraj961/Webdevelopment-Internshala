<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>array test</title>
    </head>
    <body>
   <?php 
$numbers = array(18,10);
$sum = $numbers[0]+ $numbers[1];
echo"sum of two no's are = " . $sum . "<br>" ;
echo "size of array is = " . sizeof($numbers) . "<br>" ;
echo "type of variable is = " .gettype($numbers) .  "<br>" ;
// associative array declaration
$newnumber = array("firstno"=>10 , "secondno" =>20);
$res = $newnumber["firstno"]+$newnumber["secondno"];
echo "sum of two no by associative array is " . $res . "<br>" ;
// 2d array
$twodarray = array( array(1,2), array(3,4));
$sumresult = $twodarray[0][0]+$twodarray[0][1] + $twodarray[1][0]+$twodarray[1][1];
echo "sum of 2D array is " . $sumresult ;
   ?>
    </body>
    </html>