<?php
// simple array
// $names = ["bahzad","mohammed","ali","ahmad"];

// echo "<h2>students</h2>";

// foreach($names as $name){
//     echo "<p>$name</p>";
// }

// associative array
// $students = [
// "name"=> "ali",
// "age"=> 20,
// "city"=> "hawler"

// ];
// echo "<h2>students</h2>";
// echo $students["name"];
// echo $students["age"];
// echo $students["city"];


//multidimensional array
$students = [
    ["aso",23,"halbja"],
    ["ali",20,"hawler"],
    ["ahmad",21,"slemani"]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
    <h2>students</h2>
    <table border="5px">
        <tr>
            <th>name</th>
            <th>age</th>
            <th>city</th>
        </tr>
        <?php
        foreach($students as $student){
            echo "
            <tr>
                <td>$student[0]</td>
                <td>$student[1]</td>
                <td>$student[2]</td>
            </tr>
            ";
        }
        ?>
    </table>
    
</body>
</html>