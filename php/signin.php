<?php

// Grab User submitted information
$email = $_POST["login_email"];
$password1 = $_POST["login_password"];

if($row["users_email"]==$email && $row["users_pass"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>