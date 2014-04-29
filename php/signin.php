<?php

$email = $GET['email'];
            $password = $GET['password'];

            if ( (empty($username)) || (empty($password)) ) {
                header('Location: Login.php?fail=1');
                die();
            }
            if ( ((strlen($username)) >25) || ((strlen($password)) >25) ) {
                header('Location: Login.php?fail=2');
                die();
            }
            if ( (preg_match("/[^\w-.]/", $username)) ) {
                header('Location: Login.php?fail=3');
                die();
            }
