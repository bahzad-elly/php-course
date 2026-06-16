<?php
session_start();

// supper global variable :
/*
$_GET
$_POST
$_SERVER
$_SESSION
$_COOCKIE
$_FILES
$_ENV
*/

$trueEmail = "admin@gmail.com";
$truePass = "12345678";

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if($email == $trueEmail && $pass == $truePass){
        $_SESSION['email'] = $_POST['email'];
        header("location:dashboard.php");
    }


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
    <form  method="post">
        email <input type="text" name="email" ><br>
        password <input type="password" name="pass"><br>
        <button type="submit">send</button>
        
    </form>
  
    
</body>
</html>