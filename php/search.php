<?php
        $search = $_GET['search'];

        $json = "";
        
        $con = mysql_connect("iweb.ossys.com","web102","PUR5tr3ngth","web102");
        if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        mysql_select_db("web102");

        $result = mysql_query("SELECT * FROM alien WHERE name LIKE '%$search%' OR address LIKE '%$search%'");
        if(!$result) {
                echo mysql_error();
        } else {
        		$json .= "{ 'result' : [";
                while($row = mysql_fetch_array($result)){
        				$json .= "{";
                        $json .= "'name' : " . $row['name'] . ",";
                        $json .= "'age' : " . $row['age'] . ",";
                        $json .= "'species' : " . $row['species'] . ",";
                        $json .= "'planet' : " . $row['planet'] . ",";
                        $json .= "'star' : " . $row['star'] . ",";
                        $json .= "'duration' : " . $row['duration'] . ",";
                        $json .= "'address' : " . $row['address'] . ",";
                		$json .= "}";
                }
                $json .= "]}";
        }

		header('Content-Type: application/json');
        echo $json;
?>