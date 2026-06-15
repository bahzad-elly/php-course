<?php

if($_POST){

$email =htmlspecialchars($_POST['email']);
$pass = trim($_POST['pass']);

echo "welcome your email is : $email , and your password is : $pass";
}
?>