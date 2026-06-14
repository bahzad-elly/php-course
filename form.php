<?php
// this is the form and get .

if($_GET){
    $name = $_GET['username'];
    echo "welcome : ".$name;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">

        <input type="text" name="username" id="" placeholder="inter the username">
        <button type="submit">send</button><br>
    </form>
   

</body>
</html>

