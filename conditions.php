<?php

/*
type of contions :
if
else
elseif

nested if


switch
match


*/

// $age = 34;
// if($age<= 30 || $age >= 12 ){
//     echo "the age is perfect";
//     if($age>32){
//         echo "the age is bigger than 32";
//     }
// }else{
//     echo "the age is small";
// }
// $day = 2;


// switch($day){
//     case 1 :
//         echo "yak shama";
//         break;
//     case 2 : 
//         echo "dw shama";
//         break;
//     case 3 :
//         echo "se shama";
//         break;
//     default :
//     echo "pewist yakek bet la rozhakani hafta";
// }


// $age = 222;

// $res = match ($age) {
//      11=> "this is child",
//     22=> "this is young",
//     default=> "unknown"
// };

// echo $res;

$colors= [
1=>"red",
2=>"green",
3=>"black",
4=>"blue"

];

$color = $_POST["color"]??null;

echo $colors[$color]?? "unkown";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        add the color: <input type="number" name="color">
        <br>
        <button type="submit">show</button>
    </form>
</body>
</html>

