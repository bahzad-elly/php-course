<?php
/*
type of loops :
for 
while
do - while 
foreach
 */

// for($i= 1; $i <= 6;$i++){
//     echo "number is : $i"."</br>";
// }

// $i = 0;
// while($i <=6){
//     echo "number is : $i"."</br>";
//     $i++;
// }

// $a = 2 ;
// do{
// echo "the digit is : $a </br>";
// $a++;
// }while($a <= 6)

// $cars = ["BMW","toyota","Kia","honda"];

// foreach($cars as $car){
//     echo "the cars is : $car</br>";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $names = ["ali","ahmaw","mhamad","osman"];
    $i = 0;

    ?>
    <table border="2px">
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>
         <?php
                while($i<=3):
            ?>
        <tr>
           
            <td><?php echo $i; ?></td>
            <td><?php echo $names[$i]; ?></td>
        </tr>
        <?php $i++;
     endwhile;?>
    </table>
    
</body>
</html>