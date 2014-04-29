<?php

$email = $GET['$email'];
$password = $GET['password'];

            if ( (empty($username)) || (empty($password)) ) {
                header('Location: Login.php?fail=1');
                die();
            }
            if ( ) {
                header('Location: Login.php?fail=2');
                die();
            }
            if (  ) {
              
            }

<?php

// Grab User submitted information
$email = $_POST["users_email"];
$password1 = $_POST["users_pass"];

if($row["users_email"]==$email && $row["users_pass"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>