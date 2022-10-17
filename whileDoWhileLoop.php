<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DoWhile Loop Statments</title>
</head>
<body>
    <h1 style="color:blue">while loop statement</h1>

    <?php //while loop example
        $grade=0;

        while($grade<10){

            echo"<p>I Am Less Than 10: Count is at $grade</P>";
            $grade++;
        }

        echo "<p style= 'color:red'> While loop was Exited</p>";
    ?>



<br/>   
<br>
<h1 style="color: Blue">Do while Loop example </h1>

<?php

$grade = 0;
do{

    echo"<p>I Am Less Than 10: Count is at $grade</P>";
    $grade++;


}while($grade<10);

echo " <p style= 'color:red'> DoWhile loop was Exited</p>";

?>

</body>
</html>