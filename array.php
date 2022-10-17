<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP array </title>
</head>
<body>
    <h1>Array example</h1>

    <?php
    
        $numbers= array(1,2,3,4,5,6,7,8,9,10);
        //getting  Value at a specific possion in the array
        echo "$numbers[5]<br/><br/>";

        //getting the size of the array
        $size = count($numbers);
        echo"The length of this array is: '$size'";




     //trying while loop on array
     
    echo "<p> These are the values in the array:</p> <br/>";
     $i=0;
     while($i< count($numbers)){
        echo "<p>$numbers[$i] </p> ";
        $i++;

     }
     
    ?>

<!-- trying for loop on array  -->
 <?php 
/*
$number= array(1,2,3,4,5,6,7,8,9,10);
echo "<h1 style= 'color:red'>trying for loop </h1> <br/><br/>";

echo "<p> These are the values in the array:</p> <br/>";
for($count= 0; $count < count($number);$count++){
    echo"<p>$number[$count] </p>";
   // echo"<br/>";
}
*/
?>

</body>
</html>