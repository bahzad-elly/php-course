<?php
if($_POST){
    $email = htmlspecialchars($_POST['email']);
    $pass = $_POST['pass'];
    $confirm = $_POST['confirm'];
    $age = $_POST['age'];
    if(empty($email)){
        echo "  <script>alert('you need add the email');</script>";
    }

    if(strlen($pass) < 8 ){

     echo "  <script>alert('you need add password srong');</script>";
    }if(!is_numeric($age)){
        echo " <script>alert('you need add the age');</script>";
    }
    }


?>