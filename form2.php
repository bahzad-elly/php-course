<?php
// form post.

if($_POST){
    $user = $_POST['username'];
    echo "welcome : $user";
    echo "this is the post var";
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

        <input type="text" name="username" id="" placeholder="inter the username">
        <button type="submit">send</button><br>
    </form>
   

</body>
</html>
