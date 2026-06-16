<?php

session_start();
$email = $_SESSION['email'];
echo "welcome $email";

echo "this is the dashboard page";
?>