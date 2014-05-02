<?php
        $last_name = $_GET['LastName'];

        $email = "";
        
        $con = mysql_connect("iweb.ossys.com","web102","PUR5tr3ngth","web102");
        if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        mysql_select_db("web102");

        $result = mysql_query("SELECT email FROM user WHERE last_name LIKE '%$last_name%'");
        if(!$result) {
                echo mysql_error();
        } else {
                while($row = mysql_fetch_array($result)){
                        $email = $row['email'];
                }
        }

        echo $email;
?>