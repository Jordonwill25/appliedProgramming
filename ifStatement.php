<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP If Statment</title>
</head>
<body>
    <?php 
        echo"<h2 style ='font-weight: bold'> Example of if statement</h2>";
    
        $avg=30;

        if($avg>=50){
            echo"<h1 style= 'color: green'>You Have Past!!</h1>";
        }else{
            echo"<h1 style= 'color:red' > You Have Failed </h1>";
        }
    
    ?>


<?php

$grade= "A";

if($grade = "A"){
    echo"<h1 style= 'color: green'> You Passed</h1>";
}
elseif($grade ="B"){
    echo"<h1 style= 'color: green'> You Did Well :)</h1>";

}else{
    echo"<h1 style= 'color: red'> You have failed</h1>";

}


?>

</body>
</html>