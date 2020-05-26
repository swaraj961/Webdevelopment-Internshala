<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>array test</title>
    </head>
    <body>
   <?php 
   //while-loop
 $counter = 1;
 while($counter<=5)
 {
     echo "hello" . "<br>";
     $counter++;
 }

//for loop
for($i = 1; $i<=3;$i++){
    echo "hey" . "<br>";
}


// for each loop

$no = array(4, 8, 15, 16, 23, 42);
foreach ($no as $no) {
  echo $no .  "<br>";
}
//for eachloop associative way
$newno = array("first_number" => 4, "second_number" => 8);
foreach ($newno as $newno_index => $newno_value) {
  echo "The index is $newno_index, the value is $newno_value <br/>";
}


   ?>
    </body>
    </html>