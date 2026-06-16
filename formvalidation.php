<?php
if($_POST){
    $email = htmlspecialchars($_POST['email']);
    $pass = $_POST['pass'];
    $confirm = $_POST['confirm'];
    $age = $_POST['age'];

    $error = "";

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error = "you need add the true email";
    }
    if(empty($email)){
        $error = "you need put the email";
    }

    if(strlen($pass) < 8 ){
        $error = "the password is not strong";
    }if(!is_numeric($age)){
        $error = "you need add the number";
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
    <form method="post">
        <h3 style="color:red;">
            <?php
                echo $error;
            ?>
        </h3>
        email <input type="text" name="email" ><br>
        password <input type="password" name="pass"><br>
        comfirm password <input type="password" name="confirm"><br>
        <br> age <input type="text" name="age"><br>
        <button type="submit">send</button>
        
    </form>
  
    
</body>
</html>